<?php get_header(); ?>
    <div class="col-10_md-12">
    <?php

    while(have_posts()) {
        get_template_part('content');
    }   ?>

</div>
<?php get_footer(); ?>
