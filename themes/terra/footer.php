<?php
/**
 * The template for displaying the footer.
 *
 * @package Terra_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<section class="subscription-area">
		<div class="footer-center">
			<div class="subscription-form">
				<p class="subscribe-description">Want to stay up to date on our project? <br /> Subscribe to our newsletter!</p>
				<?php echo do_shortcode('[contact-form-7 id="108" title="email html_class="subscription-input"]'); ?>
			</div>
			<div class="sub-confirm-section">
				<h4>Subscription Confirmed!</h4>
				<p class="sub-confirm-msg">We are embarking on an adventure to create a better future for us all. Glad to have you with us!</p>
			</div>
		</div><!-- .footer-center -->
	</section><!-- .subscription -->

	<section class="contact-media">
		<div class="contact-media-center">

			<nav id="footer-navigation" class="footer-navigation" role="navigation">
				<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
			</nav><!-- .footer-navigation -->


			<section class="social-media">
			<a href="<?php $facebook = CFS()->get('facebook_link', 13); echo $facebook['url']; ?>"> <i class="fab fa-facebook-square"></i> </a>
			<a href="<?php $twitter = CFS()->get('twitter_link', 13); echo $twitter['url']?>"> <i class="fab fa-twitter"></i></a>
			<a href="<?php $instagram = CFS()->get('instagram_link', 13); echo $instagram['url'] ?>"> <i class="fab fa-instagram"></i></a>
		</section>

		</div><!-- .footer-center -->
	</section><!-- .contact-media -->


</footer><!-- #colophon -->
</div><!-- #page -->

</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

</body>

</html>