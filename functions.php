<?php

/**
 * Tempelte Name:Functions.php
 * Description:Add features to wordpress theme
 * 
 */

//add customizer.php file
require_once('templates/helpers/customizer.php');

function fn_theme_scripts(){
    /*include style file */
    //adding bootstrap font
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
   
    //adding carousel css file
    wp_enqueue_style('carousel',get_template_directory_uri().'/css/owl.carousel.css');

    //adding owl theme css file
    wp_enqueue_style('theme-owl',get_template_directory_uri().'/css/owl.theme.default.min.css');

    //adding fontawesome font
    wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome.min.css');

    //adding custom css file
    wp_enqueue_style('custom-style',get_stylesheet_uri());

 }

 add_action('wp_enqueue_scripts','fn_theme_scripts');


 function fn_theme_supports(){

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',array('search-form'));
    add_theme_support('custom-logo');

  }
    add_action('after_setup_theme','fn_theme_supports');

    //register Naviagation menu
    function fn_nav_menu(){
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu','text_domain'),
            'footer-menu' => __('Footer Menu','text_domain')
        ));
    }

    add_action('init','fn_nav_menu');

    function add_link_atts($atts){
        $atts['class']='smoothScroll' ;
        return $atts;
    }

    add_filter('nav_menu_link_attributes','add_link_atts');
?>