import { Component, OnInit } from '@angular/core';
import { DatabaseService } from '../../database.service';
import { DatabaseinsertService } from 'src/app/databaseinsert.service';
import { DomSanitizer, SafeResourceUrl, SafeHtml } from '@angular/platform-browser';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ToastrService } from 'ngx-toastr';



@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent implements OnInit {

  htmlContent: SafeHtml | undefined;
  sanitizedFormData: SafeHtml | undefined;


  bannerheading = '';
  bannerpara = '';
  bannerimage = '';
  displayForm: boolean = false; // Flag to control form display
  company: any[] = [];

  leadForm: FormGroup;
  formData = {
    name: '',
    phone: '',
    email: '',
    message: ''
  };


  constructor(private DatabaseService: DatabaseService, private sanitizer: DomSanitizer, private fb: FormBuilder,
    private toastr: ToastrService, private DatabaseinsertService: DatabaseinsertService) {
    this.leadForm = this.fb.group({
      name: ['', Validators.required],
      phone: ['', [Validators.required, Validators.pattern('^[0-9]*$')]],
      email: ['', [Validators.required, Validators.email]],
      message: ['', Validators.required]
    });
  }

  onSubmit() {
    console.log('Form submitted', this.leadForm.value);

    if (this.leadForm.valid) {
      this.DatabaseinsertService.submitFormData(this.leadForm.value, 'leadform').subscribe(
        (response) => {
          console.log('Server response:', response);

          // Show success notification
          this.toastr.success('Thank you for contacting Habitro.', 'Success', { timeOut: 3000,});
          
          // Optionally, reset the form after successful submission
          this.leadForm.reset();
        },
        (error) => {
          console.error('HTTP error:', error);
          // Show error notification if needed
          this.toastr.error('An error occurred. Please try again.');
        }
      );
    } else {
      console.log('Form is invalid');
    }
  }

  ngOnInit(): void {
    this.getBannerHeading();
    this.DatabaseService.getcompany().subscribe(data => {
      this.company = data;
    });

  }

  getBannerHeading(): void {
    this.DatabaseService.getBannerHeading().subscribe((data: any[]) => {
      if (data && data.length > 0) {
        const columnValue = data[5].component;
        console.log('Column Value:', columnValue);
        this.displayForm = columnValue === '1';
        this.bannerheading = data[5].heading;
        this.bannerpara = data[5].banner_p;
        this.bannerimage = data[5].bannerimage;
      }
    });
  }

  getSafeUrl(url: string): SafeResourceUrl {
    return this.sanitizer.bypassSecurityTrustResourceUrl(url);
  }

}