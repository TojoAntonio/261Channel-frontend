<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xml:lang="en-gb" lang="en-gb">

<!-- Mirrored from livedemo00.template-help.com/joomla_50864/index.php/about by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 22:15:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>Historique</title>
    <!-- head -->
    <?php $this->load->view('include/head.php'); ?>
    <!-- head -->
</head>
<body class="com_content view-category task- itemid-134 body__">
<!-- Body -->
<div id="wrapper">
    <div class="wrapper-inner">
        <!-- top-menu -->
        <?php $this->load->view('include/header/top-menu.php'); ?>
        <!-- header-top-->
        <?php $this->load->view('include/header/header-menu-programme.php'); ?>
        <!-- liste emissions -->
        <div id="maintop-row">
            <div class="row-container">
                <div class="container">
                    <div id="maintop" class="row" style="background: rgba(255, 255, 255, 0.75)">
                        <?php if(isset($liste)){ ?>
                            <section class="moduletable   span12"><header><h3 class="moduleTitle "><span class="item_title_part0">Au programme d'aujourd'hui</span> </h3></header><div class="mod-newsflash-adv coments mod-newsflash-adv__ cols-3" id="module_90">
                                    <!-- liste emission ligne 1 -->

                                    <?php $var=0;
                                    if(isset($liste)){
                                        for($ligne=0;$ligne<(sizeof($liste)/3)+1;$ligne++){
                                            ?>
                                            <div class="row-fluid">
                                                <?php for($colonne=0;$colonne<3;$colonne++){
                                                    if($var==sizeof($liste)){
                                                        break;
                                                    }else{

                                                        ?>
                                                        <article class="span4 item item_num0 item__module  " id="item_68">
                                                            <!-- Intro Image -->
                                                            <!-- <figure class="item_img img-intro img-intro__left">
                                                <a href="http://livedemo00.template-help.com/joomla_50864/index.php/about/34-recommended-videos/68-lorem-ipsum-dolor-sit-amet-conse-ctetur">
                                                    <img src="http://livedemo00.template-help.com/joomla_50864/plugins/system/tmlazyload/blank.gif" class="lazy" data-src="<?php echo base_url() ?>assets/images/page2-img2.jpg" alt="">
                                                </a>
                                            </figure>-->
                                                            <div class="item_content">
                                                                <!-- Item title -->
                                                                <h4 class="item_title item_title__">
                                                                    <?php if($this->session->userdata('user')!=null){ ?>
                                                                        <a href="<?php echo(base_url()); ?>programmeDuJour/lire2/<?php echo($liste[$var]->e_nom); ?>"><?php echo($liste[$var]->e_nom); ?> </a>
                                                                    <?php }
                                                                    else{ ?>
                                                                        <a href="#modal"><?php echo($liste[$var]->e_nom); ?> </a>

                                                                    <?php  }
                                                                    ?>
                                                                </h4>
                                                                <time datetime="2014-07-15 06:31" class="item_published"><i class="fa fa-clock-o"></i>
                                                                    <?php echo($liste[$var]->p_date); ?>
                                                                </time>
                                                <span class="komento">
                                                    <i class="fa fa-comment"></i>


                                                    <div class="kmt-readon">

                                                                <span class="kmt-comment aligned-left">
                                                            <a href="http://livedemo00.template-help.com/joomla_50864/index.php/about/34-recommended-videos/68-lorem-ipsum-dolor-sit-amet-conse-ctetur#section-kmt"><?php echo $var;
                                                                $var++;
                                                                ?></a>
                                                        </span>

                                                    </div>



                                                </span>
                                                                <!-- Introtext -->
                                                                <div class="item_introtext">
                                                                </div>

                                                                <!-- Read More link -->
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </article>
                                                    <?php
                                                    }
                                                } ?>
                                            </div>
                                        <?php }
                                    }
                                    else echo("AUCUN");?>
                                    <!-- liste emission ligne 1 -->

                                    <div class="clearfix"></div>

                                </div>
                            </section>
                        <?php }elseif(isset($listeHier)){ ?>
                        <section class="moduletable   span12"><header><h3 class="moduleTitle "><span class="item_title_part0">Au programme d'hier</span> </h3></header><div class="mod-newsflash-adv coments mod-newsflash-adv__ cols-3" id="module_90">
                                <!-- liste emission ligne 1 -->

                                <?php $var=0;
                                if(isset($listeHier)){
                                    for($ligne=0;$ligne<(sizeof($listeHier)/3)+1;$ligne++){
                                        ?>
                                        <div class="row-fluid">
                                            <?php for($colonne=0;$colonne<3;$colonne++){
                                                if($var==sizeof($listeHier)){
                                                    break;
                                                }else{

                                                    ?>
                                                    <article class="span4 item item_num0 item__module  " id="item_68">
                                                        <!-- Intro Image -->
                                                        <!-- <figure class="item_img img-intro img-intro__left">
                                                <a href="http://livedemo00.template-help.com/joomla_50864/index.php/about/34-recommended-videos/68-lorem-ipsum-dolor-sit-amet-conse-ctetur">
                                                    <img src="http://livedemo00.template-help.com/joomla_50864/plugins/system/tmlazyload/blank.gif" class="lazy" data-src="<?php echo base_url() ?>assets/images/page2-img2.jpg" alt="">
                                                </a>
                                            </figure>-->
                                                        <div class="item_content">
                                                            <!-- Item title -->
                                                            <h4 class="item_title item_title__">
                                                                <?php if($this->session->userdata('user')!=null){ ?>
                                                                    <a href="<?php echo(base_url()); ?>programmeDuJour/lire2/<?php echo($listeHier[$var]->e_nom); ?>"><?php echo($listeHier[$var]->e_nom); ?> </a>
                                                                <?php }
                                                                else{ ?>
                                                                    <a href="#modal"><?php echo($listeHier[$var]->e_nom); ?> </a>

                                                                <?php  }
                                                                ?>
                                                            </h4>
                                                            <time datetime="2014-07-15 06:31" class="item_published"><i class="fa fa-clock-o"></i>
                                                                <?php echo($listeHier[$var]->p_date); ?>
                                                            </time>
                                                <span class="komento">
                                                    <i class="fa fa-comment"></i>


                                                    <div class="kmt-readon">

                                                                <span class="kmt-comment aligned-left">
                                                            <a href="http://livedemo00.template-help.com/joomla_50864/index.php/about/34-recommended-videos/68-lorem-ipsum-dolor-sit-amet-conse-ctetur#section-kmt"><?php echo $var;
                                                                $var++;
                                                                ?></a>
                                                        </span>

                                                    </div>



                                                </span>
                                                            <!-- Introtext -->
                                                            <div class="item_introtext">
                                                            </div>

                                                            <!-- Read More link -->
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </article>
                                                <?php
                                                }
                                            } ?>
                                        </div>
                                    <?php }
                                }
                                else echo("AUCUN");?>
                                <!-- liste emission ligne 1 -->

                                <div class="clearfix"></div>

                            </div>
                        </section>
                        <?php } else { ?>
                        <section class="moduletable   span12"><header><h3 class="moduleTitle "><span class="item_title_part0">Veuillez nous excuser mais il n'y a pas eu de Programme à ce jour..</span> </h3></header><div class="mod-newsflash-adv coments mod-newsflash-adv__ cols-3" id="module_90">
                        </section>
                        <?php } ?>
                        </div>
                </div>
            </div>
        </div>
        <div class="row-container">
            <div class="container">
                <div id="system-message-container">
                </div>

            </div>
        </div>
        <!-- liste emissions -->
        <div id="push"></div>
    </div>
</div>
<!--footer -->
<?php $this->load->view('include/footer/footer-programme.php');?>
<div id="back-top">
    <a href="#"><span></span> </a>
</div>

<!-- login -->
<?php $this->load->view('include/login.php');?>
<!-- login -->

<script type="text/javascript">/* CloudFlare analytics upgrade */
</script>
<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-1.newrelic.com","72d7dcce33","1388850","ZV1TZ0FTVkFVWkwKXlwXZEFaHRIdXVdcBkkcSFlD",0,739,new Date().getTime(),"","","","",""]);</script></body>

<!-- Mirrored from livedemo00.template-help.com/joomla_50864/index.php/about by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 22:15:45 GMT -->
</html>