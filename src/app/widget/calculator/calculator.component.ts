import { Component, OnInit, Input} from '@angular/core';
import { SafeHtml } from '@angular/platform-browser';
import { DatabaseinsertService } from 'src/app/databaseinsert.service';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'app-calculator',
  templateUrl: './calculator.component.html',
  styleUrl: './calculator.component.css'
})
export class CalculatorComponent {

  leadForm: FormGroup;
  formData = {
    name: '',
    phone: '',
    email: '',
    message: ''
  };
  constructor(
    private Databaseinsertservice: DatabaseinsertService,
    private fb: FormBuilder,
    private toastr: ToastrService
  ) {
    this.leadForm = this.fb.group({
      name: ['', Validators.required],
      phone: ['', [Validators.required, Validators.pattern('^[0-9]*$')]],
      email: ['', [Validators.required, Validators.email]],
      message: []
    });
  }
  onSubmit() {
    console.log('Form submitted', this.leadForm.value);

    if (this.leadForm.valid) {
      this.Databaseinsertservice.submitFormData(this.leadForm.value, 'leadform').subscribe(
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


}
