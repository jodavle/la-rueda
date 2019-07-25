<?php get_header(); ?>

<div class="section-1">
    <section class="grid-noGutter">
        <div class="menuFloatLeft">
           <div class="sidebar-1">
            <?php
                // Setup arguments.
                $args = array(
                    // Get a specific slider category.
                    'category_name' => 'Principales',
                    // Get all slides and don't paginate.
                    'nopaging' => true
                );
                // Instantiate new query instance.
                $my_query = new WP_Query( $args );

            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                    $my_query->the_post();
            ?>
            <!-- Cumpliendo la condición -->
            <div class="pure-round-buttons"></div>
            <!-- -->
            <?php
            endwhile;
            else:
            ?>
            <!-- No cumpliendo la condición -->
            <?php
            endif;
            ?>
               <div class="vertical-text"> Alimentos finos artesanales</div>
           </div>
        </div>
        <div class="col-12">

        <?php
        if ($my_query->have_posts()) :
            while ($my_query->have_posts()) :
                $my_query->the_post();
        ?>
        <!-- Cumpliendo la condición -->
            <a class="overlay" href="<?php the_permalink(); ?>">
                <!--                 <div class="banner-slide banner" style="background: rgba(0,0,0,0) url('/** <?php get_the_post_thumbnail(); ?> */') no-repeat scroll center center / cover;"> -->
                <div class="banner-slide banner" style="background: rgba(0,0,0,0) url('<?php echo the_post_thumbnail_url(); ?>') no-repeat scroll center center / cover;">
                    <div class="banner-text">
                        <h1><span class="l1"><?php the_title(); ?></span></h1>
                        <p><span class="l2"><?php echo get_the_excerpt(); ?></span></p>
                    </div>
                </div>
            </a>

        <?php
        endwhile;
        else:
        ?>
        <!-- No cumpliendo la condición 14804008383 -->
        <?php
        endif;
        ?>
        </div>
        <div class="pure-landing-down-button">
        <a href="#"><img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/botton-landing.svg" alt=""></a>
        </div>
    </section>
</div>
<!-- End Section Jumbotron !-->
<!-- 2 -->
<div class="section-2">
    <section class="grid-spaceAround">
    <div class="float-aup"><img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/aup.svg" alt=""></div>
        <div class="float-adown">
            <div class="arrow-up"></div>
            <div class="ball"></div>
        </div>
        <div class="col-10_sm-10 col-top" data-push-left="off-1_sm-0">
            <?php $postid = get_theme_mod('lwp_section_fp-link'); ?>
            <h1><?php echo break_the_title($postid); ?></h1>

	<!--

	<div class="col-2_md-5_sm-6 col-top">
	<img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/p-limon.png">
        </div>
        --!>
            <p>
            <?php echo get_the_excerpt($postid); ?>
            </p>
        </div>
        <div class="col-12 text-center">
            <a href="<?php echo get_the_permalink($postid); ?>" class="button is-dark xl-button">Aprende más</a>
        </div>
    </section>
</div>
<!-- 3 -->
<div class="section-3">
    <section class="grid-spaceAround text-center">
        <div class="col-3_md-5_xs-10">
            <img src="<?php echo get_theme_mod('lwp_section_fp-1-image'); ?>" alt="" class="pure-img">
            <h2><?php echo get_theme_mod('lwp_section_fp--2-headline-1'); ?></h2>
            <p>
                <?php echo get_theme_mod('lwp_section_fp--2-text-1'); ?>
            </p>
        </div>
        <div class="col-3_md-5_xs-10">
            <img src="<?php echo get_theme_mod('lwp_section_fp-2-image'); ?>" alt="" class="pure-img">
            <h2><?php echo get_theme_mod('lwp_section_fp--2-headline-2'); ?></h2>
            <p>
                <?php echo get_theme_mod('lwp_section_fp--2-text-2'); ?>
            </p>
        </div>
    </section>
</div>

<div class="section-4">
    <section class="grid">
        <div class="col-5_md-10 product" data-push-left="off-1">
            <div class="article">
            <?php $postidd = get_theme_mod('lwp_section_fp-2-link');
            if($postidd) { ?>
                <a href="<?php echo the_permalink($postidd); ?>">
                    <?php
                    $ogimg = wp_get_attachment_image_src( get_post_thumbnail_id( $postidd), 'large' );
                    if ( $ogimg ) {?>
                        <img class="pure-img" src="<?php echo $ogimg[0];?>" alt="">
                    <?php } else {}?>

                    <h2><?php echo get_the_title($postidd); ?></h2>
                    <p><?php echo get_the_excerpt($postidd); ?></p>
                </a>
            <?php } else {}?>
            </div>
        </div>
        <!--
        <div class="col-4 product" data-push-left="off-0_md-1">
            <div class="article">
                <img class="pure-img" src="./img/logo.svg" alt="">
                <h1><span class="l1">Jaleas</span></h1>
            </div>
        </div>
        -->
        <div class="col-5_md-10 product" data-push-left="off-0_md-1" data-push-right="off-1">
            <div class="article">
            <?php $postidd = get_theme_mod('lwp_section_fp-3-link');
            if($postidd) { ?>
                <a href="<?php echo the_permalink($postidd); ?>">
                    <?php
                    $ogimg = wp_get_attachment_image_src( get_post_thumbnail_id( $postidd), 'large' );
                    if ( $ogimg ) {?>
                        <img class="pure-img" src="<?php echo $ogimg[0];?>" alt="">
                    <?php } else {}?>

                    <h2><?php echo get_the_title($postidd); ?></h2>
                    <p><?php echo get_the_excerpt($postidd); ?></p>
                </a>
            <?php } else {}?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
