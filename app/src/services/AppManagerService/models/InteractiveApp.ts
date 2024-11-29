import { Type } from '@angular/core';
import { EdgeWindowComponent } from '../../../components/window/edge-window/edge-window.component';
import { ExplorerWindowComponent } from '../../../components/window/explorer-window/explorer-window.component';
import { VSCodeWindowComponent } from '../../../components/window/vscode-window/vscode-window.component';
import { environment } from '../../../environments/environment';

export class InteractiveApp {
	public name: string;
	public icon: string;
	public isOpened: boolean;
	public isMinimized: boolean | undefined;
	public component!: Type<any>;

	public static appList: InteractiveApp[] = [
		new InteractiveApp(
			'File Explorer',
			'/assets/icons/file-explorer.svg',
			ExplorerWindowComponent
		),
		new InteractiveApp(
			'Microsoft Edge',
			'/assets/icons/edge-logo.svg',
			EdgeWindowComponent
		),
		new InteractiveApp(
			'Visual Studio Code',
			'/assets/icons/vscode-logo.svg',
			VSCodeWindowComponent
		),
	];

	constructor(
		name: string,
		icon: string,
		component: Type<any>,
		isMinimized?: boolean,
		isOpened?: boolean
	) {
		this.name = name;
		this.icon = icon;
		this.component = component;
		this.isMinimized = isMinimized;
		this.isOpened = isOpened ?? false;
	}

	/**
	 * Ouvre ou ferme l'application
	 * @param isMinimized État souhaité de l'application
	 */
	toggleMinimized(isMinimized?: boolean): void {
		this.isMinimized = isMinimized ?? !this.isMinimized;

		// Lorsqu'on ouvre une application, on la met au premier plan en minimisant les autres
		if (!this.isMinimized === true) {
			InteractiveApp.appList.forEach((app) => {
				if (app.name !== this.name && app.isOpened) {
					app.isMinimized = true;
					if (environment.DEBUG_MODE) console.log(`[-] ${app.name}`);
				}
			});
		}

		if (environment.DEBUG_MODE)
			console.log(`[${this.isMinimized ? '-' : '+'}] ${this.name}`);
	}

	/**
	 * Ferme l'application
	 */
	close(): void {
		this.isOpened = false;
		this.isMinimized = undefined;
		if (environment.DEBUG_MODE) console.log(`[X] ${this.name}`);
	}

	/**
	 * Ouvre l'application
	 */
	open(): void {
		this.isOpened = true;
		if (environment.DEBUG_MODE) console.log(`[O] ${this.name}`);

		this.toggleMinimized(false);
	}
}
