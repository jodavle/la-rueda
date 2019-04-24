<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        ?>
        <div class="banner-slide banner" style="background: rgba(0,0,0,0) url('<?php echo the_post_thumbnail_url(); ?>') no-repeat scroll center center / cover;"></div>
        <img class="pure-img text-center il-center" src="<?php echo the_post_thumbnail_url();?>" />
        
        <?php
        } else {}
        the_post();?>
        <article class="post">
        <h2><?php the_title(); ?></h2>
        <?php if (is_page()) {}
        else { ?>
            <p class="post-info"><?php the_time('F j, Y g:i a'); ?> | Categoría: 
                    <?php 
                    $categories = get_the_category();
                    $separador = ", ";
                    $output = '';
                    if (has_category()){
                        if ($categories) {
                            foreach ($categories as $category){
                                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separador;

                            }
                            echo trim($output, $separador);

                        }
                    }
                    
                    ?>
            </p>
        <?php } ?>

		<?php if ( is_search() OR is_archive() ) { ?>
			<p>
			<?php echo get_the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
			</p>
		<?php } else {
			if (is_page('blog')) { ?>

				<p>
				<?php echo get_the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
				</p>

			<?php } else {*/
				the_content();
			}
		?>
        
        </article>