import { Component, OnInit } from '@angular/core';
import { DatabaseService } from '../../database.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml } from '@angular/platform-browser';


@Component({
  selector: 'app-residential',
  templateUrl: './residential.component.html',
  styleUrls: ['./residential.component.css']
})
export class ResidentialComponent implements OnInit {

  htmlContent: SafeHtml | undefined;

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';

  copyhead ='';

  cardreveal: any[] = [];

  displayForm: boolean = false; // Flag to control form display


  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer) {}

  ngOnInit(): void {
    this.getBannerHeading(); 
    this.getcalltoaction(); 
    this.DatabaseService.getresidentialcard().subscribe(data => {
      this.cardreveal = data.map(item => ({ ...item, show: false }));
    });
   
  }

getBannerHeading(): void {
  this.DatabaseService.getBannerHeading().subscribe((data: any[]) => {
    if (data && data.length > 0) {
      const columnValue = data[1].component;
      console.log('Column Value:', columnValue); 
      this.displayForm = columnValue === '1';
      this.bannerheading = data[1].heading;
      this.bannerpara = data[1].banner_p;
      this.bannerimage = data[1].bannerimage;
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