<!-- Inner Banner Start -->
<?php
$counseling_banner_image = get_field('counseling_banner_image');
$counseling_about_image = get_field('counseling_about_image');
$counseling_about_title = get_field('counseling_about_title');
$counseling_about_content = get_field('counseling_about_content');
?>
<section class="main-banner inner-banner counseling-benner back-img" <?php if( isset($counseling_banner_image) && !empty($counseling_banner_image) ){ ?> style="background-image: url('<?php echo $counseling_banner_image; ?>');" <?php } ?>>
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content white-text">
                        <h1 class="h1-title arapey-font"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner End -->

<!-- Grup Session Image Start -->
<div class="grup-session-wp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php 
                    if( isset($counseling_about_image) && !empty($counseling_about_image) ){ ?>
                        <div class="grup-session-image-box">
                            <img src="<?php echo $counseling_about_image; ?>" alt="grup-session-image" width="1243" height="698">
                        </div>
                        <?php 
                    } ?>
            </div>
        </div>
    </div>
</div>
<!-- Grup Session Image End -->

<!-- Counseling Group Contact Info Start -->
<section class="counseling-group-contact-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="counseling-group-contact-wp">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="counseling-group-contact-left">
                            <div class="sec-title">
                                <?php 
                                    if( isset($counseling_about_title) && !empty($counseling_about_title) ){ ?>
                                        <h2 class="h2-title arapey-font"><?php echo $counseling_about_title; ?></h2>
                                        <?php 
                                    } ?>
                            </div>
                            <?php 
                                if( isset($counseling_about_content) && !empty($counseling_about_content) ){ ?>
                                    <div class="counseling-group-contact-description-text">
                                        <?php echo $counseling_about_content; ?>
                                    </div>
                                    <?php 
                                } ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="counseling-group-contact-form">
                            <div class="sec-title">
                                <h2 class="h2-title arapey-font">Sign Me Up!</h2>
                            </div>
                            <div class="contact-form">
                                <?php echo do_shortcode('[contact-form-7 id="007d0fc" title="Counselling Group Form"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counseling Group Contact Info End -->