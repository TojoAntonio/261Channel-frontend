<section class="moduletable   span4"><header><h3 class="moduleTitle "><span class="item_title_part0">Emissions</span> <span class="item_title_part1">populaires</span> </h3></header>
    <div class="mod-newsflash-adv coments mod-newsflash-adv__ cols-1" id="module_110">
        <script>
            function liker(iduser,idemission){
                //alert('iduser='+iduser.toString()+'  idemission='+idemission);
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    data: {
                        iduser: iduser,
                        idemission:idemission
                    },
                    url: "/Emission/liker",
                    success:function(result){
                        window.location='programmeDuJour/emissionsDuJour'
                    }
                });

            }
        </script>
        <?php if (isset($populaire)){

            foreach($populaire as $pop){

                ?>
                <div class="row-fluid">
                    <article class="span4 item item_num0 item__module  " id="item_83">

                        <?php if($this->session->userdata('user')!=null){        ?>
                            <figure class="item_img img-intro img-intro__left">
                                <a href="<?php echo(base_url()); ?>programmeDuJour/lire2/<?php echo($pop->E_NOM); ?>">
                                    <img src="http://livedemo00.template-help.com/joomla_50864/plugins/system/tmlazyload/blank.gif" class="lazy" data-src="<?php echo base_url() ?>assets/images/<?php echo $pop->E_PICTURE; ?>" alt="">
                                </a>
                            </figure>
                            <div class="item_content">

                                <h4 class="item_title item_title__">
                                    <a href="<?php echo(base_url()); ?>programmeDuJour/lire2/<?php echo($pop->E_NOM); ?>"><?php echo($pop->E_NOM); ?></a>
                                </h4>
                                <time datetime="2014-07-15 06:31" class="item_published">
                                    <i class="fa fa-clock-o"></i>
                                    15 Jul 2014 </time>
                                <span class="komento">
                                    <a href="#module_110" onclick="liker(<?php echo($this->session->userdata('user')[0]->IDUSER); ?>,<?php echo($pop->IDEMISSION); ?>)"><i class="fa fa-heart-o"></i></a>
                                    <div class="kmt-readon">
                                        <span class="kmt-comment aligned-left">
                                             <?php echo($pop->nb_like); ?>
                                        </span>
                                    </div>
                                </span>

                                <div class="item_introtext">
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        <?php } else{ ?>
                            <figure class="item_img img-intro img-intro__left">
                                <a href="#modal">
                                    <img src="http://livedemo00.template-help.com/joomla_50864/plugins/system/tmlazyload/blank.gif" class="lazy" data-src="<?php echo base_url() ?>assets/images/<?php echo $pop->E_PICTURE; ?>" alt="">
                                </a>
                            </figure>
                            <div class="item_content">

                                <h4 class="item_title item_title__">
                                    <a href="#modal" onclick="function(){ document.getElementById('login').click()}"><?php echo($pop->E_NOM); ?></a>
                                </h4>
                                <time datetime="2014-07-15 06:31" class="item_published">
                                    <i class="fa fa-clock-o"></i>
                                    15 Jul 2014 </time>
                                <span class="komento">
                                    <a href="#modal"><i class="fa fa-heart-o"></i></a>
                                    <div class="kmt-readon">
                                        <span class="kmt-comment aligned-left">
                                             <?php echo($pop->nb_like); ?>
                                        </span>
                                    </div>
                                </span>

                                <div class="item_introtext">
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        <?php } ?>
                    </article>
                </div>

            <?php
            }
        } ?>


        <div class="clearfix"></div>
        <div class="mod-newsflash-adv_custom-link">
            <a class="btn btn-info" href="index.php/shows.html">voir toutes les emissions</a> </div>
    </div>
</section>
