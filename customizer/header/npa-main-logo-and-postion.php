<?php
$wp_customize->add_section('npa_header_area', array(
    'title'         =>  __('Main Logo, position and Background Color', 'npa'),
    'description'   => 'If you want to update main logo, you can do it here.',
    'panel'         => 'npa_header_panel',
));

/**
 * ==========================
 * Main Logo upload 
 * ==========================
 */
$wp_customize->add_setting('npa_main_logo', array(
    'default' => get_bloginfo('template_directory') . '/images/main_logo.png'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'npa_main_logo', array(
    'label'        => __('Logo Upload', 'npa'),
    'settings'     => 'npa_main_logo',
    'section'      => 'npa_header_area',
)));

/**
 * ==========================
 * Main Logo Background Color
 * ==========================
 */
$wp_customize->add_setting('npa_main_logo_bg_color', array(
    'default'       => '#',
    'transport'     => 'refresh',
));
$wp_customize->add_control('npa_main_logo_bg_color', array(
    'label'     => __('Background Color', 'npa'),
    'settings'  => 'npa_main_logo_bg_color',
    'section'   => 'npa_header_area',
    'type'      => 'color'
));

/**
 * ============================
 * Main logo Postion code start
 * ============================
 */
$wp_customize->add_setting('npa_main_logo_position', array(
    'default' => 'npa_left_logo',
));
$wp_customize->add_control('npa_main_logo_position', array(
    'label'         => __('Main Menu Position'),
    'settings'      => 'npa_main_logo_position',
    'section'       => 'npa_header_area',
    'type'          => 'radio',
    'choices'       => array(
        'npa_left_logo'     => 'Left Menu',
        'npa_right_logo'    => 'Right Menu',
    ),

));
