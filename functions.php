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

        // load theme textdomain
        load_theme_textdomain( 'lowbit', get_template_directory(). '/languages' );

        // add default comment andd RSS feed links to head
        add_theme_support( 'automatic-feed-links' );

        // let wordpress manage the document tag
        add_theme_support( 'title-tag' );

        // enabel post thumbnail
        add_theme_support( 'post-thumbnails' );

       // custom background
       add_theme_support( 'custom-background', apply_filters( 'lowbit_custom_bg_args', array(
           'default-color' => 'ffffff',
           'default-image' => ''
       ) ) ); 

        // himl5 support
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );
       
    }
}

add_action( 'after_setup_theme', 'lowbit_theme_support' );