import { Injectable } from '@angular/core';
import { environment } from '../environments/environment';

export class InteractiveApp {
    public name: string;
    public icon: string;
    public isOpened: boolean;
	public isMinimized: boolean | undefined;

    public static appList: InteractiveApp[] = [
		new InteractiveApp('File Explorer', '/assets/icons/file-explorer.svg', false),
		new InteractiveApp('Microsoft Edge', '/assets/icons/edge-logo.svg', false),
		new InteractiveApp('Visual Studio Code', '/assets/icons/vscode-logo.svg', false),
    ];

	constructor(name: string, icon: string, isOpened: boolean, isMinimized?: boolean) {
		this.name = name;
		this.icon = icon;
		this.isOpened = isOpened;
		this.isMinimized = isMinimized;
	}

	/**
	 * Ouvre ou ferme l'application
	 * @param isMinimized État souhaité de l'application
	 */
	toggleMinimized(isMinimized?:boolean): void {
		this.isMinimized = isMinimized ?? !this.isMinimized;

		// Lorsqu'on ouvre une application, on la met au premier plan en minimisant les autres
		if (!this.isMinimized === true) {
			InteractiveApp.appList.forEach((app) => {
				if (app.name !== this.name && app.isOpened) {
					app.isMinimized = true;
					if(environment.DEBUG_MODE) console.log(`[-] ${app.name}`);
				}
			});
		}

		if(environment.DEBUG_MODE) console.log(`[${this.isMinimized ? '-' : '+'}] ${this.name}`);
	}

	/**
	 * Ferme l'application
	 */
	close(): void {
		this.isOpened = false;
		this.isMinimized = undefined;
		if(environment.DEBUG_MODE) console.log(`[X] ${this.name}`);
	}

	/**
	 * Ouvre l'application
	 */
	open(): void {
		this.isOpened = true;
		if(environment.DEBUG_MODE) console.log(`[O] ${this.name}`);

		this.toggleMinimized(false);
	}
}

@Injectable({
	// Nécessaire pour partager le tableau InteractiveApp entre plusieurs composants
    providedIn: 'root',
})
export class AppManagerService {
    public startMenuOpen: boolean = false;

	public appList: InteractiveApp[] = InteractiveApp.appList;

	/**
	 * Ouvre ou ferme le menu démarrer
	 * @param open État souhaité du menu démarrer
	 */
    toggleStartMenu(open?:boolean): void {
        this.startMenuOpen = open ?? !this.startMenuOpen;
		if(environment.DEBUG_MODE) console.log(`[${this.startMenuOpen ? '[O]' : '[X]'}] Menu démarrer`);
    }
}
