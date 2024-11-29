import { Component, Input, OnInit } from '@angular/core';
import { AppManagerService } from '../../services/AppManagerService/AppManagerService';
import { NgComponentOutlet } from '@angular/common';
import { environment } from '../../environments/environment';
import { InteractiveApp } from '../../services/AppManagerService/models/InteractiveApp';

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
