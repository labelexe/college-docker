<?php


require_once __DIR__ . '/special_tags/SpecialTagsTable.php'; // тут находится класс
require_once __DIR__ . '/special_tags/MicroAttributeDb.php'; // тут находится класс

add_action('admin_menu', 'add_menu_special_tags');


class AttributeData
{
    public $slug_tag;

    public function __construct()
    {
        $this->slug_tag = 'logic_special_tags';
    }

}

function send_edit()
{

    $dataModel = [];

    /* Забираем отправленные данные */
    $title = $_POST['title'];
    $slug = $_POST['slug'];

    /* Создание записи */

    $model = new MicroAttributeDb();

    if (!empty($title) && !empty($slug)) {
        //echo json_encode($dataModel);

        //$model->addAttribute($title,$slug);

        $test = array(
            "title" => $title,
            "slug" => $slug
        );

        //echo json_encode($test);

        $data = "";
        wp_send_json_success(array('data' => $test), 200);  //Return as array.

        //return wp_redirect(admin_url('admin.php?page=logic_special_tags'));

        /* Завершаем выполнение ajax */
        wp_die();
    }


}

add_action("wp_ajax_send_edit", "send_edit");


/**
 * Добавление атрибутов
 */
function send_create()
{

    $dataModel = [];

    /* Забираем отправленные данные */
    $title = $_POST['title'];
    $slug = $_POST['slug'];

    /* Создание записи */

    $model = new MicroAttributeDb();

    if (!empty($title) && !empty($slug)) {
        //echo json_encode($dataModel);

        $result = $model->addAttribute($title, $slug);

//        $test = array(
//            "title" => $title,
//            "slug" => $slug
//        );

        if ($result === 1) {
            wp_send_json_success(array('data' => $result), 200);  //Return as array.
        } else {
            wp_send_json_error(array('data' => $result));
        }


        //return wp_redirect(admin_url('admin.php?page=logic_special_tags'));

        /* Завершаем выполнение ajax */
        wp_die();
    }


}

add_action("wp_ajax_send_create", "send_create");

//не от авторизованных
//add_action("wp_ajax_nopriv_send_create", "send_create");


function send_delete()
{

    $dataModel = [];

    /* Забираем отправленные данные */
    $attribute_id = $_GET['attribute_id'];

    /* Создание записи */

    $model = new MicroAttributeDb();

    if (!empty($attribute_id)) {
        //echo json_encode($dataModel);

        $test = $model->deleteAttribute($attribute_id);

//        $test = array(
//            "title" => $title,
//            "slug" => $slug
//        );


        wp_send_json_success(array('data' => $test), 200);  //Return as array.

        //return wp_redirect(admin_url('admin.php?page=logic_special_tags'));

        /* Завершаем выполнение ajax */
        wp_die();
    }

}

add_action("wp_ajax_send_delete", "send_delete");

//не от авторизованных
//add_action("wp_ajax_nopriv_send_create", "send_create");

///
///
///
///

/**
 * Добавление пункта меню
 */
function add_menu_special_tags()
{
    $attribute_data = new AttributeData();
    add_menu_page('Микро-разметка', 'Микро-разметка', 'manage_options', $attribute_data->slug_tag, 'micro_markup_table', 'dashicons-schedule', 100);
}

/**
 *  Создаем экземпляр таблицы
 */
function micro_markup_table()
{
    $attribute_data = new AttributeData();

    if ($_GET['page'] === $attribute_data->slug_tag && $_GET['action'] === 'view_edit') {
        //echo "<h4>" . var_dump($_REQUEST) . "</h4>";
        return view_edit($_GET);
        //action_handler();
    }

    //create view
    if ($_GET['page'] === $attribute_data->slug_tag && $_GET['action'] === 'view_create') {
        if (!current_user_can('manage_options')) {
            wp_die(__('У вас недостаточно прав для доступа к этой странице.'));
        }
        return view_create($_GET);
    }


    //table view
    if ($_GET['page'] === $attribute_data->slug_tag) {
        //echo var_dump($_REQUEST['page']);
        return view_table();
    }


}


/**
 * Отображение формы таблицы
 */
