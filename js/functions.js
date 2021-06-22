let menuBtn = '',
    menuCnt = '';

/* CUSTOM ON LOAD FUNCTIONS */
function construeficazCustomLoad() {
    "use strict";
    console.log('Functions Correctly Loaded');
    /* MENU FUNCTIONS */
    menuCnt = document.getElementById('menuCnt');
    menuBtn = document.getElementById('menuOpener');
    menuBtn.addEventListener('click', function(e) {
        e.preventDefault();
        menuBtn.classList.toggle('menu-opened');
        menuCnt.classList.toggle('d-none');
        console.log('clicked');
    }, false);
}

document.addEventListener("DOMContentLoaded", construeficazCustomLoad, false);