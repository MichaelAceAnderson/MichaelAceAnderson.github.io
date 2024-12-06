import { Component } from '@angular/core';
import { VSCodeIconComponent } from '../../icons/vscode-icon/vscode-icon.component';
import { CommonModule } from '@angular/common';
import { GitHubAPIService } from '../../../services/GitHubAPIService/GitHubAPIService';
import { SpinnerComponent } from "../../icons/spinner/spinner.component";
import { VscExplorerIconComponent } from "../../icons/vsc-explorer-icon/vsc-explorer-icon.component";
import { VscSearchIconComponent } from "../../icons/vsc-search-icon/vsc-search-icon.component";
import { VscSourceControlIconComponent } from "../../icons/vsc-source-control-icon/vsc-source-control-icon.component";
import { VscExtensionsIconComponent } from "../../icons/vsc-extensions-icon/vsc-extensions-icon.component";
import { VscDebugIconComponent } from "../../icons/vsc-debug-icon/vsc-debug-icon.component";

@Component({
  selector: 'vscode-window',
  standalone: true,
  imports: [CommonModule, VSCodeIconComponent, SpinnerComponent, VscExplorerIconComponent, VscSearchIconComponent, VscSourceControlIconComponent, VscExtensionsIconComponent, VscDebugIconComponent],
  templateUrl: './vscode-window.component.html',
  styleUrl: './vscode-window.component.scss'
})

export class VSCodeWindowComponent {
	public isTabOpen: boolean = true;

	constructor(public gitHubAPIService: GitHubAPIService) { }

	public toggleTabOpen(): void {
		this.isTabOpen = !this.isTabOpen;
	}
}
