<div id="header-row">
    <div class="row-container">
        <div class="container">
            <header>
                <div class="row">
                    <!-- Logo -->
                    <div id="logo" class="span4">
                        <a href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url() ?>assets/images/logo.png" alt="TV channel">
                            <h1>TV channel</h1>
                        </a>
                    </div>
                    <nav class="moduletable navigation  span6">
                        <ul class="sf-menu  " id="module-93">
                               <li class="item-101 current active"><a href="<?php echo base_url() ?>">Home</a></li>
                               <li class="item-134 deeper dropdown parent"><a>Programme</a>
                                   <ul class="sub-menu">
                                       <li class="item-135"><a href="<?php echo base_url() ?>programmeDuJour/emissions">Aujourd'hui</a></li>
                                       <li class="item-136 deeper dropdown parent"><a href="<?php echo base_url();?>programmeDuJour/emissionsdHier">Hier</a></li>
                                   </ul>
                               </li>
                               <li class="item-141"><a href="<?php echo base_url();?>rechercheAvancee">Recherche</a></li>
                               <li class="item-142"><a href="<?php echo base_url();?>contact">Contacts</a></li>

                        </ul>
                        <script>
                            // initialise plugins
                            jQuery(function($){
                                $('#module-93')

                                    .superfish({
                                        hoverClass:    'sfHover',
                                        pathClass:     'overideThisToUse',
                                        pathLevels:    1,
                                        delay:         500,
                                        animation:     {opacity:'show', height:'show'},
                                        speed:         'normal',
                                        speedOut:      'fast',
                                        autoArrows:    false,
                                        disableHI:     false,
                                        useClick:      0,
                                        easing:        "swing",
                                        onInit:        function(){},
                                        onBeforeShow:  function(){},
                                        onShow:        function(){},
                                        onHide:        function(){},
                                        onIdle:        function(){}
                                    });
                                /*.mobileMenu({
                                 defaultText: "Navigate to...",
                                 className: "select-menu",
                                 subMenuClass: "sub-menu"
                                 });*/

                                var ismobile = navigator.userAgent.match(/(iPhone)|(iPod)|(android)|(webOS)/i)
                                if(ismobile){
                                    $('#module-93').sftouchscreen();
                                }
                                $('.btn-sf-menu').click(function(){
                                    $('#module-93').toggleClass('in')
                                });
                            })
                        </script></nav>
                    <div class="moduletablespan2"><div class="mod-menu">
                            <ul class="nav menu online">
                                <li class="item-177"><a class="fright" href="#" onclick="sendDate();"><img src="http://livedemo00.template-help.com/joomla_50864/plugins/system/tmlazyload/blank.gif" class="lazy" data-src="<?php echo base_url() ?>assets/images/icons/online.png" alt="Online"/><span class="image-title">Online</span> </a>
                                </li> </ul>
                        </div></div><div class="moduletable search-block  span2"><div role="search" class="mod-search mod-search__search-block">
                            <form action="<?php echo base_url(); ?>Emission/rechercher" method="post" class="navbar-form">
                                <label for="searchword" class="element-invisible">Search...</label>
                                <input id="searchword" name="searchword" maxlength="20" class="inputbox mod-search_searchword" type="text" size="20" placeholder=" " required>
                                <input type="image" value="Search" class="button" src="<?php echo base_url() ?>assets/images/icons/searchButton.gif" onclick="alert("huhu")"/>
                                <input type="hidden" name="task" value="search">
                                <input type="hidden" name="option" value="com_search">
                                <input type="hidden" name="Itemid" value="101">
                            </form>
                        </div></div>
                </div>
            </header>
        </div>
    </div>
</div>