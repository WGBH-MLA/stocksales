<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stock_Sales
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="big-blue-chunk">
<p>Questions about our footage, our process, our rates, or something else?</p>
<button type="contact" value="Contact Us"><a href="/request-media">Contact Us</a></button>
		</div>
		<img class="footer-logo" src="../wp-content/uploads/2021/08/Archives_rgb_color.png"></img>
		<div class="site-info">
			<h2>Stock Sales & Licensing</h2>
			<p>stock_sales@wgbh.org | 617 300 3939</p>
			<p class="terms"> &copy; <?php echo date('Y'); ?> WGBH Educational Foundation. All rights reserved. | <a class="terms" href="/index.php?page_id=16">Terms & Conditions</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
