import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AashirwadComponent } from './aashirwad.component';

describe('AashirwadComponent', () => {
  let component: AashirwadComponent;
  let fixture: ComponentFixture<AashirwadComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [AashirwadComponent]
    });
    fixture = TestBed.createComponent(AashirwadComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
