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
    // display the search box
    get_search_form();

    // display the post
    if( have_posts() ):
        while( have_posts() ):
            the_post();
            get_template_part( 'template-parts/post/content' );
        endwhile;
    endif; 

get_footer();

    
