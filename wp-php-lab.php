<?php
/*
Plugin Name: WP PHP Lab
Description: A plugin to override PHP.ini settings.
Version: 1.0
Author: Rico Dadiz
Author URI: https://www.dadizrico.com
Plugin URI: https://www.dadizrico.com/plugins/wp-php-lab
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

spl_autoload_register(function($class) {
    $prefix = 'WP_PHP_Lab\\';
    $base_dir = __DIR__ . '/includes/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . 'class-' . str_replace('_', '-', strtolower($relative_class)) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use WP_PHP_Lab\WP_PHP_Lab;

function run_wp_php_lab() {
    $plugin = new WP_PHP_Lab();
    $plugin->run();
}

run_wp_php_lab();
