import { TestBed } from '@angular/core/testing';

import { DatabaseinsertService } from './databaseinsert.service';

describe('DatabaseinsertService', () => {
  let service: DatabaseinsertService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(DatabaseinsertService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
