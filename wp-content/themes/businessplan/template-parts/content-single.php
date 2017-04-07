<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package businessplan
 */

?>

<div class="blog-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
		<?php the_post_thumbnail(); ?>
		<header>
			<h2 class="title"><?php the_title(); ?></h2>
			<ul class="post-info">
				<li class="info author-post">Posted by: <?php the_author_posts_link() ?></li>
				<li class=" info date">Date: <a href="<?php get_posts(); ?>"><?php the_time('F j Y'); ?></a></li>
			</ul>
		</header>
		<?php the_content('comments'); ?>
	</article>
</div>