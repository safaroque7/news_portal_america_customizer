<?php

add_action('customize_register', 'npa_ontest_panel_customization');

function npa_ontest_panel_customization($wp_customize)
{
  $wp_customize->add_panel('npa_all_categories', array(
    'title' => __('All Category names'),
    'priority' => 10,
  ));
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-3.php';