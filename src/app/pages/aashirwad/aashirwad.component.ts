import { Component } from '@angular/core';

@Component({
  selector: 'app-aashirwad',
  templateUrl: './aashirwad.component.html',
  styleUrls: ['./aashirwad.component.css']
})
export class AashirwadComponent {
  pageTitle = 'Anugraha Aashirwad and Vruksha';

  features : any [] = [
    { icon: "25.png", text: "300+ plots", backtext: "300+ plots spread across 6.5 Acres"},
    { icon: "26.png", text: "City's most sought", backtext: "City's most sought - after neighbourhood"},
    { icon: "27.png", text: "Concrete Paver Roads", backtext: "Concrete Paver Roads"},
    { icon: "35.png", text: "Entrance Arch", backtext: "Grand Entrance Arch"},
    { icon: "29.png", text: "Villa Plots", backtext: "Ready to construct villa plots"},
    { icon: "30.png", text: "Documentation", backtext: "Perfect legal documentation"},
    { icon: "31.png", text: "Guidance", backtext: "Post Purchase Guidance"},
    { icon: "32.png", text: "Free Maintenance", backtext: "1-Year Free Maintenance"},
    { icon: "34.png", text: "CMDA Approved", backtext: "CMDA Approved plots"},
    { icon: "33.png", text: "Street Lights", backtext: "Well-laid blacktop internal roads with street lights"},
    { icon: "28.png", text: "Rainwater Harvesting", backtext: "State-of-the-art rainwater harvesting and storm water drains"},
    { icon: "36.png", text: "Surveillance", backtext: "24x7 CCTV Surveillance"},

  ]
}
