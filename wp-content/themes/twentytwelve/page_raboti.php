<link rel='stylesheet' href='/wp-content/themes/twentytwelve/style_raboti.css' />

<?php
/*
Template Name: page_raboti
 */

remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование в полном посте

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>