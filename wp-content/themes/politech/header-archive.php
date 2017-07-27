<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta name="keywords" content="<?php echo @get_setting("palavras_chave_motores_de_busca"); ?>"/>
    <meta name="author" content="<?php echo wp_get_theme()->get('Author') ?>">
    <meta name="robots" content="all">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>

    <?php //bootstrap('bootstrap-theme.min'); ?>

    <?php
    fonte_google('Open+Sans', '400,300,700');
    add_sweetalert();
    //fonte('lato');
    //add_wow();
    //add_flexslider();
    ?>

    <title><?php bloginfo('name'); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/jquery.fancybox.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/owl.carousel.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slit-slider.css">
    <!-- bootstrap.min -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/single.css">

    <!-- Modernizer Script for old Browsers -->
    <script src="<?php echo get_template_directory_uri() ?>/js/modernizr-2.6.2.min.js"></script>

    <?php wp_head(); ?>

</head>


<header id="navigation" class="navbar-inverse navbar-fixed-top animated-header" style="background: rgba(0,0,0,0.6)">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <h1 class="navbar-brand" id="nav3">
                <a href="<?php echo get_site_url() ?>"><?php echo get_setting("navbar_titulo") ?></a>
            </h1>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav">
                <li><div style="margin-left: 15px; font-size: 15px; padding-top: 15px; padding-bottom: 15px; line-height: 20px; color: white; cursor: pointer" onclick="location.href='<?php echo get_site_url() ?>'">INÍCIO</div></li>
            </ul>
        </nav>
        <!-- /main nav -->

    </div>
</header>