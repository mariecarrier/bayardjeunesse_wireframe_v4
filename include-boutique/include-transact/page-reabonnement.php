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
            <h1>Réabonnement</h1>
        </div>
        <br>
        
        <!-- DÉTAILS -->
        <div class="content-desc">
       
            <p>Voici vos abonnements en cours ou terminés.</p>
            <br>
            
             <div class="recap-commande">
             
             <div class="col-md-5 nbr">
                        <p>1</p>
                    </div>
             
                    <div class="col-md-5 mag">
                        <p>Les Débrouillards</p>
                    </div>
                    <div class="col-md-5 nom">
                        <p>Lilou Sicard-Noël</p>
                    </div>
                    
                     <div class="col-md-5 date-debut">
                        <p>Début : 13 avril 2015</p>
                    </div>
                    
                    <div class="col-md-5 date-fin">
                        <p> Fin : 13 avril 2016</p>
                    </div>
                    <div class="col-md-5 chang-ad-liv">
                        <a href="/page-accueil-compte-client.php">
                                <input type="submit" class="btn button hikashop_cart_input_button" name="login" value="Changer l'adresse">              </a>
                    </div>
                    <div class="col-md-5 reabonner">
                        <a href="/page-accueil-compte-client.php">
                                <input type="submit" class="btn button hikashop_cart_input_button" name="login" value="Réabonner">              </a>
                    </div>
                </div>
            
          
            </p>
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
