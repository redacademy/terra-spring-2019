<?php
/**
 * The header for our theme.
 *
 * @package Terra_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="center-header">
				<div class="site-branding">
					<a href="<?php echo home_url(); ?>"><img src=" <?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt="terra mars brand logo"></a>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation dropdown" role="navigation">


					<button class="hamburger hamburger--arrow-r" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner ">
							</span>
						</span>
					</button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
					<nav class="footer-navigation" role="navigation">
						<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
					</nav><!-- .footer-navigation -->

					<!--   is-active-->
				</nav><!-- #site-navigation -->

			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">