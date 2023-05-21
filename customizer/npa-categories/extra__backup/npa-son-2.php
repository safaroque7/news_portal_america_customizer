<?php

/**
   * ================================
   * 2 No son deatils
   * ===============================
   */

  $wp_customize->add_section('npa_son_2', array(
    'title'   => __('Son 2'),
    'panel'   => 'npa_baba'
  ));

  //son's name
  $wp_customize->add_setting('npa_son_2_name', array( //npa_son_2_name
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('npa_son_2_name', array( //npa_son_control_2
    'label' => __('Son\'s Name'), //Son\'s Name
    'section' => 'npa_son_2',
    'settings' => 'npa_son_2_name', //npa_son_2_name
    'type' => 'text',
  ));

  //son's phone number
  $wp_customize->add_setting('npa_son_phone_number_2', array( //npa_son_2_name
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('npa_son_phone_number_2', array( //npa_son_control_2
    'label' => __('Son\'s Phone Number'), //Son\'s Name
    'section' => 'npa_son_2',
    'settings' => 'npa_son_phone_number_2', //npa_son_2_name
    'type' => 'tel',
  ));

  //son's color
  $wp_customize->add_setting('npa_son_phone_color_2', array( //npa_son_2_name
    'default' => '#000000',
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control('npa_son_phone_color_2', array( //npa_son_control_2
    'label' => __('Son\'s Color'), //Son\'s Name
    'section' => 'npa_son_2',
    'settings' => 'npa_son_phone_color_2', //npa_son_2_name
    'type' => 'color',
  ));
  ?>