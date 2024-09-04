import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http'; 
import { FormsModule } from '@angular/forms'; // Import FormsModule
import { ReactiveFormsModule } from '@angular/forms'; // Import ReactiveFormsModule
import { CarouselModule } from 'ngx-owl-carousel-o';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { BreadcumComponent } from './widget/breadcum/breadcum.component';
import { VrukshaComponent } from './pages/vruksha/vruksha.component';
import { AashirwadComponent } from './pages/aashirwad/aashirwad.component';
import { FloorplanComponent } from './pages/floorplan/floorplan.component';
import { ContactComponent } from './pages/contact/contact.component';
import { ReasonToBuyComponent } from './pages/reason-to-buy/reason-to-buy.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    AboutComponent,
    BreadcumComponent,
    VrukshaComponent,
    AashirwadComponent,
    FloorplanComponent,
    ContactComponent,
    ReasonToBuyComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule,
    CarouselModule,
    BrowserAnimationsModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
