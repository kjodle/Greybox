<?php

// Add theme support for custom header
// codex.wordpress.org/Custom_Headers
add_theme_support( 'custom-header' );
$defaults = array(
	'default-image'          => get_template_directory_uri() . '/images/headers/header001.png',
	'width'                  => 984,
	'height'                 => 160,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


// Register default header images
// codex.wordpress.org/register_default_headers
register_default_headers( array(
	'fog' => array(
		'url'           => '%s/images/headers/header001.png',
		'thumbnail_url' => '%s/images/headers/header001tn.png',
		'description'   => __( 'Fog', 'greybox' )
	),
	'greyflame' => array(
		'url'           => '%s/images/headers/header002.png',
		'thumbnail_url' => '%s/images/headers/header002tn.png',
		'description'   => __( 'Greyflame', 'greybox' )
	),
	'plasma' => array(
		'url'           => '%s/images/headers/header003.png',
		'thumbnail_url' => '%s/images/headers/header003tn.png',
		'description'   => __( 'Plasma', 'greybox' )
	),
	'circuit' => array(
		'url'           => '%s/images/headers/header004.png',
		'thumbnail_url' => '%s/images/headers/header004tn.png',
		'description'   => __( 'Circuit', 'greybox' )
	),
	'lava' => array(
		'url'           => '%s/images/headers/header005.png',
		'thumbnail_url' => '%s/images/headers/header005tn.png',
		'description'   => __( 'Lava', 'greybox' )
	),
) );
