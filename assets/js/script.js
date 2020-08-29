document.addEventListener("DOMContentLoaded", function() {

// window.onload = function(){
    // TweenMax.set('body', {opacity: 1});
    let tl1 = new TimelineMax();

    tl1
        .from   ('.img-header', 2.6, {opacity:0, ease: Bounce.easeOut , y:-300})
        // .to('.img-header', 1, { ease: Back.easeOut.config(2.7)})


//     // var btn = document.querySelector('#btn-contact');

//     // var animation = true;

//     // btn.addEventListener('mouseleave', function(){

//     // console.log("coucou philippe ");

//     // let tl1 = new TimelineMax();

//     // tl1
//     // .from('.img-header', 0.8, {delay: 0.3, scale: 0, opacity:0, ease: Back.easeOut.config(4)})
//     // // e.preventDefault(); // Cancel the native event
//     // // e.stopPropagation();// Don't bubble/capture the event
//     // // setTimeout(function(){
//     // //     animation = false;   
//     // // }, 1500);
//     // })
// }

// ANIMATION SERVICES //

var controller = new ScrollMagic.Controller();
var tlService = new TimelineMax();
tlService
  .from('.img-services', 0.2, {opacity:0, x:-150, ease: Power0.easeOut})  
  .staggerFrom('.card-services', 0.3, {y:50, opacity: 0}, 0.3)
   

var scene = new ScrollMagic.Scene({
    triggerElement: "#services",
    triggerHook: "onLeave",
  })
    .setTween(tlService)
    .addTo(controller);


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


// ANIMATION SUPERMAN //

// var controller3 = new ScrollMagic.Controller();

//     jQuery('#projets').each(function() {
//       var tl = new TimelineMax();
//       var child = jQuery(this).find(".img-projets");
//       tl.to(child, 0.1, { y: -880, ease: Linear.easeInOut });
    
//       var scene3 = new ScrollMagic.Scene({
//         triggerElement: this,
//         triggerHook: 0.4,
//         duration: "130%"
//       })
//         .setTween(tl)
//         .addTo(controller3);
//     });

  
//   // ANIMATION H1 HEADER //
  
  const allLetters = document.querySelectorAll('.animationLetters span');
  // const ligne = document.querySelector('.ligne');

  const TLLetters = gsap.timeline();

  TLLetters
    // .from(ligne, {width: '0%', opacity: 0, duration: 0.7, ease: "power1.in"})
    .from(allLetters, {opacity: 0, top: gsap.utils.wrap([35, -35]), stagger: 0.09, ease: "power2.out"})
    // .set(ligne, {width: '34vw'});

// Animation Projet 

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
  
  });