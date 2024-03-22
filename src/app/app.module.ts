import { NgModule} from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http'; 
import { CarouselModule } from 'ngx-owl-carousel-o';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { MagnificPopup } from 'angular-magnific-popup';
import { ReactiveFormsModule } from '@angular/forms';
import { ToastrModule } from 'ngx-toastr';
import {MatTabsModule} from '@angular/material/tabs';


import { FilterPipe } from './filter.pipe'; // Import your custom pipe
import { CdkAccordionModule } from '@angular/cdk/accordion';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { HomeComponent } from './home/home.component';
import { BannerComponent } from './widget/banner/banner.component';
import { CalltoactionComponent } from './widget/calltoaction/calltoaction.component';
import { ResidentialComponent } from './pages/residential/residential.component';
import { CommercialComponent } from './pages/commercial/commercial.component';
import { ConstructionComponent } from './pages/construction/construction.component';
import { RenovationComponent } from './pages/renovation/renovation.component';
import { ContactComponent } from './pages/contact/contact.component';
import { LegalInformationComponent } from './pages/legal-information/legal-information.component';
import { BlogsComponent } from './blogs/blogs/blogs.component';
import { BlogDetailComponent } from './blogs/blog-detail/blog-detail.component';
import { ErrorPageComponent } from './pages/error-page/error-page.component';
import { GallerywallComponent } from './pages/gallerywall/gallerywall.component';
import { PricingComponent } from './pages/pricing/pricing.component';
import { CalculatorComponent } from './widget/calculator/calculator.component';

@NgModule({
  declarations: [
    AppComponent,
    FilterPipe,
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    BannerComponent,
    CalltoactionComponent,
    ResidentialComponent,
    CommercialComponent,
    ConstructionComponent,
    RenovationComponent,
    ContactComponent,
    LegalInformationComponent,
    BlogsComponent,
    BlogDetailComponent,
    ErrorPageComponent,
    GallerywallComponent,
    PricingComponent,
    CalculatorComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    CarouselModule,
    BrowserAnimationsModule,
    CdkAccordionModule,
    FormsModule,
    MagnificPopup,
    ReactiveFormsModule,
    MatTabsModule,
    ToastrModule.forRoot()
  ],
  providers: [],
  bootstrap: [AppComponent],
  schemas: [CUSTOM_ELEMENTS_SCHEMA],
})
export class AppModule { }