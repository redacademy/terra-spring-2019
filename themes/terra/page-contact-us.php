<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="contact-form-border">

			<div class="original-form">
				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('template-parts/content', 'page'); ?>

				<?php endwhile;
			?>
			</div>

			<div class="msg-sent-border">
				<div class="msg-sent">
					<h3>Thanks for reaching out!</h3>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/World.png" alt="World">
					<p>We will do our best to get back to you as soon as possible.</p>
					<a href="<?php echo get_home_url(); ?>" class="return-home-btn">Return Home</a>
				</div><!-- .msg-sent -->
			</div><!-- .msg-sent-border -->

		</section><!-- .contact-form-border -->




	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>