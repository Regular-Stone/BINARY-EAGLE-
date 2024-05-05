"use strict";
const carouselItems = document.querySelectorAll('.carousel__item');
const backArrow = document.querySelector('.back_arrow');
const forwardArrow = document.querySelector('.forward_arrow');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0;
// Initialisation
carouselItems[currentIndex].classList.add('active');
backArrow === null || backArrow === void 0 ? void 0 : backArrow.addEventListener('click', () => {
    dots[currentIndex].classList.remove('active');
    carouselItems[currentIndex].classList.remove('active', 'next');
    currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active', 'prev');
    dots[currentIndex].classList.add('active');
    setTimeout(() => carouselItems[currentIndex].classList.remove('prev'), 1000);
});
forwardArrow === null || forwardArrow === void 0 ? void 0 : forwardArrow.addEventListener('click', () => {
    dots[currentIndex].classList.remove('active');
    carouselItems[currentIndex].classList.remove('active', 'prev');
    currentIndex = (currentIndex + 1) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active', 'next');
    dots[currentIndex].classList.add('active');
    setTimeout(() => carouselItems[currentIndex].classList.remove('next'), 1000);
});
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        carouselItems[currentIndex].classList.remove('active');
        dots[currentIndex].classList.remove('active');
        currentIndex = index;
        carouselItems[currentIndex].classList.add('active');
        dots[currentIndex].classList.add('active');
    });
});