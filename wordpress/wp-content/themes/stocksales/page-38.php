<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stock_Sales
 */

get_header();
?>
<div class="wp-block-cover aligncenter"><img width="1024" height="420" class="wp-block-cover__image-background wp-image-42" alt="" src="/wp-content/uploads/2021/09/Hero-A-1024x420.png" data-object-fit="cover" srcset="/wp-content/uploads/2021/09/Hero-A-1024x420.png 1024w, /wp-content/uploads/2021/09/Hero-A-300x123.png 300w, /wp-content/uploads/2021/09/Hero-A-768x315.png 768w, /wp-content/uploads/2021/09/Hero-A.png 1440w" sizes="(max-width: 1024px) 100vw, 1024px"><div class="wp-block-cover__inner-container">
<p class="has-text-align-center front-content has-white-background-color has-text-color has-background boxy-mac-float" style="color:#6d3388">Over 60 years of footage, public media, and web content from GBH Boston.

	<button type="explore" value="Explore our media"><a style="color: #fff" href="/featured-clips">Explore our media</a></button>
</p>
</div></div>

<p class="grey-front-p has-background" style="background-color:#f0f2f2"> <strong>GBH represents the New Jersey Network Archive and Vulcan Collection for licensing.</strong>
	<img loading="lazy" width="997" height="759" class="wp-image-47 front-content-logo" style="width: 54px;" src="/wp-content/uploads/2021/09/NJN_Logo.png" alt="" srcset="/wp-content/uploads/2021/09/NJN_Logo.png 997w, /wp-content/uploads/2021/09/NJN_Logo-300x228.png 300w, /wp-content/uploads/2021/09/NJN_Logo-768x585.png 768w" sizes="(max-width: 997px) 100vw, 997px">
	<img loading="lazy" width="900" height="217" class="wp-image-48 front-content-logo" style="width: 112px;" src="/wp-content/uploads/2021/09/VulcanProductions_logo.png" alt="" srcset="/wp-content/uploads/2021/09/VulcanProductions_logo.png 900w, /wp-content/uploads/2021/09/VulcanProductions_logo-300x72.png 300w, /wp-content/uploads/2021/09/VulcanProductions_logo-768x185.png 768w" sizes="(max-width: 900px) 100vw, 900px">
</p>


	<main id="primary" class="site-main splash">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page38' );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
