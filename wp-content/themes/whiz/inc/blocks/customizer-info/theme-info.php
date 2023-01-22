<?php

add_action('customize_register', 'whiz_customizer_theme_info');

function whiz_customizer_theme_info($wp_customize)
{

	$wp_customize->add_section('whiz_theme_info_section', array(
		'title'       => esc_html__('❂ Theme Info', 'whiz'),
		'priority' => 2
	));


	$wp_customize->add_setting('theme_info', array(
		'default' => '',
		'sanitize_callback' => 'wp_kses_post',
	));

	$theme_info = '';

	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__('Theme Details', 'whiz') . ': </label><a class="button alignright" href="' . esc_url('https://graphthemes.com/whiz/') . '" target="_blank">' . esc_html__('Click Here', 'whiz') . '</a></span><hr>';

	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__('How to use', 'whiz') . ': </label><a class="button alignright" href="' . esc_url('https://graphthemes.com/theme-docs/whiz/') . '" target="_blank">' . esc_html__('Click Here', 'whiz') . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__('View Demo', 'whiz') . ': </label><a class="button alignright" href="' . esc_url('https://graphthemes.com/preview/?product_id=whiz') . '" target="_blank">' . esc_html__('Click Here', 'whiz') . '</a></span><hr>';
	$theme_info .= '<span class="sticky_info_row wp-clearfix"><label class="row-element">' . esc_html__('Support Forum', 'whiz') . ': </label><a class="button alignright" href="' . esc_url('https://wordpress.org/support/theme/whiz') . '" target="_blank">' . esc_html__('Click Here', 'whiz') . '</a></span><hr>';

	$wp_customize->add_control(new Whiz_Custom_Text($wp_customize, 'theme_info', array(
		'section' => 'whiz_theme_info_section',
		'label' => $theme_info
	)));
}
