import { Injectable } from '@angular/core';
import { File } from './models/File';

@Injectable({
	// Nécessaire pour partager l'instance du service entre plusieurs composants
	providedIn: 'root',
})
export class FileManagerService {
	get fileList(): File[] {
		return [
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
	}
}
