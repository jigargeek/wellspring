<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wellspring
 */

get_header();
?>
<!-- Banner Start -->
<section class="main-banner inner-banner" style=" background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2023/09/inner-banner01.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="banner-content white-text">
					<h1 class="h1-title arapey-font">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'wellspring' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->

<div class="inner-page-text">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<main id="primary" class="site-main">

					<?php if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

				</main><!-- #main -->
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
