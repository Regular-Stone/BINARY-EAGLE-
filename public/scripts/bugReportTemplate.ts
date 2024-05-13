
export function bugReportTemplate(){
    const selectSubject: HTMLSelectElement | null = document.querySelector('#subject');
    const message: HTMLTextAreaElement | null = document.querySelector('#message');

    if (selectSubject && message) {
        selectSubject.addEventListener('change', (e) => {
            if (selectSubject.value && selectSubject.value === 'bug') {
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
        if(selectSubject.value === ""){
            selectSubject.style.backgroundColor = "#cecece";
            selectSubject.addEventListener('change', (e) => {
                if (selectSubject.value !== '') {
                    selectSubject.style.backgroundColor = "white";
                }
            });
        }
    }
}