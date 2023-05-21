<?php

add_action('customize_register', 'npa_ontest_panel_customization');

function npa_ontest_panel_customization($wp_customize)
{
  $wp_customize->add_panel('npa_all_categories', array(
    'title' => __('All Category names'),
    'priority' => 10,
  ));
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-serial_no.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-3.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-4.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-5.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-6.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-7.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-8.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-9.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-10.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-11.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-12.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-13.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-14.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-15.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-16.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-17.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-18.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-19.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-20.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-21.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-22.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-23.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-24.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-25.php';
  require get_template_directory().'/include/customizer/npa-categories/npa-cat-26.php';  
}