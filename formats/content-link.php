	<!-- Post title info -->
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php // Edit post link, if user is logged in
		if ( is_user_logged_in() ) : edit_post_link('Edit this post', '<p class="edit-post">', '</p>');
		endif;
	?>
	<?php do_action( 'greybox_before_post_title' ); ?>

<?php if ( get_theme_mod( 'gb_link_title') == '1' ) : { ?>
	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<span class="dashicons dashicons-admin-links"></span>
			<?php the_title(); ?>
		</a>
	</h2>
<?php
}
endif;
?>

	<!-- Post content -->
	<?php do_action( 'greybox_before_post_content' ); ?>
	<div class="post-content">
		<?php do_action( 'greybox_post_top' ); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
		<?php do_action( 'greybox_post_bottom' ); ?>
		<?php greybox_print_options() ?>
	</div>
	<?php do_action( 'greybox_after_post_content' ); ?>

	<?php greybox_link_pages(); ?>
	<?php do_action( 'greybox_before_post_meta' ); ?>
	<?php get_template_part( 'inc/content', 'entry-meta' ); ?>
	<?php do_action( 'greybox_after_post_meta' ); ?>
	<?php get_template_part( 'inc/content', 'post-nav' ); ?>
	<?php greybox_comment_display(); ?> 

	</div><!-- end "Entry" -->
