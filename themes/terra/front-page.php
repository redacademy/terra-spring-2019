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
		</section>
		<!-- Intro What is Aquaponics -->
		<section class="intro-fp">
			<h2 class="intro-fp-h2"><?php echo CFS()->get('fp_intro_text'); ?></h2>
</div>
<div class="fp-ap-info">
	<?php

	$fp_ap_info_loop = CFS()->get('fp_aquaponics_info'); // this is the loop field
	foreach ($fp_ap_info_loop as $fp_ap_info) : ?>
		<div>
			<img class="ap-info-img" src="<?php echo $fp_ap_info['aquaponics_info_image']; ?>" />
			<h3 class="ap-info-h3"> <?php echo $fp_ap_info['aquaponics_info_title']; ?></h3>
			<p class="ap-info-p"> <?php echo $fp_ap_info['aquaponics_info_description']; ?></p>
		</div>
	<?php endforeach; ?>
	</section>

	<section class="roadmap">
		<h2><?php echo CFS()->get('roadmap_title'); ?></h2>


		<?php $fp_roadmaps = CFS()->get('roadmap_loop');
		?>
		<ul class="roadmap-ul">
			<?php foreach ($fp_roadmaps as $fp_roadmap) : ?>
				<li class=roadmap-info>
					<h3 class="roadmap-yr"><?php echo $fp_roadmap['roadmap_year']; ?></h3>
					<p class="roadmap-p"> <?php echo $fp_roadmap['roadmap_info']; ?></p>
				</li>
			<?php endforeach; ?>

		</ul>

	</section>




	<section class="fp-testimonies">
		<h2><?php echo CFS()->get('title_testimonies'); ?></h2>
		<p><?php echo CFS()->get('testimonies_intro'); ?></P>
		<div class="testimony-entries">
			<?php
			$args = array(
				'post_type' => 'testimony',
				'numberposts' => '-1',
			);
			$testimony_posts = get_posts($args);
			?>
			<?php foreach ($testimony_posts as $post) : setup_postdata($post); ?>

				<article class="fp-testimony-content">
					<?php if (has_post_thumbnail()) : ?>
						<h3><?php the_title() ?></h3>
						<p><?php the_content() ?></p>

						<?php the_post_thumbnail('large'); ?>


					<?php endif; ?>
				</article>

			<?php endforeach;
		wp_reset_postdata(); ?>
		</div>

	</section>

	<section class="fp-partners">
		<h2><?php echo CFS()->get('title_partners'); ?></h2>
		<div class="partner-entries">
			<?php
			$args = array(
				'post_type' => 'partner',
				'numberposts' => '-1',
			);
			$partner_posts = get_posts($args);
			?>
			<?php foreach ($partner_posts as $post) : setup_postdata($post); ?>

				<article class="fp-testimony-content">
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('large'); ?>
					<?php endif; ?>
				</article>

			<?php endforeach;
		wp_reset_postdata(); ?>
		</div>

	</section>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>