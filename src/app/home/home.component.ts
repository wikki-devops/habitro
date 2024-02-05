import { Component, OnInit} from '@angular/core';
import { DatabaseService } from '../database.service';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';
import { OwlOptions } from 'ngx-owl-carousel-o';
import { ChangeDetectorRef } from '@angular/core';


declare var $: any;

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit{

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';
  copyhead ='';
  displayForm: boolean = false; // Flag to control form display

  company: any [] = [];

  testimonials: any [] = [];

  service: any [] = [];

  hideAnimationOnMobile: boolean = false;

  owlCarouselOptions:OwlOptions = {
    loop: true,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    dots: false,
    navSpeed: 700,
    navText: ['', ''],
    responsive: {
      0: {
        items: 1
      },
      400: {
        items: 2
      },
      740: {
        items: 3
      },
      940: {
        items: 3
      }
    },
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000

  }
customOptions: OwlOptions;

  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer,private cdr: ChangeDetectorRef) {}

  ngOnInit(): void {
    this.getBannerHeading();  
    this.getcalltoaction();

    this.DatabaseService.getcompany().subscribe(data => {
      this.company = data;
    });
    this.DatabaseService.gettestimonials().subscribe(data => {
      this.testimonials = data;
      if (this.testimonials && this.testimonials.length > 0) {
        this.initOwlCarousel();  // Call the initialization function here
      }
      this.cdr.detectChanges();
    });
    this.DatabaseService.getservice().subscribe(data => {
      this.service = data;
    });
  }
  getBannerHeading(): void {
    this.DatabaseService.getBannerHeading().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        const columnValue = data[0].component;
        console.log('Column Value:', columnValue); 
        this.displayForm = columnValue === '1';
        this.bannerheading = data[0].heading;
        this.bannerpara = data[0].banner_p;
        this.bannerimage = data[0].bannerimage;
      }
    });
  }
  getcalltoaction(): void {
    this.DatabaseService.getcalltoaction().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        this.copyhead = data[0].copyhead;
      }
    });
  }

  getSafeUrl(url: string): SafeResourceUrl {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }
  isCompanyDefined(): boolean {
    return this.company && this.company.length > 0;
  }
  initOwlCarousel(): void {
    // Initialize Owl Carousel here
    setTimeout(() => {
      $('.owl-carousel').owlCarousel(this.owlCarouselOptions);
    });
  }
  
}
