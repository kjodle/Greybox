<?php
/**
 * Template Name: Page No Sidebar
 *
 * @package WordPress
 * @subpackage GreyBox
 * @since GreyBox 1.0
 */
 ?>

<?php get_header(); ?>

<div id="content-no-sidebar">

<article>
<!-- Start the loop -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

	<!-- Page title info -->
	<div class="entry">
	<?php do_action( 'greybox_before_post_title' ); ?>
	<?php // Edit page link, if user is logged in
		if ( is_user_logged_in() ) : edit_post_link('Edit this page', '<p class="edit-post">', '</p>');
		endif;
	?>
	<h1 id="post-<?php the_ID(); ?>" class="post-title"><?php the_title(); ?></h1>

	<!-- Page content -->
	<div class="post-content">
	<?php do_action( 'greybox_before_post_content' ); ?>
		<?php the_content(); ?>
		<div class="clear"></div>
	<?php do_action( 'greybox_after_post_content' ); ?>
	</div>

		<div class="clear"></div>
		<p class="printonly printurl">Link for this article:<br /><span class="printurl-url"><?php the_permalink(); ?><span></p>
	<?php do_action( 'greybox_after_post_meta' ); ?>

	</div><!-- end "Entry" -->

<!-- End the loop -->
<?php endwhile; ?>
<?php endif; ?>

</article>

</div> <!-- end Content -->

<div class="clear"></div>
<?php get_footer(); ?>