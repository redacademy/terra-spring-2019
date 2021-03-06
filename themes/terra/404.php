<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Terra_Theme
 * Template 404 page
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">



			<div class="page-content">

				<div class="page-header">
					<h2 class="page-title"><?php echo esc_html('Oops! That page can&rsquo;t be found.'); ?></h2>
				</div><!-- .page-header -->

				<div class="search-box-content">
					<p><?php echo esc_html(' Maybe try one of the links above'); ?></p>
				</div>


				<div class="four-0-four">
					<p class="first-4">4</p>

					<?php get_template_part('template-parts/content', 'logo'); ?>

					<p class="second-4">4</p>
				</div>





			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>