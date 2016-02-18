<?php
/**
 * GreyBox functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage GreyBox
 * @since GreyBox 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @link https://codex.wordpress.org/Content_Width
 *
 * @since GreyBox 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 684;
}

/**
 *
 * Set up our theme defaults
 * Make this overrideable in a child theme
 *
 * @since GreyBox 1.0
 */

if ( ! function_exists( 'greybox_setup' ) ) :
function greybox_setup(){

	//Theme is available for translation
	//Translations are located in the /lang/ directory
	load_theme_textdomain( 'greybox', get_template_directory() . '/lang' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for <title> tag
	// https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	add_theme_support( 'title-tag' );

	// Add theme support for post thumbnails
	// https://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Register our navigation menus
	register_nav_menus(
		array(
			'above-header-menu' => __( 'Above Header Menu',   'greybox' ),
			'below-header-menu' => __( 'Beneath Header Menu', 'greybox' ),
			'footer-menu'       => __( 'Footer Menu',         'greybox' )
		)
	);

	// Add theme support for custom backgrounds
	// https://codex.wordpress.org/Custom_Backgrounds
	$args = array(
		'default-color'          => '000',
		'default-image'          => get_template_directory_uri() . '/images/backgrounds/circles.png',
		'default-repeat'         => 'both',
		'default-attachment'     => 'fixed',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $args );

	// Add theme support for post formats
	// https://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', 
		array( 
			'aside',
			'audio',
			'chat',
			'gallery',
			'image',
			'link',
			'quote',
			'status',
			'video',
		)
	);

	// Add support for editor styles
	// https://codex.wordpress.org/Function_Reference/add_editor_style
	// GreyBox itself does not use custom editor styles, but it is
	// possible to do so in a child theme
//	add_editor_style( 'editor-style.css' );

}
endif; // greybox_setup
add_action( 'after_setup_theme', 'greybox_setup' );



// Register and enqueue our stylesheets and scripts
function greybox_styles() {

	// Main stylesheet
	wp_enqueue_style( 'greyboxscreenstyle', get_template_directory_uri() . '/style.css', array(), '0.3', 'screen' );

	// Mobile stylesheet
	wp_enqueue_style( 'greyboxmobilecss', get_template_directory_uri() . '/styles/mobile.css', array(), '0.3', 'screen and (max-width: 1100px)' );

	// Print stylesheet
	wp_enqueue_style( 'greyboxprintstyle', get_template_directory_uri() . '/styles/print.css', array(), '0.3', 'print' );

	// Menu stylesheet
	wp_enqueue_style( 'greyboxsuperfishcss', get_template_directory_uri() . '/styles/superfish.css', array(), '0.3', 'screen' );

	// JavaScript for menu dropdowns
	// http://users.tpg.com.au/j_birch/plugins/superfish/
	wp_enqueue_script( 'greyboxsuperfishjs', get_template_directory_uri() . '/js/superfish.js');

	// Add Genericons on front end to style post formats
//	wp_enqueue_style ( 'greyboxgenericons', get_stylesheet_uri(), array ( 'dashicons' ), '1.0' );

	// Add Roboto webfont
	wp_enqueue_style( 'googlewebfonts', 'http://fonts.googleapis.com/css?family=Roboto:400,700,700italic,400italic' );

}
add_action( 'wp_enqueue_scripts', 'greybox_styles' );



// Properly print <title> on home page
// codex.wordpress.org/Function_Reference/wp_title#Covering_Homepage
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'greybox' ) . ' &raquo; ' . get_bloginfo( 'name' ) . ': ' . get_bloginfo( 'description' );
	}
	return $title;
}



// Register our single sidebar
// codex.wordpress.org/Function_Reference/register_sidebar
function greybox_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar1', 'greybox' ),
		'id' => 'sidebar1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'greybox' ),
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		)
	);
	register_sidebar( array(
		'name' => __( 'Sidebar2', 'greybox' ),
		'id' => 'sidebar2',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'greybox' ),
		'before_widget' => '<div class="sidebar-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'greybox_widgets_init' );



// Change "read more" link on excerpts
// codex.wordpress.org/Function_Reference/the_excerpt
function greybox_excerpt_more( $more ) {
	$text = get_theme_mod( 'gb_readmore', '&hellip;read more&hellip;' );
	return ' <a class="excerpt-link" href="' . get_permalink( get_the_ID() ) . '">' . $text . '</a>';
}
add_filter( 'excerpt_more', 'greybox_excerpt_more' );


// Change excerpt length
function custom_excerpt_length( $length ) {
	return get_theme_mod( 'gb_excerpt_length', 20 );
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/**
 * Customizer Settings
 *
 * @since GreyBox 1.0
 */
require get_template_directory() . '/functions/customizer.php';


/**
 * Action Hook Widget Areas
 *
 * @since GreyBox 1.0
 */
require get_template_directory() . '/functions/widget-areas.php';


/**
 * Custom Headers
 *
 * @since GreyBox 1.0
 */
require get_template_directory() . '/functions/headers.php';

/**
 * Custom template tags for this theme.
 *
 * @since GreyBox 1.0
 */
require get_template_directory() . '/functions/template-tags.php';
