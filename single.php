<?php
/**
 * The template for displaying the single post
 *
 * @package lowbit
 * @since 1.0
 */
    get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
            while( have_posts() ):
                the_post();
                get_template_part( 'template-parts/post/content' );
            endwhile;

            // if have comment then disply them
            if( comments_open() || get_comments_number() ): 
                comments_template();
            endif;
        ?>
    </main>
    <?php get_sidebar() ?>
</div>

<?php get_footer(); ?>