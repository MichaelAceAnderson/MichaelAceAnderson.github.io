import { Component } from '@angular/core';
import { WinLogoIcon } from '../icons/win-logo/win-logo.component';
import { PinnedAppComponent } from './pinned-app/pinned-app.component';
import { StartMenuComponent } from './start-menu/start-menu.component';
import { AppManagerService } from '../../services/AppManagerService';
import { CommonModule } from '@angular/common';


@Component({
	selector: 'taskbar',
	standalone: true,
	imports: [
		CommonModule,
		WinLogoIcon,
		PinnedAppComponent,
		StartMenuComponent,
	],
	templateUrl: './taskbar.component.html',
	styleUrl: './taskbar.component.scss',
})
export class TaskbarComponent {
    constructor(public appManager: AppManagerService) {}
}
