const currentUrl :string = window.location.href;
const navLinks  :NodeListOf<Element> = document.querySelectorAll('.nav-link');


const urlsAuthorized :string[] = [
    'http://localhost/binary_back/accueil',
    'http://localhost/binary_back/a-propos',
    'http://localhost/binary_back/contact',
    'http://localhost/binary_back/events',
    'http://localhost/binary_back/twitch',
    'http://localhost/binary_back/discord'
]


urlsAuthorized.forEach((url :string, index :number) => {
    if(currentUrl === url){
        navLinks[index].classList.add('active');
    }
})