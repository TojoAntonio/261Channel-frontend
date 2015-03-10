<div id="footer-row">
    <div class="row-container">
        <div class="container">
            <div id="footer" class="row">
                <div class="moduletable   span4"><div class="mod-menu">

                    </div></div><div class="moduletable   span6"><div class="mod-menu">
                        <ul class="nav menu footer">
                        <?php if($this->session->userdata('user') == null){ ?>
                            <li class="item-101"><a href="<?php echo base_url() ?>">Home</a>
                            </li><li class="item-134 parent"><a href="#" onclick="alert('Vous devez vous connecter pour disposer de cette fonctionnalite.')">Programme</a>
                            </li><li class="item-140 active"><a href="#" onclick="alert('Vous devez vous connecter pour disposer de cette fonctionnalite.')">Recherche</a>
                            </li><li class="item-142"><a href="<?php echo base_url();?>index.php/contact">Contacts</a>
                            </li> </ul>
                        <?php } else{ ?>
                            <li class="item-101"><a href="<?php echo base_url() ?>">Home</a>
                            </li><li class="item-134 parent"><a href="<?php echo base_url() ?>index.php/programmeDuJour/emissionsDuJour/emissions">Programme</a>
                            </li><li class="item-140 active"><a href="#">Recherche</a>
                            </li><li class="item-142"><a href="<?php echo base_url();?>index.php/contact">Contacts</a>
                            </li>
                        <?php } ?>
                        </ul>
                    </div></div><div class="moduletable   span2">
                    <div class="mod-menu__social">
                        <ul class="menu social">
                            <!--<li class="item-148"><a class="fa fa-facebook" href="#" title="Facebook">Facebook</a>
                            </li><li class="item-150"><a class="fa fa-twitter" href="#" title="Twitter">Twitter</a>
                            </li><li class="item-149"><a class="fa fa-rss" href="#" title="Feed">Feed</a>-->
                            </li> </ul>
                    </div></div>
            </div>
        </div>
    </div>
</div>