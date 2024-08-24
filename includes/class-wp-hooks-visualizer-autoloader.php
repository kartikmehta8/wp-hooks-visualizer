<?php
/**
 * Autoloader for the plugin.
 */

/**
 * Class WP_Hooks_Visualizer_Autoloader is responsible for autoloading the plugin classes.
 */
class WP_Hooks_Visualizer_Autoloader {

    /**
     * Registers the autoloader.
     */
    public static function register() {
        spl_autoload_register( array( __CLASS__, 'autoload' ) );
    }

    /**
     * Autoloads the plugin classes.
     *
     * @param string $class_name The class name.
     */
    public static function autoload( $class_name ) {
        // If the class name does not start with 'WP_Hooks_Visualizer', return.
        if ( 0 !== strpos( $class_name, 'WP_Hooks_Visualizer' ) ) {
            return;
        }

        // Convert the class name to lowercase and replace underscores with hyphens.
        $class_name = str_replace( '_', '-', strtolower( $class_name ) );
        $file       = dirname( __FILE__ ) . '/class-' . $class_name . '.php';

        // If the file exists, require it.
        if ( file_exists( $file ) ) {
            require $file;
        }
    }
}
