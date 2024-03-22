import { Component, OnInit } from '@angular/core';
import { DatabaseService } from '../../database.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml } from '@angular/platform-browser';

@Component({
  selector: 'app-blogs',
  templateUrl: './blogs.component.html',
  styleUrl: './blogs.component.css'
})
export class BlogsComponent implements OnInit {

  htmlContent: SafeHtml | undefined;

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';
  displayForm: boolean = false; // Flag to control form display
  company: any [] = [];

  blogs: any [] =[];


  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer) {}

  ngOnInit(): void {
    this.getBannerHeading();   
    this.DatabaseService.getcompany().subscribe(data => {
      this.company = data;
    });

    this.DatabaseService.getblogs().subscribe(data => {
      this.blogs = data;
    });

  }

  getBannerHeading(): void {
    this.DatabaseService.getBannerHeading().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        const columnValue = data[6].component;
        console.log('Column Value:', columnValue); 
        this.displayForm = columnValue === '1';
        this.bannerheading = data[6].heading;
        this.bannerpara = data[6].banner_p;
        this.bannerimage = data[6].bannerimage;
      }
    });
  }
  getSafeUrl(url: string): SafeResourceUrl {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }
  public sanitizeContent(content: string): any {
    return this.sanitizer.bypassSecurityTrustHtml(content);
  }
  
  truncateTitle(title: string, wordsToShow: number): string {
    const words = title.split(' ');
    const truncatedWords = words.slice(0, wordsToShow).join(' ');
    return truncatedWords.length < title.length ? truncatedWords + '...' : truncatedWords;
  }
  
}
