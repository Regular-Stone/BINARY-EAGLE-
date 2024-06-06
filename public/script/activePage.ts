const CURRENT_URL :string = window.location.href;
const NAV_LINKS  :NodeListOf<Element> = document.querySelectorAll('.nav-link');
const ROOT_URL :string = 'http://localhost/binary_eagle/';
const urlsAuthorized :string[] = [
    `${ROOT_URL}`,
    `${ROOT_URL}about`,
    `${ROOT_URL}contact`,
    `${ROOT_URL}events`,
    `${ROOT_URL}twitch`,
    `${ROOT_URL}discord`,
];


urlsAuthorized.forEach((url :string, index :number) => {
    if(CURRENT_URL === url){
        NAV_LINKS[index].classList.add('active');
    }
});