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
        
        <section class="fp-testimonies">
            <h2>Testimonies</h2>
            <p>Here at Terra-Mars, we partner up with local restaurants, 
                wholesalers, and foodbanks to provide sustainably grown fish and produce to local communities. 
                Here’s what some of our clients have to say:</P>
			<article class="testimony-entries">
				<?php 
				$args = array(  'post_type' => 'post',
								 'numberposts' => '-1', 
				);
				$testimony = get_posts( $args );
				?>
				<?php foreach ( $testimony_posts as $post ) : setup_postdata( $post ); ?>

				<div class="fp-testimony-content">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a class="testimony-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title()?>">
                                <?php the_post_thumbnail('large'); ?>
                            </a>
                        
                <?php endif; ?>
                        
                        <!-- post author and date -->
                        <div class = "fp-post-meta">
                            <?php echo get_the_date(); ?>
                            <?php echo get_comments_number(); ?> Comments
                        </div>

				</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</article>				
			
		  </section>




	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>