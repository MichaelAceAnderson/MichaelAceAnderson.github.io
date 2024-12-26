export class File{
	public name: string;
	public img_url: string;
	public type: string;
	public url: string;
	public last_update: Date;

	public static readonly ICONS_PATH: string = '/assets/icons/';

	public static readonly fileList: File[] = [
		new File(
			"/assets/files/document.txt",
			new Date(2021, 5, 1)
		),
		new File(
			"/assets/files/fichier",
			new Date(2021, 5, 1)
		),
		new File(
			"/assets/files/image.jpg",
			new Date(2021, 5, 1)
		),
		new File(
			"/assets/files/video.mp4",
			new Date(2021, 5, 1)
		),
		new File(
			"/assets/files/audio.mp3",
			new Date(2021, 5, 1)
		),
		new File(
			"https://www.google.com/?q=let%20me%20search%20that%20for%20you%20so%20you%20don't%20have%20to",
			new Date(2021, 5, 1)
		),
	];

	constructor(url: string, last_update: Date){
		if(url.startsWith('http')) this.name = url.split('/')[2] ?? url;
		else this.name = url.split('/').pop() ?? url;
		const extension = this.name.split('.').pop() ?? 'Inconnu';
		switch(extension){
			case 'md':
			case 'txt':
				this.type = 'Texte';
				break;
			case 'png':
			case 'jpg':
			case 'jpeg':
				this.type = 'Image';
				break;
			case 'mp4':
				this.type = 'Video';
				break;
			case 'mp3':
				this.type = 'Audio';
				break;
			case 'pdf':
				this.type = 'PDF';
				break;
			case 'com':
			case 'org':
			case 'net':
			case 'fr':
				this.type = 'Lien';
				break;
			default:
				this.type = 'Fichier';
		}
		this.img_url = File.ICONS_PATH + 'files/' + this.type + '.png';
		this.url = url;
		this.last_update = last_update;
	}
}
