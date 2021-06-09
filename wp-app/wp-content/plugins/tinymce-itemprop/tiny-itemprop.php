<?php

/*
Plugin Name: TinyMCE микро-разметка itemprop + markup
Description: Добавление itemprop микро-атрибутов в стандартном редакторе tinymce wordpress
Author: Aleksey Savenkov
Version: 0.1
Author URI: https://asdev.site
*/


// Выход, если доступ осуществляется напрямую.
if (!defined('ABSPATH')) {
    exit;
}

/* Путь к папке плагина */
define('TINY_ITEMPROP_DIR_PATH', plugin_dir_path(__FILE__));
define('TINY_ITEMPROP_DIR_URL', plugins_url('', __FILE__));

define('TINY_ITEMPROP_DIR_DASHBOARD_PATH', plugin_dir_path(__FILE__). 'dashboard');


//echo TINY_ITEMPROP_DIR_DASHBOARD_PATH;


/**
 * Подключение внешних компонентов после активации плагина.
 *
 * @return void
 */
function TinyItemprop_Init()
{
    /**
     * Component init
     * (Инициализация нового компонентов редактора)
     */
    include TINY_ITEMPROP_DIR_PATH.'/component.php';

    /**
     * Markup Edit init
     * (Инициализация части редактора)
     */

    include TINY_ITEMPROP_DIR_PATH . '/markup_editor.php';

    /**
     * Dashboard init
     * (Инициализация админ части)
     */
    require_once TINY_ITEMPROP_DIR_DASHBOARD_PATH . '/dashboard-init.php';

    /**
     * Disable Functions init
     * (Инициализация части оптимизации переиспользуемых методов)
     */
    include TINY_ITEMPROP_DIR_PATH . '/disable_functions.php';

}

add_action('plugins_loaded', 'TinyItemprop_Init', 100);

?>
