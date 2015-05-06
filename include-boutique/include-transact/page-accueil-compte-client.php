<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wireframe BJ 2</title>
<link href="../../include-transact/css/custom.css" rel="stylesheet">
<link href="../../include-transact/css/bootstrap.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<?php
       include '../../include-transact/header.php';
  ?>
<div class="wrapper-carrousel">
    <?php
      // include '../../include-transact/carrousel.php';
  ?>
</div>
<div class="container content-princ" id="container-content">
<!-- DÉBUT -->
<div class="row content1">
    <div class="col-md-4 description-produit page-compte-client">
        <div class="header-desc">
            <h1>Accueil | COMPTE CLIENT</h1>
        </div>
        <br>
        
        <!-- DÉTAILS -->
        <div class="content-desc">
            <p>Bienvenue <strong>Marie-Michèle</strong>!</p>
            <br>
            <p>Voici vos abonnements en cours ou terminés.</p>`
           
           <!--<p>Voici vos abonnements en cours ou terminés. Cliquez sur le bouton <strong>Réabonner</strong> pour réabonner l'abonné. Pour un <strong>nouvel abonnement</strong> à un <strong>autre magazine</strong>, <a href="http://127.0.1.41/" target="_blank">cliquez ici</a> pour aller à la boutique.</p>-->
           
            <br>
            <div class="col-md-5 nbr">
                        <p>Abonné 1</p>
                    </div>
            
            
             <div class="recap-commande reabo2" style="margin-top:20px;">
<table border="0" cellspacing="10px;">
    <tbody>
        <tr>
            <td class="label-abo">Prénom et nom </td>
            <td>Lilou Sicard-Noël</td>
        </tr>
        <tr>
            <td class="label-abo">Magazine </td>
            <td>Les Débrouillards</td>
        </tr>
        <tr>
            <td class="label-abo">Début</td>
            <td>13 avril 2015</td>
        </tr>
        <tr>
            <td class="label-abo">Fin</td>
            <td>13 avril 2016</td>
        </tr>
    </tbody>
</table>



             
                    
                     <div class="col-md-5 reabonner">
                        <a href="/page-accueil-compte-client.php">
                                <input type="submit" class="btn button hikashop_cart_input_button" name="login" value="Réabonner">              </a>
                    </div>
                    
                    
                    <div class="col-md-5 chang-ad-liv">
                        <a href="/page-accueil-compte-client.php">
                                <input type="submit" class="btn button hikashop_cart_input_button" name="login" value="Changer l'adresse de livraison">              </a>
                    </div>
                   
                </div>
                
                
                
                
                
                
            </p>
            
            <br>
                <br>
         
          
        </div>
    </div>
  
</div>
<!-- FIN -->
<?php
        include '../../include-transact/footer.php';
    ?>
<?php
               include '../../include-transact/js.php';
?>
