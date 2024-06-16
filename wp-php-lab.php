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

require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-php-lab.php';

use WP_PHP_Lab\WP_PHP_Lab;

function run_wp_php_lab() {
    $plugin = new WP_PHP_Lab();
    $plugin->run();
}

run_wp_php_lab();
