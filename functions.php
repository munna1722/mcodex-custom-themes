<?php

/**
 * My Theme Function
*/

// Theme title
 add_theme_support('title-tag');

 //Theme CSS and jQuery file calling

 function mcodex_css_js_file_calling(){
    wp_enqueue_style('mcodex_style', get_stylesheet());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.2', 'all');
    wp_register_style('custom', get_template_directory_uri(). '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom.css');

    //jQuery
    wp_enqueue_script('jQuery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.3.2', true );
    wp_enqueue_script('main', get_template_directory_uri(). '/js/main.js', array(), '1.0.0', true);

 }
 add_action( 'wp_enqueue_scripts', 'mcodex_css_js_file_calling');