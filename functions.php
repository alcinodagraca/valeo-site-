<?php

//Add Theme Support
function valeoservicos_init(){
    add_theme_support( 'html5' );
    add_theme_support( 'costum-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'valeoservicos_init');

//Load in Our CSS and JS
function valeoservicos_enqueue_styles() {
    //Include Jquery
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/d3js/5.12.0/d3.min.js', array(), NULL, true);
    // Carousel JS lib
    wp_enqueue_script( 'owlCarouselJs', get_template_directory_uri() . '/lib/owlCarousel/owl.carousel.min.js', array('jquery'), NULL,  microtime(), true);
    // Costum JS file
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', NULL,  microtime(), true);
    // Carousel CSS File
    wp_enqueue_style( 'owlCarouselDefault', get_template_directory_uri() . '/lib/owlCarousel/assets/owl.theme.default.min.css', NULL, microtime(), 'all');
    // Carousel CSS File
    wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/lib/owlCarousel/assets/owl.carousel.min.css', NULL, microtime(), 'all');
    // Costum CSS File
    wp_enqueue_style( 'style', get_stylesheet_uri(), NULL, microtime(), 'all');
    
}
add_action('wp_enqueue_scripts', 'valeoservicos_enqueue_styles');

//Register Menus
register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'valeoservicos'),
    'main-menu' => esc_html__('Footer Menu', 'valeoservicos')
]);


?>