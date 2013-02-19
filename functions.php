<?php
//////////////////////////////////////////
//General Wordpress functions
//////////////////////////////////////////
// Clean up the <head>
function removeHeadLinks() {
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'feed_links', 2);
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'start_post_rel_link', 10, 0);
		remove_action('wp_head', 'parent_post_rel_link', 10, 0);
		remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	}
	add_action('init', 'removeHeadLinks');
function removeAdminBarLinks() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('about');
    $wp_admin_bar->remove_menu('wporg');
    $wp_admin_bar->remove_menu('documentation');
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');
    $wp_admin_bar->remove_menu('view-site');
}
add_action( 'wp_before_admin_bar_render', 'removeAdminBarLinks' );

if ( !current_user_can( 'edit_users' ) ) {
  add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
  add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}
add_filter('wp_mail_from', 'new_mail_from');
add_filter('wp_mail_from_name', 'new_mail_from_name');

function new_mail_from($old) {
 return 'webmaster@rappahannock.edu';
}
function new_mail_from_name($old) {
 return 'The RCC Website';
}
function login_enqueue_scripts(){
	echo '<div class="background-cover"></div>';
			}
add_action( 'login_enqueue_scripts', 'login_enqueue_scripts' );

// Use your own external URL logo link
function wpc_url_login(){
	return "http://www.rappahannock.edu"; // your URL here
}
add_filter('login_headerurl', 'wpc_url_login');

//prevent bad login info from being displayed
add_filter('login_errors',create_function('$a', "return null;"));

if (function_exists('register_sidebar')) {
	register_sidebar( array(
		'name' => 'Sidebar Widgets',
		'id'   => 'sidebar-widgets',
		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
	register_sidebar( array(
		'name' => 'Sidebar Promo',
		'id'   => 'sidebar-promo',
		'description'   => __( 'This is a promo for the site.','html5reset' ),
		'before_widget' => '<aside id="%1$s" class="widget promo %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}
add_action( 'init', 'register_sidebar' );

//Create sidebar nav menu
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'sidebar-menu', __( 'Sidebar Menu' ) );
}

add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

//////////////////////////////////////////
//Custom functions
//////////////////////////////////////////	
	// Load jQuery
	function profmg_init() {
		if ( !is_admin() ) {
			wp_deregister_script('jquery');
			wp_register_script(
			'jquery',
			"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", 
			false, 
			'1.7.1', 
			true);
			wp_enqueue_script('jquery');

			wp_enqueue_script(
			'google_jsapi',	
			'https://www.google.com/jsapi?key=ABQIAAAA0DxWBmajUg3-7xSRVQ2q3RRo7kyImI0gdcpnJoA7tSJ7W8_oCBQNAUWA1k40IheM4_liCOjcgVEIwA', 
			false,
			'1.5',
			true
		);
			wp_register_script(
			'nivo',
			'/wp-content/themes/AwakenBenehimeV10/js/libs/jquery.nivo.slider.pack.js', 
			'jquery', 
			'1.0', 
			true);
			wp_enqueue_script('nivo');
		}
	}
	add_action ('init', 'profmg_init');
	
	function profmg_breadcrumb() {
		if (!is_home()) {
		echo '<ul class="breadcrumbs">';
		echo '<li><a href="/">RCC Home</a><span>\<span></li>', '<li><a href="',get_option('home'), '">'; echo bloginfo('name');  echo '</a><span>\<span></li>';
		
		if ( is_single()) {
			echo '<li><a href="',get_option('home'), '/posts">Posts</a><span>\<span></li>', '<li><a class="current">', the_title(), '</a></li>';
		}
		elseif (is_page()) {
		global $post;
		$parent = get_page($post->post_parent);
		$parentlink = get_permalink($parent->ID);
		$grandparent = get_page($parent->post_parent);
		$grandparentlink = get_permalink($grandparent->ID);
		
		if ($grandparent->ID != $post->ID) { //for pages 2 levels deep
			echo '<li><a href="'.$grandparentlink.'">'.$grandparent->post_title.'</a><span>\<span></li>';
			echo '<li><a href="'.$parentlink.'">'.$parent->post_title.'</a><span>\<span></li>';	
		}
		elseif ($parent->ID != $post->ID){ //for pages 1 level deep
			echo '<li><a href="'.$parentlink.'">'.$parent->post_title.'</a><span>\<span></li>';
		}
			
		echo '<li><a class="current">', the_title(), '</a></li>'; 
			
		}
		else {
			echo '<li>', bloginfo('name'), '<span>\<span></li>';
		}
	}
	else {echo '<li><a href="/">RCC Home</a><span>\<span></li>', '<li><a href="',get_option('home'),'">', bloginfo('name'), '</a><span>\<span></li><li><a class="current">Posts</a></li>';}
	echo '</ul>';
	}
	function profmg_get_slug() {
		$post_data = get_post($post->ID, ARRAY_A);
		$slug = $post_data['post_name'];
		return $slug; 
	}
	// custom admin login logo
	function custom_login_logo() {
		echo '<link rel="stylesheet" href="/wp-content/themes/AwakenBenehimeV10/css/wp-admin.css">';
	}
	add_action('login_head', 'custom_login_logo');
	
	// add a favicon for your admin
	function admin_favicon() {
		echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.ico" />';
	}
	add_action('admin_head', 'admin_favicon');

?>