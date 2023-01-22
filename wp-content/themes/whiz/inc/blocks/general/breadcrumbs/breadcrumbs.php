<?php

add_action('customize_register', 'whiz_breadcrumbs');
function whiz_breadcrumbs($wp_customize)
{

    $wp_customize->add_setting('whiz_breadcrumbs_option', array(
        'sanitize_callback'     =>  'whiz_sanitize_checkbox',
        'default'               =>  whiz_get_default_breadcrumbs(),
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'whiz_breadcrumbs_option', array(
        'label' => esc_html__('Enable Breadcrumbs', 'whiz'),
        'section' => 'whiz_general_customization_section',
        'settings' => 'whiz_breadcrumbs_option',
        'type' => 'toggle',
    )));
}
