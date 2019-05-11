    <footer class="footer grid-noGutter">
        <div class="col-2_sm-6" data-push-left="off-1_sm-3" data-push-right="off-1_sm-3">
                <div class="footer-widget-area">
                <a href="<?php echo get_home_url(); ?>"><img class="pure-img logo-rueda" src="<?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                    echo esc_url( $logo[0] );
            } else {echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';}?>
            " alt=""></a>

                </div>

        </div>
        <div class="col-4_sm-12">
            <div class="footer-widget-area">
                <h2><?php echo get_theme_mod('lwp_fp_section_1'); ?></h2>
            </div>
        </div>
        <div class="col-4_sm-12">
                <div class="footer-widget-area">
                    <h2 class="sub"><a href="tel:<?php echo get_theme_mod('lwp_fp_section_2'); ?>"><?php echo get_theme_mod('lwp_fp_section_2'); ?></a></h2>
                    <h2 class="sub"><a href="mailto:<?php echo get_theme_mod('lwp_fp_section_3'); ?>"><?php echo get_theme_mod('lwp_fp_section_3'); ?></a></h2>
                </div>
            <div class="col-12">
                <?php wp_nav_menu( array(
                    'menu_class' => 'main--menu',
                    'theme_location' => 'redes-sociales',
                    'container' => false,
                    'items_wrap' => '<ul class="min-list social-icons-list group">%3$s</ul>', )
                    ); ?>
            </div>
        </div>

    </footer>
    <div class="copyright" >
        <?php $fromYear = 2018; $thisYear = (int)date('Y');
        echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : ''); ?> &copy; - <?php bloginfo('name'); ?>
    </div>

</div><!-- layout -->
<?php wp_footer(); ?>
</body>
</html>
