<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Page produit</title>
<link href="css/custom.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<?php
        include 'header.php';
  ?>
<div class="container content-princ" id="container-content">
<?php
        //include 'breadcrump.php';
?>

<div class="wrapper-prec-suivant">
 <div class="header-desc">
            <h3 style="color: red;">Merci d'avoir rajouté cet article à votre panier</h3>
            <p>Défilez vers le bas pour TERMINER VOTRE COMMANDE.</p>
            <p><a href="">Cliquez ici</a> pour revenir à la page précédente.</p>
        </div>

    
            <div class="wrapper-sugg-achat">
        <h3>Ces articles pourraient aussi vous plaire</h3>
        <div class="row content1">
            <?php 
include 'listing-produit.php';

include 'listing-produit.php';

include 'listing-produit.php';


?>
        </div>
    </div>
        
   
        
        
        
  
</div>

<div style="clear:both;"></div>



<div class="wrapper-panier-page-suggestion">
    <div class="wrapper-paiement coupon small">
        <div class="header-desc">
            <h3>Merci d'avoir rajouté cet article à votre panier</h3>
        </div>
        
        
        
        
        <div class="recap-commande reabo2" style="margin-top:20px;">
<table border="0" cellspacing="10px;">
    <tbody>
    
    <tr>
            <td class="label-abo"></td>
            <td style="text-align:right;"><p style="
    margin: 0px 20px 10px 10px !important;
    font-weight: bold;
">X</p></td>
        </tr>
    
        <tr>
            <td class="label-abo">Image</td>
            <td><img src="img/deb_cover.jpg"></td>
        </tr>
        <tr>
            <td class="label-abo">Nom du produit</td>
            <td>Les Débrouillards</td>
        </tr>
        <tr>
            <td class="label-abo">Quantité</td>
            <td>1</td>
        </tr>
        <tr>
            <td class="label-abo">Prix</td>
            <td>39.95$</td>
        </tr>
    </tbody>
</table>



            <table border="0" cellspacing="10px;" class="total">
    <tbody>
    
    <tr>
            <td class="label-abo"><p style="
    margin: 0px 0px 0px 10px !important;
    font-weight: bold;
">Total</p></td>
            <td style="text-align:right;"><p style="
    margin: 5px 20px 10px 10px !important;
    font-weight: bold;
">39.95$</p></td>
        </tr>
    
      
       
        
    </tbody>
</table> 
                    
               
                    
                    
                  
                   
                </div>
        
        
        
        
        
       
    </div>








<a name="terminer-commande"></a>
<div class="wrapper-panier-page-suggestion">
    <div class="wrapper-paiement coupon large">
        <div class="header-desc">
            <h3>Récapitulatif de votre commande</h3>
        </div>
        
        <!-- Header commande -->
        <div class="wrapper-recap-commande">
            <div class="header-commande">
                <div class="col-md-5 image">
                    <p>Image</p>
                </div>
                <div class="col-md-5 nom">
                    <p>Nom</p>
                </div>
                <div class="col-md-5 quant">
                    <p>Qté</p>
                </div>
                <div class="col-md-5 total">
                    <p>Prix</p>
                </div>
            </div>
            <!-- Recap commande -->
            <div class="recap-commande">
                <div class="col-md-5 image">
                    <p><img src="img/deb_cover.jpg"></p>
                </div>
                <div class="col-md-5 nom">
                    <p>Les Débrouillards</p>
                </div>
                <div class="col-md-5 quant">
                    <p>1</p>
                </div>
                <div class="col-md-5 total">
                    <p>39.95$</p>
                </div>
                <div class="col-md-5 supprimer">
                    <p>X</p>
                </div>
            </div>
            
            <!-- Total commande -->
            <div class="total-commande">
                <div class="col-md-5 titre-total">
                    <p>TOTAL</p>
                </div>
                <div class="col-md-5 total-final">
                    <p>39.95$</p>
                </div>
            </div>
            
            <!-- Recap commande --> 
            
        </div>
        
        
        
    </div>
    <div class="right-terminer-achat"> </div>
    <div style=" clear:both;"></div>

     
        <div class="wrap-large-but terminer-commande" id="je-labonne">
                <a href="/wireframe-v1/include-boutique/include-transact/page-accueil-connexion-achat.php"><div class="subscribenow content bouton-achat" id="je-labonne">
                    <input type="button" value="Terminer ma commande" class="call">
                </div></a>
      </div>
    <div style=" clear:both;"></div>
    </div>
</div>
<?php
        include 'footer.php';
    ?>
<?php
        include 'js.php';
    ?>
