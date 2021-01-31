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

  <!--Inject Styles-->
  <?php wp_head()?> 
</head>

<body <?php body_class(); ?>>

  <section class="heroContainer">
  	<!--Custom Header-->
    <?php if ( get_header_image() ) : ?>
    <div class="headerImgContainer">
      <img id="test" src="<?php header_image(); ?>"/>
    </div>
  <?php endif; ?>
  </section>
  
  <div id="page" class="site">