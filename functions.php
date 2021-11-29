<?php
/*
* Co2mmon functions and definitions  (co2mmon)
*/

function co2mmon_theme_setup(){
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
  }
  add_action('init', 'co2mmon_theme_setup');

if ( ! function_exists( 'co2mmon_setup' ) ) :

function co2mmon_setup() {
	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'audio',
		'gallery',
		'image',
		'link',
		'quote',
		'status',
		'video',
	) );
}
endif;
add_action( 'after_setup_theme', 'co2mmon_setup' );



/**
 * Enqueue scripts and styles.
 */
function co2mmon_scripts() {

	
	 // unregister jQuery
	 wp_deregister_script('jquery-core');
	 wp_deregister_script('jquery');
   
	 // register
	 wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	 wp_register_script( 'jquery', false, array('jquery-core'), null, true );
   
	 // enqueue
	 wp_enqueue_script( 'jquery' );
	 // Bootstrap
 	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true );
	 // ScrollMagic
 	wp_enqueue_script( 'scrollmagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), null, true );
	// ScrollMagicIndicators
	wp_enqueue_script( 'scrollmagicindicators-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'), null, true );


	wp_enqueue_style( 'co2mmon-style', get_template_directory_uri() . '/css/co2_styles.css' );


	wp_enqueue_script( 'co2mmon-javascript', get_template_directory_uri() . '/js/co2_script.js', array( 'jquery' ), '20210606', true );


}
add_action( 'wp_enqueue_scripts', 'co2mmon_scripts' );