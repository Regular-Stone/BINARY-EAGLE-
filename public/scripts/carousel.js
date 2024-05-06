"use strict";
// Les variables qui contiennent les éléments du DOM
const carouselItems = document.querySelectorAll('.carousel__item');
const backArrow = document.querySelector('.back_arrow');
const forwardArrow = document.querySelector('.forward_arrow');
const dots = document.querySelectorAll('.dot');
// La variable qui contient l'index de la slide actuelle
let currentIndex = 0;
// Initialisation
carouselItems[currentIndex].classList.add('active');
// Cette fonction permet de passer à la slide suivante
function nextSlide() {
    dots[currentIndex].classList.remove('active');
    carouselItems[currentIndex].classList.remove('active', 'prev');
    currentIndex = (currentIndex + 1) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active', 'next');
    dots[currentIndex].classList.add('active');
    setTimeout(() => carouselItems[currentIndex].classList.remove('next'), 1000);
}
// Cette fonction permet de passer à la slide précédente
function previousSlide() {
    dots[currentIndex].classList.remove('active');
    carouselItems[currentIndex].classList.remove('active', 'next');
    currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active', 'prev');
    dots[currentIndex].classList.add('active');
    setTimeout(() => carouselItems[currentIndex].classList.remove('prev'), 1000);
}
// Cette fonction permet de passer à une slide spécifique
function goToSlide(index) {
    carouselItems[currentIndex].classList.remove('active');
    dots[currentIndex].classList.remove('active');
    currentIndex = index;
    carouselItems[currentIndex].classList.add('active');
    dots[currentIndex].classList.add('active');
}
// On ajoute les écouteurs d'événements sur les flèches et les points
forwardArrow.addEventListener('click', nextSlide);
backArrow.addEventListener('click', previousSlide);
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => goToSlide(index));
});
