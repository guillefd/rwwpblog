<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Mash_Thirteen
 * @since WP MashThirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<p>Derechos reservados 2014 © - ReWrite - Diseño, desarrollo, cloud hosting y soporte.</p>
			</div>
			<div class="site-info">
				<p><small>Proudly powered by <a href="http://wordpress.org/" title="Semantic Personal Publishing Platform">WordPress</a></small></p>
	    	</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>	
	<script type="text/javascript">
	<?php echo of_get_option('analytics_textarea'); ?>
</script>

<script>var islrsharing = true; var islrsocialcounter = true;</script>
<script src="//cdn.loginradius.com/share/v1/LoginRadius.min.js"></script>
<script>LoginRadius.util.ready(function() { $i = $SS.Interface.horizontal; $SS.Providers.Top = ["Facebook", "Twitter", "GooglePlus"]; $i.sharecounttype='url';$i.size = 32; $i.show("lrsharecontainer");}); </script>
<script>LoginRadius.util.ready(function() { $i = $SS.Interface.horizontal; $SS.Providers.Top = ["Facebook", "Twitter", "GooglePlus"]; $i.sharecounttype='url';$i.size = 16; $i.show("lrsharecontainer-sm");}); </script>

</body>
</html>