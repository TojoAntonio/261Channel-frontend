<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Home</title>
    <!-- head -->
    <?php $this->load->view('include/head.php'); ?>
    <!-- head -->
</head>
<body class="com_content view-category task- itemid-101 body__">

<div id="wrapper">
<div class="wrapper-inner">
    <!-- top-menu -->
    <?php $this->load->view('include/header/top-menu.php'); ?>

    <!-- top-menu -->
    <!-- header-top-->
    <?php $this->load->view('include/header/header-menu-home.php'); ?>
    <!-- header-top-->
<div id="showcase-row">
<div class="row-container">
<div class="container">
<div class="row">
    <!-- slider -->
    <?php $this->load->view('include/slider.php'); ?>

    <!-- slider -->
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

<div id="content-row">
<div class="row-container">
<div class="container">
<div class="content-inner row" >
<div id="component" class="span8">
<main role="main">

    <div id="content-top-row" class="row">
        <div id="content-top">

            <?php $this->load->view('Client/ProgrammeDuJour/emissionsDuJour'); ?>
            <?php //$this->load->view('include/program_view'); ?>

        </div>
        <?php $this->load->view('include/emission_populaire'); ?>
    </div>
</div>
<section class="page-category page-category__">
</section>
</main>
</div>

<!-- menu droit -->
<?php $this->load->view('include/right-content'); ?>
<!-- menu droit -->

</div>
</div>
</div>
</div>
<div id="push"></div>
</div>
</div>

<!-- footer -->
<?php $this->load->view('include/footer/footer-home.php');?>
<!-- footer -->

<div id="back-top">
<a href="#"><span></span> </a>
</div>

<!-- login -->
<?php $this->load->view('include/login.php');?>
<!-- login -->

</div>
<script type="text/javascript">/* CloudFlare analytics upgrade */
</script>
<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-1.newrelic.com","72d7dcce33","1388850","ZV1TZ0FTVkFVWkwKXlwXZEFaHRIdXVdcBkkcSFlD",0,2385,new Date().getTime(),"","","","",""]);</script></body>

<!-- Mirrored from livedemo00.template-help.com/joomla_50864/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Feb 2015 22:15:45 GMT -->
</html>