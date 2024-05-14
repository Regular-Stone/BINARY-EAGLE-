export function contactFormLocalStorage() :void{
    const userName :HTMLInputElement | null = document.querySelector('#name');
    const userEmail :HTMLInputElement | null = document.querySelector('#email');
    const userMessage :HTMLTextAreaElement | null  = document.querySelector('#message');



    function sanitize(data :string) :string {
        data = data.trim(); // supprime les espaces en début et fin de chaîne
        data = data.replace(/<[^>]*>/g, ''); // supprime les balises HTML
        data = data.replace(/\\/g, ''); // supprime les antislashes
        data = data.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;'); // convertit certains caractères en entités HTML
        return data;
    }

    if(userName && userEmail && userMessage){
        userName.addEventListener('blur', (e)=>{
            if(userName.value !== ''){
                localStorage.setItem('userName', sanitize(userName.value));
            }
        });

        userEmail.addEventListener('blur', (e)=>{
            if(userEmail.value !== ''){
                localStorage.setItem('userEmail', sanitize(userEmail.value));
            }
        });

        userMessage.addEventListener('blur', (e)=>{
            if(userMessage.value !== ''){
                localStorage.setItem('userMessage', sanitize(userMessage.value));
            }
        });
    }
}

export function loadLocalStorage() :void{
    const userName :HTMLInputElement | null = document.querySelector('#name');
    const userEmail :HTMLInputElement | null = document.querySelector('#email');
    const userMessage :HTMLTextAreaElement | null  = document.querySelector('#message');
    

    if(userName && userEmail && userMessage){
        userName.value = localStorage.getItem('userName') || '';
        userEmail.value = localStorage.getItem('userEmail') || '';
        if(localStorage.getItem('userMessage')){
            userMessage.value = localStorage.getItem('userMessage') || '';
        }
    }
}

export function resetLocalStorage() :void{
    const resetButton :HTMLButtonElement | null = document.querySelector('#reset');
    const message :HTMLTextAreaElement | null = document.querySelector('#message');
    const subject :HTMLSelectElement | null = document.querySelector('#subject');
    const options :NodeListOf<HTMLOptionElement> | null = document.querySelectorAll('option');
    if(resetButton){
        resetButton.addEventListener('click', (e)=>{
            localStorage.removeItem('userName');
            localStorage.removeItem('userEmail');
            localStorage.removeItem('userMessage');
            if(message){
                message.innerText = '';
            }
            if(subject){
                subject.style.backgroundColor = "rgb(206, 206, 206)";
            }
        });
    }
    // je veux vérifier si il y a un paramètre dans l'url
    const urlParams = new URLSearchParams(window.location.search);
    if(urlParams.get('register_success') === 'true'){
        if(localStorage.getItem('userName')){
            localStorage.removeItem('userName');
        }
        if(localStorage.getItem('userEmail')){
            localStorage.removeItem('userEmail');
        }
        if(localStorage.getItem('userMessage')){
            localStorage.removeItem('userMessage');
        }
    }

}

export function killLocalStorage() :void{
    setInterval(() => {
        if((localStorage.getItem('userName') !== "undefined") && (localStorage.getItem('userName') !== null)){
            localStorage.removeItem('userName');
        }
        if((localStorage.getItem('userEmail') !== "undefined") && (localStorage.getItem('userEmail') !== null)){
            localStorage.removeItem('userEmail');
        }
        if((localStorage.getItem('userMessage') !== "undefined") && (localStorage.getItem('userMessage') !== null)){
            localStorage.removeItem('userMessage');
        }
    }, 0.5 * 60 * 1000); // 30 secondes
}


export function bugReportTemplate(){
    const selectSubject: HTMLSelectElement | null = document.querySelector('#subject');
    const message: HTMLTextAreaElement | null = document.querySelector('#message');

    if (selectSubject && message) {
        selectSubject.addEventListener('change', (e) => {
            if (selectSubject.value === 'bug') {
                message.textContent = `Veuillez décrire le bug rencontré : 
    
    - Quelle action avez-vous effectuée ?
    
    
    - Quel comportement avez-vous observé ?
    
    
    - Quel comportement attendiez-vous ?
    
    
    - Avez-vous rencontré ce bug plusieurs fois ? Si oui, comment le reproduire ?
    
    
    - Quel navigateur utilisez-vous ?
    
    
    Merci de nous aider à améliorer notre site en nous signalant ce bug !`;
            } else {
                message.textContent = '';
            }
        });
    }
    
    // maintenant je voudrais savoir sur quelle option je suis
    // pour pouvoir afficher un message différent
    
    if(selectSubject){

        
        selectSubject.style.background = "rgb(206, 206, 206)";
        selectSubject.addEventListener('change', (e)=>{
            const currentIndex = selectSubject.options[selectSubject.selectedIndex].value;
            if(currentIndex !== ''){
                selectSubject.style.backgroundColor = "#fefefe";
            }
        });
    }
}