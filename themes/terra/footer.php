<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<section class="subscription">
		<div class="footer-center">
			<p class="subscribe-description">Want to stay up to date on our project? <br /> Subscribe to our newsletter!</p>
			<?php echo do_shortcode('[contact-form-7 id="108" title="email subscription"]'); ?>
			<div class="subscription-confirmed">
				<h6>Subscription Confirmed!</h6>
				<p>We are embarking on an adventure to create a better future for us all. Glad to have you with us!</p>
			</div><!-- .subscription-confirmed -->
		</div><!-- .footer-center -->
	</section><!-- .subscription -->

	<section class="contact-media">
		<div class="footer-center">

			<nav id="site-navigation" class="footer-navigation" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
			</nav><!-- .footer-navigation -->

			<div class="social-media">
				<i class="fab fa-facebook-square"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-instagram"></i>
			</div><!-- .social-media -->

		</div><!-- .footer-center -->
	</section><!-- .contact-media -->


</footer><!-- #colophon -->
</div><!-- #page -->

</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>

</html>