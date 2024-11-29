import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { TaskbarComponent } from '../components/taskbar/taskbar.component';
import { AppManagerService } from '../services/AppManagerService/AppManagerService';
import { WindowComponent } from '../components/window/window.component';
import { CommonModule } from '@angular/common';

@Component({
	selector: 'app-root',
	standalone: true,
	imports: [RouterOutlet, CommonModule, TaskbarComponent, WindowComponent],
	templateUrl: './app.component.html',
	styleUrl: './app.component.scss',
})
export class AppComponent {
	title = 'PortfolioNg';

	constructor(public appManager: AppManagerService) {}
}
