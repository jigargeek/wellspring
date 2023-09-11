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
                <div class="col-lg-6 wow left-animation">
                    <div class="careers-image-box">
                        <div class="careers-image back-img" <?php if (isset($career_image) && !empty($career_image)) { ?> style="background-image: url('<?php echo $career_image; ?>');" <?php } ?>></div>
                    </div>
                </div>
                <div class="col-lg-6 wow right-animation">
                    <div class="careers-content">
                        <div class="sub-title">
                            <?php
                            if (isset($career_sub_title) && !empty($career_sub_title)) { ?>
                                <span><?php echo $career_sub_title; ?></span>
                            <?php
                            } ?>
                        </div>
                        <div class="sec-title">
                            <?php
                            if (isset($career_title) && !empty($career_title)) { ?>
                                <h2 class="h2-title <?php echo (is_page(35) ? 'arapey-font' : '') ?>"><?php echo $career_title; ?></h2>
                            <?php
                            } ?>
                        </div>
                        <?php
                        if (isset($career_content) && !empty($career_content)) { ?>
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