import { Component } from '@angular/core';

@Component({
  selector: 'app-floorplan',
  templateUrl: './floorplan.component.html',
  styleUrls: ['./floorplan.component.css']
})
export class FloorplanComponent {
  pageTitle = 'Floorplan and Gallery';

  floorplan: any[] =[
    { image: "1.jpg"},
    { image: "2.jpg"},
    { image: "3.jpg"},
    { image: "4.jpg"},
  ]
  gallery: any[] =[
    { image: "5.jpg"},
    { image: "6.jpg"},
    { image: "7.jpg"},
    { image: "8.jpg"},
    { image: "9.jpg"},
  ]
}
