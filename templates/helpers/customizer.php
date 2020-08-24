<?php

/**
 * 
 * Theme Name:Wordpress customizer Setting
 * 
 * 
 */

// WP_Customizer_Control
function fn_customizer_settings($WP_customizer){

    //add customizer setting
    //include new section 
    $WP_customizer->add_section('header',array(
        'title'=>__('Header Settings','Daily'),
        'priority'=>70
    ));
    // allow us to add capability to the customizer setting 
    $WP_customizer->add_setting('header_image',array(
        'capability'=>'edit_theme_options'
    ));

    //adding controls in the customizer settings
    $WP_customizer->add_control(new WP_Customize_Image_Control($WP_customizer,'header_image',array(
        'label'=>__('Heaer Image','Daily'),
        'section'=>'header'
    )));


     //add header text
     $WP_customizer->add_setting('header_text_field',array(
        'capability'=>'edit_theme_options',
        'default'=>'Simplicity'
    ));

    $WP_customizer->add_control('heaader_text_control',array(
        'label'=>__('Header Text','Daily'),
        'description'=>'Change Header text',
        'Section'=>'header',
        'settings'=>'header_text_field'
    ));




}

add_action('customize_register','fn_customizer_settings');




?>