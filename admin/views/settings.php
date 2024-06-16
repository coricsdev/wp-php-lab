<?php
require_once plugin_dir_path(__FILE__) . '../../includes/class-wp-php-lab-settings.php';

use WP_PHP_Lab\WP_PHP_Lab_Settings;

$settings = new WP_PHP_Lab_Settings();
$current_settings = $settings->get_settings();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $settings->save_settings($_POST);
    $current_settings = $settings->get_settings();
}

?>
<div class="wrap">
    <h1><?php _e('WP PHP Lab Settings', 'wp-php-lab'); ?></h1>
    <form method="post">
        <table class="form-table">
            <tr>
                <th scope="row"><?php _e('Setting', 'wp-php-lab'); ?></th>
                <th scope="row"><?php _e('Value', 'wp-php-lab'); ?></th>
            </tr>
            <?php foreach ($current_settings as $key => $value) : ?>
                <tr>
                    <td><label for="<?php echo esc_attr($key); ?>"><?php echo esc_html($key); ?></label></td>
                    <td><input type="text" name="<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($value); ?>" /></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Settings', 'wp-php-lab'); ?>" />
        </p>
    </form>
</div>
