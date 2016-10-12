<?php

/* sidebars */
	register_sidebar( array(
	'name' => __( 'sidebarshop' ),
	'id' => 'sidebar-1',
	'before_widget' => '<div id="%1$s" class="widgetSidebar %2$s">', // required to pickup woocommerce widget classes
	'after_widget' => '</div>',
) );
	register_sidebar( array(
	'name' => __( 'footer1' ),
	'id' => 'sidebar-2',
	'before_widget' => '',
	'after_widget' => '',
) );
	register_sidebar( array(
	'name' => __( 'footer2' ),
	'id' => 'sidebar-3',
	'before_widget' => '',
	'after_widget' => '',
) );
	register_sidebar( array(
	'name' => __( 'footer3' ),
	'id' => 'sidebar-4',
	'before_widget' => '',
	'after_widget' => '',
) );
	register_sidebar( array(
	'name' => __( 'footer4' ),
	'id' => 'sidebar-5',
	'before_widget' => '',
	'after_widget' => '',
) );
	register_sidebar( array(
	'name' => __( 'sidebarpage' ),
	'id' => 'sidebar-6',
	'before_widget' => '',
	'after_widget' => '',
) );
	register_sidebar( array(
	'name' => __( 'topbar' ),
	'id' => 'sidebar-7',
	'before_widget' => '',
	'after_widget' => '',
) );
	register_sidebar( array(
	'name' => __( 'homepagefeatures' ),
	'id' => 'sidebar-8',
	'before_widget' => '',
	'after_widget' => '',
) );


/* menus */
function register_my_menus() {
	register_nav_menus( array(
		'top-menu' => "Top Menu",
		'main-menu' => "Main Menu",
		'footer-links' => "Footer Links"
		) 
	);
}
add_action( 'init', 'register_my_menus' );

// Register custom navigation walker for bootstrap dropdown menu
   require_once('wp_bootstrap_navwalker.php');

// add 'active' class to menu on current page 
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

/* call google jquery */
function my_scripts_method() {
    wp_enqueue_script( 'jquery' );
}    
add_action('wp_enqueue_scripts', 'my_scripts_method');

/* admin login logo */
function login_logo() {
echo '<style type="text/css">
h1 a {background:url("http://www.root.lamtha2.co.uk/logos/lamtha2_logo.gif") !important; background-repeat:no-repeat !important; margin-left:50px !important; width:230px !important;}
</style>';}
add_action('login_head', 'login_logo');

// allow editor to access appearance menu - themes, widgets and menus
// get the the role object
$role_object = get_role( 'editor' );
// add $cap capability to this role object
$role_object->add_cap( 'edit_theme_options' );

// hide wp version from page source
remove_action('wp_head', 'wp_generator');

//remove query string from resources (e.g. plugings links to jquery cdn) to enable browser cacheing
function _remove_script_version( $src ){
    $parts = explode( '?ver', $src );
        return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

// autosave interval
define('AUTOSAVE_INTERVAL', 300); // seconds

// revisions - number of revisions defined in wp-config

// use shortcode in widgets
add_filter('widget_text', 'do_shortcode');





/****** woocommerce  ******/

// make theme compatible with woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// disable woocommerce theme stylesheet
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// load my woocommerce custom stylesheet after woocommerce default css
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 11 );
function theme_enqueue_styles() {
	wp_enqueue_style( 'woocommerce-custom', get_template_directory_uri() . '/css/woocommerce-custom.css');
}

// show category image on category archive page
add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );
function woocommerce_category_image() {
    if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<div class="catimage dimmed"><img src="' . $image . '" alt="" /></div>';
		}
	}
}

// Removes category product count 
add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );
function woo_remove_category_products_count() {
  return;
}
if (is_product_category()){
    global $wp_query;
    // get the query object
    $cat = $wp_query->get_queried_object();
    // get the thumbnail id user the term_id
    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
    // get the image URL
    $image = wp_get_attachment_image( $thumbnail_id, 'feature-image' );
    // print the IMG HTML
    echo $image;
}

/* Change number of products per row */
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; 
	}
}

// Number of products per page
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );

?>