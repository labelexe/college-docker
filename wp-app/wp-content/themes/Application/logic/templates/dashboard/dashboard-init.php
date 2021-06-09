<?php

/**
 * Add dashboard options
 * (Инициализация dashboard опций темы)
 */
//require_once LOGIC_THEME_PATH_TEMPLATES_DASHBOARD . '/special_tags-views.php';
//require_once LOGIC_THEME_PATH_TEMPLATES_DASHBOARD . '/options-views.php';




function wp_hook_javascript() {
    ?>
    <script>console.log('Dashboard (init) ... success');</script>
<?php
}
add_action('admin_footer', 'wp_hook_javascript');
