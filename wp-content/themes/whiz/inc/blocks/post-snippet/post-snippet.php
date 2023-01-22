<?php

add_action('customize_register', 'whiz_register_post_snippet_customization_section');
function whiz_register_post_snippet_customization_section($wp_customize)
{

	$wp_customize->add_section('whiz_post_snippet_customization_section', array(
		'title'	=> esc_html__('Post Snippet', 'whiz'),
		'priority'	=> 22
	));
}


/* Add Default General Settings for Customizer Settings */
require dirname(__FILE__) . '/default-post-snippet.php';

require dirname(__FILE__) . '/featured-image/featured-image.php';

require dirname(__FILE__) . '/date/date.php';

require dirname(__FILE__) . '/author/author.php';

require dirname(__FILE__) . '/comment/comment.php';

require dirname(__FILE__) . '/category/category.php';

require dirname(__FILE__) . '/tag/tag.php';

require dirname(__FILE__) . '/excerpt/excerpt.php';

require dirname(__FILE__) . '/readmore/readmore.php';

require dirname(__FILE__) . '/share/social-share.php';
