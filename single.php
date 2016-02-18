<?php get_header(); ?>

<div id="content">

<article>
<!-- Start the loop -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<?php get_template_part( 'formats/content', get_post_format() ); ?>

<!-- End the loop -->
<?php endwhile; ?>
<?php endif; ?>

</article>

</div> <!-- end Content -->

<div id="sidebar">
	<?php get_sidebar(); ?>
</div><!-- end Sidebar -->

<div class="clear"></div>

<?php get_footer(); ?>