

<script>


/*$( "#mag-0-11-ans" ).click(function() {
  $( "#container-content" ).load( "include-boutique/lp-produits.php", function() { 
  $( "#carrousel-accueil" ).hide();

  
});
});*/

/*
$( "#mag-0-11-ans" ).click(function() {
    
  $( "#carrousel-accueil" ).hide(10, function(){
      
  $( "#container-content" ).load("include-boutique/lp-produits.php", function(){
  
  $( ".subscribenow" ).click(function() {
  $( "#container-content" ).load( "include-boutique/page-produit.php", function() { 
  $("html, body").scrollTop(0, function() {   
  
  });
});
});
});
});
});*/





/*Rajouter de l'image background pour fermer le menu en Responsive
$(document).click(function(e) {   
    if(e.hasClass === '.navbar-collapse.collapse.in') {
        $( ".navbar-toggle" ).addClass( "fermer" )
    } 
});
*/



/*Pour que le menu se ferme lorsqu'on clique à l'extérieur




$(document).click(function(e) {   
    if(e.target.class != '.navbar-collapse.collapse.in') {
        $( ".navbar-toggle" ).removeClass( ".fermer" )
    } 
});

*/


/*
$(document).click(function() {   
            $( ".navbar-toggle" ).addClass( "fermer") 
                
});*/






$('.navbar-toggle').click(function(){
    if($( ".navbar-toggle" ).hasClass("collapsed") == 1){
       $( ".navbar-toggle" ).addClass("1111");
       $( ".navbar-toggle" ).removeClass("2222");
    }else {
        $( ".navbar-toggle" ).removeClass("1111");
        $( ".navbar-toggle" ).addClass("2222");
    }

}
 
);



$( ".dropdown" ).hover(
  function() {
    $( this ).addClass( "mm-hover" );
  }, function() {
    $( this ).removeClass( "mm-hover" );
  }
);







/*
function change() { 
   document.body.style.cursor=(document.body.style.cursor=="default") ? "default" : "default"; 
}; 

change(); 

$( ".wrapper-carrousel" ).load("include-boutique/carrousel.php");


$( "#mag-0-11-ans" ).click(function() {
    
  $( ".wrapper-carrousel" ).hide(0).fadeOut(0, function(){   
  $( "#container-content" ).load("include-boutique/lp-produits.php", function(){
  
  $( ".subscribenow" ).click(function() {
  $( "#container-content" ).load( "include-boutique/page-produit.php", function() { 
  $("html, body").scrollTop(0, function() {   
  
  
  
  
  });
});
});
});
});
});


$( "#page-accueil-content" ).click(function() {
  $( ".wrapper-carrousel" ).show();
  $( ".wrapper-carrousel" ).load("include-boutique/carrousel.php", function() {
  $( ".wrapper-carrousel" ).load("include-boutique/page-accueil-content.php");
});
});
*/

</script>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../../include-transact/js/bootstrap.js"></script>

</body>
</html>