<?php

function dotscott_theme() {
    wp_enqueue_script( 'dotscott_js', get_theme_file_uri('/js/main.js'), array('jquery'), null, true );
    wp_enqueue_style( 'dotscott_custom_style', get_theme_file_uri('/css/main.css'), NULL, microtime() );
    wp_enqueue_style( 'dotscott_main_stlye', get_stylesheet_uri(), NULL, microtime() );
    wp_enqueue_style( 'custom-font', '//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700"' );
}

add_action( 'wp_enqueue_scripts', 'dotscott_theme' );

function dotscott_features() {
    register_nav_menu( 'headerMenu', 'Header Menu' );
}

add_action( 'after-setup-theme', 'dotscott_features' );