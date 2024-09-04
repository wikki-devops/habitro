import { Component } from '@angular/core';

@Component({
  selector: 'app-reason-to-buy',
  templateUrl: './reason-to-buy.component.html',
  styleUrls: ['./reason-to-buy.component.css']
})
export class ReasonToBuyComponent {
  pageTitle = 'Reasons to Buy?';
  post: any[] = [
    { icons: "1.png", title : "Villa design and elevation consultants"},
    { icons: "2.png", title : "Consultants who will help with all villa construction related approvals"},
    { icons: "3.png", title : "Floor planner to plan your space as per your requirement"},
    { icons: "4.png", title : "Consultants who specialize in landscape designing and execution"},
    { icons: "5.png", title : "The best interior designers who will also execute the same"},
    { icons: "6.png", title : "Material procurement experts"},
    { icons: "7.png", title : "Vaasthu compliance experts"},
    { icons: "8.png", title : "Consultants to help buy home appliances for the best price"},
    { icons: "9.png", title : "Teams that will organize and execute your Grahapravesham"},
  ]
}
