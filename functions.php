<?php

//Add Theme Support
function _themename_init(){
    add_theme_support( 'html5' );
    add_theme_support( 'costum-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', '_themename_init');

require_once('lib/enqueue-assets.php');

//Register Menus
register_nav_menus([
    'main-menu' => esc_html__('Main Menu', '_themename'),
    'main-menu' => esc_html__('Footer Menu', '_themename')
]);


?>