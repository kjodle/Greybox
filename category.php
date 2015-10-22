<?php get_header(); ?>

<div id="content">

<div id="archive-title">
	<h2>
	<?php
		printf( __( 'Posts contained in the &ldquo;<span>%s</span>&rdquo; category:', 'greybox' ), single_cat_title( '', false ) );
	?>
	</h2>
	<?php
		echo category_description();
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