<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					<h1 class="h1-title arapey-font"><?php the_title(); ?></h1>
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

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wellspring' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wellspring' ) . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
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