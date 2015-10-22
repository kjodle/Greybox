<?php

// Determine whether or not to show page navigation at bottom of index/archive
// Necessary because page navigation is in a styled <div> and should not appear
// on non-paginated pages
function greybox_display_nav() {
	$greybox_num_posts = wp_count_posts()->publish;
	$greybox_posts_per_page = get_option('posts_per_page ');
	if ( $greybox_num_posts > $greybox_posts_per_page) { 
		echo '<div id="posts-nav">' . get_posts_nav_link(' &bull; ','&laquo; Newer Posts','Older Posts;') . '</div>';
	}
}


// Determine whether to display the comments box
function greybox_comment_display() {
	$var = get_comments_number();
	if ( comments_open() || $var > 0 ) {
		comments_template();
	} else { echo '
	<div id="comments">
		<div id="respond">
			<p>' . __( 'Sorry, but comments are closed.', 'greybox' ) . '</p>
		</div>
	</div>';
	}
}


// Display the time
// Included here if we need to change it later
function greybox_date() {
	return get_the_time(get_option('date_format'));
}


// Display publication info as a translatable string in 'content-entry-meta.php'
function greybox_pub() {
	$greybox_author_link = get_author_posts_url( get_the_author_meta( 'ID' ) );
	$greybox_author_href = '<a href="' . $greybox_author_link . '">' . get_the_author() . '</a>';
	echo '<a href="' . get_permalink() . '">';
	printf( __( 'Published on: %1$s by %2$s', 'greybox' ), greybox_date(), $greybox_author_href );
	echo '</a>';
}


// Display category info as a translatable string in 'content-entry-meta.php'
function greybox_cat() {
	$gbcat = get_the_category_list( ', ' );
	printf( __( 'Categorized under: %s', 'greybox'), $gbcat );
}


// Display tags info as a translatable string in 'contenty-entry-meta.php'
function greybox_tags() {
	$tags_array = has_tag();
	if (!empty($tags_array)) { 
		printf( __( 'Tagged with: %s', 'greybox'), get_the_tag_list('', ', ', '' ) );
		} else {
		_e( 'This post has no tags.', 'greybox' );
	}
}


// Display next post link only if a newer post exists
function greybox_next_post_link() {
	$gb_npl = get_next_post_link();
	if ( empty ( $gb_npl ) ) {
		echo '<p>You are reading the newest post.</p>';
	} else {
		echo '<p>Read a newer post:</p>';
		next_post_link();
	}
}


// Display previous post link only if an older post exists
function greybox_prev_post_link() {
	$gb_ppl = get_previous_post_link();
	if ( empty ( $gb_ppl ) ) {
		echo '<p>You are reading the oldest post.</p>';
	} else {
		echo '<p>Read an older post:</p>';
		previous_post_link();
	}
}


// Add a "Read More" box on excerpts
function greybox_read_more() {
	echo '<p class="read-more"><a href="' . get_the_permalink() . '">';
	printf(__( 'Read the complete article&hellip;', 'greybox' ) );
	echo '</a></p>';
}


// Take care of wp_link_pages
function greybox_link_pages() {
	$defaults = array(
		'before'           => '<div id="link-pages">' . __( 'This post has multiple pages:', 'greybox' ),
		'after'            => '</div>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => '&ensp;',
		'nextpagelink'     => __( 'Next page', 'greybox' ),
		'previouspagelink' => __( 'Previous page', 'greybox' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
	wp_link_pages( $defaults );
}


// Clear floats at footer if copyright and developer information are hidden
function greybox_clear_bottom() {
	if ( get_theme_mod( 'gb_display_credits') !== '1' && get_theme_mod( 'gb_display_copyright') !== '1') : echo '<div class="clear"></div>';
	endif;
}


// Print options
function greybox_print_options() {
	if ( get_theme_mod( 'gb_print_copyright' ) == '1' ) {
		echo '<p class="printonly printcopyright">' . 
		get_theme_mod( 'gb_copyright', '<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" id="cc-button" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.' ) . 
		'</p>';
	}
	if ( get_theme_mod( 'gb_print_url' ) == '1' ) {
		echo '<p class="printonly printurl">';
		printf(__( 'Permalink for this article:', 'greybox' ) );
		echo '<br /><span class="printurl-url">' . get_the_permalink() . '<span></p>';
	}
}
