<?php 

// Our action hook widget areas -- only display them if active

// Header action hooks

if ( get_theme_mod( 'gb_before_header') == '1' ) :
add_action('greybox_before_header', 'greybox_before_header_fc' );
function greybox_before_header_fc(){
	if ( is_active_sidebar( 'greybox_before_header' ) ) {
	echo '<div id="greybox_before_header" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_before_header' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_after_header') == '1' ) :
add_action('greybox_after_header', 'greybox_after_header_fc' );
function greybox_after_header_fc() {
	if ( is_active_sidebar( 'greybox_after_header' ) ) {
	echo '<div id="greybox_after_header" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_after_header' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_before_tagline') == '1' ) :
add_action('greybox_before_tagline', 'greybox_before_tagline_fc' );
function greybox_before_tagline_fc() {
	if ( is_active_sidebar( 'greybox_before_tagline' ) ) {
	echo '<div id="greybox_before_tagline" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_before_tagline' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_after_tagline') == '1' ) :
add_action('greybox_after_tagline', 'greybox_after_tagline_fc' );
function greybox_after_tagline_fc() {
	if ( is_active_sidebar( 'greybox_after_tagline' ) ) {
	echo '<div id="greybox_after_tagline" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_after_tagline' );
	echo '</div>';
	}
}
endif;



// Single action hooks

if ( get_theme_mod( 'gb_before_post_title') == '1' ) :
add_action('greybox_before_post_title', 'greybox_before_post_title_fc' );
function greybox_before_post_title_fc() {
	if ( is_active_sidebar( 'greybox_before_post_title' ) ) {
	echo '<div id="greybox_before_post_title" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_before_post_title' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_before_post_content') == '1' ) :
add_action('greybox_before_post_content', 'greybox_before_post_content_fc' );
function greybox_before_post_content_fc() {
	if ( is_active_sidebar( 'greybox_before_post_content' ) ) {
	echo '<div id="greybox_before_post_content" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_before_post_content' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_post_top') == '1' ) :
add_action('greybox_post_top', 'greybox_post_top_fc' );
function greybox_post_top_fc() {
	if ( is_active_sidebar( 'greybox_post_top' ) ) {
	echo '<div id="greybox_post_top" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_post_top' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_post_bottom') == '1' ) :
add_action('greybox_post_bottom', 'greybox_post_bottom_fc' );
function greybox_post_bottom_fc() {
	if ( is_active_sidebar( 'greybox_post_bottom' ) ) {
	echo '<div id="greybox_post_bottom" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_post_bottom' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_after_post_content') == '1' ) :
add_action('greybox_after_post_content', 'greybox_after_post_content_fc' );
function greybox_after_post_content_fc() {
	if ( is_active_sidebar( 'greybox_after_post_content' ) ) {
	echo '<div id="greybox_after_post_content" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_after_post_content' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_before_post_meta') == '1' ) :
add_action('greybox_before_post_meta', 'greybox_before_post_meta_fc' );
function greybox_before_post_meta_fc() {
	if ( is_active_sidebar( 'greybox_before_post_meta' ) ) {
	echo '<div id="greybox_before_post_meta" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_before_post_meta' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_after_post_meta') == '1' ) :
add_action('greybox_after_post_meta', 'greybox_after_post_meta_fc' );
function greybox_after_post_meta_fc() {
	if ( is_active_sidebar( 'greybox_after_post_meta' ) ) {
	echo '<div id="greybox_after_post_meta" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_after_post_meta' );
	echo '</div>';
	}
}
endif;



// Comments action hooks

if ( get_theme_mod( 'gb_before_comments') == '1' ) :
add_action('greybox_before_comments', 'greybox_before_comments_fc' );
function greybox_before_comments_fc() {
	if ( is_active_sidebar( 'greybox_before_comments' ) ) {
	echo '<div id="greybox_before_comments" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_before_comments' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_after_comments') == '1' ) :
add_action('greybox_after_comments', 'greybox_after_comments_fc' );
function greybox_after_comments_fc() {
	if ( is_active_sidebar( 'greybox_after_comments' ) ) {
	echo '<div id="greybox_after_comments" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_after_comments' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_before_comment_form') == '1' ) :
add_action('greybox_before_comment_form', 'greybox_before_comment_form_fc' );
function greybox_before_comment_form_fc() {
	if ( is_active_sidebar( 'greybox_before_comment_form' ) ) {
	echo '<div id="greybox_before_comment_form" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_before_comment_form' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_after_comment_form') == '1' ) :
add_action('greybox_after_comment_form', 'greybox_after_comment_form_fc' );
function greybox_after_comment_form_fc() {
	if ( is_active_sidebar( 'greybox_after_comment_form' ) ) {
	echo '<div id="greybox_after_comment_form" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_after_comment_form' );
	echo '</div>';
	}
}
endif;



// Footer action hooks

if ( get_theme_mod( 'gb_before_footer') == '1' ) :
add_action('greybox_before_footer', 'greybox_before_footer_fc' );
function greybox_before_footer_fc() {
	if ( is_active_sidebar( 'greybox_before_footer' ) ) {
	echo '<div id="greybox_before_footer" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_before_footer' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_footer_top') == '1' ) :
add_action('greybox_footer_top', 'greybox_footer_top_fc' );
function greybox_footer_top_fc() {
	if ( is_active_sidebar( 'greybox_footer_top' ) ) {
	echo '<div id="greybox_footer_top" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_footer_top' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_footer_bottom') == '1' ) :
add_action('greybox_footer_bottom', 'greybox_footer_bottom_fc' );
function greybox_footer_bottom_fc() {
	if ( is_active_sidebar( 'greybox_footer_bottom' ) ) {
	echo '<div id="greybox_footer_bottom" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_footer_bottom' );
	echo '</div>';
	}
}
endif;

if ( get_theme_mod( 'gb_after_footer') == '1' ) :
add_action('greybox_after_footer', 'greybox_after_footer_fc' );
function greybox_after_footer_fc() {
	if ( is_active_sidebar( 'greybox_after_footer' ) ) {
	echo '<div id="greybox_after_footer" class="greybox-action-hook">';
	dynamic_sidebar( 'greybox_after_footer' );
	echo '</div>';
	}
}
endif;



// Register our action hooks as widget areas
// codex.wordpress.org/Widgetizing_Themes
function greybox_action_hook_widgets() {
	// Header widget areas
if ( get_theme_mod( 'gb_before_header') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Before Header',
		'id'            => 'greybox_before_header',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages just above the header and the "above header menu" (if you are using one).', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_after_header') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox After Header',
		'id'            => 'greybox_after_header',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages just after the header and the "beneath header menu" (if you are using one).', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_before_tagline') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Before Tagline',
		'id'            => 'greybox_before_tagline',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the tagline.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_after_tagline') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox After Tagline',
		'id'            => 'greybox_after_tagline',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the tagline.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

	// Single post widget areas
if ( get_theme_mod( 'gb_before_post_title') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Before Post Title',
		'id'            => 'greybox_before_post_title',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the title.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_post_top') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Top of Post',
		'id'            => 'greybox_post_top',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages at the top of the post content.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_post_bottom') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Bottom of Post',
		'id'            => 'greybox_post_bottom',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages at the bottom of the post content.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_before_post_content') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Before Post Content',
		'id'            => 'greybox_before_post_content',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the post content.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_after_post_content') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox After Post Content',
		'id'            => 'greybox_after_post_content',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the post content.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_before_post_meta') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Before Post Meta',
		'id'            => 'greybox_before_post_meta',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the post meta.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_after_post_meta') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox After Post Meta',
		'id'            => 'greybox_after_post_meta',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the post content.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

	// Comment form widget areas
if ( get_theme_mod( 'gb_before_comments') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Before Comments',
		'id'            => 'greybox_before_comments',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the comments.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_after_comments') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox After Comments',
		'id'            => 'greybox_after_comments',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the comments.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_before_comment_form') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Before Comment Form',
		'id'            => 'greybox_before_comment_form',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the comments form.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_after_comment_form') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox After Comment Form',
		'id'            => 'greybox_after_comment_form',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the comment form.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

	// Footer widget areas
if ( get_theme_mod( 'gb_before_footer') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Before Footer',
		'id'            => 'greybox_before_footer',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages before the footer.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_footer_top') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Footer Top',
		'id'            => 'greybox_footer_top',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages at the top of the footer.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_footer_bottom') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox Footer Bottom',
		'id'            => 'greybox_footer_bottom',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages at the bottom of the footer.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

if ( get_theme_mod( 'gb_after_footer') == '1' ) :
	register_sidebar( array(
		'name'          => 'GreyBox After Footer',
		'id'            => 'greybox_after_footer',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages after the footer.', 'greybox' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
endif;

}
add_action( 'widgets_init', 'greybox_action_hook_widgets' );
