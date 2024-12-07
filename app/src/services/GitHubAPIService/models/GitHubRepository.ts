import jsyaml from 'js-yaml';
export class GitHubRepository {
	public id: number;
	public name: string;
	public description: string;
	public html_url: string;
	public full_name: string;
	public language: string;
	public languageColor: string = 'white';

	constructor(
		id: number,
		name: string,
		description: string,
		html_url: string,
		full_name: string,
		language: string
	) {
		this.id = id;
		this.name = name;
		this.description = description;
		this.html_url = html_url;
		this.full_name = full_name;
		this.language = language;
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

		this.languageColor = languagesList[this.language]?.color;
		return this.languageColor;
	}
}
