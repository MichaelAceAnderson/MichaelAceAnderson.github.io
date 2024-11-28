import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EdgeWindowComponent } from './edge-window.component';

describe('EdgeWindowComponent', () => {
  let component: EdgeWindowComponent;
  let fixture: ComponentFixture<EdgeWindowComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [EdgeWindowComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EdgeWindowComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
