<?php

add_action('customize_register', 'whiz_sticky_menu');
function whiz_sticky_menu($wp_customize)
{

    $wp_customize->add_setting('whiz_sticky_menu_option', array(
        'sanitize_callback'     =>  'whiz_sanitize_checkbox',
        'default'               =>  whiz_get_default_sticky_menu(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'whiz_sticky_menu_option', array(
        'label' => esc_html__('Enable Sticky Menu', 'whiz'),
        'section' => 'whiz_general_customization_section',
        'settings' => 'whiz_sticky_menu_option',
        'type' => 'toggle',
    )));
}
