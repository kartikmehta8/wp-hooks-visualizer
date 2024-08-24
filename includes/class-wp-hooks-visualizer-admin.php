<?php
/**
 * The admin-specific functionality of the plugin.
 */

/**
 * Class WP_Hooks_Visualizer_Admin is responsible for handling the admin-specific functionality of the plugin.
 */
class WP_Hooks_Visualizer_Admin {

    /**
     * Adds the admin menu page.
     */
    public static function add_menu_page() {
        // Add the admin menu page.
        add_options_page(
            __( 'WP Hooks Visualizer', 'wp-hooks-visualizer' ),
            __( 'WP Hooks Visualizer', 'wp-hooks-visualizer' ),
            'manage_options',
            'wp-hooks-visualizer',
            array( __CLASS__, 'render_admin_page' )
        );
    }

    /**
     * Renders the admin page.
     */
    public static function render_admin_page() {
        // Check if the current user has the required capability.
        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }

        // Get the hooks.
        $search_query = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
        $hooks = WP_Hooks_Visualizer_Handler::get_hooks($search_query);

        // Load the admin page template.
        require_once plugin_dir_path( __FILE__ ) . '../templates/admin-page.php';
    }
}
