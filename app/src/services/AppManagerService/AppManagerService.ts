import { Injectable } from '@angular/core';
import { environment } from '../../environments/environment';
import { InteractiveApp } from './models/InteractiveApp';

@Injectable({
	// Nécessaire pour partager le tableau InteractiveApp entre plusieurs composants
	providedIn: 'root',
})
export class AppManagerService {
	public startMenuOpen: boolean = false;

	// NOTE: Nécessaire d'utiliser le format get pour pouvoir accéder correctement
	// à la liste des applications depuis un composant
	get appList(): InteractiveApp[] {
		return InteractiveApp.appList;
	}

	/**
	 * Ouvre ou ferme le menu démarrer
	 * @param open État souhaité du menu démarrer
	 */
	toggleStartMenu(open?: boolean): void {
		this.startMenuOpen = open ?? !this.startMenuOpen;
		if (environment.DEBUG_MODE)
			console.log(
				`[${this.startMenuOpen ? '[O]' : '[X]'}] Menu démarrer`
			);
	}
}
