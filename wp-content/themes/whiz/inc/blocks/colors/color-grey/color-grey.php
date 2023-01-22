<?php

add_action('customize_register', 'whiz_grey_color');

function whiz_grey_color($wp_customize)
{
    $wp_customize->add_setting('grey_color', array(
        'default'     => whiz_get_default_grey_color(),
        'transport'   => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'grey_color', array(
        'label'      => esc_html__('Grey Color', 'whiz'),
        'section'    => 'colors',
        'settings'   => 'grey_color',

    )));
}


add_action('customize_preview_init', 'whiz_grey_color_enqueue_scripts');
function whiz_grey_color_enqueue_scripts()
{
    wp_enqueue_script('graphthemes-grey-customizer', get_template_directory_uri() . '/inc/blocks/colors/color-grey/customizer-color-grey.js', array('jquery'), '', true);
}
