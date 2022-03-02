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
<header class="entry-header page12-title">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header><!-- .entry-header -->

<div class="wp-block-cover aligncenter">
	<img width="1024" height="420" class="wp-block-cover__image-background wp-image-218" alt="" src="http://localhost/wp-content/uploads/2022/02/Background-B-1024x420.png" style="object-position:10% 10%" data-object-fit="cover" data-object-position="10% 10%"/>
</div>

	<main id="primary" class="site-main splash">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page12' );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
