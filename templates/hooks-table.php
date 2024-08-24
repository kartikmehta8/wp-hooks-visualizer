<?php
/**
 * Hooks table template.
 */
?>

<h2><?php esc_html_e( 'Hooks Table', 'wp-hooks-visualizer' ); ?></h2>
<table class="widefat fixed" cellspacing="0">
    <thead><tr><th><?php esc_html_e( 'Hook Name', 'wp-hooks-visualizer' ); ?></th><th><?php esc_html_e( 'Hook Callback', 'wp-hooks-visualizer' ); ?></th></tr></thead>
    <tbody>
        <?php if ( ! empty( $hooks ) ) : ?>
            <?php foreach ( $hooks as $hook ) : ?>
                <tr>
                    <td><?php echo isset($hook['hook_name']) ? esc_html( $hook['hook_name'] ) : ""; ?></td>
                    <td><?php echo isset($hook['callback']) ? esc_html( is_string($hook['callback']) ? $hook['callback'] : 'Closure/Anonymous Function or Object Callback' ) : ""; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr><td colspan="2"><?php esc_html_e( 'No hooks found.', 'wp-hooks-visualizer' ); ?></td></tr>
        <?php endif; ?>
    </tbody>
</table>
