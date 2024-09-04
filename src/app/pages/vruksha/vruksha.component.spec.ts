import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VrukshaComponent } from './vruksha.component';

describe('VrukshaComponent', () => {
  let component: VrukshaComponent;
  let fixture: ComponentFixture<VrukshaComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [VrukshaComponent]
    });
    fixture = TestBed.createComponent(VrukshaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
