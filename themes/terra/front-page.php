<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 * 
 * Template Name: Front Page
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'page'); ?>

		<?php endwhile;
	?>
		<section class="fp-banner">
			<h2><?php echo CFS()->get('fp_banner_text'); ?></h2>
			<img src="<?php echo CFS()->get('fp_banner_image'); ?>" />
		</section>
		<div class="intro-fp">
			<?php echo CFS()->get('fp_intro_text'); ?> </div>
		<div class="fp-ap-info">
			<?php

			$fp_ap_info_loop = CFS()->get('fp_aquaponics_info'); // this is the loop field
			foreach ($fp_ap_info_loop as $fp_ap_info) : ?>
				<div>
					<img src="<?php echo $fp_ap_info['aquaponics_info_image']; ?>" />
					<?php echo $fp_ap_info['aquaponics_info_title']; ?>
					<?php echo $fp_ap_info['aquaponics_info_description']; ?>
				</div>
			<?php endforeach; ?>
		</div>




	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>