function view_table()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('У вас недостаточно прав для доступа к этой странице.'));
    }
    ?>
    <!--  header  -->
    <div class="new-logic__header">
        <div class="new-logic__header__info">
            <h1 class="new-logic__header__info-title">Микроразметка для страниц сайта</h1>
            <p class="new-logic__header__info-description">** В данном пункте Вы можете создать, отредактировать или
                удалить микро-аттрибуты</p>
            <div class="wrap">
                <div class="new_logic__header__info-actions">
                    <a href="<?php echo admin_url('admin.php?page=logic_special_tags&action=view_create'); ?>"
                       class="page-title-action" style="color: black">Добавить новый</a>
                    <a href="<?php echo admin_url('edit.php?post_type=page'); ?>"
                       class="page-title-action">Список страниц</a>
                    <a href="<?php echo admin_url('edit.php'); ?>"
                       class="page-title-action">Список записей</a>
                </div>
            </div>
        </div>
    </div>
    <!-- table -->

    <div class="new-logic__wrap">
        <?php
        echo '<form action="" method="POST">';
        $GLOBALS['Table'] = new SpecialTagsTable();
        $GLOBALS['Table']->display();
        echo '</form>';
        ?>
    </div>

    <style>
        #wpcontent, .site-health.auto-fold #wpcontent {
            padding-left: 0;
        }

        .folded #wpcontent, .folded #wpfooter {
            margin-left: 36px;
        }

        @media screen and (max-width: 782px) {
            #wpcontent {
                margin-left: 0;
                padding-left: 0 !important;
            }
        }


        /* New logic design */
        .new-logic__header {
            margin: 0 0 1rem;
            background: #fff;
            border-bottom: 1px solid #e2e4e7;
            padding: 65px 0;
        }

        .new-logic__header
        .new-logic__header__info {
            display: flex;
            flex-flow: column wrap;
            align-items: center;
        }

        .new-logic__header
        .new-logic__header__info
        .new-logic__header__info-title {
            text-align: center;
            padding: 0;
            margin: 0 0 15px;
        }

        .new-logic__header
        .new-logic__header__info
        .new-logic__header__info-description {
            color: #ababab;
        }

        .new-logic__wrap {
            padding: 0 25px;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper {
            border-bottom: solid 1px #ccc;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper:not(.wp-clearfix):after {
            content: "";
            display: table;
            clear: both;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper a {
            /* */
            float: left;
            /*border: solid 1px #ddd;*/
            /*border-bottom: none;*/
            margin-left: .5em;
            /*padding: 5px 10px;*/
            font-size: 14px;
            line-height: 1.71428571;
            font-weight: 600;
            /*background: #fff;*/
            color: #555;
            text-decoration: none;
            white-space: nowrap;
            /**/
            background: transparent;
            border: none;
            padding-left: 0;
            padding-right: 15px;
            padding-bottom: 10px;
            margin-right: 15px;
            outline: none;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper a.__active {
            margin-left: 0;
            color: #007cba;
            border-bottom: solid 2px #007cba;
        }

    </style>
    <?php

    /* Завершаем выполнение */
    die();
}

/**
 * Создание атрибута - форма
 * @param $request
 * @return false|string
 */

function view_create($request)
{
    $attribute_data = new AttributeData();

    //
    if (!current_user_can('manage_options')) {
        wp_die(__('У вас недостаточно прав для доступа к этой странице.'));
    }

    //View

    ?>

    <!--  header  -->
    <div class="new-logic__header">
        <div class="new-logic__header__info">
            <h1 class="new-logic__header__info-title">Создание микро-атрибута</h1>
            <p class="new-logic__header__info-description">** В данном пункте Вы можете создать микро-аттрибут</p>
        </div>
    </div>
    <div id="messages_wrap"></div>
    <!-- content wrap -->
    <div class="new-logic__wrap">
        <!--  form -> create! -->
        <!--        <form action="--><?php //echo admin_url('admin-ajax.php?action=send_edit');
        ?><!--" method="post">-->
        <div class="new-logic__wrap-inputBox" style="margin-bottom: 25px">
            <label for="title">Описание</label>
            <br>
            <input
                    name="title"
                    type="text"
                    placeholder="Введите описание"
                    style="width:100%;max-width: 250px;"
                    id="title"
            >
        </div>
        <div class="new-logic__wrap-inputBox" style="margin-bottom: 35px">
            <label for="slug">Слаг</label>
            <br>
            <input
                    name="slug"
                    type="text"
                    placeholder="Введите слаг"
                    style="width:100%;max-width: 250px;"
                    id="slug"
            >
        </div>
        <div class="new-logic__wrap-inputBox">
            <button style="padding: 6px 15px; background: #fffffc;  border: 1px solid #7e8993; border-radius: 4px"
                    class="submit">
                Добавить
            </button>
        </div>
        <!--        </form>-->
        <?php echo json_encode($request); ?>
    </div>
    <style>
        #wpcontent, .site-health.auto-fold #wpcontent {
            padding-left: 0;
        }

        .folded #wpcontent, .folded #wpfooter {
            margin-left: 36px;
        }

        @media screen and (max-width: 782px) {
            #wpcontent {
                margin-left: 0;
                padding-left: 0 !important;
            }
        }


        /* New logic design */
        .new-logic__header {
            margin: 0 0 1rem;
            background: #fff;
            border-bottom: 1px solid #e2e4e7;
            padding: 65px 0;
        }

        .new-logic__header
        .new-logic__header__info {
            display: flex;
            flex-flow: column wrap;
            align-items: center;
        }

        .new-logic__header
        .new-logic__header__info
        .new-logic__header__info-title {
            text-align: center;
            padding: 0;
            margin: 0 0 15px;
        }

        .new-logic__header
        .new-logic__header__info
        .new-logic__header__info-description {
            color: #ababab;
        }

        .new-logic__wrap {
            padding: 0 25px;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper {
            border-bottom: solid 1px #ccc;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper:not(.wp-clearfix):after {
            content: "";
            display: table;
            clear: both;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper a {
            /* */
            float: left;
            /*border: solid 1px #ddd;*/
            /*border-bottom: none;*/
            margin-left: .5em;
            /*padding: 5px 10px;*/
            font-size: 14px;
            line-height: 1.71428571;
            font-weight: 600;
            /*background: #fff;*/
            color: #555;
            text-decoration: none;
            white-space: nowrap;
            /**/
            background: transparent;
            border: none;
            padding-left: 0;
            padding-right: 15px;
            padding-bottom: 10px;
            margin-right: 15px;
            outline: none;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper a.__active {
            margin-left: 0;
            color: #007cba;
            border-bottom: solid 2px #007cba;
        }

    </style>
    <script>
        /**
         * Сообщения уведомления
         */
        function show_message(message = 'test', type_message = 'success', show_link = '', dismissible = true) {
            let notice;
            //
            if (type_message === 'success') {
                notice = `<div class="notice notice-success is-dismissible">
             <p>${message} ${show_link ? '<a href="' + show_link + '">Посмотреть</a> </p>' : ""} </div>`;
            }
            //
            if (type_message === 'warning') {
                notice = `<div class="notice notice-warning is-dismissible"><p>${message}</p></div>`;
            }
            //
            if (type_message === 'info') {
                notice = `<div class="notice notice-info is-dismissible"><p>${message}</p></div>`;
            }
            //
            if (type_message === 'error') {
                notice = `<div class="notice notice-error is-dismissible"><p>${message}</p></div>`;
            }

            // if(dismissible !== null){
            //     notice.addClass('is-dismissible');
            // }

            jQuery('#messages_wrap').html(notice);

            //Авто очистка
            setInterval(function () {
                jQuery('#messages_wrap').html('');
            }, 6000);
        }

        //
        jQuery('.submit').on('click', function (e) {
            e.preventDefault();
            let data = {
                action: 'send_create',
                title: jQuery('#title').val(),
                slug: jQuery('#slug').val(),
                _ajax_nonce: '<?php echo wp_create_nonce('my_ajax_nonce'); ?>'
            };
            //
            let ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
            //
            jQuery.post(ajax_url, data, function (response) {
                //
                let res = response.data.data;

                if (res !== null) {
                    //
                    jQuery('#title')[0].value = null;
                    jQuery('#slug')[0].value = null;
                    //
                    show_message('Атрибут успешно добавлен', 'success', null, true);
                    //
                    console.log('Ответ сервера: ' + JSON.stringify(response.data));
                }

            });
        });
    </script>
    <?php
    /* Завершаем выполнение */
    //exit();
}


/**
 * Редактирование атрибута - форма
 * @param $request
 */
function view_edit($request)
{
    $model = new MicroAttributeDb();
    $resultAttribute = $model->getAttributeId($request['attribute_id']);
    if (!current_user_can('manage_options')) {
        wp_die(__('У вас недостаточно прав для доступа к этой странице.'));
    }
    ?>

    <!--  header  -->
    <div class="new-logic__header">
        <div class="new-logic__header__info">
            <h1 class="new-logic__header__info-title">Создание микро-атрибута</h1>
            <p class="new-logic__header__info-description">** В данном пункте Вы можете создать микро-аттрибут</p>
        </div>
    </div>
    <div id="messages_wrap"></div>
    <!-- content wrap -->
    <div class="new-logic__wrap">
        <!--  form -> create! -->
        <!--        <form action="--><?php //echo admin_url('admin-ajax.php?action=send_edit');
        ?><!--" method="post">-->
        <div class="new-logic__wrap-inputBox" style="margin-bottom: 25px">
            <label for="title">Описание</label>
            <br>
            <input
                    name="title"
                    type="text"
                    placeholder="Введите описание"
                    style="width:100%;max-width: 250px;"
                    id="title"

                <?php if ($resultAttribute[0]) {
                    echo 'value="' . $resultAttribute[0]->title . '"';
                }
                ?>
            >
        </div>
        <div class="new-logic__wrap-inputBox" style="margin-bottom: 35px">
            <label for="slug">Слаг</label>
            <br>
            <input
                    name="slug"
                    type="text"
                    placeholder="Введите слаг"
                    style="width:100%;max-width: 250px;"
                    id="slug"
                <?php if ($resultAttribute[0]) {
                    echo 'value="' . $resultAttribute[0]->slug . '"';
                }
                ?>
            >
        </div>
        <div class="new-logic__wrap-inputBox">
            <button style="padding: 6px 15px; background: #fffffc;  border: 1px solid #7e8993; border-radius: 4px"
                    class="submit">
                Обновить
            </button>
        </div>
        <!--        </form>-->
        <?php echo json_encode($request); ?>
    </div>
    <style>
        #wpcontent, .site-health.auto-fold #wpcontent {
            padding-left: 0;
        }

        .folded #wpcontent, .folded #wpfooter {
            margin-left: 36px;
        }

        @media screen and (max-width: 782px) {
            #wpcontent {
                margin-left: 0;
                padding-left: 0 !important;
            }
        }


        /* New logic design */
        .new-logic__header {
            margin: 0 0 1rem;
            background: #fff;
            border-bottom: 1px solid #e2e4e7;
            padding: 65px 0;
        }

        .new-logic__header
        .new-logic__header__info {
            display: flex;
            flex-flow: column wrap;
            align-items: center;
        }

        .new-logic__header
        .new-logic__header__info
        .new-logic__header__info-title {
            text-align: center;
            padding: 0;
            margin: 0 0 15px;
        }

        .new-logic__header
        .new-logic__header__info
        .new-logic__header__info-description {
            color: #ababab;
        }

        .new-logic__wrap {
            padding: 0 25px;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper {
            border-bottom: solid 1px #ccc;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper:not(.wp-clearfix):after {
            content: "";
            display: table;
            clear: both;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper a {
            /* */
            float: left;
            /*border: solid 1px #ddd;*/
            /*border-bottom: none;*/
            margin-left: .5em;
            /*padding: 5px 10px;*/
            font-size: 14px;
            line-height: 1.71428571;
            font-weight: 600;
            /*background: #fff;*/
            color: #555;
            text-decoration: none;
            white-space: nowrap;
            /**/
            background: transparent;
            border: none;
            padding-left: 0;
            padding-right: 15px;
            padding-bottom: 10px;
            margin-right: 15px;
            outline: none;
        }

        .new-logic__wrap .new-logic__wrap__nav-tab-wrapper a.__active {
            margin-left: 0;
            color: #007cba;
            border-bottom: solid 2px #007cba;
        }

    </style>
    <script>
        /**
         * Сообщения уведомления
         */
        function show_message(message = 'test', type_message = 'success', show_link = '', dismissible = true) {
            let notice;
            //
            if (type_message === 'success') {
                notice = `<div class="notice notice-success is-dismissible">
             <p>${message} ${show_link ? '<a href="' + show_link + '">Посмотреть</a> </p>' : ""} </div>`;
            }
            //
            if (type_message === 'warning') {
                notice = `<div class="notice notice-warning is-dismissible"><p>${message}</p></div>`;
            }
            //
            if (type_message === 'info') {
                notice = `<div class="notice notice-info is-dismissible"><p>${message}</p></div>`;
            }
            //
            if (type_message === 'error') {
                notice = `<div class="notice notice-error is-dismissible"><p>${message}</p></div>`;
            }

            // if(dismissible !== null){
            //     notice.addClass('is-dismissible');
            // }

            jQuery('#messages_wrap').html(notice);

            //Авто очистка
            setInterval(function () {
                jQuery('#messages_wrap').html('');
            }, 6000);
        }

        //
        jQuery('.submit').on('click', function (e) {
            e.preventDefault();
            let data = {
                action: 'send_edit',
                title: jQuery('#title').val(),
                slug: jQuery('#slug').val(),
                _ajax_nonce: '<?php echo wp_create_nonce('my_ajax_nonce'); ?>'
            };
            //
            let ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
            //
            jQuery.post(ajax_url, data, function (response) {
                //
                let res = response.data.data;

                if (res.title.length !== null && res.slug.length !== null) {
                    //
                    jQuery('#title')[0].value = null;
                    jQuery('#slug')[0].value = null;
                    //
                    show_message('Атрибут успешно обновлен', 'success', null, true);
                    //
                    console.log('Ответ сервера: ' + JSON.stringify(response.data));
                }

            });
        });
    </script>
    <?php
    /* Завершаем выполнение */
    //exit();
}
