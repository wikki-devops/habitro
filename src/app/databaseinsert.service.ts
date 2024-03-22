import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DatabaseinsertService {

  private apiUrl = 'https://demo.godparticles.uk/database/habitro-insert.php'; // PHP API URL

  constructor(private http: HttpClient) { }
  submitFormData(data: any, table: string): Observable<any> {
    return this.http.post<any>(`${this.apiUrl}?table=${table}`, data);
  }
  
}
