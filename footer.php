<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wellspring
 */

?>
<?php
$footer_title = get_field('footer_title', 'option');
$facebook_link = get_field('facebook_link', 'option');
$instagram_link = get_field('instagram_link', 'option');
$email_link = get_field('email_link', 'option');
?>

<!-- Footer Start -->
<footer id="colophon" class="site-footer">
	<div class="sec-wp">
		<div class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-lg-2 wow fadeup-animation">
						<div class="footer-logo">
							<?php the_custom_logo(); ?>
						</div>
						<?php
						if (isset($footer_title) && !empty($footer_title)) { ?>
							<div class="footer-logo-about-text white-text">
								<p><?php echo $footer_title; ?></p>
							</div>
						<?php
						} ?>
						<div class="social-info">
							<ul>
								<?php
								if (isset($facebook_link) && !empty($facebook_link)) { ?>
									<li>
										<a href="<?php echo $facebook_link; ?>" title="Follow On Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
									</li>
								<?php
								}
								if (isset($instagram_link) && !empty($instagram_link)) { ?>
									<li>
										<a href="<?php echo $instagram_link; ?>" title="Follow On Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
									</li>
								<?php
								}
								if (isset($email_link) && !empty($email_link)) { ?>
									<li>
										<a href="mailto:<?php echo $email_link; ?>" title="<?php echo $email_link; ?>" target="_blank"><i class="far fa-envelope"></i></a>
									</li>
								<?php
								} ?>
							</ul>
						</div>
					</div>
					<?php
					$lynchburg_title = get_field('lynchburg_title', 'option');
					$richmond_office_title = get_field('richmond_office_title', 'option');
					$lynchburg_office_location = get_field('lynchburg_office_location', 'option');
					$richmond_office_location = get_field('richmond_office_location', 'option');
					$phone_number = get_field('phone_number', 'option');
					$lynchburg_office_hours = get_field('lynchburg_office_hours', 'option');
					$richmond_office_hours = get_field('richmond_office_hours', 'option');
					$verified_logo = get_field('verified_logo', 'option');
					?>
					<div class="col-lg-8 wow fadeup-animation">
						<div class="footer-about">
							<div class="footer-contect-info-box white-text">
								<?php
								if (isset($lynchburg_title) && !empty($lynchburg_title)) { ?>
									<h6><?php echo $lynchburg_title; ?></h6>
								<?php
								}

								if (isset($lynchburg_office_location) && !empty($lynchburg_office_location)) { ?>
									<div class="address-box">
										<a href="<?php echo $lynchburg_office_location['url']; ?>" title="<?php echo $lynchburg_office_location['title']; ?>" target="_blank">
											<span><?php echo $lynchburg_office_location['title']; ?></span>
										</a>
									</div>
								<?php
								}

								if (isset($phone_number) && !empty($phone_number)) { ?>
									<div class="footer-contact-info">
										<a href="<?php echo $phone_number['url']; ?>" title="<?php echo $phone_number['title']; ?>"><?php echo $phone_number['title']; ?></a>
									</div>
								<?php
								}

								if (isset($lynchburg_office_hours) && !empty($lynchburg_office_hours)) { ?>
									<div class="close-open-box">
										<span><?php echo $lynchburg_office_hours; ?></span>
									</div>
								<?php
								} ?>
							</div>
							<div class="footer-contect-info-box white-text">
								<?php
								if (isset($richmond_office_title) && !empty($richmond_office_title)) { ?>
									<h6><?php echo $richmond_office_title; ?></h6>
								<?php
								}

								if (isset($richmond_office_location) && !empty($richmond_office_location)) { ?>
									<div class="address-box">
										<a href="<?php echo $richmond_office_location['url']; ?>" title="<?php echo $richmond_office_location['title']; ?>" target="_blank">
											<span><?php echo $richmond_office_location['title']; ?></span>
										</a>
									</div>
								<?php
								}

								if (isset($phone_number) && !empty($phone_number)) { ?>
									<div class="footer-contact-info">
										<a href="<?php echo $phone_number['url']; ?>" title="<?php echo $phone_number['title']; ?>"><?php echo $phone_number['title']; ?></a>
									</div>
								<?php
								}
								if (isset($richmond_office_hours) && !empty($richmond_office_hours)) { ?>
									<div class="close-open-box">
										<span><?php echo $richmond_office_hours; ?></span>
									</div>
								<?php
								}
								?>
							</div>
							<div class="footer-contect-info-box footer-menu-wp">
								<div class="footer-menu">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'footer-menu',
										)
									);
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 wow fadeup-animation">
						<div class="verified-image-wp">
							<div class="verified-image-box">
								<div class="verified-image back-img" <?php if (isset($verified_logo) && !empty($verified_logo)) { ?> style="background-image: url('<?php echo $verified_logo; ?>');" <?php } ?>></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row align-items-center">
					<div class="col-12">
						<div class="footer-bottom-text wow fadeup-animation">
							<div class="copy-right white-text">
								<p>© Wellspring of Hope LLC 2023</p>
							</div>
							<div class="footer-bottom-link">
								<ul>
									<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
									<li><a href="<?php echo home_url(); ?>/terms-of-service" title="Terms of Service">Terms of Service</a></li>
									<li><a href="<?php echo home_url(); ?>/cookies-policy" title="Cookies">Cookies</a></li>
								</ul>
							</div>
							<div class="footer-other-link white-text">
								<p>Website Design by <a href="#" target="_blank" title="Gró Social">Gró Social</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<!-- Footer End -->

<a href="javascript:void(0);" id="scrollToTop" class="scrolltop" title="Back To Top" style=""><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<!-- Modal Start -->
<div class="modal team-modal fade" id="team_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="container">
			<div class="modal-content">
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
				<div class="modal-content-box">
					<div class="team-modal-wp team-content"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal End -->

<?php wp_footer(); ?>

</body>

</html>