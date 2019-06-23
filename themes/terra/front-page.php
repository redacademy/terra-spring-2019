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
		<!-- Homepage HeroBanner Section -->
        <div class="banner">
            <section class="banner-section">
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail(); ?>

                <?php endwhile;
            ?>
                <h2><?php echo CFS()->get('fp_banner_text'); ?></h2>
            </section>
        </div>
        <div class="banner-extension">

        </div>
        <!-- Intro What is Aquaponics -->
        
        <div class="about-aqua">
		<section class="intro-fp">
			<h2 class="intro-fp-h2"><?php echo CFS()->get('fp_intro_text'); ?></h2>
		</section>
		<section class="fp-ap-info">
			<?php

			$fp_ap_info_loop = CFS()->get('fp_aquaponics_info'); // this is the loop field
			foreach ($fp_ap_info_loop as $fp_ap_info) : ?>
				<div class="fp-ap-container">
					<div class="ap-info-img"><img src="<?php echo $fp_ap_info['aquaponics_info_image']; ?>" /></div>
					<h3 class="ap-info-h3"> <?php echo $fp_ap_info['aquaponics_info_title']; ?></h3>
					<p class="ap-info-p"> <?php echo $fp_ap_info['aquaponics_info_description']; ?></p>
				</div>
            <?php endforeach; ?>
        </section>
        
        <div class="button-center">
                    <a href="<?php echo home_url("aquaponics") ?>">Learn More</a>
         </div>
         </div>
			<!-- Our Mission Section (4 WYSIWIGs)-->
            
			<section class="fp-mission"> 
				<h2><?php echo CFS()->get('our_mission'); ?></h2>
				<div class="fp-miss-item mission-1">
                    <div class="mission-image"><img src="<?php echo CFS()->get('restore_photo'); ?>" /></div>
                    <div class="mission-content"><?php echo CFS()->get('mission_restore'); ?></div>
                </div>
				<div class="fp-miss-item mission-2">
                    <div class="mission-image"><img src="<?php echo CFS()->get('feed_photo'); ?>" /></div>
                    <div class="mission-content"><?php echo CFS()->get('mission_feed'); ?></div>
                </div>
				<div class="fp-miss-item mission-3">
                    <div class="mission-image"><img src="<?php echo CFS()->get('start_photo'); ?>" /></div>
                    <div class="mission-content"><?php echo CFS()->get('mission_start'); ?></div>
                </div>
				<div class="fp-miss-item mission-4">
                    <div class="mission-image"><img src="<?php echo CFS()->get('sustain_photo'); ?>" /></div>
                    <div class="mission-content"><?php echo CFS()->get('mission_sustain'); ?></div>
                </div>
			</section>

			<!-- How we are Getting There Section -->
			<section class="getting-there">
				<?php while (have_posts()) : the_post(); ?>

					<?php get_template_part('template-parts/content', 'page'); ?>

				<?php endwhile;
            ?>
                <div class="button-center">
                    <a href="<?php echo home_url("the-project") ?>">Learn More</a>
                 </div>
			</section>
			<!-- Roadmap Section -->
			<div class="roadmap-container">
				<section class="roadmap">
					<h2><?php echo CFS()->get('roadmap_title'); ?></h2>
					<!-- roadmap left side items -->
					<div class="roadmap-left">
						<?php $fp_roadmaps = CFS()->get('roadmap_loop_left');
						?>
						<ul class="roadmap-ul">
							<?php foreach ($fp_roadmaps as $fp_roadmap) : ?>
								<li class=roadmap-left-info>
									<h3 class="roadmap-yr"><?php echo $fp_roadmap['roadmap_year']; ?></h3>
									<p class="roadmap-p"> <?php echo $fp_roadmap['roadmap_info']; ?></p>
								</li>
							<?php endforeach; ?>

						</ul>
					</div>
					<!-- roadmap right side items -->
					<div class="roadmap-right">
						<?php $fp_roadmaps_right = CFS()->get('roadmap_loop_right');
						?>
						<ul class="roadmap-right-ul">
							<?php foreach ($fp_roadmaps_right as $fp_roadmap_right) : ?>
								<li class=roadmap-right-info>
									<h3 class="roadmap-yr"><?php echo $fp_roadmap_right['roadmap_year_right']; ?></h3>
									<p class="roadmap-p"> <?php echo $fp_roadmap_right['roadmap_info_right']; ?></p>
								</li>
							<?php endforeach; ?>

						</ul>
					</div>
				</section>
			</div>


            <div class="testimony-background">
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

						<article class="fp-testimony">
                            
                            <?php if (has_post_thumbnail()) : ?>
                            
                            
                            <div class="testimony-img">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                            <div class="testimony-content">
								<h3><?php the_title() ?></h3>
								<p><?php the_content() ?></p>
                            </div>
								


							<?php endif; ?>
						</article>

					<?php endforeach;
				wp_reset_postdata(); ?>
				</div>

			</section>
            </div>
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

						<article class="fp-partner-content">
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