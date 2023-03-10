<?php
/**
 * The template for displaying the archive 
 *
 * @package lowbit
 * @since 1.0
 */
    get_header();
?>
<div id="primary" class="content-area">

    <main id="main" class="site-main">
        <?php if( have_posts() ): ?>
            <header class="archive-page-header">
            <?php
                the_archive_title( '<h1 class="archive-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' )
            ?>
            </header>

            <?php
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
            ?>
        <?php endif; ?>

        // Display Sidebar
        <?php get_sidebar(); ?>

    </main>
</div>
<?php get_footer(); ?>