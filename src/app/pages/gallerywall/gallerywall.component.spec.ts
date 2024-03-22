import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GallerywallComponent } from './gallerywall.component';

describe('GallerywallComponent', () => {
  let component: GallerywallComponent;
  let fixture: ComponentFixture<GallerywallComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [GallerywallComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(GallerywallComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
