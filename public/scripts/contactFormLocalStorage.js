export function contactFormLocalStorage() {
    const userName = document.querySelector('#name');
    const userEmail = document.querySelector('#email');
    const userMessage = document.querySelector('#message');
    function sanitize(data) {
        data = data.trim(); // supprime les espaces en début et fin de chaîne
        data = data.replace(/<[^>]*>/g, ''); // supprime les balises HTML
        data = data.replace(/\\/g, ''); // supprime les antislashes
        data = data.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'); // convertit certains caractères en entités HTML
        return data;
    }
    if (userName && userEmail && userMessage) {
        userName.addEventListener('blur', (e) => {
            if (userName.value !== '') {
                localStorage.setItem('userName', sanitize(userName.value));
                console.log('userName saved');
                console.log(localStorage.getItem('userName'));
            }
        });
        userEmail.addEventListener('blur', (e) => {
            if (userEmail.value !== '') {
                localStorage.setItem('userEmail', sanitize(userEmail.value));
                console.log('userEmail saved');
                console.log(localStorage.getItem('userEmail'));
            }
        });
        userMessage.addEventListener('blur', (e) => {
            if (userMessage.value !== '') {
                localStorage.setItem('userMessage', sanitize(userMessage.value));
                console.log('userMessage saved');
                console.log(localStorage.getItem('userMessage'));
            }
        });
    }
}
export function loadLocalStorage() {
    const userName = document.querySelector('#name');
    const userEmail = document.querySelector('#email');
    const userMessage = document.querySelector('#message');
    if (userName && userEmail && userMessage) {
        userName.value = localStorage.getItem('userName') || '';
        userEmail.value = localStorage.getItem('userEmail') || '';
        userMessage.value = localStorage.getItem('userMessage') || '';
    }
}
export function resetLocalStorage() {
    const resetButton = document.querySelector('#reset');
    if (resetButton) {
        resetButton.addEventListener('click', (e) => {
            localStorage.removeItem('userName');
            localStorage.removeItem('userEmail');
            localStorage.removeItem('userMessage');
            console.log('localStorage cleared');
        });
    }
    // je veux vérifier si il y a un paramètre dans l'url
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('register_success') === 'true') {
        if (localStorage.getItem('userName')) {
            localStorage.removeItem('userName');
        }
        if (localStorage.getItem('userEmail')) {
            localStorage.removeItem('userEmail');
        }
        if (localStorage.getItem('userMessage')) {
            localStorage.removeItem('userMessage');
        }
    }
}
export function killLocalStorage() {
    setInterval(() => {
        if ((localStorage.getItem('userName') !== "undefined") && (localStorage.getItem('userName') !== null)) {
            localStorage.removeItem('userName');
            console.log("userName cleared");
        }
        if ((localStorage.getItem('userEmail') !== "undefined") && (localStorage.getItem('userEmail') !== null)) {
            localStorage.removeItem('userEmail');
            console.log("userEmail cleared");
        }
        if ((localStorage.getItem('userMessage') !== "undefined") && (localStorage.getItem('userMessage') !== null)) {
            localStorage.removeItem('userMessage');
            console.log("userMessage cleared");
        }
    }, 3 * 1000);
}
