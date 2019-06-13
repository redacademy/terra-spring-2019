<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 * Template Name: Aquaponics
 * 
 * 
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'page'); ?>

		<?php endwhile;
	?>
		<section class="aqua-banner">
			<h2><?php echo CFS()->get('banner_text'); ?></h2>
			<img src="<?php echo CFS()->get('aqua_banner'); ?>" />
		</section>
		<div class="intro-aqua">
			<?php echo CFS()->get('what_is_aquaponics'); ?>
		</div>
		<div class="how-aqua">
			<?php echo CFS()->get('how_aquaponics_works'); ?>
			<?php echo CFS()->get('how_feature_number'); ?>
			<?php echo CFS()->get('how_feature_info'); ?>
			<img src="<?php echo CFS()->get('how_feature_image'); ?>" />
		</div>
		<div class="benefits-aqua">
			<?php

			$benefits_aqua_loop = CFS()->get('benefits_of_aquaponics'); // this is the loop field
			foreach ($benefits_aqua_loop as $ben_aqua_info) : ?>
				<div>
					<img src="<?php echo $ben_aqua_info['benefits_image']; ?>" />
					<?php echo $ben_aqua_info['benefits_title']; ?>
					<?php echo $ben_aqua_info['benefits_info']; ?>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="current-tech">
			<?php

			$current_tech_loop = CFS()->get('current_tech'); // this is the loop field
			foreach ($current_tech_loop as $cur_tech_info) : ?>
				<div>
					<img src="<?php echo $cur_tech_info['tech_image']; ?>" />
					<?php echo $cur_tech_info['tech_title']; ?>
					<?php echo $cur_tech_info['tech_info']; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>