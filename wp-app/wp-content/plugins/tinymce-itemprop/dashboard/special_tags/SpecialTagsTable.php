<?php


class SpecialTagsTable extends WP_List_Table
{

    public $micro_attributes_model;

    function __construct()
    {
        parent::__construct(array(
            'singular' => 'log',
            'plural' => 'logs',
            'ajax' => false,
        ));

        // Подключение модели
        require_once TINY_ITEMPROP_DIR_DASHBOARD_PATH . '/special_tags/MicroAttributeDb.php';
        $this->micro_attributes_model = new MicroAttributeDb();

        //стили
        add_action('wp_print_scripts', [__CLASS__, '_list_table_css']);


        if (isset($_REQUEST['action'])) {
            //handle js script
            $this->action_handler();
        }

        $this->prepare_items();

        //echo plugin_dir_url(TINY_ITEMPROP_DIR_DASHBOARD_PATH) . '/dashboard/assets/js/micro_handle_action.js';
    }

    /**
     * Получаемые данные из модели для таблицы
     */
    private function fetch_table_data()
    {
        $getAttribute = $this->micro_attributes_model->getAttributes();

        $object_getAttribute = [];

        foreach ($getAttribute as $key => $item) {
            $object_getAttribute[] = (object)$item;
        }

        return $object_getAttribute;
    }


    /**
     * Генерация таблицы...
     */
    public function prepare_items()
    {

        //Sets
        $per_page = 8;

        /* Получаем данные для формирования таблицы */
        $data = $this->fetch_table_data();

        /* Устанавливаем данные для пагинации */
        $this->set_pagination_args(array(
            'total_items' => count($data),
            'per_page' => $per_page
        ));

        /* Делим массив на части для пагинации */
        $data = array_slice(
            $data,
            (($this->get_pagenum() - 1) * $per_page),
            $per_page
        );

        /* Устанавливаем данные колонок */
        $this->_column_headers = array(
            $this->get_columns(), /* Получаем массив названий колокнок */
            $this->get_hidden_columns(), /* Получаем массив названий колонок которые нужно скрыть */
            $this->get_sortable_columns() /* Получаем массив названий колонок которые можно сортировать */
        );

        /* Устанавливаем данные таблицы */
        $this->items = $data;
    }

    // Колонки таблицы
    function get_columns()
    {
        return array(
            'cb' => '<input type="checkbox" />',
            //'id' => 'ID',
            'title' => 'Описание',
            'slug' => 'Слаг',
        );
    }

    /**
     * Скрываемые колонки
     * @return array
     */
    function get_hidden_columns()
    {
        return array();
    }

    /**
     * Сортируем колонки
     * @return array
     */
    function get_sortable_columns()
    {
        return array(
            'title' => array('title', true),
            'slug' => array('slug', true),
        );
    }

    // Стили таблицы

    static function _list_table_css()
    {
        ?>
        <style>
            table.logs .column-id {
                width: 2em;
            }

            table.logs .column-license_key {
                width: 8em;
            }

            table.logs .column-customer_name {
                width: 15%;
            }
        </style>
        <?php
    }


    function column_actions_edit($item)
    {
        // row action to view attribute actions meta.
        $query_args_view_usermeta = array(
            'page' => wp_unslash($_REQUEST['page']),
            'action' => 'view_edit',
            'attribute_id' => $item->id,
            // '_wpnonce' => wp_create_nonce('edit_attribute_nonce'),
        );
        return esc_url(add_query_arg($query_args_view_usermeta));
    }

    function column_actions_delete($item)
    {
        // row action to view attribute actions meta.
        $query_args_view_usermeta = array(
            //'page' => wp_unslash($_REQUEST['page']),
            'action' => 'send_delete',
            'attribute_id' => $item->id,
            // '_wpnonce' => wp_create_nonce('edit_attribute_nonce'),
        );
        //admin_url('admin-ajax.php');

        $query = add_query_arg($query_args_view_usermeta, admin_url('admin-ajax.php'));
        //
        return esc_url($query);
    }

    // вывод каждой ячейки таблицы...
    function column_default($item, $colname)
    {

//        echo json_encode($item->id);

        //actions
        $view_edit_attribute_meta_link = $this->column_actions_edit($item);
        $view_delete_attribute_meta_link = $this->column_actions_delete($item);

        //columns

        if ($colname === 'title') {
            // ссылки действия над элементом
            $actions = array();
            $actions['edit'] = sprintf('<a href="' . $view_edit_attribute_meta_link . '">%s</a>', 'Редактирование');
            $actions['delete'] = sprintf('<a href="' . $view_delete_attribute_meta_link . '">%s</a>', 'Удаление');
            return esc_html($item->title) . $this->row_actions($actions);
            //check data

            //. json_encode($item);
        } else {
            return $item->$colname ?? print_r($item, 1);
        }

    }

    /*
    // Пример создания действий - ссылок в основной ячейки таблицы при наведении на ряд.
    // Однако гораздо удобнее указать их напрямую при выводе ячейки - см ячейку customer_name...

    // основная колонка в которой будут показываться действия с элементом
    protected function get_default_primary_column_name() {
        return 'disp_name';
    }

    // действия над элементом для основной колонки (ссылки)
    protected function handle_row_actions( $post, $column_name, $primary ) {
        if ( $primary !== $column_name ) return ''; // только для одной ячейки

        $actions = array();

        $actions['edit'] = sprintf( '<a href="%s">%s</a>', '#', __('edit','hb-users') );

        return $this->row_actions( $actions );
    }
    */

}
