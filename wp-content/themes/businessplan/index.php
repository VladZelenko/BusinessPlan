<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package businessplan
 */

get_header(); ?>
<div class="col-md-9 col-lg-9">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
		the_posts_pagination(
			$args = array(
			'show_all'     => false, // показаны все страницы участвующие в пагинации
			'end_size'     => 1,     // количество страниц на концах
			'mid_size'     => 1,     // количество страниц вокруг текущей
			'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
			'prev_text'    => __('« Previous'),
			'next_text'    => __('Next »'),
			'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
			'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
			'screen_reader_text' => __( ' ' ),
			));
			?>
		</div>

		<?php
		get_sidebar();
		get_footer();
