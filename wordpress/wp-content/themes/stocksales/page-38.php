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
<div class="wp-block-cover aligncenter"><img width="1024" height="420" class="wp-block-cover__image-background wp-image-42" alt="" src="/wp-content/uploads/2021/09/Hero-A-1024x420.png" data-object-fit="cover" srcset="/wp-content/uploads/2021/09/Hero-A-1024x420.png 1024w, /wp-content/uploads/2021/09/Hero-A-300x123.png 300w, /wp-content/uploads/2021/09/Hero-A-768x315.png 768w, /wp-content/uploads/2021/09/Hero-A.png 1440w" sizes="(max-width: 1024px) 100vw, 1024px"><div class="wp-block-cover__inner-container white-square">
<p class="front-content has-white-background-color has-text-color has-background boxy-mac-float" style="color:#6d3388">Over 60 years of footage, public media, and web content from GBH Boston.

	<button type="explore" value="Explore our media"><a style="color: #fff" href="/featured-clips">Explore our media</a></button>
</p>
</div></div>

<p class="grey-front-p has-background"> GBH represents the New Jersey Network Archive and Vulcan Collection for licensing.
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
	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"color":{"background":"#f0f2f2"}},"className":"front-grey-background"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top front-grey-background has-background" style="background-color:#f0f2f2"><!-- wp:column {"className":"front-column-circle"} -->
	<div class="wp-block-column front-column-circle"><!-- wp:image {"align":"center","id":87,"sizeSlug":"full","linkDestination":"none","className":"purple-circle"} -->
	<figure class="wp-block-image aligncenter size-full purple-circle"><img src="/wp-content/uploads/2021/09/Find_Media.png" alt="" class="wp-image-87"/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="has-text-align-center" id="explore-our-media"><a href="/find-media/">Explore our media <span class="annoying-triangle">►</span></a></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center under-circle">Find the perfect clip for your project.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"className":"front-column-circle"} -->
	<div class="wp-block-column front-column-circle"><!-- wp:image {"align":"center","id":86,"width":321,"height":321,"sizeSlug":"full","linkDestination":"none","className":"purple-circle"} -->
	<figure class="wp-block-image aligncenter size-full is-resized purple-circle"><img src="/wp-content/uploads/2021/09/Licensing.png" alt="" class="wp-image-86" width="321" height="321"/></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="has-text-align-center" id="license-content-from-gbh-archives"><a href="/licensing/">License content from GBH Archives <span class="annoying-triangle">►</span></a></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center under-circle">Find out how we can help you get the footage you need.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:paragraph -->
<?php
get_sidebar();
get_footer();
	?>
