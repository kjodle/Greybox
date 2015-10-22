<?php do_action( 'greybox_before_footer' ); ?>

<div id="footer">
	<?php do_action( 'greybox_footer_top' ); ?>
	<div id="footernav">
		<?php wp_nav_menu( array(
			'theme_location' => 'footer-menu',
			'fallback_cb' => '',
			'menu_class' => '',
			'menu_id' => 'bottommenu',
			'container' => 'false',
		) ); ?>
	</div>

<?php if ( get_theme_mod( 'gb_display_credits') == '1' ) { ?>
	<p id="developer">
		<?php
			$gb_wp = '<a href="http://wordpress.org/">WordPress</a>';
			$gb_gb = '<a href="http://d12webdesign.com/">Greybox Theme</a>';
			printf(__( 'Powered by %1$s and the %2$s.', 'greybox' ), $gb_wp, $gb_gb )
		?>
	</p>
	<div class="clear"></div>
<?php } ?>

<?php if ( get_theme_mod( 'gb_display_copyright' ) == '1' ) { ?>
	<p id="copyright">
		<?php echo get_theme_mod( 'gb_copyright', '<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" id="cc-button" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.' ); ?>
	</p>
	<div class="clear"></div>
<?php } else ?>

<?php greybox_clear_bottom(); ?>

	<?php do_action( 'greybox_footer_bottom' ); ?>

</div><!-- end Footer -->

<?php do_action( 'greybox_after_footer' ); ?>

	<?php wp_footer(); ?>
</div><!-- end Container -->
</body>
</html>