<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 03/02/15
 * Time: 14:13
 */
?>

<?php if($info == null){ ?>
<div class="moduletable   span4"><header><h3 class="moduleTitle "><span class="item_title_part0">Aujourd'hui</span> </h3></header><div class="mod-newsflash-adv playlist mod-newsflash-adv__ cols-1" id="module_109">
<?php $i=0; ?>
<?php foreach($liste as $listes){?>
    <div class="row-fluid">
        <article class="span4 item item_num0 item__module  " id="item_75">
            <time datetime="2014-07-15 07:01" class="item_published">
                <?php echo substr($listes->heure_diffusion, 0, -3) ?>
            </time>
            <div class="item_content">

                <h4 class="item_title item_title__">
                    <?php
                    $listeChemin="";
                     if($zanaka[$i][0]!=0){
                        for($j=0;$j<sizeof($zanaka[$i]);$j++){
                            $listeChemin .=$zanaka[$i][$j][0]->E_CHEMIN."___";
                        }
                     }
                    else $listeChemin .=$listes->e_chemin;
                    ?>
                    <?php if($this->session->userdata('user') != null){ ?>
                             <a href="<?php echo(base_url()); ?>ProgrammeDuJour/lire2/<?php echo $listes->e_nom ?>"><?php echo $listes->e_nom ?></a>
                    <?php }
                        else { ?>
                                <a href="#modal" ><?php echo $listes->e_nom ?></a>
                    <?php } ?>
                </h4>

                <div class="item_introtext">
                    Accès :
                    <?php
                    if($listes->cat_libelle == 0){ ?>
                    <?php echo 'public' ?>
                    <?php } else{ ?>
                    <?php echo '+'.$listes->cat_libelle.' ans' ?>
                    <?php } ?>
                    <br />
                    Dur&eacutee :
                    <?php if($listes->e_duree[0] == 0 && $listes->e_duree[1] == 0){ ?>
                    <?php echo substr($listes->e_duree, 3) ?>
                    <?php } else{ ?>
                    <?php echo $listes->e_duree ?>
                    <?php }

                    $i++
                    ?>
                </div>

            </div>
            <div class="clearfix"></div>
        </article>
    </div>
<?php } ?>
</div>
<?php } else { ?>
<div class="moduletable   span4"><header><h1 class="moduleTitle "><span class="item_title_part0" style="color: darkslategray"><strong><?php echo $info ?></strong></span> </h1></header><div class="mod-newsflash-adv playlist mod-newsflash-adv__ cols-1" id="module_109">
</div>
<?php } ?>
