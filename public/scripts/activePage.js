"use strict";
const currentUrl = window.location.href;
const navLinks = document.querySelectorAll('.nav-link');
const urlsAuthorized = [
    'http://localhost/binary_back/accueil',
    'http://localhost/binary_back/a-propos',
    'http://localhost/binary_back/contact',
    'http://localhost/binary_back/events',
    'http://localhost/binary_back/twitch',
    'http://localhost/binary_back/discord'
];
urlsAuthorized.forEach((url, index) => {
    if (currentUrl === url) {
        navLinks[index].classList.add('active');
    }
});
