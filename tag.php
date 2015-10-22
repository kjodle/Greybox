<?php get_header(); ?>

<div id="content">

<div id="archive-title">
	<h2>
	<?php
		printf( __( 'Posts tagged with: <span>%s</span>', 'greybox' ), single_cat_title( '', false ) );
	?>
	</h2>
	<?php
		$description = tag_description();
	?>
</div>

<!-- Start the loop -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part( 'formats/excerpt', get_post_format() ); ?>

<!-- End the loop -->
<?php endwhile; ?>
<?php endif; ?>

</div> <!-- end Content -->

<div id="sidebar">
	<?php get_sidebar(); ?>
</div><!-- end Sidebar -->
<div class="clear"></div>

<?php get_footer(); ?>