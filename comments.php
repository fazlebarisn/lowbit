<?php
/**
 * The template for comments 
 *
 * @package lowbit
 * @since 1.0
 */

 if( post_password_required() ){
     return;
 }

?>

<div id="comments" class="comment-area">

    <?php if( have_comments() ): ?>
        <h2 class="comments-title">
            <?php
                $comments_count = get_comments_number();
                if( 1 == $comments_count ){
                    printf(
                        esc_html__('Comments (1)', 'lowbit' )
                    );
                }else{
                   printf(
                        esc_html__( 'Comments (%1$s)', 'lowbit' ),
                        intval( $comments_count )
                    );
                }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comments-list">
            <?php
                wp_list_comments([
                    'style' => 'ol',
                    'short_ping' => true,
                ]);
            ?>
        </ol>

        <?php
            the_comments_navigation();
            // if the comments are closed, disolay this message
            if( ! comments_open() ){
                printf(
                    '<p class="no-comments">%1$s</p>',
                    esc_html__( 'Comments are closed', 'lowbit' )
                );
            }
        ?>

    <?php endif; 
        // display comments form
        comment_form();
    ?>

</div>