<?php
/**
 * Main plugin class.
 */

/**
 * Class WP_Hooks_Visualizer is the main plugin class.
 */
class WP_Hooks_Visualizer {

    /**
     * Initializes the plugin.
     */
    public static function init() {
        // Register the admin menu.
        add_action( 'admin_menu', array( 'WP_Hooks_Visualizer_Admin', 'add_menu_page' ) );
    }

    /**
     * Activates the plugin.
     */
    public static function activate() {
        // Code to execute on plugin activation.
    }

    /**
     * Deactivates the plugin.
     */
    public static function deactivate() {
        // Code to execute on plugin deactivation.
    }
}
