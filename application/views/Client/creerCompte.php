<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Création compte</title>
    <?php $this->load->view('include/head'); ?>
</head>
<body class="com_users view-registration task- itemid-174 body__">
<!-- Body -->
<div id="wrapper">
    <div class="wrapper-inner">
        <!-- Top menu -->
        <?php $this->load->view('include/header/top-menu');?>
        <!-- Header menu-->
        <?php $this->load->view('include/header/header-menu');?>
        <div class="row-container">
            <div class="container">
                <div id="system-message-container">
                </div>

            </div>
        </div>
        <!-- Main Content row -->
        <div id="content-row">
            <div class="row-container">
                <div class="container">
                    <div class="content-inner row">

                        <div id="component" class="span12">
                            <main role="main">


                                <div class="page-registration page-registration__">
                                    <div class="page_header">
                                        <h3><span class="item_title_part0">Créer</span> un <span class="item_title_part1">compte</span> </h3>	</div>
                                    <!--<form id="member-registration" action="<?php echo base_url() ?>UserController/addUser" method="post" class="form-validate">-->
                                    <?php echo form_open('UserController/addUser'); ?>
                                        <fieldset>
                                            <!--Règlement-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> Champs requis</label></span><span class="after"></span></span>				</div>
                                                <div class="controls">
                                                </div>
                                            </div>
                                            <!--Nom-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_name-lbl" for="jform_name" class="hasTooltip required" title="<strong>Nom</strong><br />Veuillez indiquer ici votre nom complet">Nom:<span class="star">&#160;*</span></label>				</div>
                                                <div class="controls">
                                                    <input type="text" name="nom" id="jform_name" value="<?php echo set_value('nom'); ?>" size="30" />
                                                </div>
                                                <?php echo form_error('nom'); ?>
                                            </div>
                                            <!--Pseudo-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_username-lbl" for="jform_username" class="hasTooltip required" title="<strong>Pseudo</strong><br />Inserez ici le pseudo que vous voudriez avoir.">Pseudo:<span class="star">&#160;*</span></label>				</div>
                                                <div class="controls">
                                                    <input type="text" name="pseudo" id="jform_username" value="" class="validate-username" size="30" required aria-required="true" />				</div>
                                            </div>
                                            <!--Mot de passe-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_password1-lbl" for="jform_password1" class="hasTooltip required" title="<strong>Mot de passe</strong><br />Entrez ici votre mot de passe .">Mot De Passe:<span class="star">&#160;*</span></label>				</div>
                                                <div class="controls">
                                                    <input type="password" name="password1" id="jform_password1" value="" autocomplete="off" class="validate-password" size="30" maxlength="99" required aria-required="true" />				</div>
                                            </div>
                                            <!--Mot de passe confirmation-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_password2-lbl" for="jform_password2" class="hasTooltip required" title="<strong>Confirmation du mot de passe</strong><br />Veuillez confirmer votre mot de passe">Confirmer le Mot De Passe:<span class="star">&#160;*</span></label>				</div>
                                                <div class="controls">
                                                    <input type="password" name="password2" id="jform_password2" value="" autocomplete="off" class="validate-password" size="30" maxlength="99" required aria-required="true" />				</div>
                                            </div>
                                            <!--Adresse email-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_email1-lbl" for="jform_email1" class="hasTooltip required" title="<strong>Adresse email</strong><br />Veuillez indiquer ici votre adresse email">Adresse Email:<span class="star">&#160;*</span></label>				</div>
                                                <div class="controls">
                                                    <input type="email" name="email1" class="validate-email" id="jform_email1" value="" size="30" required aria-required="true" />				</div>
                                            </div>
                                            <!--Date de naissance-->
                                            <!--<div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_profile_dob-lbl" for="jform_profile_dob" class="hasTooltip" title="<strong>Date de naissance</strong><br />Sélectionnnez la date à laquelle vous etes née.">Date de Naissance:</label>					<span class="optional">(optionnel)</span>
                                                </div>
                                                <div class="controls">
                                                    <div class="input-append"><input type="text" title="" name="datenaissance" id="jform_profile_dob" value="" maxlength="45" class="input-medium hasTooltip" /><button type="button" class="btn" id="jform_profile_dob_img"><i class="icon-calendar"></i></button></div>				</div>
                                            </div>-->
                                            <!--Code d'abonnement-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_name-lbl" for="codeabonnement" class="hasTooltip required" title="<strong>Code</strong><br />Inserez ici votre code qui vous l'a été donné <br />lors de l'achat d'abonnement.<br />Si vous n'en avez pas recu veuillez<br/ >recontacter le point de vente.">CODE D'ABONNEMENT:<span class="star">&#160;*</span></label>				</div>
                                                <div class="controls">
                                                    <input type="text" name="codeabonnement" id="codeabonnement" size="30" required aria-required="true" />				</div>
                                            </div>

                                            <!--Adresse-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_profile_address1-lbl" for="jform_profile_address1" class="hasTooltip" title="<strong>Adresse</strong><br />Veuillez indiquer ici votre adresse">Adresse:</label>					<span class="optional">(optionnel)</span>
                                                </div>
                                                <div class="controls">
                                                    <input type="text" name="addresse" id="jform_profile_address1" value="" size="30" />				</div>
                                            </div>
                                            <!--Ville-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_profile_city-lbl" for="jform_profile_city" class="hasTooltip" title="<strong>City</strong><br />Indiquez ici la ville où vous vivez.">Ville:</label>					<span class="optional">(optionnel)</span>
                                                </div>
                                                <div class="controls">
                                                    <input type="text" name="ville" id="jform_profile_city" value="" size="30" />				</div>
                                            </div>
                                            <!--Région-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_profile_region-lbl" for="jform_profile_region" class="hasTooltip" title="<strong>Region</strong><br />Indiquez ici votre région.">Region:</label>					<span class="optional">(optionnel)</span>
                                                </div>
                                                <div class="controls">
                                                    <input type="text" name="region" id="jform_profile_region" value="" size="30" />				</div>
                                            </div>
                                            <!--Code postal-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_profile_postal_code-lbl" for="jform_profile_postal_code" class="hasTooltip" title="<strong>Code Postal</strong><br />Indiquez ici votre code postal.">Code Postal:</label>					<span class="optional">(optionnel)</span>
                                                </div>
                                                <div class="controls">
                                                    <input type="text" name="codepostal" id="codepostal" value="" size="30" />				</div>
                                            </div>
                                            <!--Téléphone-->
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_profile_phone-lbl" for="jform_profile_phone" class="hasTooltip" title="<strong>Téléphone</strong><br />Indiquez ici votre numéro de téléphone.">Téléphone:</label>					<span class="optional">(optionnel)</span>
                                                </div>
                                                <div class="controls">
                                                    <input type="tel" name="phone" id="phone" value="" size="30" />				</div>
                                            </div>

                                        </fieldset>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-primary validate">Register</button>
                                            <a class="btn btn-primary cancel" href="<?php echo base_url() ?>index.php/UserController" title="Cancel">Cancel</a>
                                        </div>
                                        <input type="hidden" name="option" value="com_users" />
                                        <input type="hidden" name="task" value="registration.register" />
                                        <input type="hidden" name="ee6c281c38b36c189ecb226af4d22749" value="1" />
                                    <?php echo form_close(); ?>
                                    <!--</form>-->
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="push"></div>
    </div>
</div>
<!--Footer -->
<?php $this->load->view('include/footer/footer'); ?>
<div id="back-top">
    <a href="#"><span></span> </a>
</div>
<!-- Login -->
<?php $this->load->view('include/login'); ?>

<script type="text/javascript">/* CloudFlare analytics upgrade */
</script>
<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-1.newrelic.com","72d7dcce33","1388850","ZV1TZ0FTVkFVWkwKXlwXZEFaHRIdXVdcBkkcSFlD",0,345,new Date().getTime(),"","","","",""]);</script></body>

</html>