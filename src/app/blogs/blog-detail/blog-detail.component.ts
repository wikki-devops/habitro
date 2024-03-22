import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { DatabaseService } from '../../database.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml } from '@angular/platform-browser';

@Component({
  selector: 'app-blog-detail',
  templateUrl: './blog-detail.component.html',
  styleUrls: ['./blog-detail.component.css'],
})
export class BlogDetailComponent implements OnInit {
  htmlContent: SafeHtml | undefined;

  bannerheading = '';
  bannerpara = '';
  bannerimage = '';
  displayForm: boolean = false; // Flag to control form display
  company: any[] = [];

  blogs: any; // Change from array to object

  constructor(
    private route: ActivatedRoute,
    private DatabaseService: DatabaseService,
    private sanitizer: DomSanitizer
  ) {}

  ngOnInit(): void {
    this.getBannerHeading();
  
    this.DatabaseService.getcompany().subscribe((data) => {
      this.company = data;
    });

  
    const blogIdParam = this.route.snapshot.paramMap.get('id');
    const blogId = blogIdParam ? blogIdParam.trim() : '';
    
    this.DatabaseService.getblogs().subscribe((data) => {
      this.blogs = data.find((blog: { id: string }) => blog.id === blogId) || null;
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
}
