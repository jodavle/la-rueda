<?php get_header(); ?>
    <div class="col-10_md-12">
    <?php

    while(have_posts()) : the_post();
        get_template_part('content');
    endwhile;
    else: 
        echo '<p> Sin contenido para mostrar </p>';
    endif;

    ?>

</div>    
<?php get_footer(); ?>