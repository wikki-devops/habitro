import { Component, OnInit, AfterViewInit, Renderer2, ViewChildren, QueryList, ElementRef, ChangeDetectorRef } from "@angular/core";
import { DatabaseService } from "../../database.service";
import { OwlOptions } from 'ngx-owl-carousel-o';
import { DomSanitizer, SafeHtml } from '@angular/platform-browser'; // Import SafeHtml


declare var $: any;

@Component({
  selector: "app-construction",
  templateUrl: "./construction.component.html",
  styleUrls: ["./construction.component.css"],
})
export class ConstructionComponent implements OnInit {


  bannerheading = "";
  bannerpara = "";
  bannerimage = "";
  displayForm: boolean = false; // Flag to control form display

  copyhead = '';

  items: any[] = [];

  brand: any[] = [];

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

  accordionStates: boolean[] = [];


  constructor(
    private DatabaseService: DatabaseService,
    private renderer: Renderer2,
    private el: ElementRef,
    private sanitizer: DomSanitizer
  ) { }

  sanitizeHtml(html: string): SafeHtml {
    return this.sanitizer.bypassSecurityTrustHtml(html);
  }


  ngOnInit(): void {
    this.getBannerHeading();
    this.getcalltoaction();

    this.DatabaseService.getFAQs().subscribe(data => {
      this.items = data;
    });
    this.DatabaseService.getbrand().subscribe(data => {
      this.brand = data;
      // Ensure that Owl Carousel is initialized after brand data is loaded
      setTimeout(() => {
        this.initOwlCarousel();
      });
    });
    this.items.forEach(() => {
      this.accordionStates.push(false);
    });
    

  }
  toggleAccordion(index: number) {
    this.accordionStates[index] = !this.accordionStates[index];
  }


  getBannerHeading(): void {
    this.DatabaseService.getBannerHeading().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        const columnValue = data[3].component;
        console.log('Column Value:', columnValue);
        this.displayForm = columnValue === '1';
        this.bannerheading = data[3].heading;
        this.bannerpara = data[3].banner_p;
        this.bannerimage = data[3].bannerimage;
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
  initOwlCarousel(): void {
    // Initialize Owl Carousel here
    const owl = $('.owl-carousel');
    owl.owlCarousel(this.owlCarouselOptions);
  }
  
  }
