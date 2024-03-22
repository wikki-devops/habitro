import { Component, OnInit, AfterViewInit, Renderer2, ViewChildren, QueryList, ElementRef, ChangeDetectorRef, ViewChild } from "@angular/core";
import { DatabaseService } from '../../database.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml, Title, Meta } from '@angular/platform-browser';
import { OwlOptions } from 'ngx-owl-carousel-o';
import { Router } from '@angular/router';

declare var $: any;

@Component({
  selector: 'app-residential',
  templateUrl: './residential.component.html',
  styleUrls: ['./residential.component.css']
})
export class ResidentialComponent implements OnInit {
  @ViewChild('calculatorSection', { static: false }) calculatorSection: ElementRef;
  htmlContent: SafeHtml | undefined;

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';

  copyhead ='';

  cardreveal: any[] = [];

  displayForm: boolean = false; // Flag to control form display

  residentialbrands: any[] = [];

  owlCarouselOptions:OwlOptions = {
    loop: true,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    dots: false,
    navSpeed: 400,
    navText: ['', ''],
    responsive: {
      0: {
        items: 2
      },
      400: {
        items: 3
      },
      740: {
        items: 4
      },
      940: {
        items: 6
      }
    },
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000
  }



  constructor(private router: Router, private DatabaseService: DatabaseService, private sanitizer: DomSanitizer, private titleService: Title, private metaService: Meta,    private renderer: Renderer2,
    private el: ElementRef
) {}

  ngOnInit(): void {
    this.getBannerHeading(); 
    this.getcalltoaction(); 
    this.DatabaseService.getresidentialcard().subscribe(data => {
      this.cardreveal = data.map(item => ({ ...item, show: false }));
    });
    this.titleService.setTitle('Welcome to Habitro | Residential');

    // Set or update meta tags
    this.metaService.updateTag({ name: 'description', content: 'This is a dynamic meta description.' });
    this.metaService.updateTag({ name: 'keywords', content: 'angular, meta tags, dynamic' });

    this.DatabaseService.getresidentialbrands().subscribe(data => {
      this.residentialbrands = data;
      this.initOwlCarousel();
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
        this.copyhead = data[1].copyhead;
      }
    });
  }

  getSafeUrl(url: string): SafeResourceUrl {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }

  initOwlCarousel(): void {
    // Initialize Owl Carousel here
    const owl = $('.owl-carousel');
  }
  scrollToCalculator() {
    const calculatorSection = document.getElementById('calculatorSection');
    if (calculatorSection) {
      calculatorSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }
      
}