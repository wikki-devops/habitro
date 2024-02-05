import { Component, OnInit, ElementRef, Renderer2 } from '@angular/core';
import { DatabaseService } from '../../database.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml } from '@angular/platform-browser';

@Component({
  selector: 'app-commercial',
  templateUrl: './commercial.component.html',
  styleUrls: ['./commercial.component.css']
})
export class CommercialComponent implements OnInit {

  htmlContent: SafeHtml | undefined;

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';
  displayForm: boolean = false; // Flag to control form display

  copyhead ='';


  teamMembers: any[] = []; 
  isHovered: boolean[] = [];
  recentwork: any[] = [];

  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer, private renderer: Renderer2, private elementRef: ElementRef) {}


  ngOnInit(): void { 
    this.getBannerHeading(); 
    this.getcalltoaction();  
    this.getTeamMembers();  
    this.DatabaseService.getrecentwork().subscribe(data => {
      this.recentwork = data;
    });

  }

  getTeamMembers(): void {
    this.DatabaseService.getcommercial().subscribe((data: any[]) => {
      this.teamMembers = data; // Assign retrieved team member data to the array
      this.isHovered = new Array(this.teamMembers.length).fill(false); // Initialize hover states array
    });
  }

  toggleHover(index: number): void {
    this.isHovered[index] = !this.isHovered[index];
  }

  getBannerHeading(): void {
    this.DatabaseService.getBannerHeading().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        const columnValue = data[2].component;
        console.log('Column Value:', columnValue); 
        this.displayForm = columnValue === '1';
        this.bannerheading = data[2].heading;
        this.bannerpara = data[2].banner_p;
        this.bannerimage = data[2].bannerimage;
      }
    });
  }

  getcalltoaction(): void {
    this.DatabaseService.getcalltoaction().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        this.copyhead = data[2].copyhead;
      }
    });
  }

    getSafeUrl(url: string): SafeResourceUrl {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }
}

