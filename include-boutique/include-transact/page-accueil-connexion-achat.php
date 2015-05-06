<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wireframe BJ 2</title>
<link href="../../include-boutique/include-transact/css/custom.css" rel="stylesheet">
<link href="../../include-boutique/include-transact/css/bootstrap.css" rel="stylesheet">
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
<div class="container content-princ connexion-achat" id="container-content">  
<!-- DÉBUT -->
<div class="row content1">


<!-- DÉBUT - Colonne gauche -->
    <div class="col-md-4 description-produit">
        <div class="header-desc">
            <h1 class="connexion">Informations clients</h1>
            <p>Vous avez déjà un compte? <a href="">Cliquez ici</a>.</p>
        </div>
        <br>
        <div id="hikashop_checkout_login_form" class=" ">
                            <fieldset class="input">
                            
                            
                            
                                <!-- DÉBUT - Courriel -->
                              <div class="wrapper-courriel">  
                                <p id="com-form-login-username">
                                    <label for="username">Courriel</label>
                                    <br>
                                    <input name="username" id="username" type="text" class="inputbox form-enregi" alt="username" size="18">
                                </p>
                                <p id="com-form-login-username">
                                    <label for="passwd">Confirmez votre courriel</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                               </div> 
                                <!-- FIN - Courriel -->
                                
                                
                                
                                
                                <!-- DÉBUT - Mot de passe -->
                               <div class="wrapper-mp-passe">
                                  <p id="mot-de-passe">
                                    <label for="passwd">Mot de passe</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                                
                                  <p id="mot-de-passe">
                                    <label for="passwd">Confirmez votre mot de passe</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                                </div>
                                 <!-- FIN - Mot de passe  -->
                                
                                
                                
                                
                                
                            <!--
                            a href="page-paiement.php">
                                <input type="submit" class="btn button hikashop_cart_input_button bouton-soumettre-connexion" name="login" value="Soumettre"></a>
                                <ul>
                                    <li> <a href="/component/users/?view=reset"> Mot de passe oublié ?</a> </li>
                                 
                                </ul>
                            </fieldset>-->
                        </div>
        
        
        <div class="content-connexion-achat">

<h2>COORDONNÉES DE FACTURATION</h2>
                                
                                
                             <div class="input-resp-crea-client">
                                <p id="com-form-login-username">
                                    <label for="passwd">Prénom</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                             </div>
                             
                                
                                <div class="input-resp-crea-client">
                                  <p id="com-form-login-username">
                                    <label for="passwd">Nom</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                                </div>
                                
                                <div class="input-resp-crea-client">
                                    <p id="com-form-login-username">
                                    <label for="passwd">Adresse</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                                </div>
                                
                                <div class="input-resp-crea-client">
                                    <p id="com-form-login-username">
                                    <label for="passwd">No. d'appartement</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
</div>

<div class="input-resp-crea-client">
                                    <p id="com-form-login-username">
                                    <label for="passwd">Code postal</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                        
                        
                        </div>
                        
                        <div class="input-resp-crea-client">        
                                  <p id="com-form-login-username">
                                    <label for="passwd">Ville</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                             </div>
                             
                             <div class="input-resp-crea-client">   
                                      <p id="com-form-login-username">
                                    <label for="passwd">Téléphone</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                              </div>  
                              
                              <div class="input-resp-crea-client">
                                <p id="com-form-login-username">
                                    <label for="passwd">Province</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                                </div>
                                
                                <div class="input-resp-crea-client">
                                   <p id="com-form-login-username">
                                    <label for="passwd">Pays</label>
                                    <br>
                                    <input type="password" id="passwd" name="passwd" class="inputbox form-enregi" size="18" alt="password">
                                </p>
                                </div>
                                <div style="clear:both"></div>
                                
                                 <div class="input-resp-crea-client bouton-cli">
                                <a href="../../include-boutique/include-transact/page-paiement.php">
                                <input type="submit" class="btn button hikashop_cart_input_button bouton-soumettre-connexion" name="login" value="Soumettre"></a></div>
                                
                                <!--
                            a href="page-paiement.php">
                                <input type="submit" class="btn button hikashop_cart_input_button bouton-soumettre-connexion" name="login" value="Soumettre"></a>

        
<!-- <p style="margin: 0px 0px 0px 0px !important;">Merci de vous connecter pour poursuivre votre achat.</strong></p>
            <br>
            <p><input type="radio" name="" id="" value="" onchange="" style="  height: 15px;
  width: 15px;"> J'ai déjà un compte</p>
            <p><input type="radio" name="" id="" value="" onchange="" style="  height: 15px;
  width: 15px;">  Je n'ai pas encore de compte</p> -->
        </div> 
        
        
    </div>
<!-- FIN - Colonne gauche -->    
    
    <div class="col-md-4 image-produit">
        <div class="wrapper-cover-content2">
            <div class="margin-cover-content2">
                <div class="wrapper-covers-content2">
                    <div class="table-w">
       
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