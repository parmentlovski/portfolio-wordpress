document.addEventListener('DOMContentLoaded', () => {

  jQuery(".stringCompetences").each(function(){ 
  if(jQuery(this).html().trim()==="") jQuery(this).parent().hide();
});

});