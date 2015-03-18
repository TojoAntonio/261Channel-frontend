<div class="modal hide fade moduletable  loginPopup" id="modal">
    <div class="modal-header">
        <button type="button" class="close modalClose">×</button>
        <header>
            <h3 class=""><span class="item_title_part0">Connexion</span> </h3>
        </header>
    </div>
    <div class="modal-body">
        <div class="mod-login mod-login__">
            <form id="login-form"  class="form-inline">
            <!--<form  class="form-inline">-->
                <p style="display:none; color:red;" id="erreur_connexion"></p>
                <div class="mod-login_userdata">
                    <div id="form-login-username" class="control-group">
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">
                                    <span class="fa fa-user hasTooltip" title="Votre login ou e-mail ici"></span>
                                    <label for="modlgn-username" class="element-invisible">Email ou login</label>
                                </span>
                               <input id="modlgn-username" type="text" name="login" class="input-medium" tabindex="0" size="18" placeholder="Email ou login" value=""/>
                            </div>
                        </div>
                    </div>
                    <div id="form-login-password" class="control-group">
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on">
                                    <span class="fa fa-lock hasTooltip" title="Votre code d'abonnement ici">
                                    </span>
                                    <label for="modlgn-passwd" class="element-invisible">Code d'abonnement </label>
                                </span>
                                <input id="modlgn-passwd" type="password" name="code" class="input-medium" tabindex="0" size="18" placeholder="Code d'abonnement" value=""/>
                            </div>
                        </div>
                    </div>
                    <label for="mod-login_remember16" class="checkbox">
                        <input id="mod-login_remember16" class="mod-login_remember" type="checkbox" name="remember" value="yes">
                        Garder ma session ouverte </label>

                    <div class="mod-login_submit">
                        <button type="button" onclick="testAbonnement();" tabindex="3" name="Submit" class="btn btn-primary" >Valider</button>
                    </div>
                    <!--<ul class="unstyled">
                        <li><a href="#" class="" title="Forgot your password?">Mot de passe oublié?</a></li>
                        <li><a href="<?php //echo base_url() ?>index.php/UserController">Créer un compte</a></li>
                    </ul>-->
                    <!--<input type="hidden" name="option" value="com_users">
                    <input type="hidden" name="task" value="user.login">
                    <input type="hidden" name="return" value="aW5kZXgucGhwP0l0ZW1pZD0xMDE=">
                    <input type="hidden" name="418454b190b2e8deae74a63c57e9a125" value="1"/>--> </div>
            </form>
        </div>
    </div>

    <script>
        function testAbonnement(){

            var log = document.getElementsByName("login")[0].value;
            var cod = document.getElementsByName("code")[0].value;

            //alert(link);
            if(log.length !=0 && cod.length !=0){
                jQuery.ajax({
                 url: "<?php echo base_url()?>UserController/connect",
                 type: "POST",
                 data: { user: log, password:cod},
                 success : function(reponse, statut){
                  // code_html contient le HTML renvoyé
                     if(reponse=="erreur1"){
                        var balise=document.getElementById("erreur_connexion");
                         balise.innerHTML="Tous les champs sont obligatoire";
                        balise.style.display="block";
                     }
                     if(reponse=="erreur2"){
                         var balise=document.getElementById("erreur_connexion");
                         balise.innerHTML="Veuillez vérifier votre login ou votre code";
                         balise.style.display="block";
                     }
                     else if(reponse=="ok"){
                         document.location.href="<?php echo(base_url()); ?>programmeDuJour/emissionsDuJour";
                     }
                     else{
                        //utiliser donner
                         balise.innerHTML="Erreur";
                     }

                 },
                 error : function(resultat, statut, erreur){
                    var balise=document.getElementById("erreur_connexion");
                     balise.innerHTML=resultat.responseText;
                     balise.style.display="block";
                 }
                 });
                 return false;
            }
            else(alert("Les champs ne doivent pas être vides"));

        }

    </script>
