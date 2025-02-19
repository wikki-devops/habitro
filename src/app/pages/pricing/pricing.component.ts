import { Component, OnInit } from '@angular/core';
import { DatabaseService } from '../../database.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml } from '@angular/platform-browser';


@Component({
  selector: 'app-pricing',
  templateUrl: './pricing.component.html',
  styleUrl: './pricing.component.css'
})
export class PricingComponent implements OnInit {

  htmlContent: SafeHtml | undefined;

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';
  displayForm: boolean = false; // Flag to control form display
  company: any [] = [];
  pricing : any [] =[] ;

  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer) {}

  ngOnInit(): void {
    this.getBannerHeading();   
    this.DatabaseService.getcompany().subscribe(data => {
      this.company = data;
    });
    this.DatabaseService.getpricing().subscribe(data => {
      this.pricing = data;
    });
  }
  filteredPricing(property1: string, value1: string, property2: string, value2: string): any[] {
    return this.pricing.filter(item => item[property1] === value1 && item[property2] === value2);
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
