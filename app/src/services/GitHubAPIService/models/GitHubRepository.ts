export class GitHubRepository {
	public id: number;
	public name: string;
	public description: string;
	public html_url: string;
	public full_name: string;
	public language: string;

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
	}
}
