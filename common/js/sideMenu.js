const toggleBtn = document.getElementsByClassName("menu-btn")[0];
const cover = document.getElementsByClassName("cover")[0];

/* Cacher le menu au clic */
cover.addEventListener("click", sideMenu);

/* Afficher/Cacher le menu de gauche */
function sideMenu() {
	/* On convertir les éléments à récupérer dans la page en variables */
	const menu = document.getElementsByClassName("menu")[0];
	const main = document.getElementsByClassName("main")[0];
	const infos = document.getElementsByClassName("infos")[0];

	/* Si le menu est fermé, on l'ouvre et on décale et assombrit le contenu */
	if (menu.offsetWidth == "0") {
		/* Permettre au texte de se dérouler correctement */
		infos.style.whiteSpace = "normal";

		/* Agrandir le menu */
		menu.style.width = "25%";
		menu.style.transition = "0.5s";

		/* Poser le bouton d'affichage du menu */
		toggleBtn.style.position = "absolute";
		toggleBtn.style.transform = "rotate(360deg)";

		/* Afficher la surcouche foncée */
		cover.style.marginLeft = "25%";
		cover.style.transition = "0.5s";
		cover.style.background = "rgb(0, 0, 0, 0.7)";
		cover.style.zIndex = "1";

		/* Décaler le contenu */
		main.style.paddingLeft = "26%";
		main.style.transition = "0.5s";
	} else {
		/* Si le menu est ouvert, on le ferme et on rétablit tout en forme initiale */

		/* Permettre au texte de s'enrouler correctement */
		infos.style.whiteSpace = "nowrap";

		/* Réduire le menu */
		menu.style.width = "0px";
		menu.style.transition = "0.3s";

		/* Rétablir le bouton d'affichage du menu */
		toggleBtn.style.position = "fixed";
		toggleBtn.style.transform = null;

		/* Cacher la surcouche foncée */
		cover.style.marginLeft = null;
		cover.style.transition = "0.3s";
		cover.style.background = null;
		cover.style.zIndex = "-2";

		/* Décaler le contenu */
		main.style.paddingLeft = null;
		main.style.transition = "0.3s";
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
		arrow.textContent = "◃";
		submenu.classList.remove("closed");
		submenu.classList.add("opened");

		submenu.style.height =
			submenu.getElementsByTagName("a")[0].offsetHeight *
				submenu.childElementCount +
			"px";
	} else {
		arrow.textContent = "▿";
		submenu.classList.remove("opened");
		submenu.classList.add("closed");
		submenu.style.height = "0px";
	}
}
