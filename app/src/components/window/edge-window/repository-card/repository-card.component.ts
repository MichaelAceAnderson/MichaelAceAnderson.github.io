import { Component, Input, OnInit } from '@angular/core';
import { GitHubRepository } from '../../../../services/GitHubAPIService/models/GitHubRepository';
import { CommonModule } from '@angular/common';
import jsyaml from 'js-yaml';

@Component({
	selector: 'repository-card',
	standalone: true,
	imports: [CommonModule],
	templateUrl: './repository-card.component.html',
	styleUrl: './repository-card.component.scss',
})
export class RepositoryCardComponent implements OnInit {
	@Input() repository!: GitHubRepository;
	languageColor: string = 'white';

	ngOnInit(): void {
		this.getLanguageColor();
	}

	/**
	 * Récupère la couleur du langage de programmation du dépôt
	 * @returns la couleur du langage de programmation du dépôt ou 'white' si le langage n'est pas reconnu
	 */
	async getLanguageColor(): Promise<string> {
		const response = await fetch(
			'https://raw.githubusercontent.com/github/linguist/main/lib/linguist/languages.yml'
		);
		const yamlText = await response.text();
		const languages: any = jsyaml.load(yamlText);

		const languagesList: { [key: string]: { color: string } } = {};
		for (const language in languages) {
			if (languages[language].color) {
				languagesList[language] = { color: languages[language].color };
			}
		}

		this.languageColor = languagesList[this.repository.language]?.color;
		return this.languageColor;
	}
}
