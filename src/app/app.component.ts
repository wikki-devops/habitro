import { Component, Renderer2, OnInit } from '@angular/core';
import { DomSanitizer, SafeResourceUrl } from '@angular/platform-browser';

declare var $: any;

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'protaxology';

  constructor(private renderer: Renderer2) { }

  ngAfterViewInit(){
    const script = this.renderer.createElement('script');
    script.type = 'text/javascript';
    script.src = 'assets/js/jquery.js';
    script.src = 'assets/js/vendors.min.js';
    script.src = 'assets/js/main.js';

    this.renderer.appendChild(document.body, script);

  }


}
