<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php if ( is_single() ) {
            single_post_title('', true);
        } else {
            bloginfo('name'); echo " - "; bloginfo('description');
        }
        ?>" />
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117952543-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-117952543-2');
    </script>
        <title><?php

            $vartit = wp_title('|', true, 'right');
            $vartot = bloginfo('name');
            if(empty($vartit)):
                echo($vartot);
            elseif(empty($vartit) && ( is_home() || is_front_page() )):
                echo(__( 'Home', 'textdomain' ) . ' | ' . get_bloginfo( 'description' ));
            else:
                echo($vartit . ' | ' . $vartot);
            endif; ?></title>

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


<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
	<a class="navbar-item" href="<?php echo get_home_url(); ?>"><img src="
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                    echo esc_url( $logo[0] );
            } else {echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';}?>
            " alt="" width="112"></a>


        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
   <?php
            $menuParameters = array(
            'theme_location' => 'menu',
            'menu_class'       => 'navbar-end',
            'container_class'   => 'navbar-end',
            'echo'            => false,
            'items_wrap'      => '%3$s',
            'link_before'   =>  '<div><span>',
            'link_after'    =>  '</span></div>',
            'depth'           => 0,
            );
            echo str_replace('<a' , '<a class="navbar-item"',
            (strip_tags(wp_nav_menu( $menuParameters ), '<div><a><span>' )));
        ?>
</div>
</nav>


<div class="layout">

