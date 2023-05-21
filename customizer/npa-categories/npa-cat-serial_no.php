<?php
$catIdNo = 26; //only changable
$wp_customize->add_section('npa_category_switcher', array(
  'title'       =>  __('Category Serial No.', 'npa'),
  'description' => __('If you want to show category serial No., click here to show'),
  'panel'       => 'npa_all_categories',
));

// Background Color
$catSwID = 'npa_category_switcher_id';
$wp_customize->add_setting($catSwID, array( // changable npa_category_bg_id
  'default'   => '#',
  'transport' => 'refresh'
));
$wp_customize->add_control($catSwID, array(
  'settings'   => $catSwID,
  'section'    => 'npa_category_switcher',
  'type'      => 'switch_setting'
));