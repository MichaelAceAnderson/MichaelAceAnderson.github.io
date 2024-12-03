import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { GitHubAPIService } from '../../../services/GitHubAPIService/GitHubAPIService';
import { RepositoryCardComponent } from './repository-card/repository-card.component';
import { GitHubUser } from '../../../services/GitHubAPIService/models/GitHubUser';
import { GitHubRepository } from '../../../services/GitHubAPIService/models/GitHubRepository';
import { environment } from '../../../environments/environment';
import { SpinnerComponent } from '../../icons/spinner/spinner.component';

@Component({
	selector: 'edge-window',
	standalone: true,
	imports: [CommonModule, RepositoryCardComponent, SpinnerComponent],
	templateUrl: './edge-window.component.html',
	styleUrl: './edge-window.component.scss',
})
export class EdgeWindowComponent implements OnInit {
	public userReposVisible: { [key: string]: boolean } = {};
	public isLoading = true;
	public error: string | null = null;

	private static readonly CURRENT_USER_ID = 33232231;

	public displayedUser: GitHubUser | null = null;
	public userRepositories: { [key: string]: GitHubRepository[] } = {};
	public userOrganizations: { [key: string]: GitHubUser[] } = {};

	constructor(public gitHubAPIService: GitHubAPIService) {}

	async ngOnInit(): Promise<void> {
		try {
			this.displayedUser = await this.gitHubAPIService.fetchUser(
				EdgeWindowComponent.CURRENT_USER_ID
			);
			this.userRepositories[this.displayedUser.login] = await this.gitHubAPIService.fetchUserRepositories(this.displayedUser);
			this.userOrganizations[this.displayedUser.login] = await this.gitHubAPIService.fetchUserOrganizations(this.displayedUser);

			this.userOrganizations[this.displayedUser.login].forEach(async (org, index) => {
				this.userRepositories[org.login] = await this.gitHubAPIService.fetchUserRepositories(org);
			});
			// Rendre visible tous les dépôts de tous les utilisateurs (utilisateur actuel et organisations)
			const allUsers = [this.displayedUser, ...this.userOrganizations[this.displayedUser.login]];
			for (const user of allUsers) {
				this.userReposVisible[user.login] = true;
			}

			this.isLoading = false;
		} catch (error) {
			if(environment.DEBUG_MODE) console.error('Une erreur est survenue lors de la récupération des données GitHub:', error);
			this.isLoading = false;
			this.error = 'Une erreur est survenue lors de la récupération des infos à afficher. Veuillez réessayer plus tard';
		}
	}

	toggleUserReposVisibility(user: GitHubUser): void {
		this.userReposVisible[user.login] = !this.userReposVisible[user.login];
	}
}
