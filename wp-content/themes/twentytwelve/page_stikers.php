<link rel='stylesheet' href='/works/stikers/style.css' />

<?php
/*
Template Name: page_stikers
 */

remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование в полном посте

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
            
            <!-- HelpOnClick -->
<script type='text/javascript'>(function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = '//traffic7.helponclick.com/assist?c=55c5c848-d2f8-4790-9a05-2606a64e71ad';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();</script>
<div style='display:none'><a href='http://www.helponclick.com'>Live Chat Software</a></div>
<!-- /HelpOnClick -->

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>