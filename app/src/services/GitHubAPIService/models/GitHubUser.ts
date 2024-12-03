export class GitHubUser {
	public id: number;
	public name: string;
	public login: string;
	public avatar_url: string;
	public html_url: string;
	public bio: string | null;

	constructor(
		id: number,
		login: string,
		avatar_url: string,
		html_url: string,
		name: string,
		bio: string | null
	) {
		this.id = id;
		this.login = login;
		this.avatar_url = avatar_url;
		this.html_url = html_url;
		this.name = name;
		this.bio = bio;
	}
}
