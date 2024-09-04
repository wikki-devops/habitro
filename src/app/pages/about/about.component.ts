import { Component, OnInit } from '@angular/core';
import { OwlOptions } from 'ngx-owl-carousel-o';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent{
  pageTitle = 'About Anugraha Homes';

  owltestiOptions: OwlOptions = {
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
        items: 1
      },
      740: {
        items: 1
      },
      940: {
        items: 1
      }
    },
    nav: true
  }
  
  testimonials: any [] = [
    { testimonial: 'Choosing Anugraha Home for our 3BHK villa in Chennai was the best decision we made. The attention to detail and quality of construction exceeded our expectations. We are truly grateful for their professionalism and dedication.', name: 'Ravi Sharma'},
    { testimonial: 'Anugraha Home made our dream of owning an affordable 2BHK villa in Chennai a reality. Their commitment to on-time delivery and transparent processes made the entire experience seamless and enjoyable. Highly recommended!', name: 'Priya Menon'},
    { testimonial: 'The team at Anugraha Home is outstanding. They provided us with a beautiful, well-designed individual villa in Chennai that we now proudly call home. Their customer service is top-notch, always responsive and helpful.', name: 'Anand Kumar'},
    { testimonial: 'From the initial consultation to the final handover of our 2BHK villa, Anugraha Home was fantastic. Their passion for quality and innovative design shines through in every aspect of our villa. We ARE thrilled with our new home.', name: 'Shweta Rao'},
    { testimonial: 'Anugraha Home’s professionalism and integrity are commendable. They delivered our 3BHK villa in Chennai on time and with exceptional quality. We couldnot be happier with the result.', name: 'Vikram Patel'},
    { testimonial: 'Our experience with Anugraha Home was amazing. They listened to our needs and delivered a 2BHK villa in Chennai that perfectly suits our lifestyle. The build quality and design are second to none.', name: 'Deepa Subramanian'},
  ];

  why: any [] =[
    { icons: '17.png', why : 'Personal service'},
    { icons: '18.png', why : 'Honesty'},
    { icons: '19.png', why : 'Trust'},
    { icons: '20.png', why : 'Value for your money'},
    { icons: '21.png', why : 'Unrivalled Knowledge'},
  ]
}
