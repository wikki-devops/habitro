import { Component, OnInit, Input} from '@angular/core';
import { DomSanitizer, SafeHtml } from '@angular/platform-browser';
import { DatabaseService } from '../../database.service';



@Component({
  selector: 'app-calltoaction',
  templateUrl: './calltoaction.component.html',
  styleUrls: ['./calltoaction.component.css']
})
export class CalltoactionComponent implements OnInit {

  @Input() copyhead: string = ''; 

  sanitizedFormData: SafeHtml | undefined;

  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer) {}

  ngOnInit(): void {    
  }
}
