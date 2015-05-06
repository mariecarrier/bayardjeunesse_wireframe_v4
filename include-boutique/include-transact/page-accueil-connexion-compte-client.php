<?php
               include '../../include-transact/head.php';
?> 
 
 <?php
       include '../../include-transact/header-connexion-achat.php';
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
            <h2>Connexion <br>à votre compte</h2>
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
                                    <label for="username">Identifiant</label>
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
                                <input type="submit" class="btn button hikashop_cart_input_button" name="login" value="Soumettre">
                                <ul>
                                    <li> <a href="/component/users/?view=reset"> Mot de passe oublié ?</a> </li>
                                    <li> <a href="/component/users/?view=remind"> Identifiant oublié ?</a> </li>
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
        include '../../include-transact/footer.php';
    ?>
<?php
               include '../../include-transact/js.php';
?> 