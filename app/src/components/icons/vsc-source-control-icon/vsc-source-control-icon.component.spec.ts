import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VscSourceControlIconComponent } from './vsc-source-control-icon.component';

describe('VscSourceControlIconComponent', () => {
  let component: VscSourceControlIconComponent;
  let fixture: ComponentFixture<VscSourceControlIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [VscSourceControlIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(VscSourceControlIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
