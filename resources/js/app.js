import "./bootstrap";

import Swiper from "swiper";
import { Autoplay, EffectFade, Navigation } from "swiper/modules";
import "swiper/swiper-bundle.css";

new Swiper(".hero-carousel", {
    loop: true,
    freeMode: true,
    grabCursor: true,
    slidesPerView: 1,
    breakpoints: {
        1200: {
            slidesPerView: 2,
        },
    },
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    modules: [Autoplay],
});

new Swiper(".room-carousel", {
    effect: "fade",
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    grabCursor: true,

    modules: [Navigation, EffectFade],
});

new Swiper(".outdoor-carousel", {
    effect: "fade",
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    grabCursor: true,

    modules: [Navigation, EffectFade],
});

const marqueeElement = document.querySelector("#marquee");

import Marquee from "vanilla-marquee";

new Marquee(marqueeElement, {
    duplicated: true,
    duration: 50000,
});

const openBtn = document.querySelector("#hamburger");
const closeBtn = document.querySelector("#close");
const menu = document.querySelector("#menu");

const mobileNavItems = document.querySelectorAll('.nav-mobile-item')

const menuHandler = () => {
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-close");
};

openBtn.addEventListener("click", menuHandler);
closeBtn.addEventListener("click", menuHandler);

mobileNavItems.forEach(item=>{
    item.addEventListener('click',menuHandler)
})

const navbar = document.querySelector("#navbar");
const marquee = document.querySelector("#marquee");
let isNavbarShown = false;

const navbarOnScroll = () => {
    let scrollPosition = window.scrollY;

    if (scrollPosition >= 250) {
        navbar.classList.add("bg-third");
        marquee.classList.add("hidden");
    } else {
        navbar.classList.remove("bg-third");
        marquee.classList.remove("hidden");
    }
};

window.addEventListener("scroll", navbarOnScroll);




const loader = document.querySelector('#preloader')



window.addEventListener('load', () => {
    loader.style.opacity = '0';
    setTimeout(() => {
        loader.style.display = 'none';
    }, 1000); 
});