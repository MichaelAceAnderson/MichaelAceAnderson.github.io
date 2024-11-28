import { ComponentFixture, TestBed } from '@angular/core/testing';
import { WinLogoIcon } from './win-logo.component';


describe('WinLogoIcon', () => {
  let component: WinLogoIcon;
  let fixture: ComponentFixture<WinLogoIcon>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [WinLogoIcon]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WinLogoIcon);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
