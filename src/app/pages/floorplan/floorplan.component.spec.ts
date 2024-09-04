import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FloorplanComponent } from './floorplan.component';

describe('FloorplanComponent', () => {
  let component: FloorplanComponent;
  let fixture: ComponentFixture<FloorplanComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [FloorplanComponent]
    });
    fixture = TestBed.createComponent(FloorplanComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
