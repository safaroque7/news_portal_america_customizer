<?php
//Header area function
$wp_customize->add_section('npa_category_bg', array(
  'title'         =>  __('All Categirt BG color', 'npa'),
  'description'   => 'If you want to update your header area, you can do it here.'
));

$wp_customize->add_setting('npa_category_bg_id', array(
  'default' => '#000000',
  'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'npa_category_bg_id', array(
  'label'         => __('Logo Upload', 'npa'),
  // 'description'   => 'If you are interested to upload your new logo, you can do it from here.',
  'settings'       => 'npa_category_bg_id',
  'section'       => 'npa_category_bg',
)));
