<?php get_header(); ?>

<div id="content">

	<!-- Post title info -->
	<div class="post" >
	<h2 id="post-<?php the_ID(); ?>" class="post-title">
		<?php _e( '404: We can\'t find that page', 'greybox' ); ?>
	</h2>

	<!-- Post content -->
	<div class="post-content">
		<p>
			<?php
				_e( 'Sorry, that page or post doesn\'t appear to be here. It may have been deleted, moved, or at the other end of an outdated link.', 'greybox' );
			?>
		</p>
		<p>
			<?php
				_e( 'You can use the menus, categories, or tags to find what you are looking for. You can also use the search form below.', 'greybox' );
			?>
		</p>
		<p id="404search">
			<?php
				get_search_form();
			?>
		</p>
	</div>

	</div><!-- end "Entry" -->

</div> <!-- end Content -->

<div id="sidebar">
	<?php get_sidebar(); ?>
</div><!-- end Sidebar -->
<div class="clear"></div>

<?php get_footer(); ?>