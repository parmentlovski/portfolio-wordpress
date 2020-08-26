document.addEventListener('DOMContentLoaded', () => {

// var competences = document.querySelectorAll('.competences');

// competences.forEach(competence => {

//   let val = competence.trim().split(" "); 
 
//   if(val.length > 0) {
//     val.parent().hide();
//   } 

// });


jQuery(".stringCompetences").each(function(){ 
  if(jQuery(this).html().trim()==="") jQuery(this).parent().hide();
});

});