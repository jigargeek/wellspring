<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wellspring
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'wellspring'); ?></a>

		<!-- Header Start -->
		<header id="masthead" class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="header-contact-info">
								<ul>
									<?php 
										$phone_number = get_field('phone_number','option');
										$contact_number = get_field('contact_number','option');
										if( isset($phone_number) && !empty($phone_number) ){ ?>
											<li>
												<a href="<?php echo $phone_number['url']; ?>" title="Lynchburg <?php echo $phone_number['title']; ?>">
													<img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/phone-white-icon.svg" alt="phone-icon" width="10" height="15">
													<span>Lynchburg <?php echo $phone_number['title']; ?></span>
												</a>
											</li>
											<?php 
										}
										if( isset($contact_number) && !empty($contact_number) ){ ?>
											<li>
												<a href="<?php echo $contact_number['url']; ?>" title="Richmond <?php echo $contact_number['title']; ?>">
													<span>Richmond <?php echo $contact_number['title']; ?></span>
												</a>
											</li>
											<?php 
										} ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-2">
							<div class="site-branding">
								<?php the_custom_logo(); ?>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="header-menu">
								<nav id="site-navigation" class="main-navigation">
									<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
										<span></span>
										<span></span>
										<span></span>
									</button>
									<div class="header-mobile-menu">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
										<div class="header-btn">
											<a href="javascript:void(0)" class="sec-btn sm-btn">Current Clients</a>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->