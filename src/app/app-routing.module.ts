import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { HomeComponent } from './home/home.component';
import { ResidentialComponent } from './pages/residential/residential.component';
import { CommercialComponent } from './pages/commercial/commercial.component';
import { ConstructionComponent } from './pages/construction/construction.component';
import { RenovationComponent } from './pages/renovation/renovation.component';
import { ContactComponent } from './pages/contact/contact.component';
import { ErrorPageComponent } from './pages/error-page/error-page.component';




const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full'},
  { path: 'home', component: HomeComponent},
  { path: 'residential', component: ResidentialComponent},
  { path: 'commercial', component: CommercialComponent},
  { path: 'construction', component: ConstructionComponent},
  { path: 'renovation', component: RenovationComponent},
  { path: 'contact', component: ContactComponent},
  { path: '404-error', component: ErrorPageComponent},
  { path: '**', redirectTo: '/404-error' },

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
