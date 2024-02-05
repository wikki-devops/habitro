import { Component, Renderer2 } from '@angular/core';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';

declare var $: any; // Declare $ for jQuery

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'habi';
  constructor(private renderer: Renderer2) { }

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


}
