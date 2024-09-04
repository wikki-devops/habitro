import { Component, AfterViewInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { DatabaseService } from 'src/app/database.service';
declare var $: any;
@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements AfterViewInit {
  contactForm: FormGroup;
  constructor(private fb: FormBuilder,private databaseService: DatabaseService) {
    this.contactForm = this.fb.group({
      name: ['', Validators.required],
      email: ['', [Validators.required, Validators.email]],
      phone: ['', [Validators.required, Validators.pattern('^[0-9]{6,10}$')]]
    });
  }
  ngAfterViewInit(): void {
    $('.header-button a').magnificPopup({
      type: 'inline',
      midClick: true
    });
  }
  onSubmit(): void {
    if (this.contactForm.valid) {
      console.log('Form submitted', this.contactForm.value);
      this.databaseService.submitFormData(this.contactForm.value).subscribe(
        (response) => {
          console.log('Form data saved to database', response);
          this.downloadFile();
          this.contactForm.reset();
        },
        (error) => {
          console.error('Error saving form data', error);
        }
      );
    } else {
      console.log('Form is invalid');
    }
  }
  downloadFile(): void {
    const filePath = 'assets/anugraha.pdf';
    const anchor = document.createElement('a');
    anchor.href = filePath;
    anchor.download = 'anugraha.pdf';
    anchor.click();
    console.log('PDF download triggered');
  }
}
