<?php 

function theme_main_asstes(){

//wp_enqueue_style( 'bootstrap4.5', get_template_directory_uri().'/assets/bootstrap4.5/css/bootstrap.min.css' );
wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/font-awesome-4.7.0/css/font-awesome.min.css' );
wp_enqueue_style( 'mmenu', get_template_directory_uri().'/assets/plugin/mmenu-light-master/dist/mmenu-light.css' );

wp_enqueue_style( 'main-styleheet', get_stylesheet_uri() );




wp_enqueue_script( 'jquery3.5.1', get_template_directory_uri() . '/assets/js/jquery.min3.5.1.js', array(), '3.5.1', false );
wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/bootstrap4.5/js/bootstrap.bundle.min.js', array(), '', true );
wp_enqueue_script( 'mmenu-main', get_template_directory_uri() . '/assets/plugin/mmenu-light-master/dist/mmenu-light.js', array(), '', true );
wp_enqueue_script( 'mmenu-polyfill', get_template_directory_uri() . '/assets/plugin/mmenu-light-master/dist/mmenu-light.polyfills.js', array(), '', true );
wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true );

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

				'menu-1' => __( 'Primary', 'hello-theme' ),
                //'mob-menu' => __( 'Mobile Menu', 'hello-theme' )
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
				'flex-width'  => true,
				'flex-height' => true,
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

		add_theme_support( 'woocommerce' );

		remove_theme_support( 'widgets-block-editor' );

		add_theme_support( 'wc-product-gallery-slider' );


	}

endif;

add_action( 'after_setup_theme', 'theme_setup' );



function registersidebar() {

    register_sidebar(
        array(
            'name'          => __( 'Sitemap', 'hello-theme' ),
            'id'            => 'footer-sitemap',
            'description'   => __( 'Add widgets here to footer.', 'hello-theme' ),
            'before_widget' => '<div class="widgetWrpr %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widgetTitle">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Products Category', 'hello-theme' ),
            'id'            => 'product-cats',
            'description'   => __( 'Add widgets to Shop.', 'hello-theme' ),
            'before_widget' => '<div class="sidebarWrpr %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="sidebarTitle text-uppercase"><span>',
            'after_title'   => '</span><i class="fa fa-angle-down" aria-hidden="true"></i></h4>',
        )
    );

}
add_action( 'widgets_init', 'registersidebar' );




function theme_customize_register($wp_customize){
     


    $wp_customize->add_panel('shop_hero_panel', array(
    	'title' => __('Shop Settings', 'hello-theme'),
    	'priority' => 1,
    	'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_section('shop_hero_section',array(
    	'title' => __('Shop Hero', 'hello-theme'),
    	'panel' => 'shop_hero_panel'
    ));

    $wp_customize->add_setting('shop_hero_title',array(
    	'default' => 'Shop',

    ));

    $wp_customize->add_control('shop_hero_title', array(
    	'label'      => __('Hero Title', 'hello-theme'),
    	'section' => 'shop_hero_section',
    	'priority' => 1,
    ));
  
}
  
add_action('customize_register', 'theme_customize_register');


// limit search for products only
function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        //$query->set('post_type',array('post','page'));
        $query->set('post_type',array('product'));
    }
 
return $query;
}
 
add_filter('pre_get_posts','searchfilter');




/* ********** WOOCOMMERCE Hooks ********** */


//add hero
add_action('woocommerce_before_main_content','add_hero');

function add_hero(){
	echo get_template_part('template-parts/hero');
}


add_action('woocommerce_before_single_product','back_to_product');
function back_to_product(){
	echo 'somthing';
}

// add result count after header
add_action('woocommerce_archive_description','woocommerce_result_count',11);

// add filter after count
add_action('woocommerce_archive_description','customize_ordering_filter',12);

function customize_ordering_filter(){
	echo '<div class="orderWrpr">';
	echo '<span class="label">Sort By:</span>';
	woocommerce_catalog_ordering();
	echo '</div>';
}

// add excerpts after title
function product_excerts() {
    the_excerpt();
}

add_action('woocommerce_after_shop_loop_item_title','product_excerts',4);


// add brand to single products
add_action('woocommerce_single_product_summary','add_product_brand',9);

function add_product_brand(){
	echo '<p class="cats">';
	the_terms( get_the_ID(), 'brands', 'Brand: ', ', ', ' ' );
	echo '</p>';
}

// add product cats before brand name to single products
add_action('woocommerce_single_product_summary','add_product_cat',8);

function add_product_cat(){
	echo '<p class="cats">';
	the_terms( get_the_ID(), 'product_cat', 'Category: ', ', ', ' ' );
	echo '</p>';
}

add_action('woocommerce_single_product_summary','add_single_product_title',5);

function add_single_product_title(){
	the_title( '<h2 class="product_title entry-title">', '</h2>', true );
}


