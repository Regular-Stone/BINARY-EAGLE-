const carouselItems: NodeListOf<HTMLElement> = document.querySelectorAll('.carousel__item');
const backArrow: HTMLElement | null = document.querySelector('.back_arrow');
const forwardArrow: HTMLElement | null = document.querySelector('.forward_arrow');
const dots: NodeListOf<HTMLElement> = document.querySelectorAll('.dot');
let currentIndex: number = 0;


function nextSlide(): void {
    dots[currentIndex].classList.remove('active');
    carouselItems[currentIndex].classList.remove('active', 'prev', 'next');
    currentIndex = (currentIndex + 1) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active', 'next');
    dots[currentIndex].classList.add('active');
}

function previousSlide(): void {
    dots[currentIndex].classList.remove('active');
    carouselItems[currentIndex].classList.remove('active', 'next', 'prev');
    currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active', 'prev');
    dots[currentIndex].classList.add('active');
}

function goToSlide(index: number): void {
    carouselItems[currentIndex].classList.remove('active');
    dots[currentIndex].classList.remove('active');
    currentIndex = index;
    carouselItems[currentIndex].classList.add('active');
    dots[currentIndex].classList.add('active');
}

carouselItems[currentIndex].classList.add('active');

forwardArrow?.addEventListener('click', nextSlide);
backArrow?.addEventListener('click', previousSlide);

dots.forEach((dot: HTMLElement, index: number) => {
    dot.addEventListener('click', () => goToSlide(index));
});
