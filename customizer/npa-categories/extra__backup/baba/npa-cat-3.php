<?php
$catIdNo = 3;
$wp_customize->add_section('npa_category_bg_text_color', array(
  'title'       =>  __($catIdNo . ' No. Category', 'npa'),
  'description' => __('If you want to upgrade Category\'s name, text color and background color, you can do it here.'),
  'panel'       => 'npa_all_categories',
));

// Background Color
$catBgID = 'npa_category_bg_id_' . $catIdNo;
$wp_customize->add_setting($catBgID, array( // changable npa_category_bg_id
  'default'   => '#000000',
  'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $catBgID, array(
  'label'      => __('Background color', 'npa'),
  'settings'   => $catBgID,
  'section'    => 'npa_category_bg_text_color',
  'type'      => 'color'
)));

// Text Color
$catBgID = 'npa_category_text_id_' . $catIdNo;
$wp_customize->add_setting($catBgID, array( // changable npa_category_bg_id
  'default'   => '#ffffff',
  'transport' => 'postMessage'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $catBgID, array(
  'label'     => __('Text Color', 'npa'),
  'settings'  => $catBgID,
  'section'   => 'npa_category_bg_text_color',
  'type'      => 'color'
)));