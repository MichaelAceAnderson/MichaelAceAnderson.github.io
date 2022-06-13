//Ce script a pour rôle d'afficher ou cacher le menu de gauche
function sideMenu()
{
    // On convertir les éléments à récupérer dans la page en variables
    var menu = document.getElementById('menu');
    var toggle = document.getElementById("toggle");
    var fade = document.getElementById("fade");
    var main = document.getElementById("main");
    var header = document.getElementsByTagName("header")[0];

    // Si le menu est fermé, on l'ouvre et on décale et assombrit le contenu
    if(menu.style.width == '0px')
    {
        // Mettre le header derrière le reste
        header.style.zIndex = '-1';

        // Faire tourner le bouton
        toggle.style.transform = "rotate(360deg)";
        toggle.style.transition = '0.5s';
        toggle.style.position = 'absolute';

        // Agrandir le menu
        menu.style.width = '25%';
        menu.style.transition = '0.5s';

        // Décaler la surcouche foncée
        fade.style.marginLeft = '25%';
        fade.style.transition = '0.5s';
        fade.style.background = 'rgb(0, 0, 0, 0.7)';
        fade.style.zIndex = '1';

        // Décaler le contenu
        main.style.paddingLeft = '26%';
        main.style.transition = '0.5s';
        main.style.zIndex = '-2';

    }
    // Si le menu est ouvert, on le ferme et on rétablit tout en forme initiale ->
    else
    {
        // Mettre le header devant le reste
        menu.style.width = '0px';
        menu.style.transition = '0.3s';

        // Faire tourner le bouton
        toggle.style.transform = "unset";
        toggle.style.transition = '0.3s';
        toggle.style.position = 'fixed';

        // Décaler la surcouche foncée
        fade.style.marginLeft = '';
        fade.style.transition = '0.3s';
        fade.style.background = '';
        fade.style.zIndex = '-2';

        // Décaler le contenu
        main.style.paddingLeft = '';
        main.style.transition = '0.3s';
        main.style.zIndex = '-2';

        header.style.zIndex = '1';
    }
}
function spoil(obj)
// Cette fonction permet de cacher ou afficher la div juste au dessous de l'objet "obj" qui diffère selon les éléments HTML qui appellent la fonction
{
    // On récupère la première div présente dans la balise parente
    var inner = obj.parentNode.getElementsByTagName("div")[0];
        // On récupère le premier span présente dans cet objet (obj)
    var arrow = obj.getElementsByTagName("span")[0];

    // Si le sous-menu est caché, on le rouvre
    if (inner.style.display == "none")
    {
        inner.style.display = "";
        arrow.innerHTML = "◃";
    }
    else
    {
        inner.style.display = "none";
        arrow.innerHTML = "▿";
    }
}
function dropDownAnimate(obj) {
    let menu = obj.nextElementSibling;

    if (!menu.classList.contains('opened')) {
        menu.classList.add('opened');
        menu.classList.remove('closed');
        spoil(obj);
        
    } else {
        menu.classList.remove('opened');
        menu.classList.add('closed');
        setTimeout(() =>  {
            console.log("animation end!");
            spoil(obj);
        }, 400);
    }
}
