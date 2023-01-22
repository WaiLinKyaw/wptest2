<?php

add_action('customize_register', 'whiz_post_snippet_tag');
function whiz_post_snippet_tag($wp_customize)
{

    $wp_customize->add_setting('post_snippet_hide_show_tag', array(
        'sanitize_callback'     =>  'whiz_sanitize_checkbox',
        'default'               =>  whiz_get_default_post_snippet_tag()
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'post_snippet_hide_show_tag', array(
        'label' => esc_html__('Show/Hide Tags', 'whiz'),
        'section' => 'whiz_post_snippet_customization_section',
        'settings' => 'post_snippet_hide_show_tag',
        'type' => 'toggle',
    )));
}
