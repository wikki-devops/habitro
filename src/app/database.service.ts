import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DatabaseService {
  getBannerHeadingFromDatabase() {
    throw new Error('Method not implemented.');
  }

  private apiUrl = 'https://demo.godparticles.uk/database/habitro-database.php'; // PHP API URL

  constructor(private http: HttpClient) { }

  getcompany(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=company`);
  }
  getmenu(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=menu`);
  }
  getsocial(): Observable<any[]> {
      return this.http.get<any[]>(`${this.apiUrl}?table=social`);
  }
  getabout(): Observable<any[]> {
      return this.http.get<any[]>(`${this.apiUrl}?table=about`);
  }
  gettestimonials(): Observable<any[]> {
      return this.http.get<any[]>(`${this.apiUrl}?table=testimonials`);
  }
  getservice(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=service`);
  }
  getbanner(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=banner`);
  }
  getBannerHeading(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=banner`);
  }
  getFAQs(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=package`);
  }
  getproducts(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=products`);
  }
  getrenovation(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=renovation`);
  }
  getcommercial(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=commercial`);
  }
  getrecentwork(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=recentwork`);
  }
  getcalltoaction(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=calltoaction`);
  }
  getresidentialcard(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=residentialcard`);
  }
  getbrand(): Observable<any[]> {
    return this.http.get<any[]>(`${this.apiUrl}?table=brands`);
  }
}

