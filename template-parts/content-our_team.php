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
                <div class="col-lg-6 order-2 order-lg-1">
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
                <div class="col-lg-6 order-1 order-lg-2">
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
    global $post;
    $terms = get_terms('location');
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
                'terms' => 'Lynchburg Clinicians',
            ),
        ),
    );
}
$the_query = new WP_Query($args);
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
        <div class="team-member-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <?php 
                            if($the_query->have_posts()){ ?>
                                <div class="team-member-content-box">
                                <span class="spinner" style="display: none;"><i class="fas fa-spinner fa-spin" aria-hidden="true"></i></span>
                                    <div class="row">
                                    <?php 
                                        while($the_query->have_posts()){
                                            $the_query->the_post();
                                            $title = get_the_title();
                                            $explode = explode(' ', $title);
                                            $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                            $position = get_post_meta($post->ID,'position_title',true);
                                            $content = get_the_content(); ?>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="team-meamber-info">
                                                    <?php if( isset($thumbnail_url) && !empty($thumbnail_url) ){ ?>
                                                    <div class="team-member-image">
                                                        <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $title; ?>" width="315" height="315"  data-bs-toggle="modal" data-bs-target="#team_popup">
                                                    </div>
                                                    <?php } ?>
                                                    <div class="team-member-image-info">
                                                        <?php 
                                                            if( isset($title) && !empty($title) ){ ?>
                                                                <h2 class="h2-title arapey-font"><?php echo $title; ?></h2>
                                                                <?php 
                                                            } ?>
                                                        <p><?php echo $position; ?></p>
                                                    </div>
                                                    <div class="popup-content" style="display:none;">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                    <div class="team-modal-image-box">
                                                                        <div class="team-modal-image">
                                                                            <div class="team-modal-image back-img" style=" background-image: url('<?php echo $thumbnail_url[0]; ?>');"></div>
                                                                        </div>
                                                                        <div class="team-modal-image-info white-text">
                                                                            <h2 class="h2-title arapey-font"><?php echo $title; ?></h2>
                                                                            <p><?php echo $position; ?></p>
                                                                            <div class="team-modal-btn">
                                                                                <a href="#" class="sec-btn sm-btn arapey-font" title="Schedule With Erica">Schedule With <?php echo $explode[0]; ?></a>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8">
                                                                <div class="team-modal-content-box">
                                                                    <div class="team-modal-title">
                                                                        <h2 class="h2-title arapey-font"><?php echo $title; ?></h2>
                                                                        <h3 class="h3-title"><?php echo $position; ?></h3>
                                                                    </div>
                                                                    <div class="team-modal-description" data-simplebar>
                                                                        <?php echo $content; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php 
                                    } ?>
                                    </div>
                                </div>
                                <?php 
                            } 
                            $client_url = get_field('client_url','option');    
                        ?>
                        
                        <div class="team-member-btn-wp">
                            <a href="<?php echo $client_url; ?>" class="sec-btn arapey-font" title="Schedule With The Clinician That Matches Your Needs Online Today!" target="_blank">Schedule With The Clinician That Matches Your Needs Online Today!</a>
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


<?php get_template_part('template-parts/content', 'career'); ?>
<!-- Careers Section End -->