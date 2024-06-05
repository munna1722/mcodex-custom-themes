<?php

/**
 * My Theme Function
*/

// Theme Title
add_theme_support('title-tag');


// Theme CSS and jQuery File calling
function ali_css_js_file_calling(){
  wp_enqueue_style('ali-style', get_stylesheet_uri());
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
  wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('custom');


  //jQuery
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true' );
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );

}
add_action('wp_enqueue_scripts', 'ali_css_js_file_calling');

 // Theme Function
 function mcodex_customizer_register($wp_customize){
  $wp_customize->add_section('mcodex_header_area', array(
    'title'       =>__('New Header Area', 'mcodex'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('mcodex_logo', array(
    'default' => get_bloginfo('template_directory') . 'img/logo.jpg',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'mcodex_logo', array(
    'label'       => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting'     => 'mcodex_loge',
    'section'     => 'mcodex_header_area',
  ) ));

  $wp_customize->add_setting('header_bg', array(
    'dafult'    => '#fff',
    'transport' => 'refresh',
  ));
   
  $wp_customize->add_control(new WP_Customize_color_control($wp_customize, 'header_background_color', array(
     'label'    =>__('Header Background Color', 'mcodex'),
     'section'  => 'mcodex_header_area',
     'settings' => 'header_bg',
  )));

  
 }
 add_action('customize_register', 'mcodex_customizer_register');

 // Menu Register
  register_nav_menu('main_menu',__('Main Menu', 'alihossain') );