<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
</head>
<body>

<!-- site-header -->
<header class="site-header clearfix">
    <div class="header-wrap">
        <div class="site-logo col-xs-6 col-sm-6 col-md-3 col-lg-3 clearfix">
            <a href="<?php echo home_url(); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site-logo"> </a>
        </div>
        <div class="phone col-xs-6 col-sm-6 col-md-3 col-lg-3 clearfix">
            <i class="fa fa-phone" aria-hidden="true"> </i> +9978 8856 999
        </div>
        <nav class="site-nav clearfix col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="gamburger" onclick="showmenu()"></div>
            <?php

            $args = array(
                'theme_location' => 'primary'
            );

            ?>

            <?php wp_nav_menu($args);
            wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'nav-menu' ) );

            ?>

        </nav>
    </div>
</header>
<!-- site-header -->
