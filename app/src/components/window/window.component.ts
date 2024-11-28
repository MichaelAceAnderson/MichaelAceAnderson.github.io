import { Component, Input, OnInit } from '@angular/core';
import {
	AppManagerService,
	InteractiveApp,
} from '../../services/AppManagerService';
import { NgComponentOutlet } from '@angular/common';
import { environment } from '../../environments/environment';

@Component({
	selector: 'window',
	standalone: true,
	imports: [NgComponentOutlet],
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
