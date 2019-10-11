<?php 
    //Load in Our CSS and JS
function _themename_enqueue_styles() {
    //Include Jquery
    wp_register_script( 'jquery', 'https://ajax.go
    ogleapis.com/ajax/libs/d3js/5.12.0/d3.min.js', array(), NULL, true);
    //Include Google Maps
    wp_register_script( 'googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCQAEZRd61hManK-vuoD-z_G_0L00ZaMwk&callback=initMap', array(), '', true);
    // Carousel JS libs
    wp_enqueue_script('googleapis');
    wp_enqueue_script( 'owlCarouselJs', get_template_directory_uri() . '/dist/assets/lib/owlCarousel/owl.carousel.min.js', array('jquery'), NULL,  microtime(), true);
    // Costum JS file
    wp_enqueue_script( 'bundle', get_template_directory_uri() . '/dist/assets/scripts/bundle.js', array('jquery'),  microtime(), true);
    // Carousel CSS File
    wp_enqueue_style( 'owlCarouselDefault', get_template_directory_uri() . '/dist/assets/lib/owlCarousel/assets/owl.theme.default.min.css', NULL, microtime(), 'all');
    // Carousel CSS File
    wp_enqueue_style( 'owlCarousel', get_template_directory_uri() . '/dist/assets/lib/owlCarousel/assets/owl.carousel.min.css', NULL, microtime(), 'all');
    // Costum CSS File
    wp_enqueue_style( '_themename-styles', get_template_directory_uri() . '/dist/assets/styles/bundle.css', NULL, microtime(), 'all');
    
}
add_action('wp_enqueue_scripts', '_themename_enqueue_styles');
