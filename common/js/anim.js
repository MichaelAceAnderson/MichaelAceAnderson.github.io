// Ce script a pour rôle d'afficher ou cacher le menu de gauche
function sideMenu() {
	// On convertir les éléments à récupérer dans la page en variables
	let menu = document.getElementById("menu");
	let toggle = document.getElementById("toggle");
	let fade = document.getElementById("fade");
	let main = document.getElementById("main");
	let header = document.getElementsByTagName("header")[0];
	let infos = document.getElementsByClassName("infos")[0];

	// Si le menu est fermé, on l'ouvre et on décale et assombrit le contenu
	if (menu.style.width == "0px") {
		// Permettre au texte de se dérouler correctement
		infos.style.whiteSpace = "normal";

		// Mettre le header derrière le reste
		header.style.zIndex = "-1";

		// Faire tourner le bouton
		toggle.style.transform = "rotate(360deg)";
		toggle.style.transition = "0.5s";
		toggle.style.position = "absolute";

		// Agrandir le menu
		menu.style.width = "25%";
		menu.style.transition = "0.5s";

		// Décaler la surcouche foncée
		fade.style.marginLeft = "25%";
		fade.style.transition = "0.5s";
		fade.style.background = "rgb(0, 0, 0, 0.7)";
		fade.style.zIndex = "1";

		// Décaler le contenu
		main.style.paddingLeft = "26%";
		main.style.transition = "0.5s";
		main.style.zIndex = "-2";
	}
	// Si le menu est ouvert, on le ferme et on rétablit tout en forme initiale ->
	else {
		// Permettre au texte de s'enrouler correctement
		infos.style.whiteSpace = "nowrap";

		// Réduire le menu
		menu.style.width = "0px";
		menu.style.transition = "0.3s";

		// Faire tourner le bouton
		toggle.style.transform = "unset";
		toggle.style.transition = "0.3s";
		toggle.style.position = "fixed";

		// Décaler la surcouche foncée
		fade.style.marginLeft = "";
		fade.style.transition = "0.3s";
		fade.style.background = "";
		fade.style.zIndex = "-2";

		// Décaler le contenu
		main.style.paddingLeft = "";
		main.style.transition = "0.3s";
		main.style.zIndex = "-2";

		// Mettre le header devant le reste
		header.style.zIndex = "1";
	}
}

// Afficher/Cacher les sous-menus
function spoil(obj) {
	// On récupère la première div présente dans la balise parente
	let inner = obj.parentNode.getElementsByTagName("div")[0];
	// On récupère le premier span présente dans cet objet (obj)
	let arrow = obj.getElementsByTagName("span")[0];

	// Si le sous-menu est caché, on le rouvre
	if (inner.classList.contains("closed")) {
		arrow.innerHTML = "◃";
		inner.classList.remove("closed");
		inner.classList.add("opened");
	} else {
		arrow.innerHTML = "▿";
		inner.classList.remove("opened");
		inner.classList.add("closed");
	}
}
