import { Component, OnInit } from '@angular/core';
import { DatabaseService } from '../../database.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml } from '@angular/platform-browser';


@Component({
  selector: 'app-gallerywall',
  templateUrl: './gallerywall.component.html',
  styleUrl: './gallerywall.component.css'
})
export class GallerywallComponent implements OnInit {

  htmlContent: SafeHtml | undefined;

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';
  displayForm: boolean = false; // Flag to control form display
  company: any [] = [];

  gallery: any [] =[];

  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer) {}

  ngOnInit(): void {
    this.getBannerHeading();   
    this.DatabaseService.getcompany().subscribe(data => {
      this.company = data;
    });

    this.DatabaseService.getgalleries().subscribe(data => {
      this.gallery = data;
    });
 
  }

  getBannerHeading(): void {
    this.DatabaseService.getBannerHeading().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        const columnValue = data[5].component;
        console.log('Column Value:', columnValue); 
        this.displayForm = columnValue === '1';
        this.bannerheading = data[5].heading;
        this.bannerpara = data[5].banner_p;
        this.bannerimage = data[5].bannerimage;
      }
    });
  }
  getSafeUrl(url: string): SafeResourceUrl {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }

}
