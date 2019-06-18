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

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile;
		?>

		</section><!-- .contact-form-border -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>