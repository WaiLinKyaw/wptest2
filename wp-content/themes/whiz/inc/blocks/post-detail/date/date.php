<?php

add_action('customize_register', 'whiz_post_detail_date');
function whiz_post_detail_date($wp_customize)
{

    $wp_customize->add_setting('post_detail_hide_show_date', array(
        'sanitize_callback'     =>  'whiz_sanitize_checkbox',
        'default'               =>  whiz_get_default_post_detail_date()
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'post_detail_hide_show_date', array(
        'label' => esc_html__('Show/Hide Date', 'whiz'),
        'section' => 'whiz_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_date',
        'type' => 'toggle',
    )));
}
