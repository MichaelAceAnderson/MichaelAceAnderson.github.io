import { Component, Input, OnInit } from '@angular/core';
import { AppManagerService } from '../../services/AppManagerService/AppManagerService';
import { NgComponentOutlet } from '@angular/common';
import { environment } from '../../environments/environment';
import { InteractiveApp } from '../../services/AppManagerService/models/InteractiveApp';
import { WindowMinimizeIconComponent } from "../icons/window-minimize-icon/window-minimize-icon.component";
import { WindowMaximizedIconComponent } from "../icons/window-maximized-icon/window-maximized-icon.component";
import { WindowCloseIconComponent } from "../icons/window-close-icon/window-close-icon.component";

@Component({
	selector: 'window',
	standalone: true,
	imports: [NgComponentOutlet, WindowMinimizeIconComponent, WindowMaximizedIconComponent, WindowCloseIconComponent],
	templateUrl: './window.component.html',
	styleUrl: './window.component.scss',
})
export class WindowComponent implements OnInit{
	@Input() public app!: InteractiveApp;

	constructor(public appManager: AppManagerService) {}

	ngOnInit(): void {
		if(environment.DEBUG_MODE) console.log(this.app);
	}
}
