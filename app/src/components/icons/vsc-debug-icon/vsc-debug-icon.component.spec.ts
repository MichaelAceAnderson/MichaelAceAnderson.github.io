import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VscDebugIconComponent } from './vsc-debug-icon.component';

describe('VscDebugIconComponent', () => {
  let component: VscDebugIconComponent;
  let fixture: ComponentFixture<VscDebugIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [VscDebugIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(VscDebugIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
