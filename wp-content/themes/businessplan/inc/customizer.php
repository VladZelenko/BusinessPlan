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



	//+++++++++++++++++++++++++++++++++++++++++GENERAL SETTINGS THEME+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	//
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
		'label'      => __( 'Links font widgets', 'businessplan' ),
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
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



	//++++++++++++++++++++++++++++++++++++++++BLOG PANELS: SECTIONS, SETTINGS AND CONTROL+++++++++++++++++++++++++++++++++++++++
	//
	//
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

	$wp_customize->add_section( 'buttons_section' , array(
		'title'      => __( 'Buttons', 'businessplan' ),
		'priority'   => 30,
		'panel'			 => 'blog_panel',
		));

	$wp_customize->add_section( 'footer_section' , array(
		'title'      => __( 'Footer', 'businessplan' ),
		'priority'   => 40,
		'panel'			 => 'blog_panel',
		));



	//Post button border-size
	$wp_customize->add_setting('post_btn_name', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_name', array(
		'label' => 'Name post button',
		'section' => 'buttons_section',
		'settings'   => 'post_btn_name',
		'type' => 'text',
		'priority' => 1,
		) );
	//Post button border-size - end

	//Post button font size
	$wp_customize->add_setting('post_btn_font_size', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_font_size', array(
		'label' => 'Post button font size',
		'section' => 'buttons_section',
		'settings'   => 'post_btn_font_size',
		'type' => 'number',
		'priority' => 2,
		) );
	//Post button font size - end

	//Post button font weight
	$wp_customize->add_setting('post_btn_font_weight', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_font_weight', array(
		'label' => 'Post button font weight',
		'section' => 'buttons_section',
		'settings'   => 'post_btn_font_weight',
		'type' => 'number',
		'priority' => 3,
		) );
	//Post button font weight - end

	//Post button width
	$wp_customize->add_setting('post_btn_width', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_width', array(
		'label' => 'Width button',
		'section' => 'buttons_section',
		'settings'   => 'post_btn_width',
		'type' => 'number',
		'priority' => 4,
		) );
	//Post button width - end

	//Post button height
	$wp_customize->add_setting('post_btn_height', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_height', array(
		'label' => 'Height button',
		'section' => 'buttons_section',
		'settings'   => 'post_btn_height',
		'type' => 'number',
		'priority' => 5,
		) );
	//Post button height - end

	//Post button border-radius
	$wp_customize->add_setting('post_btn_radius', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_radius', array(
		'label' => 'Border-radius',
		'section' => 'buttons_section',
		'settings'   => 'post_btn_radius',
		'type' => 'number',
		'priority' => 6,
		) );
	//Post button border-radius - end

	//Post button border-size
	$wp_customize->add_setting('post_btn_border_size', array( 'default'=> ''));
	$wp_customize->add_control( 'post_btn_border_size', array(
		'label' => 'Border-size',
		'section' => 'buttons_section',
		'settings'   => 'post_btn_border_size',
		'type' => 'number',
		'priority' => 7,
		) );
	//Post button border-size - end

	//color_link, button
	$wp_customize->add_setting('color_link', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_link', array(
		'label'      => __( 'Bautton font color', 'businessplan' ),
		'section'    => 'buttons_section',
		'settings'   => 'color_link',
		'priority'	 =>  8
		)));
	//color_link - end

	//color_link hover, button
	$wp_customize->add_setting('color_link_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_link_hover', array(
		'label'      => __( 'Bautton font color hover', 'businessplan' ),
		'section'    => 'buttons_section',
		'settings'   => 'color_link_hover',
		'priority'	 =>  9
		)));
	//color_link hover - end

	//Post button background-color
	$wp_customize->add_setting('post_btn_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_btn_bg', array(
		'label'      => __( 'Background-color', 'businessplan' ),
		'section'    => 'buttons_section',
		'settings'   => 'post_btn_bg',
		'priority'	 => 10,
		) ) );
	//Post button background-color - end

	//Post button background-color:hover
	$wp_customize->add_setting('post_btn_bg_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_btn_bg_hover', array(
		'label'      => __( 'Background-color hover', 'businessplan' ),
		'section'    => 'buttons_section',
		'settings'   => 'post_btn_bg_hover',
		'priority'	 => 11,
		) ) );
	//Post button background-color:hover - end

	//Post button border-color
	$wp_customize->add_setting('post_btn_border_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_btn_border_color', array(
		'label'      => __( 'Border-color', 'businessplan' ),
		'section'    => 'buttons_section',
		'settings'   => 'post_btn_border_color',
		'priority'	 => 12,
		) ) );
	//Post button border-size - end

	//border hover link, button
	$wp_customize->add_setting('border_hover', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_hover', array(
		'label'      => __( 'Border-color hover', 'businessplan' ),
		'section'    => 'buttons_section',
		'settings'   => 'border_hover',
		'priority'	 =>  13
		)));
	//border hover link, button - end


	//Title font size
	$wp_customize->add_setting('title_font_size_post', array( 'default'=> ''));
	$wp_customize->add_control( 'title_font_size_post', array(
		'label' => 'Title font size',
		'section' => 'content_section',
		'settings'   => 'title_font_size_post',
		'type' => 'number',
		'priority' => 1,
		) );
	//Title font size - end

	//Paragraph font size
	$wp_customize->add_setting('paragraph_font_size_post', array( 'default'=> ''));
	$wp_customize->add_control( 'paragraph_font_size_post', array(
		'label' => 'Paragraph font size',
		'section' => 'content_section',
		'settings'   => 'paragraph_font_size_post',
		'type' => 'number',
		'priority' => 2,
		) );
	//Paragraph line-height - end

	//Paragraph font size
	$wp_customize->add_setting('paragraph_line_height_post', array( 'default'=> ''));
	$wp_customize->add_control( 'paragraph_line_height_post', array(
		'label' => 'Paragraph line-height',
		'section' => 'content_section',
		'settings'   => 'paragraph_line_height_post',
		'type' => 'number',
		'priority' => 3,
		) );
	//Paragraph line-height - end

	//Title post color
	$wp_customize->add_setting('title_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_post_color', array(
		'label'      => __( 'Title posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'title_post_color',
		'priority'	 => 4,
		)));
	//Title post color - end

	//additional info posts
	$wp_customize->add_setting('info_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_post_color', array(
		'label'      => __( 'Color of additional information', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'info_post_color',
		'priority'	 => 5,
		)));
	//additional info posts - end

	//Date and author post color
	$wp_customize->add_setting('date_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_post_color', array(
		'label'      => __( 'Date, author posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'date_post_color',
		'priority'	 => 6,
		)));
	//Date post color - end

	//paragraph post color
	$wp_customize->add_setting('p_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p_post_color', array(
		'label'      => __( 'Paragraph posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'p_post_color',
		'priority'	 => 7,
		)));
	//paragraph post color - end

	//Title socil icons and comments post color
	$wp_customize->add_setting('comments_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comments_post_color', array(
		'label'      => __( 'Comments posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'comments_post_color',
		'priority'	 => 8,
		)));
	//Title socil icons and comments post color - end

	//Categoty post color
	$wp_customize->add_setting('category_post_color', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_post_color', array(
		'label'      => __( 'Category posts color', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'category_post_color',
		'priority'	 => 9,
		)));
	//Categoty post color - end

	//background post
	$wp_customize->add_setting('bg_posts', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_posts', array(
		'label'      => __( 'Background posts', 'businessplan' ),
		'section'    => 'content_section',
		'settings'   => 'bg_posts',
		'priority'	 => 10,
		)));
	//background post - end



	//background header image
	$wp_customize->add_setting('bg_image_header', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image_header', array(
		'label'      => __( 'Background-image', 'businessplan' ),
		'section'    => 'header_section',
		'settings'   => 'bg_image_header',
		'priority'	 => 1,
		) ) );
	//background header image - end

	//background footer
	$wp_customize->add_setting('header_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg', array(
		'label'      => __( 'Background-color', 'businessplan' ),
		'section'    => 'header_section',
		'settings'   => 'header_bg',
		'priority'	 => 2,
		)));
	//background footer - end

	//footer background image footer
	$wp_customize->add_setting('bg_image_footer', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bg_image_footer', array(
		'label'      => __( 'Background-image', 'businessplan' ),
		'section'    => 'footer_section',
		'settings'   => 'bg_image_footer',
		'priority'	 => 1,
		) ) );
	//footer background image - end

	//background footer
	$wp_customize->add_setting('footer_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'      => __( 'Background-color', 'businessplan' ),
		'section'    => 'footer_section',
		'settings'   => 'footer_bg',
		'priority'	 => 2,
		)));
	//background footer - end
	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	//++++++++++++++++++++++++++++++++++++++++SINGLE POST: SECTIONS, SETTINGS AND CONTROL+++++++++++++++++++++++++++++++++++++++
	//
	//
	$wp_customize->add_panel( 'single_post_panel', array(
		'title' => 'Single post page',
		'priority' => 20,
		));
	$wp_customize->add_section( 'header_single_post' , array(
		'title'      => __( 'Header', 'businessplan' ),
		'priority'   => 10,
		'panel'			 => 'single_post_panel',
		));
	$wp_customize->add_section( 'comments_single_post' , array(
		'title'      => __( 'Comments', 'businessplan' ),
		'priority'   => 20,
		'panel'			 => 'single_post_panel',
		));
	$wp_customize->add_section( 'content_single_post' , array(
		'title'      => __( 'Content', 'businessplan' ),
		'priority'   => 30,
		'panel'			 => 'single_post_panel',
		));
	$wp_customize->add_section( 'footer_single_post' , array(
		'title'      => __( 'Footer', 'businessplan' ),
		'priority'   => 40,
		'panel'			 => 'single_post_panel',
		));

	//background blockquote
	$wp_customize->add_setting('blockquote_bg', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blockquote_bg', array(
		'label'      => __( 'Background blockquote', 'businessplan' ),
		'section'    => 'content_single_post',
		'settings'   => 'blockquote_bg',
		'priority'	 => '10',
		)));
	//background blockquote - end

	//Border-left blockquote
	$wp_customize->add_setting('border_blockquote', array( 'default'=> ''));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_blockquote', array(
		'label'      => __( 'Border blockquote', 'businessplan' ),
		'section'    => 'content_single_post',
		'settings'   => 'border_blockquote',
		'priority'	 => '20',
		)));
	//Border-left blockquote - end
	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	//++++++++++++++++++++++++++++++++++++++++HOME PAGE: SECTIONS, SETTINGS AND CONTROL+++++++++++++++++++++++++++++++++++++++++
	//
	//
	$wp_customize->add_panel( 'home_panel', array(
		'title' => 'Home page',
		'priority' => 30,
		));
	$wp_customize->add_section( 'header_home_page' , array(
		'title'      => __( 'Header', 'businessplan' ),
		'priority'   => 10,
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_section( 'content_home_page' , array(
		'title'      => __( 'Content', 'businessplan' ),
		'priority'   => 20,
		'panel'			 => 'home_panel',
		));
	$wp_customize->add_section( 'footer_home_page' , array(
		'title'      => __( 'Footer', 'businessplan' ),
		'priority'   => 30,
		'panel'			 => 'home_panel',
		));
	//
	//
	//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


}
add_action( 'customize_register', 'businessplan_customize_register' );
function mytheme_customize_css(){
	?>
	<style type="text/css">
		/*-------------------------------------GENERAL SETTINGS THEME-----------------------------------------------------------*/
		.nav li a, #touch-menu {color: <?php echo get_theme_mod('navmenu_font_color'); ?>;}
		.nav li a:hover, #touch-menu:hover, .nav li:hover, .accent-color a {color: <?php echo get_theme_mod('navmenu_hover_font'); ?>;}
		h2.widget-title {color: <?php echo get_theme_mod('title_font_wigets'); ?>;}
		.widget-area a {color: <?php echo get_theme_mod('links_color_wigets'); ?>;}
		h2.widget-title {background-color: <?php echo get_theme_mod('title_background_wigets'); ?>;}
		.head-nav-menu {background-color: <?php echo get_theme_mod('bg_top_navmenu'); ?>;}
		.copy-right {color: <?php echo get_theme_mod('copy_right_color'); ?>;}
		/*-------------------------------------BLOG PANELS----------------------------------------------------------------------*/
		.site-header {
			background-image: url('<?php echo get_theme_mod('bg_image_header'); ?>') ;
			background-color: <?php echo get_theme_mod('header_bg'); ?>;
			background-size: cover;
			width: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		.primary-btn {
			color: <?php echo get_theme_mod('color_link'); ?>;
			font-size: <?php echo get_theme_mod('post_btn_font_size') . 'px'; ?>;
			font-weight: <?php echo get_theme_mod('post_btn_font_weight'); ?>;
			width: <?php echo get_theme_mod('post_btn_width') . 'px'; ?>;
			line-height: <?php echo get_theme_mod('post_btn_height') . 'px'; ?>;
			border-radius: <?php echo get_theme_mod('post_btn_radius') . 'px'; ?>;
			background-color: <?php echo get_theme_mod('post_btn_bg'); ?>;
			border: <?php echo get_theme_mod('post_btn_border_size') . 'px'; ?> solid <?php echo get_theme_mod('post_btn_border_color'); ?>;
		}
		.primary-btn:hover {
			background-color: <?php echo get_theme_mod('post_btn_bg_hover'); ?>;
			color: <?php echo get_theme_mod('color_link_hover'); ?>;
			border-color: <?php echo get_theme_mod('border_hover'); ?>;
		}

		.post p {
			color: <?php echo get_theme_mod('p_post_color'); ?>;
			font-size: <?php echo get_theme_mod('paragraph_font_size_post') . 'px'; ?>;
			line-height: <?php echo get_theme_mod('paragraph_line_height_post') . 'px'; ?>;
		}
		.post header .info {color: <?php echo get_theme_mod('info_post_color'); ?>;}
		.post header .date a, .post header .author-post a{color: <?php echo get_theme_mod('date_post_color'); ?>;}
		.post header .categoty a {color: <?php echo get_theme_mod('category_post_color'); ?>;}
		.post header .title a {
			color: <?php echo get_theme_mod('title_post_color'); ?>;
			font-size: <?php echo get_theme_mod('title_font_size_post') . 'px'; ?>;
		}
		.post .post-comments, .post-social {color: <?php echo get_theme_mod('comments_post_color'); ?>;}
		.post {background-color: <?php echo get_theme_mod('bg_posts'); ?>;}
		.site-footer {
			background-image: url('<?php echo get_theme_mod('bg_image_footer'); ?>') ;
			background-color: <?php echo get_theme_mod('footer_bg'); ?>;
			background-size: cover;
			width: 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
		/*-------------------------------------SINGLE POST PANELS----------------------------------------------------------------*/
		.post blockquote {
			background-color: <?php echo get_theme_mod('blockquote_bg'); ?>;
			border-left: 5px solid <?php echo get_theme_mod('border_blockquote'); ?>;

		}
		/*-------------------------------------HOME PAGE PANELS------------------------------------------------------------------*/
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
