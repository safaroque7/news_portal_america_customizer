<?php
add_action('customize_register', 'npa_customize_register');

function npa_customize_register($wp_customize)
{


    require get_template_directory() . '/include/customizer/npa-header-customizer.php';
    require get_template_directory() . '/include/customizer/npa-footer-customizer.php';




    

    



    
    

    /** 
     * ===============================
     * Main Logo Position Customization end
     * ==============================
     */



    //Output Customize CSS
    function npa_customize_css_for_background_color()
    { ?>
        <style>
            .npa_theme_bg_cl {
                background: <?php echo get_theme_mod('npa_theme_bg_color'); ?>
            }

            .npa-bg-ticker {
                background: <?php echo get_theme_mod('npa_scroll_bg') ?>;
            }

            .tickerH.text-color-ticker,
            #webticker .text-color-ticker a {
                color: <?php echo get_theme_mod('npa_scroll_text_color') ?>;
            }

            ul#faroqueId li a:hover,
            .current-menu-item>a {
                background: <?php echo get_theme_mod('npa_active_menu_bg'); ?>
            }
        </style>
<?php }
    add_action('wp_head', 'npa_customize_css_for_background_color');


    //Social Media Link
    $wp_customize->add_section('npa_social_media', array(
        'title'         =>  __('Social Media Links', 'npa'),
        'description'   => 'If you want to update social media links, you can do it here.'
    ));

    // Social Media Link 1
    $npa_social_media_1 = 'npa_social_media_1';

    $wp_customize->add_setting($npa_social_media_1, array(
        'default' => '#',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $npa_social_media_1, array(
        'label'         => __('Facebook', 'npa'),
        'description'   => __('Paste Facebook link here'),
        'settings'      => $npa_social_media_1,
        'section'       => 'npa_social_media',
        'type'          => 'text'
    )));


    // Social Media Link 2
    $npa_social_media_2 = 'npa_social_media_2';

    $wp_customize->add_setting($npa_social_media_2, array(
        'default' => '#',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $npa_social_media_2, array(
        'label'         => __('Twitter', 'npa'),
        'description'   => __('Paste Twitter link here'),
        'settings'      => $npa_social_media_2,
        'section'       => 'npa_social_media',
        'type'          => 'url'
    )));

    // Social Media Link 3
    $npa_social_media_3 = 'npa_social_media_3';

    $wp_customize->add_setting($npa_social_media_3, array(
        'default' => '#',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $npa_social_media_3, array(
        'label'         => __('Youtube', 'npa'),
        'description'   => __('Paste Youtube link here'),
        'settings'      => $npa_social_media_3,
        'section'       => 'npa_social_media',
        'type'          => 'text'
    )));


    /** 
     * ===============================
     * Theme Color Start
     * ==============================
     */
    $wp_customize->add_section('npa_theme_bg', array(
        'title'         => __('Theme Color', 'npa'),
        'priority'      => 30,
        'description'   => 'If you are intersted to chang theme color, you can do it from here'
    ));

    $wp_customize->add_setting('npa_theme_bg_color', array(
        'default'   => '#006400',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_theme_bg_color', array(
        'label'         => __('Theme Color', 'npa'),
        'section'       => 'npa_theme_bg',
        'settings'       => 'npa_theme_bg_color',
        'description'   => 'If you are interested to change theme color, you can do it from here',
        'type'          => 'color'
    )));

    $wp_customize->add_setting('npa_theme_text_color', array(
        'default'   => '#ffffff',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_theme_text_color', array(
        'label'         => __('Theme Text Color', 'npa'),
        'section'       => 'npa_theme_bg',
        'settings'       => 'npa_theme_text_color',
        'description'   => __(''),
        'type'          => 'color'
    )));

    // Menu Active Color
    $wp_customize->add_setting('npa_active_menu_bg', array(
        'default'       => 'FF0000',
        'transport'     => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_active_menu_bg', array(
        'label'         => __('Active Menu Background Color'),
        'section'       => 'npa_theme_bg',
        'settings'      => 'npa_active_menu_bg',
    )));

    // Scroll Background Color Option
    $wp_customize->add_setting('npa_scroll_bg', array(
        'default'   => '#FF0000',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_scroll_bg', array(
        'label'     => __('Scroll Background Color', 'npa'),
        'section'   => 'npa_theme_bg',
        'settings'  => 'npa_scroll_bg'
    )));

    //Scroll Text Color
    $wp_customize->add_setting('npa_scroll_text_color', array(
        'default'   => '#FFFFFF',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_scroll_text_color', array(
        'label'     => __('Scroll Text Color', 'npa'),
        'section'   => 'npa_theme_bg',
        'settings'  =>  'npa_scroll_text_color'
    )));
    /** 
     * ===============================
     * Theme Color End
     * ==============================
     */
}
