<?php
// Add some Customizer stuff
// developer.wordpress.org/themes/advanced-topics/customizer-api/
add_action( 'customize_register', 'greybox_customize_register', 11 );
function greybox_customize_register( $wp_customize ) {

$wp_customize->add_panel( 'greybox', array(
	'title' => __( 'GreyBox Theme Options', 'greybox' ),
	'description' => __( 'Options for the GreyBox Theme', 'greybox' ),
	'priority' => 05, 
) );


// Widget Areas
	$wp_customize->add_section( 'greybox_widget_areas', array(
		'title'          => __( 'Widget Areas', 'greybox' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 30,
		'description'    => __( 'Select which action hook widget areas you would like to activate. (* denotes styled widget areas)', 'greybox' ),
		'panel' => 'greybox',
	) );


	$wp_customize->add_setting( 'gb_before_header', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_before_header', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_before_header',
		'type'     => 'checkbox',
		'label'    => __( 'Before Header*', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_after_header', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_after_header', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_after_header',
		'type'     => 'checkbox',
		'label'    => __( 'After Header*', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_before_tagline', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_before_tagline', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_before_tagline',
		'type'     => 'checkbox',
		'label'    => __( 'Before Tagline', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_after_tagline', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_after_tagline', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_after_tagline',
		'type'     => 'checkbox',
		'label'    => __( 'After Tagline', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_before_post_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_before_post_title', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_before_post_title',
		'type'     => 'checkbox',
		'label'    => __( 'Before Post Title', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_before_post_content', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_before_post_content', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_before_post_content',
		'type'     => 'checkbox',
		'label'    => __( 'Before Post Content', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_post_top', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_post_top', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_post_top',
		'type'     => 'checkbox',
		'label'    => __( 'Top of Post', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_post_bottom', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_post_bottom', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_post_bottom',
		'type'     => 'checkbox',
		'label'    => __( 'Bottom of Post', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_after_post_content', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_after_post_content', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_after_post_content',
		'type'     => 'checkbox',
		'label'    => __( 'After Post Content', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_before_post_meta', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_before_post_meta', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_before_post_meta',
		'type'     => 'checkbox',
		'label'    => __( 'Before Post Meta*', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_after_post_meta', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_after_post_meta', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_after_post_meta',
		'type'     => 'checkbox',
		'label'    => __( 'After Post Meta*', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_before_comments', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_before_comments', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_before_comments',
		'type'     => 'checkbox',
		'label'    => __( 'Before Comments*', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_after_comments', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_after_comments', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_after_comments',
		'type'     => 'checkbox',
		'label'    => __( 'After Comments*', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_before_comment_form', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_before_comment_form', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_before_comment_form',
		'type'     => 'checkbox',
		'label'    => __( 'Before Comment Form*', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_after_comment_form', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_after_comment_form', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_after_comment_form',
		'type'     => 'checkbox',
		'label'    => __( 'After Comment Form*', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_before_footer', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_before_footer', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_before_footer',
		'type'     => 'checkbox',
		'label'    => __( 'Before Footer', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_footer_top', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_footer_top', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_footer_top',
		'type'     => 'checkbox',
		'label'    => __( 'Top of Footer', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_footer_bottom', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_footer_bottom', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_footer_bottom',
		'type'     => 'checkbox',
		'label'    => __( 'Bottom of Footer', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_after_footer', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_after_footer', array(
		'section'  => 'greybox_widget_areas',
		'settings' => 'gb_after_footer',
		'type'     => 'checkbox',
		'label'    => __( 'Before Footer', 'greybox' ),
	) );


// Post Format Title Options
	$wp_customize->add_section( 'greybox_post_format_title_options', array(
		'title'          => __( 'Post Format Title Options', 'greybox' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 10,
		'description'    => __('Select whether titles should appear for various post formats.', 'greybox'),
		'panel' => 'greybox',
	) );

	$wp_customize->add_setting( 'gb_aside_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_aside_title', array(
		'section'  => 'greybox_post_format_title_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display title for asides', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_link_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_link_title', array(
		'section'  => 'greybox_post_format_title_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display title for links', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_quote_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_quote_title', array(
		'section'  => 'greybox_post_format_title_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display title for quotes', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_status_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_status_title', array(
		'section'  => 'greybox_post_format_title_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display title for statuses', 'greybox' ),
	) );


// Post Format Excerpt Options
	$wp_customize->add_section( 'greybox_post_format_excerpt_options', array(
		'title'          => __( 'Post Format Excerpt Options', 'greybox' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 20,
		'description'    => __('By default, the aside, link, quote, and statu post format will display full content on the home page. You can choose to show excerpts instead.', 'greybox'),
		'panel' => 'greybox',
	) );

	$wp_customize->add_setting( 'gb_aside_excerpt', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_aside_excerpt', array(
		'section'  => 'greybox_post_format_excerpt_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display excerpt for asides', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_link_excerpt', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_link_excerpt', array(
		'section'  => 'greybox_post_format_excerpt_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display excerpt for links', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_quote_excerpt', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_quote_excerpt', array(
		'section'  => 'greybox_post_format_excerpt_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display excerpt for quotes', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_status_excerpt', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_status_excerpt', array(
		'section'  => 'greybox_post_format_excerpt_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display excerpt for statuses', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_readmore', array(
		'type'               => 'theme_mod',
		'transport'          => 'postMessage',
		'default'            => __( '&hellip;read more&hellip', 'greybox' ),
		'sanitize_callback'  => 'greybox_sanitize_text',
	) );

	$wp_customize->add_control( 'gb_readmore', array(
		'section'     => 'greybox_post_format_excerpt_options',
		'type'        => 'text',
		'label'       => __( 'Text for &lsquo;read more&rsquo; link', 'greybox'),
	) );


// Copyright Information
	$wp_customize->add_section( 'greybox_copyright', array(
		'title'          => __( 'Copyright Information', 'greybox' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 50,
		'description'    => __( 'Copyright information will appear in the footer, and at the bottom of printed pages. (Make sure you have not disabled this function under "Miscellaneous Options")', 'greybox' ),
		'panel'          => 'greybox',
	) );

	$wp_customize->add_setting( 'gb_copyright', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_text',
	) );

$default_copyright = '<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" id="cc-button" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.';

	$wp_customize->add_control( 'gb_copyright', array(
		'section'  => 'greybox_copyright',
		'settings' => 'gb_copyright',
		'default'  => $default_copyright,
		'type'     => 'textarea',
		'label'    => __( 'Enter your copyright information. (HTML is allowed.)', 'greybox' ),
	) );


// Custom CSS Information
	$wp_customize->add_section( 'greybox_custom_css', array(
		'title'          => __( 'Custom CSS', 'greybox' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 60,
		'description'    => __( 'Custom CSS is appended to the &lt;head&gt; of your document. If you need to enter more than a few lines, use a child theme.', 'greybox' ),
		'panel'          => 'greybox',
	) );

	$wp_customize->add_setting( 'gb_ccss', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_text',
	) );


	$wp_customize->add_control( 'gb_ccss', array(
		'section'  => 'greybox_custom_css',
		'settings' => 'gb_ccss',
		'default'  => '',
		'type'     => 'textarea',
		'label'    => __( 'Enter custom CSS here', 'greybox' ),
	) );


// Print Options
	$wp_customize->add_section( 'greybox_print', array (
		'title'          => __( 'Print Options', 'greybox' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 40,
		'panel'          => 'greybox',
	) );

	$wp_customize->add_setting( 'gb_print_copyright', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_print_copyright', array(
		'section'      => 'greybox_print',
		'settings'     => 'gb_print_copyright',
		'type'         => 'checkbox',
		'label'        => __( 'Print copyright information at end of post', 'greybox' ),
	) );

	$wp_customize->add_setting( 'gb_print_url', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_print_url', array(
		'section'      => 'greybox_print',
		'settings'     => 'gb_print_url',
		'type'         => 'checkbox',
		'label'        => __( 'Print URL information at end of post', 'greybox' ),
	) );


// Miscellaneous Options
	$wp_customize->add_section( 'greybox_misc', array(
		'title'          => __( 'Miscellaneous Options', 'greybox' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 100,
		'panel'          => 'greybox',
	) );

	$wp_customize->add_setting( 'gb_display_copyright', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_display_copyright', array(
		'section'   => 'greybox_misc',
		'settings'  => 'gb_display_copyright',
		'type'      => 'checkbox',
		'default'   => '1',
		'label'     => __( 'Display copyright information in footer', 'greybox' ),
	) );

	$wp_customize->add_setting( 'gb_display_credits', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'gb_display_credits', array(
		'section'   => 'greybox_misc',
		'settings'  => 'gb_display_credits',
		'type'      => 'checkbox',
		'default'   => '1',
		'label'     => __( 'Display developer credits in footer', 'greybox' ),
	) );


	$wp_customize->add_setting( 'gb_excerpt_length', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'greybox_sanitize_excerpt',
	) );

	$wp_customize->add_control( 'gb_excerpt_length', array(
		'section'   => 'greybox_misc',
		'settings'  => 'gb_excerpt_length',
		'type'      => 'text',
		'label'     => __( 'Excerpt length in number of words (maximum = 100)', 'greybox' ),
	) );


}


// Sanitizer Functions

function greybox_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

function greybox_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function greybox_sanitize_excerpt( $input ) {
	$input = absint( $input );
	if ( $input > 100 ) { $input = 100; }
	return $input;
}