import { Component, Input } from '@angular/core';
import {
	AppManagerService,
	InteractiveApp,
} from '../../../services/AppManagerService';

@Component({
	selector: 'window',
	standalone: true,
	imports: [],
	templateUrl: './window.component.html',
	styleUrl: './window.component.scss',
})
export class WindowComponent {
	@Input() public app!: InteractiveApp;

	constructor(public appManager: AppManagerService) {}
}
