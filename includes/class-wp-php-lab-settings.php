<?php
namespace WP_PHP_Lab;

class WP_PHP_Lab_Settings {

    private $settings;

    public function __construct() {
        $this->settings = [
            'max_execution_time' => ini_get('max_execution_time'),
            'memory_limit' => ini_get('memory_limit'),
            'post_max_size' => ini_get('post_max_size'),
            'upload_max_filesize' => ini_get('upload_max_filesize'),
            'max_input_time' => ini_get('max_input_time'),
            'max_input_vars' => ini_get('max_input_vars')
        ];
    }

    public function get_settings() {
        return $this->settings;
    }

    public function save_settings($settings) {
        foreach ($settings as $key => $value) {
            if (array_key_exists($key, $this->settings)) {
                ini_set($key, $value);
            }
        }
    }
}
