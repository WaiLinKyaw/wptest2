<?php

function whiz_customizer_upgrade_to_pro($wp_customize)
{

	$wp_customize->add_section(new Whiz_Button_Control($wp_customize, 'upgrade-to-pro',	array(
		'title'    => esc_html__('★ Whiz Pro ', 'whiz'),
		'type'	=> 'button',
		'pro_text' => esc_html__('Upgrade to Pro', 'whiz'),
		'pro_url'  => esc_url('https://graphthemes.com/whiz/'),
		'priority' => 1
	)));
}
add_action('customize_register', 'whiz_customizer_upgrade_to_pro');


function whiz_enqueue_custom_admin_style()
{
	wp_register_style('whiz-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.css', false);
	wp_enqueue_style('whiz-button');

	wp_enqueue_script('whiz-button', get_template_directory_uri() . '/inc/blocks/includes/button/button.js', array('jquery'), false, true);
}
add_action('admin_enqueue_scripts', 'whiz_enqueue_custom_admin_style');
