import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VSCodeWindowComponent } from './vscode-window.component';

describe('VSCodeWindowComponent', () => {
  let component: VSCodeWindowComponent;
  let fixture: ComponentFixture<VSCodeWindowComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [VSCodeWindowComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(VSCodeWindowComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
