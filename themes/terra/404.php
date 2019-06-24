<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 * Template 404 page
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">



			<div class="page-content">
				<div class="four0four">
					<p class="phone-404">404</p>
				</div>
				<div class="page-header">
					<h1 class="page-title"><?php echo esc_html('Oops! That page can&rsquo;t be found.'); ?></h1>
				</div><!-- .page-header -->

				<div class="search-box-content">
					<p><?php echo esc_html('It looks like nothing was found at this location. Maybe try one of the links above'); ?></p>
				</div>


				<div class="four-0-four">
					<p class="first-4">4</p>
					<!-- <div class='animation-container'> -->
					<?php get_template_part('template-parts/content', 'logo'); ?>
					<!-- </div> -->
					<p class="second-4">4</p>
				</div>




			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>