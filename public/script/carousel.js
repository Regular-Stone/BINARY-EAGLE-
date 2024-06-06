"use strict";
const carouselItems = document.querySelectorAll('.carousel__item');
const backArrow = document.querySelector('.back_arrow');
const forwardArrow = document.querySelector('.forward_arrow');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0;
function nextSlide() {
    dots[currentIndex].classList.remove('active');
    carouselItems[currentIndex].classList.remove('active', 'prev', 'next');
    currentIndex = (currentIndex + 1) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active', 'next');
    dots[currentIndex].classList.add('active');
}
function previousSlide() {
    dots[currentIndex].classList.remove('active');
    carouselItems[currentIndex].classList.remove('active', 'next', 'prev');
    currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active', 'prev');
    dots[currentIndex].classList.add('active');
}
function goToSlide(index) {
    carouselItems[currentIndex].classList.remove('active');
    dots[currentIndex].classList.remove('active');
    currentIndex = index;
    carouselItems[currentIndex].classList.add('active');
    dots[currentIndex].classList.add('active');
}
carouselItems[currentIndex].classList.add('active');
forwardArrow === null || forwardArrow === void 0 ? void 0 : forwardArrow.addEventListener('click', nextSlide);
backArrow === null || backArrow === void 0 ? void 0 : backArrow.addEventListener('click', previousSlide);
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => goToSlide(index));
});
