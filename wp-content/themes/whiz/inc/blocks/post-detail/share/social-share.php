<?php

add_action('customize_register', 'whiz_post_detail_social_share');
function whiz_post_detail_social_share($wp_customize)
{

    $wp_customize->add_setting('post_detail_hide_show_social_share', array(
        'sanitize_callback'     =>  'whiz_sanitize_checkbox',
        'default'               =>  whiz_get_default_post_detail_social_share()
    ));

    $wp_customize->add_control(new Graphthemes_Toggle_Control($wp_customize, 'post_detail_hide_show_social_share', array(
        'label' => esc_html__('Enable Social Share', 'whiz'),
        'section' => 'whiz_post_detail_customization_section',
        'settings' => 'post_detail_hide_show_social_share',
        'type' => 'toggle',
    )));
}




add_action('customize_register', 'whiz_post_detail_social_share_options');
function whiz_post_detail_social_share_options($wp_customize)
{

    $wp_customize->add_setting('post_detail_social_share_options', array(
        'sanitize_callback' => 'whiz_sanitize_array',
        'default'     => whiz_get_default_post_detail_social_share_options()
    ));

    $wp_customize->add_control(new Graphthemes_Multi_Check_Control($wp_customize, 'post_detail_social_share_options', array(
        'label' => esc_html__('Social Shares', 'whiz'),
        'section' => 'whiz_post_detail_customization_section',
        'settings' => 'post_detail_social_share_options',
        'type' => 'multi-check',
        'choices'     => array(
            'facebook' => esc_html__('Facebook', 'whiz'),
            'twitter' => esc_html__('Twitter', 'whiz'),
            'pinterest' => esc_html__('Pinterest', 'whiz'),
            'linkedin' => esc_html__('LinkedIn', 'whiz'),
            'email' => esc_html__('Email', 'whiz'),
        ),
        'active_callback' => function () {
            return get_theme_mod('post_detail_hide_show_social_share', whiz_get_default_post_detail_social_share());
        }
    )));

    $wp_customize->add_setting('twitter_id', array(
        'sanitize_callback' =>  'wp_kses_post',
    ));

    $wp_customize->add_control('twitter_id', array(
        'label' =>  esc_html__('Twitter ID:', 'whiz'),
        'section'   =>  'whiz_post_detail_customization_section',
        'Settings'  =>  'twitter_id',
        'type' => 'text',
        'active_callback' => function () {
            return get_theme_mod('post_detail_hide_show_social_share', whiz_get_default_post_detail_social_share());
        }
    ));
}
