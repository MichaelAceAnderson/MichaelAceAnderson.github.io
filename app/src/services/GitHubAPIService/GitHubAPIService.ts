import { Injectable } from '@angular/core';
import { GitHubRepository } from './models/GitHubRepository';
import { GitHubUser } from './models/GitHubUser';
import { environment } from '../../environments/environment';

@Injectable({
	// Nécessaire pour partager l'instance du service entre plusieurs composants
	providedIn: 'root',
})
export class GitHubAPIService {
	public static readonly API_URL = 'https://api.github.com';

	async get(url:string): Promise<any>{
		let headers = {};
		if(environment.GH_PERSONAL_ACCESS_TOKEN) {
			headers = {
				Authorization: `token ${environment.GH_PERSONAL_ACCESS_TOKEN}`,
			};
		}

		return await fetch(
			url,
			{
				method: 'GET',
				headers: headers,
			}
		);
	}

	/**
	 * Récupère les informations de l'utilisateur GitHub souhaité
	 * @param identifier Nom d'utilisateur ou ID de l'utilisateur GitHub
	 * @returns Promesse contenant les informations de l'utilisateur
	 */
	async fetchUser(identifier:string|number): Promise<GitHubUser> {
		let user: GitHubUser;
		let url:string;

		if(typeof identifier === 'string') {
			url = `${GitHubAPIService.API_URL}/users/${identifier}`;
		}
		else {
			url = `${GitHubAPIService.API_URL}/user/${identifier}`;
		}

		const response = await this.get(url);
		const jsonUser = await response.json();
		user = new GitHubUser(
			jsonUser.id,
			jsonUser.login,
			jsonUser.avatar_url,
			jsonUser.html_url,
			jsonUser.name,
			jsonUser.bio
		);

		if (environment.DEBUG_MODE) console.log('Utilisateur récupéré via l\'API:', user);
		return user;
	}

	async fetchUserOrganizations(user: GitHubUser): Promise<GitHubUser[]> {
		let organizationList: GitHubUser[] = [];

		const response = await this.get(GitHubAPIService.API_URL + `/user/${user.id}/orgs`);
		const userOrganizationsList: any = await response.json();
		// La liste des organisations n'a pas toutes les propriétés nécessaires,
		// on les récupère une à une à partir des URLs de la liste
		for (const userOrganization of userOrganizationsList) {
			const organizationResponse: any = await this.get(userOrganization.url);
			const jsonOrganization = await organizationResponse.json();

			const organization = new GitHubUser(
				jsonOrganization.id,
				jsonOrganization.login,
				jsonOrganization.avatar_url,
				jsonOrganization.html_url,
				jsonOrganization.name,
				''
			);
			organizationList.push(organization);
		};

		if (environment.DEBUG_MODE)
			console.log(
				'Organisations trouvées pour l\'utilisateur ' + user.login + ':',
				organizationList
			);
		return organizationList;
	}

	async fetchUserRepositories(user: GitHubUser): Promise<GitHubRepository[]> {
		let repositoryList: GitHubRepository[] = [];

		const response = await this.get(GitHubAPIService.API_URL + `/users/${user.login}/repos`);
		const jsonRepositoryList: GitHubRepository[] = await response.json();
		jsonRepositoryList.forEach((jsonRepository) => {
			const repository = new GitHubRepository(
				jsonRepository.id,
				jsonRepository.name,
				jsonRepository.description,
				jsonRepository.html_url,
				jsonRepository.language
			);
			repositoryList.push(repository);
		});

		if (environment.DEBUG_MODE)
			console.log(
				'Dépôts trouvés pour l\'utilisateur ' + user.login + ':',
				repositoryList
			);
		return repositoryList;
	}
}
