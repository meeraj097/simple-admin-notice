<?php
/**
 * Plugin Name: Simple Admin Notice Manager
 * Plugin URI: https://github.com/meeraj097/simple-admin-notice
 * Description: A lightweight WordPress plugin to display dismissible admin notices.
 * Version: 1.0.0
 * Author: Meeraj K
 * Author URI: https://github.com/meeraj097
 * Requires PHP: 7.4
 * Tested up to: WordPress 6.x
 */

if (!defined('ABSPATH')) {
    exit;
}

function sanm_enqueue_assets() {
    wp_enqueue_style(
        'sanm-admin-css',
        plugin_dir_url(__FILE__) . 'assets/css/admin.css'
    );

    wp_enqueue_script(
        'sanm-admin-js',
        plugin_dir_url(__FILE__) . 'assets/js/admin.js',
        array('jquery'),
        null,
        true
    );
}
add_action('admin_enqueue_scripts', 'sanm_enqueue_assets');

function sanm_show_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible sanm-notice">
        <p><strong>Welcome!</strong> This is a custom admin notice from Simple Admin Notice Manager.</p>
    </div>
    <?php
}
add_action('admin_notices', 'sanm_show_admin_notice');
