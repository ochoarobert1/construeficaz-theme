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
    }, false);
}

document.addEventListener("DOMContentLoaded", construeficazCustomLoad, false);

const swiperTestimonials = new Swiper('.swiper-testimonials', {
    slidesPerView: 2,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const swiperLogos = new Swiper('.swiper-logos', {
    slidesPerView: 4,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});