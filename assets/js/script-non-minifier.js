document.addEventListener("DOMContentLoaded", function() {

    // SUPPRESSION DES COMPETENCES N'APPARAISSANT PAS
    jQuery(".stringCompetences").each(function(){ 
      if(jQuery(this).html().trim()==="") jQuery(this).parent().hide();
    });
  
     // ANIMATION IMAGE HEADER //
  
      let tl1 = new TimelineMax();
  
      tl1
          .from   ('.img-header', 2.6, {opacity:0, ease: Bounce.easeOut , y:-300})
  
   // ANIMATION H1 HEADER //
    
    const allLetters = document.querySelectorAll('.animationLetters span');
  
    const TLLetters = gsap.timeline();
  
    TLLetters
      .from(allLetters, {opacity: 0, top: gsap.utils.wrap([35, -35]), stagger: 0.09, ease: "power2.out"})
  
  // ANIMATION SERVICES //
  
  var controller = new ScrollMagic.Controller();
  var tlService = new TimelineMax();
  tlService
    .staggerFrom('.animation-services', 0.3, {y:0, opacity: 0}, 0.3)
     
  var scene = new ScrollMagic.Scene({
      triggerElement: "#services",
      triggerHook: "onLeave",
    })
      .setTween(tlService)
      .addTo(controller);
  
  // ANIMATION PROJET
  
  var controllerProjet = new ScrollMagic.Controller();
  let tlProjet = new TimelineMax();
  
  tlProjet
    .staggerFrom('.item', 0.1, {y:50, opacity: 0}, 0.3)
    .staggerFrom('.line', 0.1, {opacity: 0})
    .from('.content-heart', 1.5, {delay: 0.1, scale:0, opacity:0, ease: Back.easeOut.config(2.5)})
  
  var scene = new ScrollMagic.Scene({
      triggerElement: "#projets",
      triggerHook: "onLeave",
    })
      .setTween(tlProjet)
      .addTo(controllerProjet);
  
  // ANIMATION CONTACT //
  
  var tr = document.querySelector(".btn-projets");
  var btn = tr.lastChild;
  
  var controller2 = new ScrollMagic.Controller();
  var tl3 = new TimelineMax();
  tl3
    .from('.box-form', 0.1, {delay: 1, scale:1, opacity:0})
    .from('.img-contact', 0.1, {opacity:0, delay: 0.1, x:-150, ease: Power0.easeOut})
    .from('#map', 0.1, {opacity:0, x:150, ease: Power0.easeOut})
  
  var scene2 = new ScrollMagic.Scene({
      triggerElement: btn,
      triggerHook: "onLeave",
    })
      .setTween(tl3)
      .addTo(controller2);
  
  
  // VALIDATION DU FORMULAIRE DE LA PARTIE CONTACT  //
  
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
              formulaireErreur.innerHTML = "Veuillez remplir le formulaire correctement";
              event.preventDefault();
          }
      };
      
  // CRÉATION DE LA MAP DE LA PARTIE CONTACT  //
  
      macarte = L.map('map');
      var mondayLayer = L.geoJSON();
      
      // On initialise la latitude et la longitude de Besançon (centre de la carte)
      var lat = 47.25;
      var lon = 6.0333;
      
      function Goto(address) {
          fetch('https://nominatim.openstreetmap.org/search?format=json&limit=3&q=' + address) // ('url') par défaut méthode get
              .then(function(response) {
                  return response.json();
              })
              .then(function(data) {
                  var latitudex = data[0]['lat'];
                  var longitudex = data[0]['lon'];
                  var marker = L.marker([latitudex, longitudex]).addTo(macarte);
                  // marker._icon.classList.add("markerColor");
              })
      
              .catch(function(error) {
                  console.log('ici ' + error.message);
              });
      }
      
      // var macarte = null;
      // Fonction d'initialisation de la carte
      function initMap() {
          // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
          macarte.setView([lat, lon], 11);
          // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
          L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
              // Il est toujours bien de laisser le lien vers la source des données
              attribution: 'donnsées © <a href="osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="openstreetmap.fr">OSM France</a>',
              minZoom: 1,
              maxZoom: 20
          }).addTo(macarte);
      }
      window.onload = function() {
          // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
          initMap();
      };
      Goto(adress_client);
    
    });