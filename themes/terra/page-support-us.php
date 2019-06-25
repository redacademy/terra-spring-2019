<?php
/**
 * The template for displaying all pages.
 *
 * @package Terra_Theme
 * 
 * Template Name: Support Us Page
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="height-container">
			<div class="hero-banner">
				<?php while (have_posts()) : the_post(); ?>
					<img class="banner-pic" src="<?php echo get_the_post_thumbnail_url(); ?>">
					<h1 class="banner-title"><?php the_title(); ?></h1>
				<?php endwhile;
			?>
			</div>
			<?php while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">' . esc_html('Pages:'),
							'after'  => '</div>',
						));
						?>


						<section class="button-center">
							<p class="fund-me"><?php echo CFS()->get('fund_me_button'); ?></p>
							<button class="fund-btn"><?php echo CFS()->get('fund_me_button_link'); ?></button>
						</section>

					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>