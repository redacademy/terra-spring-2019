<?php
/**
 * The template for displaying all pages.
 *
 * @package Terra_Theme
 * 
 * Template Name: Project
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

		<div class="entry-content whats-terra">
			<?php the_content(); ?>

		</div><!-- .entry-content -->



		<!-- Lack of Awareness Section NOTE: need to hardcode background image unless we want CSF -->
		<section class="lack-aware-sect">
			<div class="lack-aware-container">
				<h2 class="lack-aware-h2"><?php echo CFS()->get('lack_of_awareness_blurb'); ?></h2>
			</div><!-- .lack-aware-container -->

			<div class="lack-aware-cards">
				<?php

				$lack_awareness_loop = CFS()->get('lack_of_awareness_loop'); // this is the loop field
				foreach ($lack_awareness_loop as $lack_aware_info) : ?>
					<div class="lack-aw-item-wraps">
						<img class="lack-aw-img" src="<?php echo $lack_aware_info['lack_of_awareness_image']; ?>" />
						<div class="lack-aw-dc-wrap">
							<h3 class="lack-aw-h3"> <?php echo $lack_aware_info['lack_of_awareness_title']; ?></h3>
							<p class="lack-aw-p"> <?php echo $lack_aware_info['lack_of_awareness_info']; ?></p>
						</div><!-- .lack-aw-dc-wrap -->
					</div><!-- .lack-aw-item-wraps -->

				<?php endforeach; ?>
			</div><!-- .lack-aware-cards -->

		</section>

		<!-- Who We Are  -->
		<section class="who-we-are">

			<h2><?php echo CFS()->get('who_we_are_title'); ?></h2>

			<div class="team-members">
				<?php
				$args = array(
					'post_type' => 'member',
					'numberposts' => '-1',
				);
				$member_posts = get_posts($args);
				?>
				<?php foreach ($member_posts as $post) : setup_postdata($post); ?>

					<article class="team-member">

						<div class="member-photo"><?php the_post_thumbnail('large'); ?>
							<a href="#" class="member-detail-arrow"><i class="fas fa-arrow-right"></i></a>
						</div>
						<div class="member-dc-wrapper">
							<h3><?php the_title() ?></h3>
							<p><?php echo CFS()->get('member_position'); ?></p>
						</div>

						<!-- Team member modal window -->
						<div class="team-modal">
							<div class="team-modal__inner">
								<i class="fas fa-times team-modal__close-btn"></i>

								<div class="team-modal__left-col">
									<img class="team-modal__img" src="<?php echo get_the_post_thumbnail_url(); ?>" />
									<div class="team-modal__text-wrap">
										<h3 class="team-modal__title"><?php the_title() ?></h3>
										<p class="team-modal__subtitle"><?php echo CFS()->get('member_position'); ?></p>
									</div>
								</div>
								<div class="team-modal__right-col">
									<div class="team-modal__description">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						</div><!-- .team-modal -->



					</article>

				<?php endforeach;
			wp_reset_postdata(); ?>
			</div><!-- .team-members -->

		</section>


		<!-- Our Partners Section NOTE: IS IT OK TO LEAVE SAME CLASSES AS ON FP?-->
		<section class="fp-partners project-partners">
			<h2><?php echo CFS()->get('our_partners_title'); ?></h2>
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


		<!-- Source Of Funds Section -->
		<section class="source-funds">

			<h2><?php echo CFS()->get('source_of_funds_title'); ?></h2>
			<div class="sf-wrapper">
				<h3 class="phase-1"><?php echo CFS()->get('1st_phase_title'); ?></h3>
				<h3 class="phase-2"><?php echo CFS()->get('2nd_phase_title'); ?></h3>

				<div class="seed-round">
					<h3 class="seed-rnd-h3"><?php echo CFS()->get('seed_round_title'); ?></h3>
					<div class="seed-p-wrapper">
						<p class="seed-p-left"><?php echo CFS()->get('text_left'); ?></p>
						<p class="seed-p-right"><?php echo CFS()->get('text_right'); ?></p>
					</div>
					<ol class="seed-items">
						<li class="seed-item1"><?php echo CFS()->get('seed_round_item_1'); ?></li>
						<li class="seed-item2"><?php echo CFS()->get('seed_round_item_2'); ?></li>
						<li class="seed-item3"><?php echo CFS()->get('seed_round_item_3'); ?></li>
						<li class="seed-item4"><?php echo CFS()->get('seed_round_item_4'); ?></li>
						<li class="seed-item5"><?php echo CFS()->get('seed_round_item_5'); ?></li>
					</ol>
				</div>

				<div class="series-round">
					<h3 class="series-rnd-h3"><?php echo CFS()->get('series_round_title'); ?></h3>
					<div class="series-p-wrapper">
						<p class="series-p-left"><?php echo CFS()->get('series_round_text_left'); ?></p>
						<p class="series-p-middle"><?php echo CFS()->get('series_round_text_middle'); ?></p>
						<p class="series-p-right"><?php echo CFS()->get('series_round_text_right'); ?></p>
					</div>
					<ol class="series-items">
						<li class="series-item1"><?php echo CFS()->get('series_round_item_1'); ?></li>
						<li class="series-item2"><?php echo CFS()->get('series_round_item_2'); ?></li>
						<li class="series-item3"><?php echo CFS()->get('series_round_item_3'); ?></li>
						<li class="series-item4"><?php echo CFS()->get('series_round_item_4'); ?></li>
					</ol>
				</div>
			</div>
		</section>


		<!-- White Paper Section -->
		<section class="white-paper">
			<h2 class="wh-paper-h3"><?php echo CFS()->get('white_paper_title'); ?></h2>
			<button class="wh-paper-btn"><?php echo CFS()->get('white_paper_link'); ?> &nbsp; <i class="fas fa-download"></i></button>

		</section>


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>