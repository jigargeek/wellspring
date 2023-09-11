<!-- Inner Banner Start -->
<?php 
    $services_banner_image = get_field('services_banner_image');
    $services_banner_content = get_field('services_banner_content');
?>
<section class="main-banner inner-banner services-page-banner back-img" <?php if( isset($services_banner_image) && !empty($services_banner_image) ){ ?> style="background-image: url('<?php echo $services_banner_image; ?>');" <?php } ?>>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content white-text">
                        <h1 class="h1-title arapey-font"><?php the_title(); ?></h1>
                        <?php 
                            if( isset($services_banner_content) && !empty($services_banner_content) ){ ?>
                                <div class="inner-banner-description-text">
                                    <?php echo $services_banner_content; ?>
                                </div>
                                <?php 
                            } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner End -->

<!-- Services About Section Start -->
<?php 
    $services_about_title = get_field('services_about_title');
    $about_button_title = get_field('about_button_title');
    $about_button_link = get_field('about_button_link');
    $services_about_content = get_field('services_about_content');
    $services_about_content = get_field('services_about_content');
    $services_about_image = get_field('services_about_image');
    $services_about_image = get_field('services_about_image');
    $about_button_title = get_field('about_button_title');
    $learn_more_link = get_field('learn_more_link', 'option');
    $learn_more_text = get_field('learn_more_text', 'option');
?>
<section class="services-about-sec">
    
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="common-text-content services-page-common-text">
                        <div class="sec-title">
                            <?php 
                                if( isset($services_about_title) && !empty($services_about_title) ){ ?>
                                    <h2 class="h2-title arapey-font"><?php echo $services_about_title; ?></h2>
                                    <?php 
                                } ?>
                        </div>
                        <?php 
                            if( isset($services_about_content) && !empty($services_about_content) ){ ?>
                                <div class="common-text-description">
                                    <?php echo $services_about_content; ?>
                                </div>
                                <?php 
                            } 
                            if( isset($about_button_link) && !empty($about_button_link) ){
                                $target = $about_button_link;
                                $title = $about_button_title;
                            }else if( isset($learn_more_link) && !empty($learn_more_link) ){
                                $target = $learn_more_link;
                                $title = $learn_more_text;
                            }
                        ?>
                        <div class="common-text-content-btn">
                            <a href="<?php echo $target; ?>" class="sec-btn sm-btn arapey-font" title="Meet Our Team"><?php echo $title; ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="services-about-right">
                        <div class="services-about-image-box">
                            <div class="back-img" <?php if( isset($services_about_image) && !empty($services_about_image) ){ ?> style=" background-image: url('<?php echo $services_about_image; ?>');" <?php } ?>></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services About Section End -->

<!-- Services Feature Section Start -->
<section class="services-feature">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-feature-title">
                        <?php 
                            $services_heading = get_field('services_heading');
                            if( isset($services_heading) && !empty($services_heading) ){ ?>
                                <h3 class="h3-title"><?php echo $services_heading; ?></h3>
                                <?php 
                            } ?>
                    </div>
                </div>
            </div>
            <div class="services-feature-wp">
                <?php 
                    if( have_rows('services')){  ?>
                        <div class="row">
                            <?php 
                                while( have_rows('services')){
                                    the_row();
                                    $services_title = get_sub_field('services_title');
                                    $services_content = get_sub_field('services_content'); ?>
                                    <div class="col-lg-4">
                                        <div class="services-feature-box">
                                            <div class="services-feature-Content-title">
                                                <?php 
                                                    if( isset($services_title) && !empty($services_title) ){ ?>
                                                        <h2 class="h2-title arapey-font"><?php echo $services_title; ?></h2>
                                                        <?php 
                                                    } ?>
                                            </div>
                                            <?php 
                                                if( isset($services_content) && !empty($services_content) ){ ?>
                                                    <div class="services-feature-description">
                                                        <?php echo $services_content; ?>
                                                    </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php 
                            } ?>
                        </div>
                        <?php 
                    } ?>
            </div>
        </div>
    </div>
</section>
<!-- Services Feature Section End -->

<!-- Services About Even Section Start -->
<?php 
    $counseling_services_title = get_field('counseling_services_title');
    $counseling_services_content = get_field('counseling_services_content');
    $counseling_services_image = get_field('counseling_services_image');

    if( isset($counseling_services_title) && !empty($counseling_services_title) ){
?>
<section class="services-about-sec even">
    <div class="sec-wp">
        <div class="container">
            <div class="services-about-sec-wp">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="services-about-right">
                            <div class="services-about-image-box">
                                <div class="back-img" <?php if( isset($counseling_services_image) && !empty($counseling_services_image) ){ ?> style=" background-image: url('<?php echo $counseling_services_image; ?>');" <?php } ?>></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="common-text-content services-page-common-text">
                            <div class="sec-title">
                                <?php 
                                    if( isset($counseling_services_title) && !empty($counseling_services_title) ){ ?>
                                        <h2 class="h2-title arapey-font"><?php echo $counseling_services_title; ?></h2>
                                        <?php 
                                    } ?>
                            </div>
                            <?php 
                                if( isset($counseling_services_content) && !empty($counseling_services_content) ){ ?>
                                    <div class="common-text-description">
                                        <?php echo $counseling_services_content; ?>
                                    </div>
                                    <?php 
                                } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- Services About Even Section End -->

<!-- Your Journey Section Start -->
<?php 
    $counseling_title = get_field('counseling_title');
    $counseling_content = get_field('counseling_content');
    $counseling_banner_image = get_field('counseling_banner_image');
    $learn_more_link = get_field('learn_more_link', 'option');
    $learn_more_text = get_field('learn_more_text', 'option');
    $lynchburg_phone_number = get_field('phone_number', 'option');
?>
<section class="your-journey-sec back-img" <?php if( isset($counseling_banner_image) && !empty($counseling_banner_image) ){ ?>style=" background-image: url('<?php echo $counseling_banner_image; ?>');" <?php } ?>>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="your-journey-content-box">
                        <div class="sec-title">
                            <?php 
                                if( isset($counseling_title) && !empty($counseling_title) ){ ?>
                                    <h2 class="h2-title arapey-font"><?php echo $counseling_title; ?></h2>
                                    <?php 
                                } ?>
                        </div>
                        <?php 
                            if( isset($counseling_content) && !empty($counseling_content) ){ ?>
                                <div class="your-journey-content-description white-text">
                                    <?php echo $counseling_content; ?>
                                </div>
                                <?php 
                            } ?>

                            <div class="your-journey-content-btn">
                                <?php 
                                    if( is_page(28) || is_page(30)){ ?>
                                        <a href="<?php echo $lynchburg_phone_number['url']; ?>" class="sec-btn arapey-font" title="Lynchburg - <?php echo $lynchburg_phone_number['title']; ?>">Lynchburg - <?php echo $lynchburg_phone_number['title']; ?></a>
                                        <a href="<?php echo $lynchburg_phone_number['url']; ?>" class="sec-btn arapey-font" title="Richmond - <?php echo $lynchburg_phone_number['title']; ?> ">Richmond - <?php echo $lynchburg_phone_number['title']; ?></a>
                                    <?php }else if( is_page(32)){ ?>
                                        <a href="<?php echo $learn_more_link; ?>" class="sec-btn arapey-font" title="Meet Our Team"><?php echo $learn_more_text; ?></a>
                                    <?php }
                                ?>
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Your Journey Section End -->