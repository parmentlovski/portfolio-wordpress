document.addEventListener("DOMContentLoaded", function() { 



    // Premier champ = NOM 
    var verifNom = document.querySelector('#name');
    var verifMail = document.querySelector('#email');
    var verifObject = document.querySelector('#object');
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
            mauvaiseSaisieMail.innerHTML = "Veuillez indiquer une adresse mail valide";
            return false;
        }   
    }
    
    // Troisième champ : message 
    
    
    verifObject.addEventListener('blur', erreurObject);
    
    function erreurObject() {
        mauvaiseSaisieObject = document.querySelector('#erreurObject');
        object = /^[^<>,<|>]+$/;
    
        if (document.querySelector('#object').value.match(object)) {
            mauvaiseSaisieObject.innerHTML = "";
            return true;
        }
    
        else if (document.querySelector('#object').value === ("")) {
            mauvaiseSaisieObject.style.color = "grey";
            mauvaiseSaisieObject.innerHTML = "Veuillez indiquer un objet";
            return false;
        }
    
        else {
            mauvaiseSaisieObject.innerHTML = "Veuillez indiquer un objet valide";
            return false;
        }
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
            mauvaiseSaisieMessage.style.color = "grey";
            mauvaiseSaisieMessage.innerHTML = "Veuillez indiquer un message";
            return false;
        }
    
        else {
            mauvaiseSaisieMessage.innerHTML = "Veuillez indiquer un message valide";
            return false;
        }
    }
    
    // validation
    
    formulaireErreur = document.querySelector('#erreur');
    document.querySelector("form").addEventListener("submit", validation);
    
    function validation(){
     
        if ( erreurNom() === true && erreurMail() === true && erreurObject() === true  && erreurMessage() === true) {
            submitForm();
            event.preventDefault();
        } 
        
        else {    
            // formulaireErreur.style.marginTop = "20px";
            // formulaireErreur.style.color = "white";
            // formulaireErreur.innerHTML = "Veuillez remplir formulaire correctement";
            event.preventDefault();
        }
    };
    
    });