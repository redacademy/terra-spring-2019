<?php
/**
 * The template for displaying all pages.
 *
 * @package Terra_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="disclaimer-center">
			<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="disclaimer-title"><?php echo the_title(); ?></h1>

						<?php if ('post' === get_post_type()) : ?>
							<div class="entry-meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> / <?php red_starter_posted_by(); ?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile;
		?>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>