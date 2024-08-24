<?php
/**
 * Plugin Name: WP Hooks Visualizer
 * Description: A plugin to visualize all registered hooks (actions and filters) in WordPress.
 * Version: 1.0
 * Author: Kartik Mehta
 * Author URI: https://mrmehta.in
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: captcha
 * Requires at least: 6.0
 * Requires PHP: 8.1.29
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Autoload class.
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-hooks-visualizer-autoloader.php';
WP_Hooks_Visualizer_Autoloader::register();

// Activation, deactivation hooks.
register_activation_hook( __FILE__, array( 'WP_Hooks_Visualizer', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'WP_Hooks_Visualizer', 'deactivate' ) );

// Initialize the plugin.
add_action( 'plugins_loaded', array( 'WP_Hooks_Visualizer', 'init' ) );
