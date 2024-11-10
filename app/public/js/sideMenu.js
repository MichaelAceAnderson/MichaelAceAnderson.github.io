document.addEventListener("DOMContentLoaded", () => {
	const toggleBtn = document.getElementsByClassName("menu-btn")[0];
	toggleBtn.addEventListener("click", toggleMenu);

	// On crée une surcouche foncée cliquable pour fermer le menu
	const cover = document.createElement("div");
	const menu = document.getElementsByClassName("menu")[0];
	document.body.insertBefore(cover, menu);
	cover.classList.add("cover");
	cover.addEventListener("click", toggleMenu);
});

/**
 * Afficher/Cacher le menu de gauche
 */
function toggleMenu() {
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
		menu.classList.remove("opened");
		main.classList.remove("opened");
		cover.classList.remove("opened");
	}
}

/**
 * Afficher/Cacher les sous-menus
 * 
 * @param {HTMLElement} obj - L'objet cliqué
 */
function subMenu(obj) {
	const submenu = obj.parentNode.getElementsByClassName("submenu")[0];
	const arrow = obj.getElementsByTagName("span")[0];

	if (submenu.classList.contains("closed")) {
		/* Changer le sens de la flèche du titre du sous-menu */
		arrow.textContent = "◃";
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
		submenu.classList.remove("opened");
		submenu.classList.add("closed");
		submenu.style.height = "0px";
	}
}