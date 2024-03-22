import { Component, OnInit } from '@angular/core';
import { DatabaseService } from '../../database.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml } from '@angular/platform-browser';

@Component({
  selector: 'app-renovation',
  templateUrl: './renovation.component.html',
  styleUrls: ['./renovation.component.css']
})
export class RenovationComponent implements OnInit {

  htmlContent: SafeHtml | undefined;

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';
  displayForm: boolean = false; // Flag to control form display

  copyhead ='';


  renovation: any [] = [];
 

  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer) {}
  
  ngOnInit(): void {

    this.DatabaseService.getrenovation().subscribe(data => {
      this.renovation = data;
    });

    this.getBannerHeading();  
    this.getcalltoaction();
  }

  getBannerHeading(): void {
    this.DatabaseService.getBannerHeading().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        const columnValue = data[4].component;
        console.log('Column Value:', columnValue); 
        this.displayForm = columnValue === '1';
        this.bannerheading = data[4].heading;
        this.bannerpara = data[4].banner_p;
        this.bannerimage = data[4].bannerimage;
      }
    });
  }
  getcalltoaction(): void {
    this.DatabaseService.getcalltoaction().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        this.copyhead = data[4].copyhead;
      }
    });
  }
  getSafeUrl(url: string): SafeResourceUrl {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }
}