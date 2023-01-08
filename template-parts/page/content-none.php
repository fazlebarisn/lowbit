<?php
/**
 * The template for not found
 *
 * @package lowbit
 * @since 1.0
 */
    get_header();
?>
<section class="no-results not-found">

    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Nothing Found', 'lowbit') ?></h1>
    </header>

    <div class="page-content">
        <?php
            if( is_home() && current_user_can( 'publish_posts' ) ): 
                printf(
                    '<p>'. wp_kses(
                        __('Ready to publish your first post? <a href="%1$s">Get Stated</a>', 'lowbit'),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ) . '</p>',
                    esc_url( admin_url( 'post-new.php' ) )
                );
            elseif( is_search() ): 
                ?>
                    <p class="search-again"><?php esc_html_e('Search Again', 'lowbit'); ?></p>
                <?php
                get_search_form();

            else: 
                ?>
                    <p><?php esc_html_e('May be try again', 'lowbit' ) ?></p>
                <?php
                get_search_form();
                
            endif;
        ?>
    </div>

</section>

<?php get_footer(); ?>