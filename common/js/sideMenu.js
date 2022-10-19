const toggleBtn = document.getElementsByClassName("menu-btn")[0];
const cover = document.getElementsByClassName("cover")[0];

/* Cacher le menu au clic sur la surcouche foncée */
cover.addEventListener("click", sideMenu);

/* Afficher/Cacher le menu de gauche */
function sideMenu() {
	/* On convertir les éléments à récupérer dans la page en variables */
	const menu = document.getElementsByClassName("menu")[0];
	const main = document.getElementsByClassName("main")[0];
	const cover = document.getElementsByClassName("cover")[0];

	/* Si le menu est fermé, on l'ouvre et on décale et assombrit le contenu */
	if (!menu.classList.contains("opened")) {
		/* Agrandir le menu */
		menu.classList.add("opened");
		/* Décaler le contenu */
		main.classList.add("opened");
		/* Afficher la surcouche foncée */
		cover.classList.add("opened");
	} else {
		/* Si le menu est ouvert, on le ferme et on rétablit tout en forme initiale */
		/* Réduire le menu */
		menu.classList.remove("opened");
		/* Rétablir le contenu */
		main.classList.remove("opened");
		/* Retirer la surcouche foncée */
		cover.classList.remove("opened");
	}
}

/* Afficher/Cacher les sous-menus */
function subMenu(obj) {
	/* On récupère la première div présente dans la balise parente */
	const submenu = obj.parentNode.getElementsByClassName("submenu")[0];
	/* On récupère le premier span présente dans cet objet (obj) */
	const arrow = obj.getElementsByTagName("span")[0];

	/* Si le sous-menu est caché, on le rouvre */
	if (submenu.classList.contains("closed")) {
		/* Changer le sens de la flèche du titre du sous-menu */
		arrow.textContent = "◃";
		/* On ouvre le sous-menu */
		submenu.classList.remove("closed");
		submenu.classList.add("opened");
		/* Calculer la taille du sous-menu à partir du nombre de liens */
		submenu.style.height =
			submenu.getElementsByTagName("a")[0].offsetHeight *
				submenu.childElementCount +
			"px";
	} else {
		/* Changer le sens de la flèche du titre du sous-menu */
		arrow.textContent = "▿";
		/* On ferme le sous-menu */
		submenu.classList.remove("opened");
		submenu.classList.add("closed");
		/* Mettre la taille du sous-menu à 0 */
		submenu.style.height = "0px";
	}
}
