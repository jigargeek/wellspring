<!-- Inner Banner Start -->
<?php 
    $contact_banner_image = get_field('contact_banner_image');
?>
<section class="main-banner inner-banner back-img" <?php if( isset($contact_banner_image) && !empty($contact_banner_image)){ ?> style="background-image: url('<?php echo $contact_banner_image; ?>');" <?php } ?>>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content white-text">
                        <h1 class="h1-title arapey-font wow fadeup-animation"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner End -->

<!-- Contact Page Section Start -->
<?php 
    $contact_about_title = get_field('contact_about_title');
    $contact_about_content = get_field('contact_about_content');
    $lynchburg_title = get_field('lynchburg_title', 'option');
    $lynchburg_office_location = get_field('lynchburg_office_location', 'option');
    $lynchburg_office_phone_number = get_field('phone_number', 'option');
    $lynchburg_office_hours = get_field('lynchburg_office_hours', 'option');
    $lynchburg_office_map = get_field('lynchburg_office_map', 'option');
    
    $richmond_office_title = get_field('richmond_office_title', 'option');
    $richmond_office_location = get_field('richmond_office_location', 'option');
    $richmond_office_phone_number = get_field('phone_number', 'option');
    $richmond_office_hours = get_field('richmond_office_hours', 'option');
    $richmond_office_map = get_field('richmond_office_map', 'option');
    
?>
<section class="contact-page-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="contact-page-sec-wp">
                <div class="row">
                    <div class="col-lg-6 wow left-animation">
                        <div class="contact-page-left">
                            <div class="sec-title">
                                <?php 
                                    if( isset($contact_about_title) && !empty($contact_about_title) ){ ?>
                                        <h2 class="h2-title arapey-font"><?php echo $contact_about_title; ?></h2>
                                        <?php 
                                    } ?>
                            </div>
                            <?php 
                                if( isset($contact_about_content) && !empty($contact_about_content) ){ ?>
                                    <div class="contact-page-description-text">
                                        <?php echo $contact_about_content; ?>
                                    </div>
                                    <?php 
                                } ?>
                            <div class="contact-info-wp">
                                <div class="contact-info-title">
                                    <?php 
                                        if( isset($lynchburg_title) && !empty($lynchburg_title) ){ ?>
                                            <h2 class="h2-title arapey-font"><?php echo $lynchburg_title; ?></h2>
                                            <?php 
                                        } ?>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6">
                                        <div class="contact-info">
                                            <ul>
                                                <?php 
                                                    if( isset($lynchburg_office_location) && !empty($lynchburg_office_location) ){ ?>
                                                        <li>
                                                            <a href="<?php echo $lynchburg_office_location['url']; ?>" class="contact-info-text" title="<?php echo $lynchburg_office_location['title']; ?>" target="_blank">
                                                                <img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/map-icon.svg" alt="map-icon" width="22" height="30">
                                                                <span><?php echo $lynchburg_office_location['title']; ?></span>
                                                            </a>
                                                        </li>
                                                        <?php 
                                                    } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="contact-info">
                                            <ul>
                                                <?php 
                                                    if( isset($lynchburg_office_phone_number) && !empty($lynchburg_office_phone_number) ){ ?>
                                                        <li>
                                                            <a href="<?php echo $lynchburg_office_phone_number['url']; ?>" class="contact-info-text" title="<?php echo $lynchburg_office_phone_number['title']; ?>">
                                                                <img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/phone-icon.svg" alt="phone-icon" width="22" height="30">
                                                                <span><?php echo $lynchburg_office_phone_number['title']; ?></span>
                                                            </a>
                                                        </li>
                                                        <?php 
                                                    } 
                                                    
                                                    if( isset($lynchburg_office_hours) && !empty($lynchburg_office_hours) ){ ?>
                                                        <li>
                                                            <div class="contact-info-text">
                                                                <img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/clock-icon.svg" alt="clock-icon" width="22" height="30">
                                                                <span><?php echo $lynchburg_office_hours; ?></span>
                                                            </div>
                                                        </li>
                                                        <?php 
                                                    } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="map-box">
                                    <?php 
                                        if( isset($lynchburg_office_map) && !empty($lynchburg_office_map) ){ ?>
                                            <iframe src="<?php echo $lynchburg_office_map; ?>" width="574" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            <?php 
                                        } ?>
                                </div>
                            </div>
                            <div class="contact-info-wp">
                                <div class="contact-info-title">
                                    <?php 
                                        if( isset($richmond_office_title) && !empty($richmond_office_title) ){ ?>
                                            <h2 class="h2-title arapey-font"><?php echo $richmond_office_title; ?></h2>
                                            <?php 
                                        } ?>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-6">
                                        <div class="contact-info">
                                            <ul>
                                                <?php 
                                                    if( isset($richmond_office_location) && !empty($richmond_office_location) ){ ?>
                                                <li>
                                                    <a href="<?php echo $richmond_office_location['url']; ?>" class="contact-info-text" title="<?php echo $richmond_office_location['title']; ?>" target="_blank">
                                                        <img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/map-icon.svg" alt="map-icon" width="22" height="30">
                                                        <span><?php echo $richmond_office_location['title']; ?></span>
                                                    </a>
                                                </li>
                                                <?php 
                                            } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6">
                                        <div class="contact-info">
                                            <ul>
                                                <?php 
                                                    if( isset($richmond_office_phone_number) && !empty($richmond_office_phone_number) ){ ?>
                                                        <li>
                                                            <a href="<?php echo $richmond_office_phone_number['url']; ?>" class="contact-info-text" title="<?php echo $richmond_office_phone_number['title']; ?>">
                                                                <img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/phone-icon.svg" alt="phone-icon" width="22" height="30">
                                                                <span><?php echo $richmond_office_phone_number['title']; ?></span>
                                                            </a>
                                                        </li>
                                                        <?php 
                                                    } 
                                                    
                                                    if( isset($richmond_office_hours) && !empty($richmond_office_hours) ){ ?>
                                                        <li>
                                                            <div class="contact-info-text">
                                                                <img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/clock-icon.svg" alt="clock-icon" width="22" height="30">
                                                                <span><?php echo $richmond_office_hours; ?></span>
                                                            </div>
                                                        </li>
                                                        <?php 
                                                    } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="map-box">
                                    <?php 
                                        if( isset($richmond_office_map) && !empty($richmond_office_map) ){ ?>
                                            <iframe src="<?php echo $richmond_office_map; ?>" width="574" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            <?php 
                                        } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow right-animation">
                        <div class="contact-form-wp">
                            <div class="contact-form">
                                <?php echo do_shortcode('[contact-form-7 id="5fec7df" title="Contact Form"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Page Section End -->