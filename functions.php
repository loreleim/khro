<?php
/**
 * khro functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package khro
  */

// Set our theme version.
define( 'GENERATE_VERSION', '0.1.0' );

if ( ! function_exists( 'khro_setup' ) ) :
  //Sets up theme defaults and registers support for various WordPress features.

	function khro_setup() {

    //theme available for translation
		load_theme_textdomain( 'khro', get_template_directory() . '/languages' );

		// adds theme support for various features
    add_theme_support( 'automatic-feed-links' ); //rss
		add_theme_support( 'title-tag' ); //change <title>
    add_theme_support( 'post-thumbnails' ); //ability to add a post thumbnail
    add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption','style','script',)); //Switch default core markup to output valid HTML5.
    add_theme_support( 'customize-selective-refresh-widgets' ); //refresh for widgets i.e. social media

    //custom logo
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
    );

    //enable custom headers
    add_theme_support( 'custom-header', array(
    'header_image'    => '',
    'header-selector' => '.site-title a',
    'header-text'     => false,
    'height'          => 805,
    'width'           => 1350,
    ));
    
    // registers primary menu
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'khro' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'khro_setup' );

//Enqueue scripts and styles.
function khro_scripts() {
	wp_enqueue_style( 'khro-style', get_template_directory_uri() . "/style.css", array(), _S_VERSION );

	wp_enqueue_script( 'khro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'khro_scripts' );

//shorthand necessary theme files
$themeDir = get_template_directory();

require $themeDir . '/inc/custom-header.php';
require $themeDir . '/inc/template-tags.php'; //Custom template tags for this theme.
require $themeDir . '/inc/template-functions.php'; //Functions which enhance the theme by hooking into WordPress.
require $themeDir . '/inc/customizer.php'; //Customizer additions.

//removes the admin bar during development 
add_filter('show_admin_bar', '__return_false');