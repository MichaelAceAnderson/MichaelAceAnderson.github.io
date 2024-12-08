import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WindowCloseIconComponent } from './window-close-icon.component';

describe('WindowCloseIconComponent', () => {
  let component: WindowCloseIconComponent;
  let fixture: ComponentFixture<WindowCloseIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [WindowCloseIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WindowCloseIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
