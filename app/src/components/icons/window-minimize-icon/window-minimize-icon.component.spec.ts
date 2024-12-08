import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WindowMinimizeIconComponent } from './window-minimize-icon.component';

describe('WindowMinimizeIconComponent', () => {
  let component: WindowMinimizeIconComponent;
  let fixture: ComponentFixture<WindowMinimizeIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [WindowMinimizeIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WindowMinimizeIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
