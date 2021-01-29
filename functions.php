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


		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'khro_setup' );

//Enqueue scripts and styles.
function khro_scripts() {

	wp_enqueue_script( 'khro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'khro_scripts' );

//shorthand necessary theme files
$themeDir = get_template_directory();


