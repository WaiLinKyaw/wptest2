<?php

/**
 * Add a new page under Appearance
 */

function whiz_getting_started_menu()
{

	add_theme_page(esc_html__('Getting Started', 'whiz'), esc_html__('Getting Started', 'whiz'), 'edit_theme_options', 'whiz-get-started', 'whiz_getting_started_page');
}
add_action('admin_menu', 'whiz_getting_started_menu');

/**
 * Enqueue styles for the help page.
 */
function whiz_admin_scripts()
{
	global $pagenow;

	if ($pagenow != 'themes.php') {
		return;
	}

	wp_enqueue_style('whiz-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css', array(), WHIZ_VERSION);
}
add_action('admin_enqueue_scripts', 'whiz_admin_scripts');

/**
 * Add the theme page
 */
function whiz_getting_started_page()
{ ?>

	<div class="main-info">

		<?php get_template_part('inc/getting-started/template-parts/main', 'info'); ?>

	</div>
	<div class="top-wrapper">

		<?php get_template_part('inc/getting-started/template-parts/free-vs', 'pro'); ?>

		<?php get_template_part('inc/getting-started/template-parts/faq'); ?>


	</div>
<?php
}
