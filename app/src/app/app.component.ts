import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { TaskbarComponent } from '../components/taskbar/taskbar.component';
import { AppManagerService } from '../services/AppManagerService/AppManagerService';
import { WindowComponent } from '../components/window/window.component';
import { CommonModule } from '@angular/common';
import { GitHubAPIService } from '../services/GitHubAPIService/GitHubAPIService';
import { environment } from '../environments/environment';

@Component({
	selector: 'app-root',
	standalone: true,
	imports: [RouterOutlet, CommonModule, TaskbarComponent, WindowComponent],
	templateUrl: './app.component.html',
	styleUrl: './app.component.scss',
})
export class AppComponent {
	public title = 'PortfolioNg';

	constructor(public appManager: AppManagerService, public gitHubAPIService: GitHubAPIService) {}

	async ngOnInit(): Promise<void> {
		try {
			GitHubAPIService.isLoadingData = true;

			GitHubAPIService.displayedUser = await this.gitHubAPIService.fetchUser(GitHubAPIService.CURRENT_USER_ID);
			GitHubAPIService.userRepositories[GitHubAPIService.displayedUser.login] = await this.gitHubAPIService.fetchUserRepositories(GitHubAPIService.displayedUser);

			GitHubAPIService.userOrganizations[GitHubAPIService.displayedUser.login] = await this.gitHubAPIService.fetchUserOrganizations(GitHubAPIService.displayedUser);
			GitHubAPIService.userOrganizations[GitHubAPIService.displayedUser.login].forEach(async (org, index) => {
				GitHubAPIService.userRepositories[org.login] = await this.gitHubAPIService.fetchUserRepositories(org);
			});

			GitHubAPIService.isLoadingData = false;
		} catch (error) {
			if (environment.DEBUG_MODE) console.error('Une erreur est survenue lors de la récupération des données GitHub:', error);
			GitHubAPIService.isLoadingData = false;
		}
	}

}
