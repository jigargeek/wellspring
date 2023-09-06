<!-- Main Banner Start -->
<?php
$home_banner_img = get_field('home_banner_img');
$banner_title = get_field('banner_title');
$banner_sub_title = get_field('banner_sub_title');
$banner_content = get_field('banner_content');
$phone_number = get_field('phone_number', 'option');
?>
<section class="main-banner back-img" <?php if (isset($home_banner_img) && !empty($home_banner_img)) { ?> style="background-image: url('<?php echo $home_banner_img; ?>');" <?php } ?>>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-content white-text">
                        <?php
                        if (isset($banner_title) && !empty($banner_title)) { ?>
                            <h1 class="h1-title"><?php echo $banner_title; ?></h1>
                        <?php
                        }
                        if (isset($banner_content) && !empty($banner_content)) { ?>
                            <div class="banner-description-text">
                                <?php echo $banner_content; ?>
                                <?php
                                if (isset($banner_sub_title) && !empty($banner_sub_title)) { ?>
                                    <h2 class="h2-title"><?php echo $banner_sub_title; ?></h2>
                                <?php }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="banner-btn">
                            <?php
                            if (isset($phone_number) && !empty($phone_number)) { ?>
                                <a href="<?php echo $phone_number['url']; ?>" class="sec-btn" title="Lynchburg - <?php echo $phone_number['title']; ?>">Lynchburg - <?php echo $phone_number['title']; ?></a>
                            <?php }
                            if (isset($phone_number) && !empty($phone_number)) { ?>
                                <a href="<?php echo $phone_number['url']; ?>" class="sec-btn" title="Richmond - <?php echo $phone_number['title']; ?> ">Richmond - <?php echo $phone_number['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Banner End -->

<!-- Schedule Info Start  -->
<?php
$schedule_online_text = get_field('schedule_online_text');
$schedule_online_button_title = get_field('schedule_online_button_title');
?>
<section class="schedule-info">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-content">
                        <?php
                        if (isset($schedule_online_text) && !empty($schedule_online_text)) { ?>
                            <p><?php echo $schedule_online_text; ?></p>
                        <?php
                        } ?>
                        <div class="schedule-content-btn">
                            <?php
                            if (isset($schedule_online_button_title) && !empty($schedule_online_button_title)) { ?>
                                <a href="#" class="sec-btn sm-btn" title="Schedule Online"><?php echo $schedule_online_button_title; ?></a>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Schedule Info End  -->

<!-- How We Can Help Section Start -->
<?php
$about_title = get_field('about_title');
$about_content = get_field('about_content');
$team_button_link = get_field('team_button_link');
$about_button_text = get_field('about_button_text');
$about_image = get_field('about_image');
?>
<section class="how-we-can-help">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-text-content">
                        <div class="sec-title">
                            <?php
                            if (isset($about_title) && !empty($about_title)) { ?>
                                <h2 class="h2-title"><?php echo $about_title; ?></h2>
                            <?php
                            } ?>
                        </div>
                        <?php
                        if (isset($about_content) && !empty($about_content)) { ?>
                            <div class="common-text-description">
                                <?php echo $about_content; ?>
                            </div>
                        <?php
                        } ?>
                        <div class="common-text-content-btn">
                            <?php
                            if (isset($team_button_link) && !empty($team_button_link)) { ?>
                                <a href="<?php echo $team_button_link; ?>" class="sec-btn sm-btn" title="Meet Our Team"><?php echo $about_button_text; ?></a>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="how-we-can-help-image-content">
                        <div class="how-we-can-help-video">
                            <div class="back-img" style=" background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2023/09/sec-image01.jpg');">
                                <a href="<?php echo home_url(); ?>/wp-content/uploads/2023/09/sec-image01.jpg" data-fancybox="video"  title="how-we-can-help-video">
                                    <img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/play-btn-icon.svg" alt="play-btn-icon" width="83" height="83">
                                </a>
                            </div>
                        </div>
                        <div class="how-we-can-help-image-box">
                            <div class="back-img" <?php if (isset($about_content) && !empty($about_image)) { ?> style="background-image: url('<?php echo $about_image; ?>');" <?php } ?>></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How We Can Help Section End -->

<!-- Telehealth Section Start -->
<?php
$health_title = get_field('health_title');
$health_sub_title = get_field('health_sub_title');
$health_content = get_field('health_content');
$schedule_an_appointment_link = get_field('schedule_an_appointment_link');
$schedule_an_appointment_text = get_field('schedule_an_appointment_text');
?>
<section class="telehealth-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="telehealth-left-content">
                        <div class="sec-title">
                            <?php
                            if (isset($health_title) && !empty($health_title)) { ?>
                                <h2 class="h2-title"><?php echo $health_title; ?></h2>
                            <?php
                            } ?>
                        </div>
                        <div class="white-text">
                            <?php
                            if (isset($health_sub_title) && !empty($health_sub_title)) { ?>
                                <h2 class="h2-title arapey-font"><?php echo $health_sub_title; ?></h2>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php
                    if (isset($health_content) && !empty($health_content)) { ?>
                        <div class="telehealth-right-content white-text">
                            <?php echo $health_content; ?>
                            <div class="telehealth-btn">
                                <?php
                                if (isset($schedule_an_appointment_link) && !empty($schedule_an_appointment_link)) { ?>
                                    <a href="<?php echo $schedule_an_appointment_link; ?>" title="Schedule An Appointment" class="sec-btn"><?php echo $schedule_an_appointment_text; ?></a>
                                <?php
                                } ?>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Telehealth Section End -->

<!-- Who We Work With Accordion Section Start -->
<?php 
    $services_title = get_field('services_title');
    $services_content = get_field('services_content');
    $services_image = get_field('services_image');
?>
<section class="who-we-work-with">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="who-we-work-image-box">
                        <div class="who-we-work-image back-img" <?php if( isset($services_image) && !empty($services_image) ){ ?> style=" background-image: url('<?php echo $services_image; ?>');" <?php } ?>></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="who-we-work-with-content">
                        <div class="sec-title">
                            <?php 
                                if( isset($services_title) && !empty($services_title) ){ ?>
                                    <h2 class="h2-title"><?php echo $services_title; ?></h2>
                                    <?php 
                                } ?>
                        </div>
                        <div class="who-we-work-with-text-info">
                            <?php 
                                if( isset($services_content) && !empty($services_content) ){ ?>
                                    <div class="who-we-work-with-description">
                                        <?php echo $services_content; ?>
                                    </div>
                                    <?php 
                                } 
                                
                                if( have_rows('services') ){ ?>
                                    <div class="who-we-work-accordion">
                                        <?php 
                                            while( have_rows('services') ){
                                                the_row();
                                                $services_sub_title = get_sub_field('services_sub_title'); ?>
                                                <div class="who-we-work-accordion-box">
                                                    <?php 
                                                        if( isset($services_sub_title) && !empty($services_sub_title) ){ ?>
                                                            <h5 class="who-we-work-accordion-box-title"><?php echo $services_sub_title; ?></h5>
                                                            <?php 
                                                        } 
                                                        if( have_rows('sub_services_content')){ ?>
                                                            <div class="who-we-work-accordion-text">
                                                                <ul>
                                                                    <?php 
                                                                        while( have_rows('sub_services_content') ){ 
                                                                            the_row();
                                                                            $services_list_content = get_sub_field('services_list_content'); ?>
                                                                            <?php 
                                                                                if( isset($services_list_content) && !empty($services_list_content) ){ ?>
                                                                                    <li><?php echo $services_list_content; ?></li>
                                                                                    <?php 
                                                                                } ?>
                                                                            <?php 
                                                                        } ?>
                                                                </ul>
                                                            </div>
                                                            <?php 
                                                        } ?>
                                                </div>
                                                <?php 
                                            } ?>
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
<!-- Who We Work With Accordion Section End -->

<!-- Testimonial Section Start -->
<?php
$client_title = get_field('client_title');
$the_query = new WP_Query(array('post_type' => 'testimonials', 'post_status' => 'publish', 'posts_per_page' => -1));
?>
<section class="testimonial">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <?php
                        if (isset($client_title) && !empty($client_title)) { ?>
                            <h2 class="h2-title"><?php echo $client_title; ?></h2>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="row review-slider">
                        <?php
                            if ($the_query->have_posts()) {
                                while($the_query->have_posts()){
                                    $the_query->the_post();
                        ?>
                            <div class="col-lg-12">
                                <div class="reviews-slide-box">
                                    <div class="reviews-content-icon">
                                        <img src="<?php echo home_url(); ?>/wp-content/themes/wellspring/assets/images/reviews-slider-icon.png" alt="reviews-content-icon" width="33" height="28">
                                    </div>
                                    <div class="reviews-content-text" data-simplebar>
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="reviews-content-bottom-title">
                                        <h6><?php the_title(); ?></h6>
                                    </div>
                                </div>
                            </div>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<!-- Testimonial Section End -->

<!-- Gallery Section Start -->
<?php 
    if( have_rows('home_gallery')){
?>
<section class="gallery-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-tabing-list gallery-tabing-list">
                        <ul>
                            <?php 
                                $i = 1;
                                while(have_rows('home_gallery')){
                                    the_row();
                                    $gallery_title = get_sub_field('gallery_title');
                            ?>
                            <li>
                                <span class="<?php echo (get_row_index() ==  1) ? 'active' : ''; ?>" data-id="<?php echo $gallery_title; ?>" id="<?php echo get_row_index(); ?>"><?php echo $gallery_title; ?></span>
                            </li>
                            <?php $i++; } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gallery-slide-wp">
                <div class="row gallery-slider">
                    <?php 
                        while( have_rows('home_gallery') ){
                            the_row();
                            $image_gallery = get_sub_field('image_gallery');
                            if( isset($image_gallery) && !empty($image_gallery) ){
                                if (get_row_index() == 1) { 
                                    foreach($image_gallery as $img){ ?>
                                        <div class="col-lg-4">
                                            <div class="gallery-image-box">
                                                <div class="gallery-image back-img" style=" background-image: url('<?php echo $img; ?>');"></div>
                                            </div>
                                        </div>
                                        <?php 
                                    }
                                }
                            }
                        } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- Gallery Section End -->

<!-- Careers Section Start -->
<?php 
    $frontpage_id = get_option('page_on_front');
    $career_title = get_field('career_title', $frontpage_id);
    $career_sub_title = get_field('career_sub_title', $frontpage_id);
    $career_content = get_field('career_content', $frontpage_id);
    $career_image = get_field('career_image', $frontpage_id);
?>
<section class="careers-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="careers-image-box">
                        <div class="careers-image back-img" <?php if( isset($career_image) && !empty($career_image) ){ ?> style="background-image: url('<?php echo $career_image; ?>');" <?php } ?>></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="careers-content">
                        <div class="sub-title">
                            <?php 
                                if( isset($career_sub_title) && !empty($career_sub_title) ){ ?>
                                    <span><?php echo $career_sub_title; ?></span>
                                    <?php 
                                } ?>
                        </div>
                        <div class="sec-title">
                            <?php 
                                if( isset($career_title) && !empty($career_title) ){ ?>
                                    <h2 class="h2-title"><?php echo $career_title; ?></h2>
                                    <?php 
                                } ?>
                        </div>
                        <?php 
                            if( isset($career_content) && !empty($career_content) ){ ?>
                                <div class="careers-description-text">
                                    <?php echo $career_content; ?>
                                </div>
                                <?php 
                            } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Careers Section End -->