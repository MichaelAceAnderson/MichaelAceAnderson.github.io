import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VscExplorerIconComponent } from './vsc-explorer-icon.component';

describe('VscExplorerIconComponent', () => {
  let component: VscExplorerIconComponent;
  let fixture: ComponentFixture<VscExplorerIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [VscExplorerIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(VscExplorerIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
