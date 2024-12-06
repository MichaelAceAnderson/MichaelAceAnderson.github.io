import { Component, Input } from '@angular/core';

@Component({
  selector: 'vscode-icon',
  standalone: true,
  imports: [],
  templateUrl: './vscode-icon.component.html',
})
export class VSCodeIconComponent {
	@Input() colorArmBottom:string = "#007ACC";
	@Input() colorArmTop:string = "#0065A9";
	@Input() colorRightSide:string = "#1F9CF0";
}
