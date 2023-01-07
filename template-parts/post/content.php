<?php
/**
 * The default template for displaying content
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
            the_title( '<h2 class="entry-title"><a class="entry-link" href="'.esc_url( get_permalink() ).'">','</a></h2>'); 
        ?>
    </header>
    <?php
        if( has_post_thumbnail() ){
            the_post_thumbnail( 'large' );
        } 
     ?>
     <div class="entry-content">
        <?php the_excerpt() ?>
     </div>
</article>