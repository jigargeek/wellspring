<?php

/**
 * The template for displaying the sitemap page
 * Template Name: Sitemap
 *
 * @link https://codex.wordpress.org/Template_Hierarchy 
 *
 */

get_header();
$cur_page_id = get_the_ID();
?>

<!-- Main Banner Start -->

<section class="main-banner inner-banner">
    <div class="common-sec">
        <div class="common-shep for-des" style="-webkit-mask-image: url('');"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content white-text">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Banner End -->

<div class="inner-page-text privacy-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-map">
                    <?php
                    $postsArgs = array(
                        'post_type' => 'page',
                        'posts_per_page' => '-1',
                        'post_status' => 'publish'
                    );
                    $postsLoop = new WP_Query($postsArgs);
                    if ($postsLoop->have_posts()) { ?>
                        <h2 id="sitemap-posts">Pages</h2>
                        <ul>
                            <?php
                            while ($postsLoop->have_posts()) {
                                $postsLoop->the_post();
                                $current_page_url = get_permalink($cur_page_id);
                                if (get_permalink() != $current_page_url) { ?>
                                    <li <?php post_class(); ?>><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                <?php }
                                wp_reset_query(); ?>
                            <?php
                            } ?>
                        </ul>
                    <?php } ?>
                    <?php
                    $postsArgs = array(
                        'post_type' => 'post',
                        'posts_per_page' => '-1',
                        'post_status' => 'publish'
                    );
                    $postsLoop = new WP_Query($postsArgs);
                    if ($postsLoop->have_posts()) { ?>
                        <h2 id="sitemap-posts">Posts</h2>
                        <ul>
                            <?php
                            while ($postsLoop->have_posts()) {
                                $postsLoop->the_post();
                            ?>
                                <li <?php post_class(); ?>><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                            <?php }
                            wp_reset_query(); ?>
                        </ul>
                    <?php } ?>
                    <?php
                    if ($postsLoop->have_posts()) { ?>
                        <h2 id="sitemap-posts-categories">Post Categories</h2>
                        <ul>
                            <?php wp_list_categories(array(
                                'title_li' => '',
                                'show_count' => false
                            )); ?>
                        </ul>
                    <?php } ?>
                    <?php
                    $tags = get_tags(array());
                    if (!empty($tags)) { ?>
                        <h2 id="sitemap-posts-tags">Post Tags</h2>
                        <ul>
                            <?php foreach ($tags as $tag) { ?>
                                <li class="tag-id-<?php echo $tag->term_id ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>" title="<?php $tag->name; ?>"><?php echo $tag->name; ?></a></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div><!-- #primary -->
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
