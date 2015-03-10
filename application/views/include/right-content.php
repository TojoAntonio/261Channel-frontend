<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 05/02/15
 * Time: 11:55
 */
?>

<div id="aside-right" class="span4">
    <aside role="complementary">
        <div class="moduletable date"><div class="mod-newsflash-adv date mod-newsflash-adv__date cols-1" id="module_111">
            <?php if(isset($suggestion)){
                foreach($suggestion->result() as $sug){
                ?>
                <div class="row-fluid">
                    <article class="span4 item item_num0 item__module  " id="item_88">

                        <figure class="item_img img-intro img-intro__none">
                            <img src="http://livedemo00.template-help.com/joomla_50864/plugins/system/tmlazyload/blank.gif" class="lazy" data-src="<?php echo base_url() ?>assets/images/<?php echo $sug->e_picture ?>" alt="">
                            <figcaption><?php echo(heureminute($sug->heure_diffusion)); ?></figcaption>
                        </figure>
                        <div class="item_content">

                            <h4 class="item_title item_title__date">
                                <span class="item_title_part0"><?php echo($sug->e_nom); ?></span>
                            </h4>

                            <div class="item_introtext">
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
                <?php }

            }
            else{ ?>
                <div class="row-fluid">
                    <article class="span4 item item_num0 item__module  " id="item_88">

                        <figure class="item_img img-intro img-intro__none">
                            <img src="http://livedemo00.template-help.com/joomla_50864/plugins/system/tmlazyload/blank.gif" class="lazy" data-src="" alt="">
                            <figcaption>12555</figcaption>
                        </figure>
                        <div class="item_content">

                            <h4 class="item_title item_title__date">
                                <span class="item_title_part0">Herhhfslfsdgfs</span>
                            </h4>

                            <div class="item_introtext">
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div> <?php
            }
            ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </aside>
</div>