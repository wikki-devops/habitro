import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-breadcum',
  templateUrl: './breadcum.component.html',
  styleUrls: ['./breadcum.component.css']
})
export class BreadcumComponent {
  @Input() pageTitle: string = '';
}
