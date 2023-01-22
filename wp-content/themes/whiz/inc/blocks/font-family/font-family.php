<?php

/* Add Google Fonts */
require dirname(__FILE__) . '/google-fonts.php';

/* Add Default Font Family for Customizer Settings */
require dirname(__FILE__) . '/default-font-family.php';

include_once wp_normalize_path(dirname(__FILE__) . '/inc/helper-functions.php');
include_once wp_normalize_path(dirname(__FILE__) . '/inc/class-webfonts-local.php');
include_once wp_normalize_path(dirname(__FILE__) . '/inc/class-fonts-google-local.php');



require dirname(__FILE__) . '/site-identity/site-identity-font-family.php';
require dirname(__FILE__) . '/main/main-font-family.php';
require dirname(__FILE__) . '/secondary/secondary-font-family.php';


add_action('wp_enqueue_scripts', 'whiz_google_fonts_scripts');
function whiz_google_fonts_scripts()
{
    $args = whiz_used_google_fonts();
    wp_enqueue_style('google-fonts', whiz_fonts_url($args), array(), null);
}
