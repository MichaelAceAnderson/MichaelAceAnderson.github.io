import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { GitHubAPIService } from '../../../services/GitHubAPIService/GitHubAPIService';
import { RepositoryCardComponent } from './repository-card/repository-card.component';
import { GitHubUser } from '../../../services/GitHubAPIService/models/GitHubUser';
import { environment } from '../../../environments/environment';
import { SpinnerComponent } from '../../icons/spinner/spinner.component';

@Component({
	selector: 'edge-window',
	standalone: true,
	imports: [CommonModule, RepositoryCardComponent, SpinnerComponent],
	templateUrl: './edge-window.component.html',
	styleUrl: './edge-window.component.scss',
})
export class EdgeWindowComponent {
	public userReposVisible: { [key: string]: boolean } = {};
	public error: string | null = null;

	constructor(public gitHubAPIService: GitHubAPIService) { }

	toggleUserReposVisibility(user: GitHubUser): void {
		this.userReposVisible[user.login] = !this.userReposVisible[user.login];
	}
}
