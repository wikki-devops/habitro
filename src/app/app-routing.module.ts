import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { VrukshaComponent } from './pages/vruksha/vruksha.component';
import { AashirwadComponent } from './pages/aashirwad/aashirwad.component';
import { ReasonToBuyComponent } from './pages/reason-to-buy/reason-to-buy.component';
import { FloorplanComponent } from './pages/floorplan/floorplan.component';
import { ContactComponent } from './pages/contact/contact.component';

const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full'},
  { path: 'home', component: HomeComponent},
  { path: 'about', component: AboutComponent},
  { path: 'ongoing-project', component: AashirwadComponent},
  { path: 'reason-to-buy', component: ReasonToBuyComponent},
  { path: 'floorplan', component: FloorplanComponent},
  { path: 'contact', component: ContactComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
