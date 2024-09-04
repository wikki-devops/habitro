// database.service.ts

import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DatabaseService {

  private apiUrl = 'https://demo.vigneshdeveloper.tech/database/anugrahahomes.php'; // PHP API URL

  constructor(private http: HttpClient) { }

  submitFormData(formData: any): Observable<any> {
    return this.http.post<any>(this.apiUrl, formData);
  }
}
