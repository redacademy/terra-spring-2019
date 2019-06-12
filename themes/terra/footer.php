<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-center">
		<div class="site-info">
			<a href="<?php echo esc_url('https://wordpress.org/'); ?>"><?php printf(esc_html('Proudly powered by %s'), 'WordPress'); ?></a>
		</div><!-- .site-info -->

		<section class="subscription">

		</section><!-- .subscription -->

		<section class="contact-media">
			<nav id="site-navigation" class="footer-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php echo esc_html('footer Menu'); ?></button>
				<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
			</nav><!-- #site-navigation -->

			<div class="social-media">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-instagram"></i>
			</div><!-- .social-media -->

		</section><!-- .contact-media -->

	</div><!-- .footer-center -->
</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
	<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
</nav><!-- #site-navigation -->
</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>

</html>