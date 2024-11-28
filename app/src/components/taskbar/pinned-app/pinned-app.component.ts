import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { InteractiveApp } from '../../../services/AppManagerService';

@Component({
	selector: 'pinned-app',
	standalone: true,
	imports: [CommonModule],
	templateUrl: './pinned-app.component.html',
	styleUrl: './pinned-app.component.scss',
})
export class PinnedAppComponent {
	@Input() public app!: InteractiveApp;
}
