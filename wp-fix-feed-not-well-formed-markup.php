<?php
/**
 * Plugin Name: WP Fix Feed Not Well-Formed Markup
 * Plugin URI: https://github.com/manovotny/wp-fix-feed-not-well-formed-markup
 * Description: Fixes WordPress not properly encoding markup when displayed in a feed.
 * Version: 1.1.0
 * Author: Michael Novotny
 * Author URI: http://manovotny.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: wp-fix-feed-not-well-formed-markup
 * GitHub Plugin URI: https://github.com/manovotny/wp-fix-feed-not-well-formed-markup
 */

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require_once __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

require_once __DIR__ . '/src/initialize.php';