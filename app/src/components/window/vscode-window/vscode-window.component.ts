import { Component } from '@angular/core';
import { VSCodeIconComponent } from '../../icons/vscode-icon/vscode-icon.component';

@Component({
  selector: 'vscode-window',
  standalone: true,
  imports: [VSCodeIconComponent],
  templateUrl: './vscode-window.component.html',
  styleUrl: './vscode-window.component.sass'
})
export class VSCodeWindowComponent {

}
