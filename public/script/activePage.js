"use strict";
const CURRENT_URL = window.location.href;
const NAV_LINKS = document.querySelectorAll('.nav-link');
const ROOT_URL = 'http://localhost/binary_eagle/';
const urlsAuthorized = [
    `${ROOT_URL}`,
    `${ROOT_URL}about`,
    `${ROOT_URL}contact`,
    `${ROOT_URL}events`,
    `${ROOT_URL}twitch`,
    `${ROOT_URL}discord`,
];
urlsAuthorized.forEach((url, index) => {
    if (CURRENT_URL === url) {
        NAV_LINKS[index].classList.add('active');
    }
});
