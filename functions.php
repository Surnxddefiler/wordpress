<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'menu');
add_action('widgets_init', 'side');
function menu(){
    register_nav_menu('primary', 'headerMenu');
}
function style_theme(){
    wp_enqueue_style('style',  get_stylesheet_uri()); // онсновной стайл сиэсэс
    wp_enqueue_style('main',  get_template_directory_uri() . '/assets/css/main.css'); //Вызов стиля мейн сиэсэс
}
function scripts_theme(){
    wp_enqueue_script('script',  get_template_directory_uri() . '/assets/js/script.js' );
}
function side(){
    register_sidebars( array(
        'name' => 'sidebar',
        'id'   => 'sidebar',
        'description'   => 'Displayed as a sidebar only on the home page of the site.',
    ) );
}