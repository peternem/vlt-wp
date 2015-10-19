<?php

/**
 * @package WordPress
 * @subpackage Fashionista WordPress Theme
 * This file loads custom css and js for our theme
 */

//hook function
add_action('wp_enqueue_scripts','wpex_load_scripts');

//start function
function wpex_load_scripts() {
	

	/*******
	*** CSS
	*******************/
	
	// Main style.css
	wp_enqueue_style('font-awesome1', get_template_directory_uri() . '/css/font-awesome.css', false, filemtime(get_stylesheet_directory(). '/css/font-awesome.css'));
	
	wp_enqueue_style( 'wpex-style', get_stylesheet_uri(),false, filemtime(get_stylesheet_directory()) );
	
	// Responsive CSS
	if( of_get_option('responsive') ) {
		wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', false, filemtime(get_stylesheet_directory(). '/css/font-awesome.css'));
	}
		
	/*******
	*** Javascript
	*******************/
	
	// Enqueue jQuery
	wp_enqueue_script('jquery');
	
	// Retina.js
	if ( of_get_option( 'retina', '1' ) == '1' ) {
		wp_enqueue_script('retina', WPEX_JS_DIR .'/retina.js', array('jquery'), '0.0.2', true);
	}
	
	// Required js Plugins
	wp_enqueue_script('wpex-plugins', WPEX_JS_DIR .'/plugins.js', array('jquery'), '', true);
	wp_enqueue_script('isotope-plugins', WPEX_JS_DIR .'/isotope.pkgd.min.js', array('jquery'), '2.2.2', true);
	wp_enqueue_script('isotope-script', WPEX_JS_DIR .'/isotope-script.js', array('jquery'), '', true);
	wp_enqueue_script('bxalider-script', WPEX_JS_DIR .'/jquery.bxslider.js', array('jquery'), '', true);
	wp_enqueue_script('acord-script', WPEX_JS_DIR .'/jquery.simple.accordion.js', array('jquery'), '', true);
	//initialize
	wp_enqueue_script('wpex-global', WPEX_JS_DIR .'/global.js', array('jquery','wpex-plugins'), '1.0', true);
	
	//localize hovers/ajax
	$wpex_param = array(
		'ajaxurl'	=> admin_url( 'admin-ajax.php' ),
		'loading'	=> __('loading...','wpex'),
		'loadmore'	=> __('load more','wpex')
	);
	wp_localize_script( 'wpex-global', 'wpexvars', $wpex_param );
	
	//threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script('comment-reply');
	}
	
	
} //end wpex_load_scripts()



// Load HTML5 js for old IE browsers
if ( !function_exists('wpex_html5') ) {
	function wpex_html5() {
		echo '<!--[if lt IE 9]>
			<script src="'.WPEX_JS_DIR .'/html5.js"></script>
		<![endif]-->';
	} // End function
} // End if
add_action( 'wp_head', 'wpex_html5' );