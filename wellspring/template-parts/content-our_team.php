<!-- Inner Banner Start -->
<?php 
    $banner_image = get_field('banner_image');
?>
<section class="main-banner inner-banner back-img" <?php if( isset($banner_image) && !empty($banner_image) ){ ?> style="background-image: url('<?php echo $banner_image; ?>');" <?php } ?>>
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

<!-- Team About Section Start -->
<?php 
    $about_title = get_field('about_title');
    $about_content = get_field('about_content');
    $contact_us_link = get_field('contact_us_link');
    $contact_us_text = get_field('contact_us_text');
    $about_image = get_field('about_image');

?>
<section class="team-about-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-text-content">
                        <div class="sec-title">
                            <?php 
                                if( isset($about_title) && !empty($about_title) ){ ?>
                                    <h2 class="h2-title arapey-font"><?php echo $about_title; ?></h2>
                                    <?php 
                                } ?>
                        </div>
                        <?php 
                            if( isset($about_content) && !empty($about_content) ){ ?>
                                <div class="common-text-description">
                                    <?php echo $about_content; ?>
                                </div>
                                <?php 
                            } 
                            
                            if( isset($contact_us_link) && !empty($contact_us_link) ){ ?>
                                <div class="common-text-content-btn">
                                    <a href="<?php echo $contact_us_link; ?>" class="sec-btn sm-btn arapey-font" title="Meet Our Team"><?php echo $contact_us_text; ?></a>
                                </div>
                                <?php 
                            } ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-about-right">
                        <div class="team-about-image-box">
                            <div class="back-img" <?php if( isset($about_image) && !empty($about_image) ){ ?> style="background-image: url('<?php echo $about_image; ?>');" <?php } ?>></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team About Section End -->

<!-- Team List Section Start -->
<?php 
$terms = get_terms('location');

// $the_query = new WP_Query( array(
//     'post_type' => 'teams',
//     'tax_query' => array(
//         array (
//             'taxonomy' => 'location',
//             'field' => 'slug',
//             'terms' => 'Lynchburg Clinicians',
//         )
//     ),
// ) );

?>

<section class="team-list-sec">
    <div class="sec-wp">
        <div class="team-list-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="common-tabing-list team-tabing-list">
                            <ul>
                                <?php 
                                    $i=0;
                                    foreach($terms as $term){ ?>
                                    <li><span class="<?php echo ($i == 0) ? 'active': ''; ?>" id="<?php echo $term->slug; ?>"><?php echo $term->name; ?></span></li>
                                    <?php 
                                $i++; }  ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php  
            global $post;
            foreach($terms as $custom_term) {
                wp_reset_query();
                $args = array(
                'post_type' => 'teams',
                'post_status'   => 'publish',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key'   => 'position_title',
                        'value'   => array(''),
                        'compare' => 'NOT IN'
                    )
                ),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'location',
                        'field' => 'slug',
                        'terms' => 'Lynchburg Clinicians',//$custom_term->slug,
                    ),
                ),
            );
        }
        $the_query = new WP_Query($args);        
        ?>
                <div class="team-member-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <?php 
                                    if($the_query->have_posts()){ ?>
                                        <div class="team-member-content-box">
                                            <div class="row">
                                            <?php 
                                                while($the_query->have_posts()){
                                                    $the_query->the_post();
                                                    $title = get_the_title();
                                                    $thumbnail = get_the_post_thumbnail(get_the_ID() , 'full');
                                                    $position = get_post_meta($post->ID,'position_title',true);
                                                    
                                            ?>
                                                <div class="col-lg-4">
                                                    <div class="team-meamber-info" data-bs-toggle="modal" data-bs-target="#team_popup">
                                                        <div class="team-member-image">
                                                            <?php echo $thumbnail; ?>
                                                        </div>
                                                        <div class="team-member-image-info">
                                                            <?php 
                                                                if( isset($title) && !empty($title) ){ ?>
                                                                    <h2 class="h2-title arapey-font"><?php echo $title; ?></h2>
                                                                    <?php 
                                                                } ?>
                                                            <p><?php echo $position; ?></p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                            } ?>
                                            </div>
                                        </div>
                                        <?php 
                                    } ?>
                                
                                <div class="team-member-btn-wp">
                                    <a href="#" class="sec-btn arapey-font" title="Schedule With The Clinician That Matches Your Needs Online Today!">Schedule With The Clinician That Matches Your Needs Online Today!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
    </div>
    
</section>
<?php wp_reset_postdata(); ?>
<!-- Team List Section End -->

<!-- Careers Section Start -->
<section class="careers-sec team-page">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="careers-image-box">
                        <div class="careers-image back-img" style=" background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2023/09/careers-image.jpg');"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="careers-content">
                        <div class="sub-title">
                            <span>careers</span>
                        </div>
                        <div class="sec-title">
                            <h2 class="h2-title arapey-font">Join the Wellspring of Hope Team</h2>
                        </div>
                        <div class="careers-description-text">
                            <p>We are currently adding more counselors to our staff. If you are a qualified licensed counselor interested in information about the
                                benefits of working with us at Wellspring of Hope we welcome you
                                to email <a href="mailto:admin@wellspringofhopellc.com" title="admin@wellspringofhopellc.com">admin@wellspringofhopellc.com</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Careers Section End -->