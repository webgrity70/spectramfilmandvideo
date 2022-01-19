<?php 
function theme_main_asstes(){
wp_enqueue_style( 'bootsrap', get_template_directory_uri().'/css/bootstrap.min.css' );
wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/font-awesome-4.7.0/css/font-awesome.min.css' );
wp_enqueue_style( 'owlcarousel', get_template_directory_uri().'/owl-carousel/assets/owl.carousel.min.css' );
wp_enqueue_style( 'mmenu', get_template_directory_uri().'/m-menu/mmenu-light.css' );
wp_enqueue_style( 'main-styleheet', get_stylesheet_uri() );



wp_enqueue_script( 'jquery3.4.1', get_template_directory_uri() . '/js/jquery3.4.1.js', array(), '3.4.1', true );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '4.5', true );
wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', array(), '', true );
wp_enqueue_script( 'mmenupoly', get_template_directory_uri() . '/m-menu/mmenu-light.polyfills.js', array(), '', true );
wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/m-menu/mmenu-light.js', array(), '', true );
wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_main_asstes' );




if ( ! function_exists( 'theme_setup' ) ) :

	function theme_setup() {
		
		
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
				// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'wsa' ),
				'footer' => __( 'Footer Menu', 'wsa' ),
				'social' => __( 'Social Links Menu', 'wsa' ),
				'neighborhood' => __( 'Neighborhood Menu', 'wsa' ),
				'securitysafety' => __( 'Security & safety Menu', 'wsa' ),
				'hpoz' => __( 'HPOZ Menu', 'wsa' ),
				'canopy' => __( 'Canopy Menu', 'wsa' ),
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
				'script',
				'style',
			)
		);


		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );


		// Add support for editor styles.
		add_theme_support( 'editor-styles' );


		add_theme_support( 'widgets' );


		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );




function add_link_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');


add_image_size( 'event-thumbnail', 350, 236, true );


// load more local event on button click

function more_news_ajax() {


	$offset = $_POST["offset"];

	$ppp = $_POST["ppp"];

	$page = $_POST["page"] + 1;

	$args = array(

		'post_type' => 'post',

		'post_status' => 'publish',

		'showposts' => $ppp,

		'paged' => $page,

	);

	$ar_posts = '';

	global $post;

	$loop = new WP_Query($args);

	$totalpost = $loop->found_posts;

	if ($loop->have_posts()) {

		while ($loop->have_posts()) {

			$loop->the_post();

$ar_posts .=      '<div class="col-lg-4 col-md-6">';
$ar_posts .=      '<figure class="article">';
$ar_posts .= '<div class="articleImg">';
$ar_posts .= '<a href="'.get_permalink().'">';

if( get_the_post_thumbnail() ):
	$ar_posts .= get_the_post_thumbnail(get_the_Id(),'event-thumbnail');
else:
	$ar_posts .= '<img src="'.home_url().'/wp-content/uploads/2020/09/dummy-post.jpg" alt="'. get_the_title().'">';
endif; 

$ar_posts .= '</a>';			    

$ar_posts .= '<ul class="tags list-unstyled mb-0 d-flex">';

$post_tags = get_the_tags();                                
if($post_tags):

$ar_posts .= '<li><i class="fa fa-tag" aria-hidden="true"></i></li>';

$i = 0;
$tagLength = count($post_tags);
foreach( $post_tags as $tag ):
$i++;
$ar_posts .= '<li>';
$ar_posts .= '<a class="text-white" href="'.bloginfo('url').'/tag/'.print_r($tag->slug).'">'.print_r($tag->name).'</a>';
$ar_posts .= '</li>';
if($i!==$tagLength){ 
	$ar_posts .='<li class="text-white"> | </li>';
	}
 endforeach; endif;
$ar_posts .= '</ul>';
$ar_posts .= '</div>';
$ar_posts .= '<figcaption>';
$ar_posts .= '<h3 class="textPrimary articleTitle"><a title="'.get_title().'" href="'.get_permalink().'">'.mb_strimwidth( get_the_title(),0,46,'...' ).'</a></h3>';
$ar_posts .= '<p class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> '.get_the_date( 'F j, Y' ).'</p>';

$ar_posts .= '<p>'.mb_strimwidth( get_the_content(),0,113,'...' ).'</p>';
$ar_posts .= '<a href="'.get_permalink().'"  class="readMore">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>';

$ar_posts .= '</figcaption>';
$ar_posts .= '</figure>';
$ar_posts .= '</div>';
							

		}

	}

	$response['load_more'] = ($totalpost > $ppp * $page ? TRUE : FALSE);

	$response['posts'] = $ar_posts != '' ? '<div class="row" >' . $ar_posts . '</div>' : '';

	echo json_encode($response);

	exit;

}

add_action('wp_ajax_nopriv_more_news_ajax', 'more_news_ajax');

add_action('wp_ajax_more_news_ajax', 'more_news_ajax');






if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
/*	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));*/
	
/*	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));*/
	
}




/* register sidebar */

function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer1', 'wsa' ),
        'id'            => 'footer-1',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'wsa' ),
        'before_widget' => '<div class="menuFooter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer2', 'wsa' ),
        'id'            => 'footer-2',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'wsa' ),
        'before_widget' => '<div class="menuFooter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer3a', 'wsa' ),
        'id'            => 'footer-3a',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'wsa' ),
        'before_widget' => '<div class="menuFooter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer3b', 'wsa' ),
        'id'            => 'footer-3b',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'wsa' ),
        'before_widget' => '<div class="menuFooter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer4', 'wsa' ),
        'id'            => 'footer-4',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'wsa' ),
        'before_widget' => '<div class="menuFooter">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );