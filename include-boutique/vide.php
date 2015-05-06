<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LWC | VERSION 1</title>
<link href="css/custom.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>




</head>
<body>

  <?php
        include 'header.php';
  ?>




  <?php
       // include 'entete.php';
  ?>
  
    <?php
       include 'carrousel.php';
  ?>


<!-- DESCRIPTION -->
<div class="container content-princ" id="container-content">


 <?php
      // include 'page-produit.php';
  ?>

  <?php
       include 'page-accueil-content.php';
  ?>
  
  <?php
      //include 'lp-produits.php';
  ?>
  
   
</div>



   <!-- FOOTER début -->
    <?php
        include 'footer.php';
    ?>
    <!-- FOOTER Fin -->




<script>


/*$( "#mag-0-11-ans" ).click(function() {
  $( "#container-content" ).load( "include-boutique/lp-produits.php", function() { 
  $( "#carrousel-accueil" ).hide();

  
});
});*/


$( "#mag-0-11-ans" ).click(function() {
    
  $( "#carrousel-accueil" ).hide(1000, function(){
      
   
  
  $( "#container-content" ).load( "include-boutique/lp-produits.php");
  
  $( ".subscribenow" ).click(function() {
  $( "#container-content" ).load( "include-boutique/page-produit.php", function() { 
  $("html, body").scrollTop(0, function() {   
  
  });
});
});
});
});






$( "#page-accueil-content" ).click(function() {
  $( "#container-content" ).load( "include-boutique/page-accueil-content.php", function() { 
  $( "#carrousel-accueil" ).show();
});
});


</script>


<script>
/*
$( ".subscribenow" ).click(function() {
  $( "#container-content" ).load( "include-boutique/page-produit.php", function() { 
  $( "#carrousel-accueil" ).hide();
});
});


$( ".subscribenow" ).click(function() {
  $("html, body").scrollTop(0);
});



$( ".subscribenow" ).hide();*/

</script>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

</body>
</html>