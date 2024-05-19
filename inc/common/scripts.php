<?php

define('FINTECH_CSS', get_template_directory_uri() . '/assets/css/');
define('FINTECH_JS', get_template_directory_uri() . '/assets/js/');

// FINTECH CSS and JS enqueue here
function FINTECH_theme_scripts() {

    // All CSS
	wp_enqueue_style( 'slick-slider',  FINTECH_CSS.'slick.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'aos',  FINTECH_CSS.'aos.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome',  get_template_directory_uri().'/assets/font-awesome-lib/icon/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap',  FINTECH_CSS.'bootstrap-lib/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive',  FINTECH_CSS.'responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fintech-main',  FINTECH_CSS.'style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    // All JS
	wp_enqueue_script( 'bootstrap', FINTECH_JS.'javascript-lib/bootstrap.min.js', array( ), 1.1, true );
	wp_enqueue_script( 'slick-slider', FINTECH_JS.'slick.min.js', array( ), 1.1, true );
	wp_enqueue_script( 'waypoints', FINTECH_JS.'waypoints.min.js', array( ), 1.1, true );
	wp_enqueue_script( 'aos', FINTECH_JS.'aos.js', array( ), 1.1, true );
	wp_enqueue_script( 'slider', FINTECH_JS.'slider.js', array( ), 1.1, true );
	wp_enqueue_script( 'fintech-main', FINTECH_JS.'custom.js', array( 'jquery' ), 1.1, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'FINTECH_theme_scripts' );