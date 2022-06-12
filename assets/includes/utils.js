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