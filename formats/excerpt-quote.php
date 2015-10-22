	<!-- Post title info -->

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php // Edit post link, if user is logged in
		if ( is_user_logged_in() ) :  edit_post_link('Edit this post', '<p class="edit-post">', '</p>');
		endif;
	?>

<?php if ( get_theme_mod( 'gb_quote_title') == '1' ) { ?>
	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<span class="dashicons dashicons-format-quote"></span>
			<?php the_title(); ?>
		</a>
	</h2>
	<div class="post-content">

<?php } else { ?>
	<div class="post-content">
	<a href="<?php echo get_permalink(); ?>"><span class="dashicons dashicons-format-quote notitle"></span></a>
<?php } ?>

		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'thumbnail' );
		} 
		?>

<?php
	if ( get_theme_mod( 'gb_quote_excerpt' ) == '1' ) {
		the_excerpt();
			} else {
		the_content();
	}
?>

	</div><!-- end post content -->

		<div class="aside-meta">
			<?php
				printf(__( 'Published on %1$s at %2$s', 'greybox'), greybox_date(), get_the_time() );
			?>
		</div>

	</div><!-- end "Entry" -->
