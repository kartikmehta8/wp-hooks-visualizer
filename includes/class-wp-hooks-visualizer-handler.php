<?php
/**
 * File that contains the WP_Hooks_Visualizer_Handler class.
 */

/**
 * Class WP_Hooks_Visualizer_Handler is responsible for handling the hooks.
 */
class WP_Hooks_Visualizer_Handler {

    /**
     * Gets the hooks.
     *
     * @param string $search_query The search query.
     *
     * @return array The hooks.
     */
    public static function get_hooks( $search_query = '' ) {
        global $wp_filter;

        // Initialize the hooks array.
        $hooks = array();

        // Loop through the WordPress filters.
        foreach ( $wp_filter as $hook_name => $hook ) {
            // If a search query is provided and the hook name does not contain the search query, skip the hook.
            if ( $search_query && strpos( $hook_name, $search_query ) === false ) {
                continue;
            }

            // Loop through the callbacks.
            foreach ( $hook->callbacks as $priority => $callbacks ) {

                // Add the hook to the hooks array.
                foreach ( $callbacks as $callback_data ) {
                    $hooks[] = array(
                        'hook_name' => $hook_name,
                        'callback'    => $callback_data['function'],
                        'priority'    => $priority,
                    );
                }
            }
        }

        return $hooks;
    }

    /**
     * Gets the hook.
     *
     * @param string $hook_name The hook name.
     *
     * @return array|null The hook.
     */
    public static function get_hook( $hook_name ) {
        global $wp_filter;

        // If the hook exists and has callbacks, return the hook.
        if ( isset( $wp_filter[$hook_name] ) && ! empty( $wp_filter[$hook_name]->callbacks ) ) {
            $hooks = array();

            // Loop through the callbacks.
            foreach ( $wp_filter[$hook_name]->callbacks as $priority => $callbacks ) {

                // Add the hook to the hooks array.
                foreach ( $callbacks as $callback_data ) {
                    $hooks[] = array(
                        'hook_name' => $hook_name,
                        'callback'    => $callback_data['function'],
                        'priority'    => $priority,
                    );
                }
            }

            return $hooks;
        }

        return null;
    }
}
