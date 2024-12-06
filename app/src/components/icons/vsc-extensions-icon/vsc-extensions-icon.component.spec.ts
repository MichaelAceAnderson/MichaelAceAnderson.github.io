import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VscExtensionsIconComponent } from './vsc-extensions-icon.component';

describe('VscExtensionsIconComponent', () => {
  let component: VscExtensionsIconComponent;
  let fixture: ComponentFixture<VscExtensionsIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [VscExtensionsIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(VscExtensionsIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
