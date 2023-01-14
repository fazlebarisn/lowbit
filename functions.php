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

        // custom header
        add_theme_support(
            'custom-header',
            array(
                'height'        => 450,
                'width'         => 1600,
                'flex-height'   => true,
                'flex-width'    => true,
                'default-image' => ''
            )
        );

        // Add theme support for post formats
        add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'] );

        // Rrgister menu
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'lowbit' ),
            'footer' => esc_html__( 'Footer', 'lowbit' ),
            'header_action' => esc_html__( 'Header Action', 'lowbit' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'lowbit_theme_support' );

// set theme content width
function lowbit_content_width(){
    $GLOBALS['content_width'] = apply_filters( 'lowbit_content_width', 1170 );
}
add_action( 'after_setup_theme', 'lowbit_content_width', 0 );


// register sidebar
function lowbit_sidebar_registration(){

    register_sidebar( array(

        'name'          => esc_html__( 'Sidebar', 'lowbit' ),
        'id'            => 'default-sidebar',
        'description'   => esc_html__( 'Add widget', 'lowbit' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '<h4>'
    ) );

}
add_action( 'widgets_init', 'lowbit_sidebar_registration' );

// register public script
function lowbit_public_scripts(){

    // Template Main CSS Files
    wp_enqueue_style('lowbit-main', get_template_directory_uri(). '/assets/css/main.css', [], wp_rand(), 'all' );
    wp_enqueue_style('lowbit-variables', get_template_directory_uri(). '/assets/css/variables.css', [], wp_rand(), 'all' );

    // Vendor CSS Files
    wp_enqueue_style('lowbit-bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.min.css', [], wp_rand(), 'all' );
    wp_enqueue_style('lowbit-bootstrap-icons', get_template_directory_uri(). '/assets/vendor/bootstrap-icons/bootstrap-icons.css', [], wp_rand(), 'all' );
    wp_enqueue_style('lowbit-aos', get_template_directory_uri(). '/assets/vendor/aos/aos.css', [], wp_rand(), 'all' );
    wp_enqueue_style('lowbit-glightbox', get_template_directory_uri(). '/assets/vendor/glightbox/css/glightbox.min.css', [], wp_rand(), 'all' );
    wp_enqueue_style('lowbit-swiper', get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.css', [], wp_rand(), 'all' );
    
    //Vendor JS Files 
    wp_enqueue_script('lowbit-bootstrap', get_template_directory_uri(). '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], wp_rand(), true );
    wp_enqueue_script('lowbit-aos', get_template_directory_uri(). '/assets/vendor/aos/aos.js', ['jquery'], wp_rand(), true );
    wp_enqueue_script('lowbit-glightbox', get_template_directory_uri(). '/assets/vendor/glightbox/js/glightbox.min.js', ['jquery'], wp_rand(), true );
    wp_enqueue_script('lowbit-isotope', get_template_directory_uri(). '/assets/vendor/isotope-layout/isotope.pkgd.min.js', ['jquery'], wp_rand(), true );
    wp_enqueue_script('lowbit-swiper', get_template_directory_uri(). '/assets/vendor/swiper/swiper-bundle.min.js', ['jquery'], wp_rand(), true );
    wp_enqueue_script('lowbit-validate', get_template_directory_uri(). '/assets/vendor/php-email-form/validate.js', ['jquery'], wp_rand(), true );

    // Template Main JS File 
    wp_enqueue_script('lowbit-main', get_template_directory_uri(). '/assets/js/main.js', ['jquery'], wp_rand(), true );
  
}
add_action( 'wp_enqueue_scripts', 'lowbit_public_scripts' );

// register admin script
function lowbit_admin_scripts(){

}
add_action( 'admin_enqueue_scripts', 'lowbit_admin_scripts' );