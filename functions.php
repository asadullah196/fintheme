<?php

// fintech theme support options calling here
function fintech_theme_support(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    // fintech all the menu
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'fintech' ),
        'social-menu' => __( 'Social Menu', 'fintech' ),
    ) );

    /** post format **/
    add_theme_support( 'post-formats', array( 
            'image',
            'video',
            'audio',
            'quote',
        ) 
    );

    // D-register block editor
    remove_theme_support( 'widgets-block-editor' );
}
add_action('after_setup_theme','fintech_theme_support');

// All the theme script calling
if( class_exists ( 'Kirki' ) ){
	include_once('inc/common/kirki.php');
}
include_once('inc/common/scripts.php');
include_once('inc/common/breadcrumb.php');
include_once('inc/common/nav-walker.php');
include_once('inc/common/template-functions.php');