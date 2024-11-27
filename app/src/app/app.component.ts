import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { TaskbarComponent } from '../components/structure/taskbar/taskbar.component';
import { AppManagerService } from '../services/AppManagerService';
import { WindowComponent } from '../components/structure/window/window.component';
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
