export class GitHubRepository {
	public id: number;
	public name: string;
	public description: string;
	public html_url: string;
	public language: string;

	constructor(
		id: number,
		name: string,
		description: string,
		html_url: string,
		language: string
	) {
		this.id = id;
		this.name = name;
		this.description = description;
		this.html_url = html_url;
		this.language = language;
	}
}
