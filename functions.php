<?php

function dotscott_theme() {
    wp_enqueue_script( 'dotscott_js', get_theme_file_uri('/js/main.js'), array('jquery'), null, true );
    wp_enqueue_style( 'dotscott_custom_style', get_theme_file_uri('/css/main.css'), NULL, microtime() );
    wp_enqueue_style( 'dotscott_main_stlye', get_stylesheet_uri(), NULL, microtime() );
    wp_enqueue_style( 'custom-font', '//fonts.googleapis.com/css?family=Pacifico' );
    wp_enqueue_style( 'custom-font-two', '//fonts.googleapis.com/css?family=Oxygen:300,400' );
    wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/releases/v5.0.8/js/all.js' );
}

add_action( 'wp_enqueue_scripts', 'dotscott_theme' );

function dotscott_features() {
    register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
    add_theme_support( 'post-thumbnails' );
}


add_action( 'after_setup_theme', 'dotscott_features' );



function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

