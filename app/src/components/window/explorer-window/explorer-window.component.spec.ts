import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ExplorerWindowComponent } from './explorer-window.component';

describe('ExplorerWindowComponent', () => {
  let component: ExplorerWindowComponent;
  let fixture: ComponentFixture<ExplorerWindowComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ExplorerWindowComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ExplorerWindowComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
