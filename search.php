<?php
/**
 * The template for displaying search result 
 *
 * @package lowbit
 * @since 1.0
 */
    get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
        
        if( have_posts() ):
                while( have_posts() ):
                    the_post();
                    get_template_part( 'template-parts/page/content', 'search' );
                endwhile;

                echo paginate_links( [
                    'prev_text' => esc_html__( 'Prev', 'lowbit' ),
                    'next_text' => esc_html__( 'Next', 'lowbit')
                ] );
            else:
            get_template_part( 'template-parts/page/content', 'none' );
            
         endif; 

         ?>
    </main>
</div>
<?php get_footer(); ?>