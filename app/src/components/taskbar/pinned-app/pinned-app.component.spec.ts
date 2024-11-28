import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PinnedAppComponent } from './pinned-app.component';

describe('PinnedAppComponent', () => {
	let component: PinnedAppComponent;
	let fixture: ComponentFixture<PinnedAppComponent>;

	beforeEach(async () => {
		await TestBed.configureTestingModule({
			imports: [PinnedAppComponent],
		}).compileComponents();

		fixture = TestBed.createComponent(PinnedAppComponent);
		component = fixture.componentInstance;
		fixture.detectChanges();
	});

	it('should create', () => {
		expect(component).toBeTruthy();
	});
});
