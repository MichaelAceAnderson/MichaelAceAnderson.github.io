import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VSCodeIconComponent } from './vscode-icon.component';

describe('VSCodeIconComponent', () => {
  let component: VSCodeIconComponent;
  let fixture: ComponentFixture<VSCodeIconComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [VSCodeIconComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(VSCodeIconComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
