<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package lowbit
 * @since 1.0
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
            // display the post
            if( have_posts() ):
                while( have_posts() ):
                    the_post();
                    get_template_part( 'template-parts/post/content' );
                endwhile;
                echo paginate_links( [
                    'prev_text' => esc_html__( 'Prev', 'lowbit' ),
                    'next_text' => esc_html__( 'Next', 'lowbit')
                ] );
            else:
                get_template_part( 'template-parts/page/content', 'none' );
            endif;  
            // display sidebar
            get_sidebar(); 
        ?>
    </main>
</div>
<?php get_footer(); ?>

    
