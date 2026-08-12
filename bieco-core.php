<?php
/**
 * Plugin Name: Bieco Core
 * Description: Custom functionality for the Bieco website.
 * Version: 1.0.0
 * Author: FutureTech Applications
 */

if (!defined('ABSPATH')) {
    exit;
}

define('BIECO_CORE_VERSION', '1.0.0');
define('BIECO_CORE_PATH', plugin_dir_path(__FILE__));
define('BIECO_CORE_URL', plugin_dir_url(__FILE__));

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'bieco-core-style',
        BIECO_CORE_URL . 'assets/css/bieco.css',
        [],
        BIECO_CORE_VERSION
    );

    wp_enqueue_script(
        'bieco-core-script',
        BIECO_CORE_URL . 'assets/js/bieco.js',
        [],
        BIECO_CORE_VERSION,
        true
    );

});