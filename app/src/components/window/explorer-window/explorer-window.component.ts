import { CommonModule } from '@angular/common';
import { Component, ElementRef, QueryList, ViewChildren } from '@angular/core';
import { FileManagerService } from '../../../services/FileManagerService/FileManagerService';
import { File } from '../../../services/FileManagerService/models/File';
import { environment } from '../../../environments/environment';
import { ArrowLeftIconComponent } from "../../icons/arrow-left-icon/arrow-left-icon.component";
import { ArrowRightIconComponent } from "../../icons/arrow-right-icon/arrow-right-icon.component";
import { ArrowUpIconComponent } from "../../icons/arrow-up-icon/arrow-up-icon.component";
import { FormsModule } from '@angular/forms';
import { GitHubAPIService } from '../../../services/GitHubAPIService/GitHubAPIService';
import { VscSearchIconComponent } from "../../icons/vsc-search-icon/vsc-search-icon.component";
import { WindowCloseIconComponent } from "../../icons/window-close-icon/window-close-icon.component";
import { ChevronDownIconComponent } from "../../icons/chevron-down-icon/chevron-down-icon.component";
import { ChevronRightIconComponent } from "../../icons/chevron-right-icon/chevron-right-icon.component";

@Component({
	selector: 'explorer-window',
	standalone: true,
	imports: [CommonModule, ArrowLeftIconComponent, ArrowRightIconComponent, ArrowUpIconComponent, FormsModule, VscSearchIconComponent, WindowCloseIconComponent, ChevronDownIconComponent, ChevronRightIconComponent],
	templateUrl: './explorer-window.component.html',
	styleUrl: './explorer-window.component.scss'
})
export class ExplorerWindowComponent {
	@ViewChildren('row') rows!: QueryList<ElementRef>;
	private lastClickedElement: HTMLElement | null = null;
	private lastClickTime: number = 0;
	public filterName: string = '';

	constructor(public fileManagerService: FileManagerService, public gitHubApiService: GitHubAPIService) { }

	onFileClick(event: MouseEvent, file: File): void {
		const currentTime = new Date().getTime();
		const target = event.target as HTMLElement;

		if (currentTime - this.lastClickTime < 500 && target === this.lastClickedElement) {
			if (environment.DEBUG_MODE) console.log('Double clic sur le fichier : ' + file.name);
			// Lancer un nouvel onglet
			window.open(file.url);
		}

		this.lastClickTime = currentTime;
		this.lastClickedElement = target;
	}

	onFileKeyDown(event: KeyboardEvent, file: File, index: number): void {
		const rowsArray = this.rows.toArray();
		switch (event.key) {
			// Focus sur le fichier suivant ou précédent avec les flèches
			case 'ArrowDown':
				if (index < rowsArray.length - 1) {
					rowsArray[index + 1].nativeElement.focus();
				}
				break;
			case 'ArrowUp':
				if (index > 0) {
					rowsArray[index - 1].nativeElement.focus();
				}
				break;
			case 'Enter':
				if (environment.DEBUG_MODE) console.log('Entrée sur le fichier : ' + file.name);
				// Lancer un nouvel onglet
				window.open(file.url);
				break;
		}
	}
}
