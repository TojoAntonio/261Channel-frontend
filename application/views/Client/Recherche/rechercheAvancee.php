<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Recherche</title>
    <?php $this->load->view('include/head'); ?>
</head>
<body class="com_search view-search task- itemid- body__">

<div id="wrapper">
    <div class="wrapper-inner">
        <?php $this->load->view('include/header/top-menu');?>

        <?php $this->load->view('include/header/header-menu-recherche'); ?>
        <div class="row-container">
            <div class="container">
                <div id="system-message-container">
                </div>
            </div>
        </div>

        <div id="content-row">
            <div class="row-container">
                <div class="container">
                    <div class="content-inner row">
                        <div id="component" class="span12">
                            <main role="main">
                                <div class="page page-search page-search__">
                                    <div class="page_header">
                                        <h3><span class="item_title_part0">Rechercher</span> </h3> </div>
                                    <form id="searchForm" action="rechercheAvancee/resultat" method="post">
                                        <div class="btn-toolbar">
                                            <div class="btn-group pull-left">
                                                <input type="text" name="searchword" placeholder="Mot clés" id="search-searchword" size="30" maxlength="20" value="" class="inputbox"/>
                                            </div>
                                            <!--<div class="btn-group pull-left">
                                                <button name="Search" onclick="this.form.submit()" class="btn btn-primary" title="Search"><i class="fa fa-search"></i></button>
                                            </div>-->
                                            <input type="hidden" name="task" value="search"/>
                                            <div class="clearfix"></div>
                                        </div>
                                        <!--<div class="searchintro">
                                        </div>
                                        <fieldset class="phrases">
                                            <h4><span class="item_title_part0">Search</span> <span class="item_title_part1">for:</span> </h4> <div class="phrases-box">
                                                <div class="controls">
                                                    <label for="searchphraseall" id="searchphraseall-lbl" class="radio">
                                                        <input type="radio" name="searchphrase" id="searchphraseall" value="all" checked="checked">All words
                                                    </label>
                                                    <label for="searchphraseany" id="searchphraseany-lbl" class="radio">
                                                        <input type="radio" name="searchphrase" id="searchphraseany" value="any">Any words
                                                    </label>
                                                    <label for="searchphraseexact" id="searchphraseexact-lbl" class="radio">
                                                        <input type="radio" name="searchphrase" id="searchphraseexact" value="exact">Exact Phrase
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="ordering-box">
                                                <label for="ordering" class="ordering">Ordering:</label>
                                                <select id="ordering" name="ordering" class="inputbox">
                                                    <option value="newest" selected="selected">Newest First</option>
                                                    <option value="oldest">Oldest First</option>
                                                    <option value="popular">Most Popular</option>
                                                    <option value="alpha">Alphabetical</option>
                                                    <option value="category">Category</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                        <fieldset class="only">
                                            <h4><span class="item_title_part0">Search</span> <span class="item_title_part1">Only:</span> </h4> <label for="area-categories" class="checkbox">
                                                <input type="checkbox" name="areas[]" value="categories" id="area-categories">
                                                Categories </label>
                                            <label for="area-contacts" class="checkbox">
                                                <input type="checkbox" name="areas[]" value="contacts" id="area-contacts">
                                                Contacts </label>
                                            <label for="area-content" class="checkbox">
                                                <input type="checkbox" name="areas[]" value="content" id="area-content">
                                                Articles </label>
                                            <label for="area-newsfeeds" class="checkbox">
                                                <input type="checkbox" name="areas[]" value="newsfeeds" id="area-newsfeeds">
                                                Newsfeeds </label>
                                            <label for="area-weblinks" class="checkbox">
                                                <input type="checkbox" name="areas[]" value="weblinks" id="area-weblinks">
                                                Weblinks </label>
                                        </fieldset>-->
                                         <!--Date de naissance-->
                                        <div class="control-group">
                                            <div class="control-label">
                                                <label id="jform_profile_dob-lbl" for="jform_profile_dob" class="hasTooltip" title="Date">Date</label>
                                            </div>
                                            <div class="controls">
                                                <div class="input-append"><input type="text" title="" name="date" id="jform_profile_dob" value="" maxlength="45" class="input-medium hasTooltip" /><button type="button" class="btn" id="jform_profile_dob_img"><i class="icon-calendar"></i></button></div>				</div>
                                        </div>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-primary validate">Rechercher</button>
                                        </div>

                                    </form></div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="push"></div>
    </div>
</div>
<!-- footer -->
<?php $this->load->view('include/footer/footer-recherche');?>
<div id="back-top">
    <a href="#"><span></span> </a>
</div>
<!-- login -->
<?php $this->load->view('include/login');?>

<script type="text/javascript">/* CloudFlare analytics upgrade */
</script>
<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-1.newrelic.com","72d7dcce33","1388850","ZV1TZ0FTVkFVWkwKXlwXZEFaHRIdXVdcBkkcSFlD",0,4522,new Date().getTime(),"","","","",""]);</script></body>

</html>