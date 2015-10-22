<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<script>
	jQuery(document).ready(function(){
		jQuery('ul#menu-main-menu').superfish();
	});
	</script>
	<style type="text/css" media="screen">
		<?php echo get_theme_mod( 'gb_ccss' ); ?>
	</style>
</head>

<body <?php body_class(); ?> >

<div id="container">
	<?php do_action( 'greybox_before_header' ); ?>
	<header>
	<div id="aboveheadernav">
		<?php wp_nav_menu( array(
			'theme_location' => 'above-header-menu',
			'fallback_cb' => '',
			'menu_class' => 'sf-menu',
			'menu_id' => 'aboveheadermenu',
			'container' => 'false',
			'depth' => 1
			) );
		?>
	<div class="clear"></div>
	</div>
	<div id="header" style="background-image: url('<?php header_image(); ?>');">
		<?php if (is_front_page()){
			echo '<h1>' . get_option('blogname') . '</h1>';
		} else { ?>
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<?php 
			}
		?>
		<?php do_action( 'greybox_before_tagline' ); ?>
		<h2><?php bloginfo( 'description' ); ?></h2>
		<?php do_action( 'greybox_after_tagline' ); ?>
	</div>
	<div id="belowheadernav">
		<?php wp_nav_menu( array(
			'theme_location' => 'below-header-menu',
			'fallback_cb' => '',
			'menu_class' => 'sf-menu',
			'menu_id' => 'belowheadermenu',
			'container' => 'false',
			'depth' => 3
			) );
		?>
	<div class="clear"></div>
	</div>
	</header>
	<?php do_action( 'greybox_after_header' ); ?>

