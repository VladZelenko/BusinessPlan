<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package businessplan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="intro">
				<div class="container">
					<h2>premium business template</h2>
					<ul class="head-contact">
						<li><a href="tel:8877-8564-222"><i class="fa fa-mobile" aria-hidden="true"></i>asdas</a></li>
						<li><a href="mailto:info@business.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>asdasd</a></li>
					</ul>
				</div>
			</div>

			<div class="head-nav-menu">
				<div class="container">
					<div class="logo">
						<a href="<?php the_permalink(); ?>"></a><?php the_custom_logo(); ?>
					</div>
					<div class="head-menu" id="menu">
						<a href="#" id="touch-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
						<nav>
						<?php
						if( has_nav_menu('menu-1') ){
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'container' => false,
								'menu_class' => 'nav clearfix'
								));
						}
						?>
					</nav>
				</div>
			</div>
		</div>
		<div class="hero">
			<div class="container">

			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">