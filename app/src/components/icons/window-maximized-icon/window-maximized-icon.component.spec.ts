import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WindowMaximizedIconComponent } from './window-maximized-icon.component';

describe('WindowMaximizedIconComponent', () => {
  let component: WindowMaximizedIconComponent;
  let fixture: ComponentFixture<WindowMaximizedIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [WindowMaximizedIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WindowMaximizedIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
