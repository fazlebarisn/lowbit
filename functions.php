<?php
/**
 * The function files
 *
 * @package lowbit
 * @since 1.0
 */


if( !function_exists( 'lowbit_theme_support' ) ){

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since lowbit 1.0
     */

    function lowbit_theme_support(){

        /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on Twenty Twenty, use a find and replace
        * to change 'twentytwenty' to the name of your theme in all the template files.
        */
        load_theme_textdomain( 'lowbit', get_template_directory(). '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

       // Custom background color.
       add_theme_support( 'custom-background', apply_filters( 'lowbit_custom_bg_args', array(
           'default-color' => 'ffffff',
           'default-image' => ''
       ) ) ); 

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
                'navigation-widgets',
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // custom logo
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );
    }
}

add_action( 'after_setup_theme', 'lowbit_theme_support' );