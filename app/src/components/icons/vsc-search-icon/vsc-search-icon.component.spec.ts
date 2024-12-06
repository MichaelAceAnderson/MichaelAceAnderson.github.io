import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VscSearchIconComponent } from './vsc-search-icon.component';

describe('VscSearchIconComponent', () => {
  let component: VscSearchIconComponent;
  let fixture: ComponentFixture<VscSearchIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [VscSearchIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(VscSearchIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
