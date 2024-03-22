import { Component } from '@angular/core';
import { DatabaseService } from '../database.service';


@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent {

  currentYear: number = new Date().getFullYear();
  copyrightNotice: string = `${this.currentYear}`;

  company: any[] = [];
  menu: any[] =[];
  blogs: any[] =[];


  constructor(private DatabaseService: DatabaseService) {}
  ngOnInit(): void {

    this.DatabaseService.getcompany().subscribe(data => {
      this.company = data;
    });
    this.DatabaseService.getmenu().subscribe(data => {
      this.menu = data;
    }); 
    this.DatabaseService.getblogs().subscribe(data => {
      this.blogs = data;
    }); 

  }
  isCompanyDefined(): boolean {
    return this.company && this.company.length > 0;
  }
  truncateTitle(title: string, wordsToShow: number): string {
    const words = title.split(' ');
    const truncatedWords = words.slice(0, wordsToShow).join(' ');
    return truncatedWords.length < title.length ? truncatedWords + '...' : truncatedWords;
  }


}
