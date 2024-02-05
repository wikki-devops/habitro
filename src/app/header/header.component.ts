import { Component, OnInit } from '@angular/core';
import { DatabaseService } from '../database.service';


@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  hideLoading: boolean = false;


  company: any[] = [];
  menu: any[] =[];

  constructor(private DatabaseService: DatabaseService) {}
  ngOnInit(): void {

    this.DatabaseService.getcompany().subscribe(data => {
      this.company = data;
    });

    this.DatabaseService.getmenu().subscribe(data => {
      this.menu = data;
    }); 
  }
  ngAfterViewInit() {
    setTimeout(() => {
        this.hideLoading = true;
    }, 100);
}
isCompanyDefined(): boolean {
  return this.company && this.company.length > 0;
}

}
