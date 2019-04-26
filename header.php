<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body>
    <!-- Boot Animation -->
    <div id="basicTimeline">
        <div class="line">
            <div class="square el"></div>
        </div>
        <div class="line">
            <div class="circle el">
                <img class="pure-img" src="<?php echo get_stylesheet_directory_uri() . '/svg/logo.svg' ?>" alt="">
            </div>
        </div>
        <div class="line">
            <div class="triangle el"></div>
        </div>
    </div>
    <div class="menu">
        <div class="app-menu">
        <?php
            $menuParameters = array(
            'theme_location' => 'menu',
            'menu_class'       => 'items',
            'container_class'   => 'items',
            'echo'            => false,
            'items_wrap'      => '%3$s',
            'link_before'   =>  '<div class="menu-item"><span class="text-menu">',
            'link_after'    =>  '</span></div>',
            'depth'           => 0,
            );
            echo str_replace('<a' , '<a class="link-menu"',
            (strip_tags(wp_nav_menu( $menuParameters ), '<div><a><span>' )));
        ?>
        </div>
    </div>

<div class="layout">
    <header class="header">
        <div class="grid-12 pure-menu pure-menu-horizontal">
            <div class="col-12">
            <a class="pure-menu-heading pure-menu-link" href=""></a>
            <div class="logo"><a href="<?php echo get_home_url(); ?>"><img class="pure-img" src="
            <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                    echo esc_url( $logo[0] );
            } else {echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';}?>
            " alt=""></a></div>
            </div>
            <div class="float-menu">
                <div class="menu-icon">
                <div></div>
                <div></div>
                <div></div>
                </div>
            </div>
        </div>
    </header>

    