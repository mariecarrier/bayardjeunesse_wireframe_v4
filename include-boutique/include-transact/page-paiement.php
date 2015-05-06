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
       include '../../include-boutique/include-transact/header-connexion-achat.php';
  ?>
<div class="wrapper-carrousel">
    <?php
      // include '../../include-transact/carrousel.php';
  ?>
</div>
<div class="container content-princ" id="container-content"> 
    <!-- DÉBUT -->
    <div class="row content1">
        <div class="col-md-4 paiement"> 
            
            <!-- PAIEMENT CARTE DE CRÉDIT -->
            <div class="wrapper-paiement carte">
                <div class="header-desc">
                    <h3>Paiement</h3>
                </div>
                <div class="logos-cartes">LOGOS CARTES</div><br>
                <div class="champs-carte">
                    <div class="form-group carte-prenom-nom">
                        <label for="exampleInputPassword1">Prénom et nom du titulaire</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group no-carte">
                        <label for="exampleInputPassword1">Numéro de carte de crédit</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group date-exp">
                        <label for="exampleInputPassword1" style="  float: left;
  width: 100%;">Date d'expiration</label>
                        <div>
                            <input type="text" class="form-control expir-mois" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div>
                            <input type="text" class="form-control expir-annee" id="exampleInputPassword1" placeholder="">
                        </div>
                    </div>
                    <div class="form-group crypto">
                        <label for="exampleInputPassword1">Cryptogramme</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                        <p>?</p>
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            
            <!-- ADRESSE DE FACTURATION -->
            
            <div class="wrapper-paiement facturation">
                <div class="col-md-4 wrap-adres-factu">
                    <div class="header-desc">
                        <h3>Coordonnées de facturation</h3>
                    </div>
                
    
                        <br>
              <div class="destina">
                    <p> <strong>Mme Marie-Michèle Carrier</strong><br>
                        4475 rue Frontenac<br>
                        H2H 2S2 Montréal Québec<br>
                        Canada<br><br>
                        Téléphone : 5149414057</p>
                    <br>
                    <button type="submit" class="btn btn-default modifier">Modifier</button>
                </div></div>
                <div class="col-md-4 wrap-adres-livraison">
                    <div class="header-desc">
                        <h3>Destinataire / Adresse de livraison</h3>
                    </div>
                <br>
                
                
                <div class="destina">
                    <p><strong> Lilou Sicard-Noël</strong><br>
                        334 15e rue<br>
                        H4B 2K8 Québec Québec<br>
                        Canada<br><br>
                        Téléphone : 4186768909</p>
                    <br>
                    <button type="submit" class="btn btn-default modifier">Modifier</button>
                 </div>
                 
                 
                    <div class="destina dest2">
                    <p><strong> Claire Alfonzo Carrier</strong><br>
                        5492 rue du moine<br>
                        H4B 27J9 Ste-Foy Québec<br>
                        Canada<br><br>
                        Téléphone : 4185765909</p>
                    <br>
                    <button type="submit" class="btn btn-default modifier">Modifier</button>
                 </div>
                 
                 
                    <button type="submit" class="btn btn-default ajout">Ajouter un destinataire</button>
                </div>
            </div>
            <div style="clear:both"></div>
            
            
       <div class="wrapper-paiement recap small">    
       <div class="header-desc">
                    <h3>Votre commande</h3>
                </div>
                
                       
            <div class="recap-commande reabo2" style="margin-top:20px;">
            
            
            
            
<table border="0" cellspacing="10px;">
    <tbody>
    
    <tr>
            <td class="label-abo">PRODUIT 1</td>
            <td style="text-align:right;"><p style="
    margin: 0px 20px 10px 10px !important;
    font-weight: bold;
">X</p></td>
        </tr>
    
    
    
    
        <tr>
            <td class="label-abo">Image</td>
            <td><img src="../../include-transact/img/deb_cover.jpg"></td>
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
            
            
            
            
            
            
            
            <div class="wrapper-paiement recap large">
                <div class="header-desc">
                    <h3>Votre commande</h3>
                </div>
                
                <!-- Header commande -->
                <div class="header-commande">
                
                <div class="col-md-5 destinataire">
                        <p>Destinataire</p>
                    </div>
                    
                    <div class="col-md-5 image">
                        <p>Image</p>
                    </div>
                    <div class="col-md-5 nom">
                        <p>Nom</p>
                    </div>
                    <div class="col-md-5 prix">
                        <p>Prix</p>
                    </div>
                    <div class="col-md-5 quant">
                        <p>Quantité</p>
                    </div>
                    <div class="col-md-5 total">
                        <p>Prix total</p>
                    </div>
                </div>
                <!-- Recap commande -->
                <div class="recap-commande">
                
                  <div class="col-md-5 destinataire">
                        <p><select id="hikashop_product_characteristic_44" name="hikashop_product_characteristic[44]" class="choix-desti inputbox duree-produit" size="1" onchange="return hikashopUpdateVariant(this);">
	<option value="34" selected="selected">Lilou Sicard-Noël</option>
	<option value="35">Claire Alfonzo-Carrier</option>
	<option value="36">Antoine Alfonzo-Carrier</option>
