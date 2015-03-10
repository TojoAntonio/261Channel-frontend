<div id="top-row">
    <div class="row-container">
        <div class="container">
            <div id="top" class="row">
                <div class="moduletable   span6"><div class="mod-menu">
                        <ul class="nav menu nav-pills">
                            <?php if($this->session->userdata('user') == null){ ?>
                            <!--<li class="item-143"><a class="modalToggle" id="login" href="#modal">Login</a></li>-->
                            <li class="item-143"><a class="btn btn-info" href="#modal">Login</a> </li>
                            <!--<li class="item-178"><a href="<?php echo base_url(); ?>UserController">Créer un compte</a>-->
                            <?php } else{ ?>
                            <li class="item-143"><strong><i><?php print_r($this->session->userdata('user')[0]->U_PSEUDO) ?></i></strong>
                            <li class="item-178"><a class="modalToggle" href="<?php echo base_url(); ?>index.php/UserController/disconnect">Se déconnecter</a>
                            <?php } ?>
                            </li> </ul>
                    </div></div><div class="moduletable   span6">
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