import { Component, Renderer2, OnInit } from '@angular/core';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';
import { ToastrService } from 'ngx-toastr';

import * as AOS from 'aos';


declare var $: any; // Declare $ for jQuery

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'Habitro';
  constructor(private renderer: Renderer2, private toastr: ToastrService) { }

  ngAfterViewInit(){
    const script = this.renderer.createElement('script');
    script.type = 'text/javascript';
    script.src = 'assets/js/jquery-3.7.0.min.js';

    script.src = 'assets/js/bootstrap.min.js';
		script.src = 'assets/js/modernizr.custom.js';
    script.src = 'assets/js/jquery.easing.js';
		script.src = 'assets/js/jquery.appear.js';
		script.src = 'assets/js/menu.js';
		script.src = 'assets/js/owl.carousel.min.js';
		script.src = 'assets/js/pricing-toggle.js';
		script.src = 'assets/js/jquery.magnific-popup.min.js';
		script.src = 'assets/js/request-form.js';
		script.src = 'assets/js/jquery.validate.min.js';
		script.src = 'assets/js/jquery.ajaxchimp.min.js';
		script.src = 'assets/js/popper.min.js';
		script.src = 'assets/js/lunar.js';
		script.src = 'assets/js/wow.js';
    script.src = 'assets/js/custom.js';

    this.renderer.appendChild(document.body, script);

  }
  ngOnInit() {
    AOS.init();
    AOS.refresh();
  }
}
