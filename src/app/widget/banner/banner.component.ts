import { Component, OnInit, Input} from '@angular/core';
import { DomSanitizer, SafeHtml } from '@angular/platform-browser';
import { DatabaseService } from '../../database.service';

@Component({
  selector: 'app-banner',
  templateUrl: './banner.component.html',
  styleUrls: ['./banner.component.css']
})
export class BannerComponent implements OnInit {
 
  @Input() bannerheading: string = ''; 
  @Input() bannerpara: string = ''; 
  @Input() bannerimage: string = ''; 
  @Input() displayForm: boolean = false; // Receive displayForm as an input


  sanitizedFormData: SafeHtml | undefined;

  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer) {}

  ngOnInit(): void {    
  }
}