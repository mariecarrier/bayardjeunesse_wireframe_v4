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
       include 'header-connexion-achat.php';
  ?>
  
<div class="wrapper-carrousel">  
    <?php
      // include '../../include-transact/carrousel.php';
  ?>
</div>  
<div class="container content-princ" id="container-content">  
<!-- DÉBUT -->
<div class="row content1">
    <div class="col-md-4 description-produit">
        <div class="header-desc">
            <h1 class="gros-titre">Connexion <br>à votre compte</h1>
        </div>
        <br>
        
        <!-- DÉTAILS -->
        <div class="content-connexion-achat">
      
        
        
            <p style="margin: 0px 0px 0px 0px !important;"></strong></p>
            <br>
            <p><input type="radio" name="" id="" value="" onchange="" style="  height: 15px;
  width: 15px;"> J'ai déjà un compte</p>
            <p><input type="radio" name="" id="" value="" onchange="" style="  height: 15px;
  width: 15px;">  Je n'ai pas encore de compte</p>
  
  
  
  <br>
          <div class="wrapper-div-compte-client page-connexion"> 
            <ul>
             
                <p style=" text-transform:uppercase;"><strong>Fonctionnalités du compte client</strong></p>
                <li>-> Effectuer vos <strong>réabonnements</strong> en ligne.</li>       
                <li>-> Changer l'<strong>adresse de livraison</strong> d'un abonnement.</li>
                <li>-> Consulter votre <strong>historique d'achat</strong></li>
                <li>-> Modifier votre mot de passe et profil</li>
              
                </ul>
          </div>  
  
  
  
  
        </div>
    </div>
    <div class="col-md-4 image-produit">
        <div class="wrapper-cover-content2">
            <div class="margin-cover-content2">
                <div class="wrapper-covers-content2">
                    <div class="table-w">
                        <div id="hikashop_checkout_login_form" class=" ">
                            <fieldset class="input">
                                <p id="com-form-login-username">
                                    <label for="username">Courriel</label>
                                    <br>
                                    <input name="username" id="username" type="text" class="inputbox" alt="username" size="18">
                                </p>
                                <p id="com-form-login-password">
                                    <label for="passwd">Mot de passe</label>
                                    <br>
                                    
                                    <input type="password" id="passwd" name="passwd" class="inputbox" size="18" alt="password">
                                </p>
                                <p id="com-form-login-remember">
                                     <input type="checkbox" id="remember" name="remember" value="yes" alt="Remember Me">
                                    <label for="remember">Se souvenir de moi</label>
                                    
                                </p>
                                
                                <a href="/page-accueil-compte-client.php">
                                <input type="submit" class="btn button hikashop_cart_input_button btn button hikashop_cart_input_button bouton-soumettre-connexion" name="login" value="Soumettre">              </a>
                                
                                <ul>
                                    <li> <a href=""> Mot de passe oublié ?</a> </li>
                                    
                                </ul>
                            </fieldset>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- FIN -->
 <?php
        include 'footer.php';
    ?>
<?php
               include 'js.php';
?> 