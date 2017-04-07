<?php
/**
 * businessplan Theme Customizer
 *
 * @package businessplan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function businessplan_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


	//****************************BLOG PANELS and SECTIONS****************************************
	$wp_customize->add_panel( 'blog_panel', array(
		'title' => 'Blog page',
		'priority' => 10,
		));
	$wp_customize->add_section( 'header_section' , array(
		'title'      => __( 'Header', 'businessplan' ),
		'priority'   => 10,
		'panel'			 => 'blog_panel',
		));
	$wp_customize->add_section( 'content_section' , array(
		'title'      => __( 'Content', 'businessplan' ),
		'priority'   => 20,
		'panel'			 => 'blog_panel',
		));
	$wp_customize->add_section( 'footer_section' , array(
		'title'      => __( 'Footer', 'businessplan' ),
		'priority'   => 30,
		'panel'			 => 'blog_panel',
		));
	//**********************************************************************************************

	//***************************HEADER*************************************************************
	//

	//nav menu font color
	$wp_customize->add_setting('navmenu_font_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navmenu_font_color', array(
		'label'      => __( 'Menu font color', 'businessplan' ),
		'section'    => 'colors',
		'settings'   => 'navmenu_font_color',
		'priority'	 => '30',
		)));
	//nav menu font color - end

		//nav menu hover font color
	$wp_customize->add_setting('navmenu_hover_font', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navmenu_hover_font', array(
		'label'      => __( 'Menu hover font color', 'businessplan' ),
		'section'    => 'colors',
		'settings'   => 'navmenu_hover_font',
		'priority'	 => '40',
		)));
	//nav menu hover font color - end

	//background top navmenu
	$wp_customize->add_setting('bg_top_navmenu', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_top_navmenu', array(
		'label'      => __( 'Background header menu', 'businessplan' ),
		'section'    => 'colors',
		'settings'   => 'bg_top_navmenu',
		'priority'	 => '50',
		)));
	//background top navmenu - end
	//
	//**************************************************************************************************


	//************************BLOG POSTS***************************************************************
	//
	//background post
	$wp_customize->add_setting('bg_posts', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_posts', array(
		'label'      => __( 'Background posts', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'bg_posts',
		'priority'	 => '10',
		)));
	//background post - end

	//Categoty post color
	$wp_customize->add_setting('category_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_post_color', array(
		'label'      => __( 'Category posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'category_post_color',
		'priority'	 => '20',
		)));
	//Categoty post color - end

	//Title post color
	$wp_customize->add_setting('title_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post_color', array(
		'label'      => __( 'Title posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'title_post_color',
		'priority'	 => '30',
		)));
	//Title post color - end

	//info posts
	$wp_customize->add_setting('info_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_post_color', array(
		'label'      => __( 'Title posts info', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'info_post_color',
		'priority'	 => '40',
		)));
	//info posts - end

	//Date and author post color
	$wp_customize->add_setting('date_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_post_color', array(
		'label'      => __( 'Date posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'date_post_color',
		'priority'	 => '50',
		)));
	//Date post color - end

	//paragraph post color
	$wp_customize->add_setting('p_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p_post_color', array(
		'label'      => __( 'Paragraph posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'p_post_color',
		'priority'	 => '60',
		)));
	//paragraph post color - end

	//color_link, button
	$wp_customize->add_setting('color_link', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_link', array(
		'label'      => __( 'Post bautton color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'color_link',
		'priority'	 => '70',
		)));
	//color_link - end

	//Title socil icons and comments post color
	$wp_customize->add_setting('comments_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comments_post_color', array(
		'label'      => __( 'Comment posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'comments_post_color',
		'priority'	 => '80',
		)));
	//Title socil icons and comments post color - end
	//******************************************************************************************************

	//************************FOOTER*********************************************************************
	//
	//copyright
	$wp_customize->add_setting('copy_right', array( 'default'=> ''));
	$wp_customize->add_control(
		'copy_right',
		array(
			'label'    => __( 'CopyRight', 'businessplus' ),
			'section'  => 'title_tagline',
			'settings' => 'copy_right',
			'type'     => 'textarea',
			));
	//copyright - end

	//copyright font color
	$wp_customize->add_setting('copy_right_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'copy_right_color', array(
		'label'      => __( 'Copy Right color', 'businessplan' ),
		'section'    => 'colors',
		'settings'   => 'copy_right_color',
		'priority'	 => '60',
		)));
	//copyright ont color - end

	//background footer
	$wp_customize->add_setting('footer_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'      => __( 'Background footer', 'businessplan' ),
		'section'    => 'colors',
		'settings'   => 'footer_bg',
		'priority'	 => '70',
		)));
	//background footer - end
	//
	//***********************************************************************************************************


	//*******************************************OTHERS*********************************************************
	//

	//title widgets color
	$wp_customize->add_setting('title_font_wigets', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_font_wigets', array(
		'label'      => __( 'Title font widgets', 'businessplan' ),
		'section'    => 'colors',
		'settings'   => 'title_font_wigets',
		)));
	//title widgets color - end

	//links widgets color
	$wp_customize->add_setting('links_color_wigets', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'links_color_wigets', array(
		'label'      => __( 'Links color widgets', 'businessplan' ),
		'section'    => 'colors',
		'settings'   => 'links_color_wigets',
		)));
	//title widgets - end

	//background title widgets
	$wp_customize->add_setting('title_background_wigets', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_background_wigets', array(
		'label'      => __( 'Title background widgets', 'businessplan' ),
		'section'    => 'colors',
		'settings'   => 'title_background_wigets',
		)));
	//background title widgets - end
	//
	//***********************************************************************************************************
}
add_action( 'customize_register', 'businessplan_customize_register' );
function mytheme_customize_css(){
	?>
	<style type="text/css">

		h2.widget-title {color: <?php echo get_theme_mod('title_font_wigets'); ?>;}
		.widget-area a {color: <?php echo get_theme_mod('links_color_wigets'); ?>;}

		.nav li a, #touch-menu {color: <?php echo get_theme_mod('navmenu_font_color'); ?>;}
		.nav li a:hover, #touch-menu:hover, .nav li:hover, .accent-color a {color: <?php echo get_theme_mod('navmenu_hover_font'); ?>;}

		.post-btn {color: <?php echo get_theme_mod('color_link'); ?>;}
		.post p {color: <?php echo get_theme_mod('p_post_color'); ?>;}
		.post header .info {color: <?php echo get_theme_mod('info_post_color'); ?>;}
		.post header .date a, .post header .author-post a{color: <?php echo get_theme_mod('date_post_color'); ?>;}
		.post header .categoty a {color: <?php echo get_theme_mod('category_post_color'); ?>;}
		.post header .title a {color: <?php echo get_theme_mod('title_post_color'); ?>;}
		.post .post-comments, .post-social {color: <?php echo get_theme_mod('comments_post_color'); ?>;}

		.copy-right {color: <?php echo get_theme_mod('copy_right_color'); ?>;}

		h2.widget-title {background-color: <?php echo get_theme_mod('title_background_wigets'); ?>;}
		.head-nav-menu {background-color: <?php echo get_theme_mod('bg_top_navmenu'); ?>;}
		.site-footer {background-color: <?php echo get_theme_mod('footer_bg'); ?>;}
		.post {background-color: <?php echo get_theme_mod('bg_posts'); ?>;}
	</style>
	<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
//background top navmenu - end

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function businessplan_customize_preview_js() {
	wp_enqueue_script( 'businessplan_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'businessplan_customize_preview_js' );
