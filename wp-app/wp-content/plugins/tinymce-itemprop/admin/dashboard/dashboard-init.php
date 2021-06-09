<?php

/**
 * Add dashboard options
 * (Инициализация dashboard опций темы)
 */

require_once TINY_ITEMPROP_DIR_DASHBOARD_PATH.'/special_tags-views.php';


function wp_hook_javascript() {
    ?>
    <script>console.log('[Dashboard] Special Tag (init) ... success');</script>
<?php
}
add_action('admin_footer', 'wp_hook_javascript');
