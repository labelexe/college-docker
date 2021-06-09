<?php

/**
 * Add [dashboard] добавление спец-разметки
 * (Инициализация dashboard)
 */

if (is_admin()) {
    require_once TINY_ITEMPROP_DIR_DASHBOARD_PATH . '/special_tags-views.php';

    function messages_micro_plugin_init()
    {
        ?>
        <script>console.log('Dashboard plugin "Микро-разметка" (init) ... success');</script>
        <?php
    }

    add_action('admin_footer', 'messages_micro_plugin_init');


    // Api

    function all_attribute()
    {
        //
        $model = new MicroAttributeDb();
        //
        wp_send_json_success(array('data' => $model->getAttributes()), 200);  //Return as array.


    }

    add_action("wp_ajax_all_attribute", "all_attribute");

}

//echo TINY_ITEMPROP_DIR_DASHBOARD_PATH;


