$(document).ready(function(){
   $(".supprimer").click(function(evt){
       evt.preventDefault();
       var ok = confirm('Etes-vous sur de vouloir supprimer cet enregistrement ?');
       if(ok){
           document.location = $(this).attr("href");
       }
   });
});