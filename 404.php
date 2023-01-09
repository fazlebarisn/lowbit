<?php
/**
 * The template for displaying the 404 page
 *
 * @package lowbit
 * @since 1.0
 */
    get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="erroe-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Page not found', 'lowbit' ); ?></h1>
            </header>
            <div class="page-content">
                <p><?php esc_html_e('Nothinf found. Search...', 'lowbit' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>
    </main>
    <?php get_sidebar() ?>
</div>

<?php get_footer(); ?>