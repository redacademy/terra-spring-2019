<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 * Template Support Us Page
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="hero-banner-support">
			<?php while (have_posts()) : the_post(); ?>
				<img class="banner-support" src="<?php echo get_the_post_thumbnail_url(); ?>">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php endwhile;
		?>
		</div>

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'page'); ?>

		<?php endwhile;
	?>


	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>