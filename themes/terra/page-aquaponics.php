<?php
/**
 * 
 *
 * @package Terra_Theme
 * 
 * Template Name: Aquaponics
 * 
 * 
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- Hero Banner Section -->

		<div class="hero-banner">
			<?php while (have_posts()) : the_post(); ?>
				<img class="banner-pic" src="<?php echo get_the_post_thumbnail_url(); ?>">
				<h1 class="banner-title"><?php the_title(); ?></h1>
			<?php endwhile;
		?>
		</div>

		<!-- What is Aqua Section -->
		<section class="intro-aqua">
			<div class="what-aqua-text">
				<?php echo CFS()->get('what_is_aquaponics'); ?>
			</div>
			<div class="what-aqua-imgs">
				<img src="<?php echo CFS()->get('what_aqua_image_1'); ?>">
				<img src="<?php echo CFS()->get('what_aqua_image_2'); ?>">
				<img src="<?php echo CFS()->get('what_aqua_image_3'); ?>">
				<img src="<?php echo CFS()->get('what_aqua_image_4'); ?>">
			</div>
		</section>

		<!--  How Aquaponics Works Section	 -->

		<h2 class="how-aqua-h2"> <?php echo CFS()->get('how_aqua_works_title'); ?></h2>

		<section class="how-aqua">
			<?php

			$how_aqua_loop = CFS()->get('how_aquaponics_works_loop'); // this is the loop field
			foreach ($how_aqua_loop as $how_aqua_info) : ?>

				<div class="how-aqua-item">
					<h3 class="how-aqua-h3"> <?php echo $how_aqua_info['how_feature_number']; ?></h3>
					<p class="how-aqua-p"> <?php echo $how_aqua_info['how_feature_info']; ?></p>
				</div>

			<?php endforeach; ?>
			<div class="aqua-animation">
				<?php get_template_part('template-parts/content', 'logo'); ?>
			</div>
			<p class="how-aqua-info"><?php echo CFS()->get('how_feature_info'); ?></p>

		</section>

		<!-- History of Aquaponics Section (WYSISYG) -->

		<section class="history-aqua">

			<div class="hist-content">
				<h2 class="hist-aqua-h2"><?php echo CFS()->get('history_aqua_title'); ?></h2>
				<img class="hist-aqua-img-1" src="<?php echo CFS()->get('history_aqua_image_only'); ?>">
				<?php echo CFS()->get('history_of_aqua_text'); ?>
			</div>
			<div class="hist-image-cont">
				<img class="hist-aqua-img" src="<?php echo CFS()->get('history_aqua_image_only'); ?>">
			</div>

		</section>

		<!-- Benefits of Aquaponics Section -->

		<h2 class="ben-aqua-h2"><?php echo CFS()->get('benefits_of_aqua_section_title'); ?></h2>


		<div class="benefits-aqua">
			<?php

			$benefits_aqua_loop = CFS()->get('benefits_of_aquaponics'); // this is the loop field
			foreach ($benefits_aqua_loop as $ben_aqua_info) : ?>

				<div class="benefit-container">
					<img class="ben-aqua-img" src="<?php echo $ben_aqua_info['benefits_image']; ?>" />
					<h3 class="ben-aqua-h3"><?php echo $ben_aqua_info['benefits_title']; ?></h3>
					<p class="ben-aqua-p"><?php echo $ben_aqua_info['benefits_info']; ?></p>
				</div>

			<?php endforeach; ?>
		</div>

		<!-- Current Tech Section -->
		<h2 class="cur-tech-h2"><?php echo CFS()->get('current_technology_section_title'); ?></h2>
		<div class="current-tech">

			<?php

			$current_tech_loop = CFS()->get('current_tech'); // this is the loop field
			foreach ($current_tech_loop as $cur_tech_info) : ?>
				<div class="cur-tech-container">
					<img class="cur-tech-img" src="<?php echo $cur_tech_info['tech_image']; ?>" />
					<h3 class="cur-tech-h3"><?php echo $cur_tech_info['tech_title']; ?></h3>
					<p class="cur-tech-p"><?php echo $cur_tech_info['tech_info']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>