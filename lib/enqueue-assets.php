<?php 
    //Load in Our CSS and JS
function valeoservicos_enqueue_styles() {
    //Include Jquery
    wp_register_script( 'jquery', 'https://ajax.go
    ogleapis.com/ajax/libs/d3js/5.12.0/d3.min.js', array(), NULL, true);
    // Carousel JS lib
    wp_enqueue_script( 'owlCarouselJs', get_template_directory_uri() . '/dist/assets/lib/owlCarousel/owl.carousel.min.js', array('jquery'), NULL,  microtime(), true);
    // Costum JS file
    wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/assets/scripts/app.js', NULL,  microtime(), true);
    // Carousel CSS File
    wp_enqueue_style( 'owlCarouselDefault', get_template_directory_uri() . '/dist/assets/lib/owlCarousel/assets/owl.theme.default.min.css', NULL, microtime(), 'all');
    // Carousel CSS File
    wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/dist/assets/lib/owlCarousel/assets/owl.carousel.min.css', NULL, microtime(), 'all');
    // Costum CSS File
    wp_enqueue_style( 'valeoservicos-styles', get_template_directory_uri() . '/dist/assets/styles/bundle.css', NULL, microtime(), 'all');
    
}
add_action('wp_enqueue_scripts', 'valeoservicos_enqueue_styles');
