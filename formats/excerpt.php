	<!-- Post title info -->
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php // Edit post link, if user is logged in
		if ( is_user_logged_in() ) :  edit_post_link('Edit this post', '<p class="edit-post">', '</p>');
		endif;
	?>
	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<span class="dashicons dashicons-edit"></span>
			<?php the_title(); ?>
		</a>
	</h2>

	<!-- Post content -->

	<div class="post-content">

		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'thumbnail' );
		} 
		?>

		<?php the_excerpt(); ?>
	<?php // greybox_read_more(); ?>
	<div class="clear"></div>
	</div><!-- end post content -->

	<?php get_template_part( 'inc/excerpt', 'entry-meta' ); ?>

	</div><!-- end "Entry" -->
