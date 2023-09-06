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
<footer id="colophon" class="site-footer">
	<div class="sec-wp">
		<div class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-lg-2">
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
										<a href="<?php echo $facebook_link; ?>" title="Follow On Facebook"><i class="fab fa-facebook-f"></i></a>
									</li>
								<?php
								}
								if (isset($instagram_link) && !empty($instagram_link)) { ?>
									<li>
										<a href="<?php echo $instagram_link; ?>" title="Follow On Instagram"><i class="fab fa-instagram"></i></a>
									</li>
								<?php
								}
								if (isset($email_link) && !empty($email_link)) { ?>
									<li>
										<a href="mailto:<?php echo $email_link; ?>" title="<?php echo $email_link; ?>"><i class="far fa-envelope"></i></a>
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
					<div class="col-lg-8">
						<div class="footer-about">
							<div class="footer-contect-info-box white-text">
								<?php
								if (isset($lynchburg_title) && !empty($lynchburg_title)) { ?>
									<h6><?php echo $lynchburg_title; ?></h6>
								<?php
								}

								if (isset($lynchburg_office_location) && !empty($lynchburg_office_location)) { ?>
									<div class="address-box">
										<a href="<?php echo $lynchburg_office_location['url']; ?>" title="<?php echo $lynchburg_office_location['title']; ?>">
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
										<a href="<?php echo $richmond_office_location['url']; ?>" title="<?php echo $richmond_office_location['title']; ?>">
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
					<div class="col-lg-2">
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
						<div class="footer-bottom-text">
							<div class="copy-right white-text">
								<p>© Wellspring of Hope LLC 2023</p>
							</div>
							<div class="footer-bottom-link">
								<ul>
									<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
									<li><a href="#" title="Terms of Service">Terms of Service</a></li>
									<li><a href="#" title="Cookies">Cookies</a></li>
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

<!-- Modal -->
<div class="modal fade" id="team_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog container">
		<div class="modal-content">
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
			<div class="team-modal-wp">
			<div class="row">
				<div class="col-lg-4">
						<div class="team-modal-image-box">
							<div class="team-modal-image">
								<img src="<?php echo home_url(); ?>/wp-content/uploads/2023/09/team-modal-image-01.jpg" alt="team-modal-image" height="525" width="460">
							</div>
							<div class="team-modal-image-info white-text">
								<h2 class="h2-title arapey-font">Erica Gray</h2>
								<p>MA Licensed Resident Counselor</p>
								<div class="team-modal-btn">
									<a href="#" class="sec-btn sm-btn arapey-font" title="Schedule With Erica">Schedule With Erica</a>
								</div>
							</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="team-modal-content-box">
						<div class="team-modal-title">
							<h2 class="h2-title arapey-font">Erica Gray</h2>
							<h3 class="h3-title">MA Licensed Resident Counselor</h3>
						</div>
						<div class="team-modal-description" data-simplebar>
							<p>Erica is a resident counselor who earned her Masters degree in Professional Counseling at Liberty University in 2019 and is currently working toward her Ph.D. in Counselor Education and Supervision. Her background is in teaching and English literature. She taught middle school and high school in the Chicago area, which is where she is from, and moved to the Lynchburg area in 2012 as part of a major life transition.</p>
							<p> Since then, along with earning her counseling degree, Erica cofounded a school for homeschooling families where she has taught many classes and fulfilled numerous roles, including the role of middle school and high school counselor. Although Erica loves teaching, she recognized early on in her career that she cared more about people building and making sure her students were personally supported and encouraged than she did about their academic progress.</p>
							<p>This began a dream of becoming a counselor, which finally came to fruition a few years ago with the opportunity to go back to school. As a counselor, Erica has been able to facilitate a safe and caring space for people from all walks of life regardless of personal struggle, sexual orientation, or mental health disorder, and she looks forward to continuing to provide that space of nonjudgmental care for anyone who she has the honor of walking through life within this capacity. </p>
							<p>​Erica has experience working with addictions, trauma, anxiety, depression, sexual orientation or </p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>

</html>