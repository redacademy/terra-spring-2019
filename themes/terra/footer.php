<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<<<<<<< HEAD
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<a href="<?php echo esc_url('https://wordpress.org/'); ?>"><?php printf(esc_html('Proudly powered by %s'), 'WordPress'); ?></a>
	</div><!-- .site-info -->
=======
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-center">
					<div class="site-info">
						<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
					</div><!-- .site-info -->

					<nav id="site-navigation" class="footer-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html( 'footer Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->
>>>>>>> ea4547f241241cc695df9ac5be6e8515d26fae53

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
		<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
	</nav><!-- #site-navigation -->
</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>

</html>