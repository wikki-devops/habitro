import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ReasonToBuyComponent } from './reason-to-buy.component';

describe('ReasonToBuyComponent', () => {
  let component: ReasonToBuyComponent;
  let fixture: ComponentFixture<ReasonToBuyComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ReasonToBuyComponent]
    });
    fixture = TestBed.createComponent(ReasonToBuyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
