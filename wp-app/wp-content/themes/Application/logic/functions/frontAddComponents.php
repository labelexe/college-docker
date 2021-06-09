<?php

// Стили и скрипты
add_action('wp_enqueue_scripts', 'add_theme_components', 11);
function add_theme_components()
{
    wp_enqueue_style('app_css', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_script('app_js', get_template_directory_uri() . '/assets/js/app.js', [], false, true);
}


if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}
