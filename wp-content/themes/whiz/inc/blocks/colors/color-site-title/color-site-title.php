<?php

add_action('customize_register', 'whiz_site_title_color');
function whiz_site_title_color($wp_customize)
{

	$wp_customize->add_setting('site_title_color_option', array(
		'default'     => whiz_get_default_site_title_color(),
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_title_color_option', array(
		'label'      => esc_html__('Site Identity Color', 'whiz'),
		'section'    => 'title_tagline',
		'settings'   => 'site_title_color_option',
	)));
}



add_action('customize_preview_init', 'whiz_site_title_color_enqueue_scripts');
function whiz_site_title_color_enqueue_scripts()
{
	wp_enqueue_script('graphthemes-site-title-color-customizer', get_template_directory_uri() . '/inc/blocks/colors/color-site-title/customizer-color-site-title.js', array(), '', true);
}
