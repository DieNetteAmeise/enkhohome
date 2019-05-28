<!DOCTYPE html>
<html lang="de-DE">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Gp Bootstrap Template</title> -->
    <title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>

<body class="homepage">
    <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url');?>/">
                        <img src="<?php bloginfo('template_url');?>/images/enkho-logo.png" alt="ENKHO Logo">
                        <!-- <strong>EH</strong> -->
                    </a>
                </div>

            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container_class' => 'collapse navbar-collapse navbar-right',
                    //'menu_id' => 'menu-header-menu', /* ID des ul-Elements (optional) */
                    'menu_class' => 'nav navbar-nav' /* Klasse des ul-Elements (optional)*/
                ));
            ?>

            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->

    <?php
    // Helper::show_all_super_globals();
    // Helper::show_super_global_post();
    // Helper::show_super_global_get();
    // Helper::show_super_global_server();
    // Helper::show_super_global_files();
    ?>
