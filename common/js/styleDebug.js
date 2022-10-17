function sheetLoaded(type) {
	switch (type) {
		case "general": {
			console.log("Feuille de style générale chargée !");
			break;
		}
		case "mobile": {
			console.log("Feuille de style mobile chargée !");
			break;
		}
		case "print": {
			console.log("Feuille de style d'impression chargée !");
			break;
		}
		default: {
			console.log("Feuille de style chargée !");
			break;
		}
	}
}

function sheetError(type) {
	switch (type) {
		case "general": {
			console.log(
				"Erreur lors du chargement de la feuille de style générale !"
			);
			break;
		}
		case "mobile": {
			console.log(
				"Erreur lors du chargement de la feuille de style mobile !"
			);
			break;
		}
		case "print": {
			console.log(
				"Erreur lors du chargement de la feuille de style d'impression !"
			);
			break;
		}
		default: {
			console.log("Erreur lors du chargement de la feuille de style !");
			break;
		}
	}
}
