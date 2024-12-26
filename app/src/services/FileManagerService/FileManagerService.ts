import { Injectable } from '@angular/core';
import { File } from './models/File';

@Injectable({
	// Nécessaire pour partager l'instance du service entre plusieurs composants
	providedIn: 'root',
})
export class FileManagerService {
	get fileList(): File[] {
		return File.fileList;
	}
}
