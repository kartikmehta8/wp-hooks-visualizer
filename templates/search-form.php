<?php
/**
 * Search form template.
 */
?>

<h2><?php esc_html_e( 'Search Hooks', 'wp-hooks-visualizer' ); ?></h2>
<form method="get">
    <input type="hidden" name="page" value="wp-hooks-visualizer" />
    <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>" placeholder="<?php esc_attr_e( 'Search hooks...', 'wp-hooks-visualizer' ); ?>" />
    <input type="submit" value="<?php esc_attr_e( 'Search', 'wp-hooks-visualizer' ); ?>" class="button" />
</form>
