<?php

add_action('customize_register', 'whiz_post_snippet_readmore');
function whiz_post_snippet_readmore($wp_customize)
{

    $wp_customize->add_setting('post_snippet_hide_show_readmore', array(
        'sanitize_callback'     =>  'whiz_sanitize_checkbox',
        'default'               =>  whiz_get_default_post_snippet_show_hide_read_more()
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'post_snippet_hide_show_readmore', array(
        'label' => esc_html__('Show/Hide Read More', 'whiz'),
        'section' => 'whiz_post_snippet_customization_section',
        'settings' => 'post_snippet_hide_show_readmore',
        'type' => 'toggle',
    )));
}


add_action('customize_register', 'whiz_post_snippet_readmore_text');
function whiz_post_snippet_readmore_text($wp_customize)
{

    $wp_customize->add_setting('post_snippet_readmore_text', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  whiz_get_default_post_snippet_read_more_text()
    ));

    $wp_customize->add_control('post_snippet_readmore_text', array(
        'settings' => 'post_snippet_readmore_text',
        'type' => 'text',
        'section' => 'whiz_post_snippet_customization_section',
        'label' => esc_html__('Read More Text', 'whiz'),
        'active_callback' => function () {
            return get_theme_mod('post_snippet_hide_show_readmore', whiz_get_default_post_snippet_show_hide_read_more());
        }
    ));
}
