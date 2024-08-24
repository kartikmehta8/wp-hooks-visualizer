<?php
/**
 * Admin page template.
 */
?>

<div class="wrap">
    <h1><?php esc_html_e( 'WP Hooks Visualizer', 'wp-hooks-visualizer' ); ?></h1>

    <?php settings_errors(); ?>

    <?php include plugin_dir_path( __FILE__ ) . 'search-form.php'; ?>
    <?php include plugin_dir_path( __FILE__ ) . 'hooks-table.php'; ?>
</div>
