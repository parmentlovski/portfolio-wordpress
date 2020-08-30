document.addEventListener("DOMContentLoaded", function() { 



    // Premier champ = NOM 
    var verifNom = document.querySelector('#name');
    var verifMail = document.querySelector('#email');
    var verifTel = document.querySelector('#tel');
    var verifMessage = document.querySelector('#message');
    
    verifNom.addEventListener('blur', erreurNom);
    
    
    function erreurNom() {
    
        mauvaiseSaisieNom = document.querySelector('#erreurName');
        lettres = /^[A-Za-z é-]+$/;
    
        if (document.querySelector('#name').value.match(lettres)) {
            mauvaiseSaisieNom.innerHTML = "";
            return true;
        }
    
        else if (document.querySelector('#name').value === ("")) {
            mauvaiseSaisieNom.style.color = "grey";
            mauvaiseSaisieNom.innerHTML = "Veuillez indiquer votre nom et prénom";
            return false;
        }
    
        else {
            mauvaiseSaisieNom.style.color = "grey";
            mauvaiseSaisieNom.innerHTML = 'Veuillez utiliser des caractères valides';
            return false;
        }
        
    }
    
    
    // Deuxieme champ : mail 
    
    
    verifMail.addEventListener('blur', erreurMail);
    
    
    function erreurMail() {
    
        mauvaiseSaisieMail = document.querySelector('#erreurEmail');
        mail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    
        if(document.querySelector('#email').value.match(mail)) {
            mauvaiseSaisieMail.style.innerHTML = "";
            return true;
        }
    
        else if (document.querySelector('#email').value === ("")) {
            mauvaiseSaisieMail.style.color = "grey";
            mauvaiseSaisieMail.innerHTML = "Veuillez indiquer une adresse email";
            return false;
        }
    
        else {
            mauvaiseSaisieMail.style.color = "grey";
            mauvaiseSaisieMail.innerHTML = "Veuillez indiquer une adresse mail valide";
            return false;
        }   
    }
    
    // // Troisième champ : tel
    
    
    verifTel.addEventListener('blur', erreurTel);
    
    function erreurTel() {
        mauvaiseSaisieTel = document.querySelector('#erreurTel');
        tel = /^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;
    
        if (document.querySelector('#tel').value.match(tel)) {
            mauvaiseSaisieTel.innerHTML = "";
            return true;
        }
    
        // else if (document.querySelector('#tel').value === ("")) {
        //     mauvaiseSaisieTel.style.color = "grey";
        //     mauvaiseSaisieTel.innerHTML = "Veuillez indiquer un numéro de téléphone valide";
        //     return false;
        // }
    
        // else {
        //     mauvaiseSaisieTel.style.color = "grey";
        //     mauvaiseSaisieTel.innerHTML = "Veuillez indiquer un objet valide";
        //     return false;
        // }
    }
    
    
    // Quatrième champ : message 
    
    verifMessage.addEventListener('blur', erreurMessage);
    
    function erreurMessage() {
        mauvaiseSaisieMessage = document.querySelector('#erreurMessage');
        message = /^[^<>,<|>]+$/;
    
        if (document.querySelector('#message').value.match(message)) {
            mauvaiseSaisieMessage.innerHTML = "";
            return true;
        }
    
        else if (document.querySelector('#message').value === ("")) {
            mauvaiseSaisieMessage.style.color = "#757578";
            mauvaiseSaisieMessage.innerHTML = "Veuillez indiquer un message";
            return false;
        }
    
        else {
            mauvaiseSaisieMessage.style.color = "#757578";
            mauvaiseSaisieMessage.innerHTML = "Veuillez indiquer un message valide";
            return false;
        }
    }
    
    // validation
    
    formulaireErreur = document.querySelector('#erreur');
    affichageErreur = document.querySelector('.with-errors ');
    document.querySelector("form").addEventListener("submit", validation);
    
    function validation(){
     
        if ( erreurNom() === true && erreurMail() === true && erreurMessage() === true) { //&& erreurObject() === true
            submitForm();
            event.preventDefault();
        } 
        
        else {    
            affichageErreur.style.display = "block";
            formulaireErreur.innerHTML = "Veuillez remplir formulaire correctement";
            event.preventDefault();
        }
    };
    
    });