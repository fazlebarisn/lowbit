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
        ?>
    </main>
</div>