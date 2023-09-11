<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wellspring
 */

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
			<div class="col-lg-12">
				<div class="inner-page-box">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php wellspring_post_thumbnail(); ?>
						<div class="entry-content">
							<?php
							the_content();
							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__('Pages:', 'wellspring'),
									'after'  => '</div>',
								)
							);
							?>
						</div><!-- .entry-content -->

						<?php if (get_edit_post_link()) : ?>
							<footer class="entry-footer">
								<?php
								edit_post_link(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__('Edit <span class="screen-reader-text">%s</span>', 'wellspring'),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post(get_the_title())
									),
									'<span class="edit-link">',
									'</span>'
								);
								?>
							</footer><!-- .entry-footer -->
						<?php endif; ?>
					</article><!-- #post-<?php the_ID(); ?> -->
				</div>
			</div>
		</div>
	</div>
</div>