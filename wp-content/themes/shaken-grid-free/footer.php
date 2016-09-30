<!--=================================
    Footer
================================= -->
<br class="clearfix" />
<div id="footer">
	<p>&copy; <?php echo date('Y'); ?> <span class="alignright">Разработана <a href="http://shakenandstirredweb.com/theme/shaken-grid-free" target="_blank">Shaken Grid Free</a></span><!-- | Русские <a href="http://hostenko.com/themes">WordPress темы</a> — <a href="http://hostenko.com">Hostenko</a>--></p>
    <br class="clearfix" />
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
<?php if (get_option('soy_stats')) : ?><?php echo get_option('soy_stats'); ?><?php endif; ?>
</body>
</html>
