<?php
/**
 * wellspring functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wellspring
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wellspring_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wellspring, use a find and replace
		* to change 'wellspring' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wellspring', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'wellspring' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'wellspring' )
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wellspring_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'wellspring_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wellspring_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wellspring_content_width', 640 );
}
add_action( 'after_setup_theme', 'wellspring_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wellspring_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wellspring' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wellspring' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wellspring_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wellspring_scripts() {

	wp_enqueue_style('wellspring-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20151215');
	wp_enqueue_style('wellspring-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '20151215');
	wp_enqueue_style('wellspring-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '20151215');
	wp_enqueue_style('wellspring-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '20151215');
	wp_enqueue_style('wellspring-datetimepicker-css', get_template_directory_uri() . '/assets/css/jquery.datetimepicker.min.css', array(), '20151215');
	wp_enqueue_style('wellspring-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '20151215');
	wp_enqueue_style('wellspring-simplebar-css', get_template_directory_uri() . '/assets/css/simplebar.css', array(), '20151215');
	//wp_enqueue_style('wellspring-sticky', get_template_directory_uri() . '/assets/css/sticky.css', array(), '20151215');

	wp_enqueue_style( 'wellspring-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script('jquery');
	wp_style_add_data( 'wellspring-style', 'rtl', 'replace' );

	wp_enqueue_script('wellspring-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true);
	wp_enqueue_script('wellspring-simplebar-js', get_template_directory_uri() . '/assets/js/simplebar.js', array(), '20151215', true);
	wp_enqueue_script('wellspring-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '20151215', true);
	wp_enqueue_script('wellspring-datetimepicker', get_template_directory_uri() . '/assets/js/jquery.datetimepicker.full.min.js', array(), '20151215', true);
	wp_enqueue_script('wellspring-fancybox-min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '20151215', true);
	wp_enqueue_script('wellspring-wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true);
	wp_enqueue_script('wellspring-font-awesome-min', get_template_directory_uri() . '/assets/js/font-awesome.min.js', array(), '20151215', true);
	wp_enqueue_script('wellspring-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), rand(1000, 10000), true);
	wp_localize_script('wellspring-custom', 'custom_call', ['ajaxurl' => admin_url('admin-ajax.php'), 'homeurl' => home_url()]);

	wp_enqueue_script( 'wellspring-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wellspring_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'get_custom_logo', 'change_html_custom_logo' );
function change_html_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $site_name = get_bloginfo( 'name' );
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" title="'.$site_name.'">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
             	'data-no-lazy' =>'1',
				'alt' => $site_name,
            ) )
        );
    return $html;  
}

function custom_testimonials_post() {
	$labels = array(
		'name' => _x( 'Testimonials', 'post type general name' ),
		'singular_name' => _x( 'Testimonial', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'testimonial' ),
		'add_new_item' => __( 'Add New Testimonials' ),
		'edit_item' => __( 'Edit Testimonial' ),
		'new_item' => __( 'New Testimonial' ),
		'all_items' => __( 'All Testimonials' ),
		'view_item' => __( 'View Testimonial' ),
		'search_items' => __( 'Search Testimonials' ),
		'not_found' => __( 'No testimonial found' ),
		'not_found_in_trash' => __( 'No testimonial found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Testimonials'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds testimonials and testimonial specific data',
		'public' => true,
		'exclude_from_search'   => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive' => true,
		'menu_icon' => 'dashicons-editor-quote',
	);
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'custom_testimonials_post' );


function custom_team_post() {
	$labels = array(
		'name' => _x( 'Team', 'post type general name' ),
		'singular_name' => _x( 'Team', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'team' ),
		'add_new_item' => __( 'Add New Team' ),
		'edit_item' => __( 'Edit Team' ),
		'new_item' => __( 'New Team' ),
		'all_items' => __( 'All Team' ),
		'view_item' => __( 'View Team' ),
		'search_items' => __( 'Search Team' ),
		'not_found' => __( 'No team found' ),
		'not_found_in_trash' => __( 'No team found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Team'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds teams and team specific data',
		'public' => true,
		'exclude_from_search'   => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive' => true,
		'menu_icon' => 'dashicons-groups',
	);
	register_post_type( 'teams', $args );
}
add_action( 'init', 'custom_team_post' );

function add_custom_taxonomies() {
	// Add new "Locations" taxonomy to Posts
	register_taxonomy('location', 'teams', array(
	  // Hierarchical taxonomy (like categories)
	  'hierarchical' => true,
	  // This array of options controls the labels displayed in the WordPress Admin UI
	  'labels' => array(
		'name' => _x( 'Locations', 'taxonomy general name' ),
		'singular_name' => _x( 'Location', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Locations' ),
		'all_items' => __( 'All Locations' ),
		'parent_item' => __( 'Parent Location' ),
		'parent_item_colon' => __( 'Parent Location:' ),
		'edit_item' => __( 'Edit Location' ),
		'update_item' => __( 'Update Location' ),
		'add_new_item' => __( 'Add New Location' ),
		'new_item_name' => __( 'New Location Name' ),
		'menu_name' => __( 'Locations' ),
	  ),
	  // Control the slugs used for this taxonomy
	  'rewrite' => array(
		'slug' => 'locations', // This controls the base slug that will display before each term
		'with_front' => false, // Don't display the category base before "/locations/"
		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	  ),
	));
  }
add_action( 'init', 'add_custom_taxonomies', 0 );


function register_acf_options_pages() {

	if( !function_exists('acf_add_options_page') )
		return;

	$option_page = acf_add_options_page(array(
		'page_title'    => __('Options Settings'),
		'menu_title'    => __('Options'),
		'menu_slug'     => 'options-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}

add_action('acf/init', 'register_acf_options_pages');

add_action('wp_ajax_gallery_tabbing','gallery_image_tabbing');
add_action( 'wp_ajax_nopriv_gallery_tabbing', 'gallery_image_tabbing' );

function gallery_image_tabbing(){
	$frontpage_id = get_option( 'page_on_front' );
	$slug = $_POST['id'];

	if( have_rows('home_gallery', $frontpage_id)){ ?>
		<span class="spinner" style="display: none;"><i class="fas fa-spinner fa-spin" aria-hidden="true"></i></span>
		<div class="row gallery-slider">
			<?php 
				while( have_rows('home_gallery', $frontpage_id) ){
					the_row();
					$image_gallery = get_sub_field('image_gallery');
					
					if(get_row_index() == $slug){
						if( isset($image_gallery) && !empty($image_gallery) ){
							$i=1;
							foreach($image_gallery as $img){ ?>
								<div class="col-lg-4 col-md-6">
								<a href="<?php echo $img; ?>" class="gallery-img-wp" data-fancybox="gallery-img" title="Gallery-image-<?php echo $i; ?>">
									<div class="gallery-image-box">
										<div class="gallery-image back-img" <?php if( isset($img) && !empty($img) ){ ?> style=" background-image: url('<?php echo $img; ?>');" <?php } ?>></div>
									</div>
								</a>
								</div>
								<?php 
							$i++; }
						}
					}
				}?>
		</div>
		<?php	
	}
	wp_reset_postdata();
	die();
}

add_action('wp_ajax_team_tabbing','team_image_tabbing');
add_action( 'wp_ajax_nopriv_team_tabbing', 'team_image_tabbing' );

function team_image_tabbing(){
global $post;
$id = $_POST['id'];
$terms = get_terms('location');
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
			'terms' => $id,
		),
	),
);
$the_query = new WP_Query($args);

	if($the_query->have_posts()){ ?>
		<span class="spinner" style="display: none;"><i class="fas fa-spinner fa-spin" aria-hidden="true"></i></span>
		<div class="row">
			<?php
			while($the_query->have_posts()){
				$the_query->the_post();
				$title = get_the_title();
				$explode = explode(' ', $title);
				$thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				$position = get_post_meta(get_the_ID(),'position_title',true);
				$content = get_the_content(); ?>
				<div class="col-lg-4 col-sm-6" id="<?php echo get_the_ID(); ?>">
					<div class="team-meamber-info">
						<?php 
							if( isset($thumbnail_url) && !empty($thumbnail_url) ){ ?>
								<div class="team-member-image">
									<img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>" width="315" height="315"  data-bs-toggle="modal" data-bs-target="#team_popup">
								</div>
								<?php 
							} ?>
							<div class="team-member-image-info">
								<h2 class="h2-title arapey-font"><?php the_title(); ?></h2>
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
												<h2 class="h2-title arapey-font"><?php the_title(); ?></h2>
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
												<h2 class="h2-title arapey-font"><?php the_title(); ?></h2>
												<h3 class="h3-title"><?php echo $position; ?></h3>
											</div>
											<?php 
												if( isset($content) && !empty($content) ){ ?>
													<div class="team-modal-description" data-simplebar>
														<?php echo $content; ?>
													</div>
													<?php 
												} ?>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
				<?php 
			} ?>
		</div>
		<?php
	} 
	wp_reset_postdata();
	wp_die();
}
?>

