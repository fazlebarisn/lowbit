<?php
/**
 * The default template for displaying page content
 *
 * Used for both singular and index.
 * 
 * @package lowbit
 * @since 1.0
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header">
        <?php 
            the_title('<h1 class="entry-title">', '</h1>');
        ?>
    </header>
    <?php
        if( has_post_thumbnail() ){
            the_post_thumbnail( 'full' );
        } 
     ?>
    <div class="entry-content">
        <?php 
            the_content(); 
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages', 'lowbit' ),
                'after' => '</div>'
            ) );
        ?>
    </div>

    <?php if( get_edit_post_link() ): ?>
        <footer class="entry-footer">
        <?php
            edit_post_link(
                sprintf(
                    wp_kses(
                        __('Edit<span class="screen-reader-text">%s</span>', 'lowbit'),
                        array(
                            'span' => array(
                                'class' => array()
                            ),
                        ),
                    ),
                    get_the_title()
                ),
                '<span class="edit-link"></span>'
            );
        ?>
        </footer>
    <?php endif; ?>

</article>