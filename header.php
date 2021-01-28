<?php
/**
 * Template for header display
 *
 * @package khro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Prevents access of files
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	
<!--Security and Browser Rules-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<!--Custom Header-->
  <?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">