/* Create Buy Now Button dynamically after Add To Cart button */
function add_content_after_addtocart() {

    // get the current post/product ID
    $current_product_id = get_the_ID();

    // get the product based on the ID
    $product = wc_get_product( $current_product_id );

    // get the "Checkout Page" URL
    $checkout_url = wc_get_checkout_url();

    // run only on simple products
    //if( $product->is_type( 'simple' ) ){
        echo '<a href="'.$checkout_url.'?add-to-cart='.$current_product_id.'" class="buy-now button"><i class="fa fa-bolt" aria-hidden="true"></i> Buy Now</a>';
        //echo '<a href="'.$checkout_url.'" class="buy-now button">Buy Now</a>';
   // }

        
}
add_action( 'woocommerce_after_add_to_cart_button', 'add_content_after_addtocart' );


add_action('woocommerce_before_add_to_cart_quantity','add_something');

function add_something(){
	$min_value = 0;
    $max_value = -1;
    $input_value = 1;
    $step = 1;
    $pattern = '';
    $inputmode = 'numeric';
    $input_id = 'quantity-custom';
    $input_name = 'quantity';

	echo
	  '<div class="quantity">
	      <label class="" for="'.esc_attr( $input_id ).'">'.
	      esc_html( translate("Qty", "woocommerce") ).'</label>
	      <div class="quantityBoxWrpr">
	      <div class="quantity-button minus"><span>-</span></div>
	      <input type="number" id="'.esc_attr( $input_id ).'" class="input-text qty text" step="'.esc_attr( $step ).'" min="'.esc_attr( $min_value ).'" max="'.esc_attr( 0 < $max_value ? $max_value : '' ).'" name="'.esc_attr( $input_name ).'"
	        value="'.esc_attr( $input_value ).'" title="'.esc_attr_x( "Qty", "Product quantity input tooltip", "woocommerce" ).'" size="4" pattern="'.esc_attr( $pattern ).'" inputmode="'.esc_attr( $inputmode ).'" />
	      <div class="quantity-button plus"><span>+</span></div>
	      </div>
	    </div>';

}


add_action('woocommerce_after_main_content','quantity_jquery');

function quantity_jquery(){
	?>
	<script>
	(function($){
	    $('.quantity').on('click', '.quantity-button.minus',
	        function(e) {
	        $input = $(this).next('input.qty');
	        var val = parseInt($input.val());
	        var step = $input.attr('step');
	        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
	        if (val > 0) {
	            $input.val( val - step ).change();
	        }
	    });
	    $('.quantity').on('click', '.quantity-button.plus', function(e) {
	        $input = $(this).prev('input.qty');
	        var val = parseInt($input.val());
	        var step = $input.attr('step');
	        step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
	        $input.val( val + step ).change();
	    });
	})(jQuery);
	</script>
<?php
}

// Remove the product description Title

add_filter( 'woocommerce_product_description_heading', '__return_null' );


// Remove the product additional information Title

add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );



// Change the product description title
/*
add_filter('woocommerce_product_description_heading', 'change_product_description_heading');

function change_product_description_heading() {

 return __('NEW TITLE HERE', 'woocommerce');

}
*/

add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['test_tab'] = array(
		'title' 	=> __( 'Specification', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);

	return $tabs;

}
function woo_new_product_tab_content() {

	// The new tab content

	echo '<p><b>Specification</b></p>';
	the_field('specification');
	
}



add_action('woocommerce_before_cart_totals','before_carttotal_table');

function before_carttotal_table(){
	echo '<div class="cart_totals_wrpr">';
}

add_action('woocommerce_after_cart_totals','after_carttotal_table');

function after_carttotal_table(){
	echo '</div>';
}




add_action('woocommerce_before_checkout_form','beforeCheckoutForm');

function beforeCheckoutForm(){
	echo '<div class="container">';
}
add_action('woocommerce_after_checkout_form','afterCheckoutForm');

function afterCheckoutForm(){
	echo '</div>';
}


















// remove breadcrumb

remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);

//remove count 
remove_action('woocommerce_before_shop_loop','woocommerce_result_count',20);

//remove filter 
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering',30);


//remove add to cart
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);



// remove sidebar from product details
remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);

// remove single meta like product cats, SKU
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);

// remove excerpt
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt',20);

// remove single product title h1
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);


//remove relate products

remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);


//remove default quantity field from details page
function wc_remove_all_quantity_fields( $return, $product ) {
	if( is_product() ){
		return true;
	}
    
}
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );




// adding brand cats to product

add_action( 'init', 'create_brand_cats_for_products', 0 );

 
function create_brand_cats_for_products() {

  $labels = array(
    'name' => _x( 'Brands', 'taxonomy general name' ),
    'singular_name' => _x( 'Brand', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Brands' ),
    'all_items' => __( 'All Brands' ),
    'parent_item' => __( 'Parent Brand' ),
    'parent_item_colon' => __( 'Parent Brand:' ),
    'edit_item' => __( 'Edit Brand' ), 
    'update_item' => __( 'Update Subject' ),
    'add_new_item' => __( 'Add New Brand' ),
    'new_item_name' => __( 'New Brand Name' ),
    'menu_name' => __( 'Brands' ),
  );    
 
  register_taxonomy('brands',array('product'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'brands' ),
  ));
 
}


