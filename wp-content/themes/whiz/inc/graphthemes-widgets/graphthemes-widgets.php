<?php


if (!defined('WHIZ_WIDGET_PATH')) {
    define('WHIZ_WIDGET_PATH', dirname(__FILE__));
}


/**
 * Author Profile Widget.
 */
require_once WHIZ_WIDGET_PATH . '/includes/class-graphthemes-widget-functions.php';

require_once WHIZ_WIDGET_PATH . '/includes/widgets/widget-author-profile.php';

require_once WHIZ_WIDGET_PATH . '/includes/widgets/widget-recent-posts.php';

require_once WHIZ_WIDGET_PATH . '/includes/widgets/widget-popular-posts.php';