</select></p>
                    </div>
                
                    <div class="col-md-5 image">
                        <p><img src="../../include-boutique/img/deb_cover.jpg"/></p>
                    </div>
                    <div class="col-md-5 nom">
                        <p>Les Débrouillards</p>
                    </div>
                    <div class="col-md-5 prix">
                        <p>39.95$</p>
                    </div>
                    <div class="col-md-5 quant">
                        <p>1</p>
                    </div>
                    <div class="col-md-5 total">
                        <p>39.95$</p>
                    </div>
                </div>
                
                 <div style="clear:both"></div>
                  <hr>
                      <div class="recap-commande">
                
                  <div class="col-md-5 destinataire">
                        <p><select id="hikashop_product_characteristic_44" name="hikashop_product_characteristic[44]" class="choix-desti inputbox duree-produit" size="1" onchange="return hikashopUpdateVariant(this);">
	<option value="34" selected="selected">Claire Alfonzo-Carrier</option>
	<option value="35">Lilou Sicard-Noël</option>
	<option value="36">Antoine Alfonzo-Carrier</option>
</select></p>
                    </div>
                
                    <div class="col-md-5 image">
                        <p><img src="../../include-boutique/img/deb_cover.jpg"/></p>
                    </div>
                    <div class="col-md-5 nom">
                        <p>J'aime lire</p>
                    </div>
                    <div class="col-md-5 prix">
                        <p>39.95$</p>
                    </div>
                    <div class="col-md-5 quant">
                        <p>1</p>
                    </div>
                    <div class="col-md-5 total">
                        <p>39.95$</p>
                    </div>
                </div>
                
                
                          <div style="clear:both"></div>
                  <hr>
                      <div class="recap-commande">
                
                  <div class="col-md-5 destinataire">
                        <p><select id="hikashop_product_characteristic_44" name="hikashop_product_characteristic[44]" class="choix-desti inputbox duree-produit" size="1" onchange="return hikashopUpdateVariant(this);">
	<option value="34" selected="selected">Antoine Alfonzo-Carrier</option>
	<option value="35">Lilou Sicard-Noël</option>
	<option value="36">Claire Alfonzo-Carrier</option>
</select></p>
                    </div>
                
                    <div class="col-md-5 image">
                        <p><img src="../../include-boutique/img/deb_cover.jpg"/></p>
                    </div>
                    <div class="col-md-5 nom">
                        <p>Les Explorateurs</p>
                    </div>
                    <div class="col-md-5 prix">
                        <p>39.95$</p>
                    </div>
                    <div class="col-md-5 quant">
                        <p>1</p>
                    </div>
                    <div class="col-md-5 total">
                        <p>39.95$</p>
                    </div>
                </div>
                
              
                
                <div style="clear:both"></div>
                  <hr>
                <!-- Total commande -->
                <div class="total-commande">

                    <div class="col-md-5 titre-total">
                        <p>SOUS-TOTAL</p>
                        <p>TPS/TVH 5%</p>
                        <p>TVQ 9,975%</p>
                        <p>TOTAL</p>
                    </div>
                    <div class="col-md-5 total-final">
                        <p>39.95$</p>
                        <p>2.00$</p>
                        <p>3.99$</p>
                        <p>45.94$</p>
                    </div>
                </div>
                
                <!-- Recap commande --> 
                
            </div>
            <div style="clear:both"></div>
            
            <!-- COUPON PROMOTIONNEL -->
            
            <div class="wrapper-paiement coupon">
                <div class="header-desc">
                    <h3>Coupon promotionnel</h3>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Entrez le code de votre coupon</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <button type="submit" class="btn btn-default">Valider</button>
            </div>
             <div style="clear:both"></div>
            <!-- INFOLETTRE -->
            
            <div class="wrapper-paiement infolettre">
            <div class="header-desc">
                    <h3>Recevez des offres promotionnelles exclusives</h3>
                </div>
            
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                        Oui, je souhaite recevoir des communications de la part de Bayard Jeunesse/Publications BLD (informations, nouvelles, nouveautés, promotions, concours et plus).</label>
              
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                        Oui, je désire recevoir des communications de la part de Bayard Presse Canada Inc. (Bayard Canada Livres, Owlkids, Bayard Jeunesse France, Les éditions Milan, Éditions BLD) .</label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">
                         Oui, je désire recevoir des communications de la part des partenaires de Bayard Jeunesse soigneusement sélectionnés. </label>
                </div>
            </div>
        
        </div>
        <div style="clear:both"></div>
        
            <div class="wrapper-paiement soumettre">
                <button type="submit" class="btn btn-default">Payer</button>
            </div>
    </div>
</div>
<!-- FIN -->
<?php
        include '../../include-boutique/include-transact/footer.php';
    ?>
<?php
               include '../../include-boutique/include-transact/js.php';
?>
