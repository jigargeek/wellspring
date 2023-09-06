<?php
/*
  Template Name: Without Sidebar
 */
  get_header();
?>
<!-- Banner Start -->
<section class="main-banner inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<div class="inner-page-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-box">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <?php
                            while (have_posts()) :
                                the_post();
                                ?>
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    
                                    <div class="entry-content">
                                        <?php
                                        the_content(sprintf(
                                            wp_kses(
                                                /* translators: %s: Name of current post. Only visible to screen readers */
                                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'redeluxe'), array(
                                                    'span' => array(
                                                        'class' => array(),
                                                    ),
                                                )
                                            ), get_the_title()
                                        ));
                               
                                        ?>
                                    </div><!-- .entry-content -->
                                </div><!-- #post-the_ID(); -->
                                <?php
                               
                            endwhile; // End of the loop.
                            ?>
                        </main><!-- #main -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<?php
get_footer();