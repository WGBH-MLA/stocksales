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

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->


	<div class="wp-block-cover is-light license-background"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img loading="lazy" width="1440" height="590" class="wp-block-cover__image-background wp-image-139" alt="" src="/wp-content/uploads/2021/09/Background-A.png" data-object-fit="cover" srcset="/wp-content/uploads/2021/09/Background-A.png 1440w, /wp-content/uploads/2021/09/Background-A-300x123.png 300w, /wp-content/uploads/2021/09/Background-A-1024x420.png 1024w, /wp-content/uploads/2021/09/Background-A-768x315.png 768w" sizes="(max-width: 1440px) 100vw, 1440px"><div class="wp-block-cover__inner-container">
	<p class="has-text-align-center has-large-font-size"></p>
	</div></div>



<?php
get_sidebar();
get_footer();
