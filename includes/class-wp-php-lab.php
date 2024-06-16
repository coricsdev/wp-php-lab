<?php
namespace WP_PHP_Lab;

class WP_PHP_Lab {

    public function run() {
        add_action('admin_menu', [$this, 'add_plugin_menu']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_styles']);
    }

    public function add_plugin_menu() {
        add_menu_page(
            __('WP PHP Lab', 'wp-php-lab'),
            __('WP PHP Lab', 'wp-php-lab'),
            'manage_options',
            'wp-php-lab',
            [$this, 'display_settings_page'],
            'dashicons-admin-generic',
            6
        );
    }

    public function display_settings_page() {
        require_once plugin_dir_path(__FILE__) . '../admin/views/settings.php';
    }

    public function enqueue_styles() {
        wp_enqueue_style('wp-php-lab-admin-styles', plugin_dir_url(__FILE__) . '../assets/css/admin-styles.css');
    }
}
