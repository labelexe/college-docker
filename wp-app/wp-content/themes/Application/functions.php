<?php

/**
 *
 * Application Functions
 *
 */


// Добавление поддержки миниатюры записи

function support_post_thumbnail()
{
    add_theme_support('post-thumbnails');
}
add_action("after_setup_theme", "support_post_thumbnail");


//Скрываем от постороних страницу выбранных рубрик


function exclude_category($query)
{
    //echo json_encode($query->get('category_name'));

    //
    if (is_category()) {
        //
        if ($query->is_category(5)) {
            //Игнорируем запрос на рубрику и возвращаем на главную страницу
            wp_redirect(home_url());
            exit;
        } else {
            $query->set('posts_per_page', 10);
        }
    }
}
add_action('pre_get_posts', 'exclude_category');



function getSlidesJson()
{
    // $HomeSliderQuery = new HomeWidgetSlider_Query();
    // $result = $HomeSliderQuery->getAllSlides();
    //echo json_encode($result);

    //Временный вариант получения данных для слайдера

    $slider_result = [];
    //Получаем записи слайдера
    $slider_posts = get_posts(
        array(
            //id категории - Слайдер [5]
            'category' => 5,
            'orderby' => 'date',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            //тип записи - post
            // 'post_type' => 'post',
            //Ограничение на количество постов
            'posts_per_page' => 5,
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        )
    );
    foreach ($slider_posts as $slider_item) {
        $item = array(
            "id" => $slider_item->ID,
            "name" => $slider_item->post_title,
            "description" => wp_strip_all_tags($slider_item->post_content, true),
            "image" => get_the_post_thumbnail_url($slider_item->ID, "full"),
            "perm_link" => $slider_item->guid
        );
        // push data
        array_push($slider_result, $item);
    }

    return json_encode($slider_result);

    // echo json_encode($slider_posts);

    //echo json_encode(array("Test:",$slider_result));
}


function getNewsPosts()
{
    // параметры по умолчанию
    $posts = get_posts(array(
        //id категории - Новости техникума [3]
        'category' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'include' => array(),
        'exclude' => array(),
        'meta_key' => '',
        'meta_value' => '',
        //тип записи - post
        'post_type' => 'post',
        //Ограничение на количество постов
        'posts_per_page' => 4,
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));
    return $posts;
}



initLogicTheme();


/**
 ***************************************************************
 * DO NOT DELETE
 ****************************************************************
 * Initial function
 *
 * *&*8*&* Logic *&*8*&*
 *  *@*@* Theme *@*@*
 */
function initLogicTheme()
{
    if (get_stylesheet_directory() == get_template_directory()) {
        define('LOGIC_THEME_PATH', get_template_directory() . '/logic');
        define('LOGIC_THEME_URL', get_template_directory_uri() . '/logic');
    } else {
        define('LOGIC_THEME_PATH', get_theme_root() . '/logic');
        define('LOGIC_THEME_URL', get_theme_root_uri() . '/logic');
    }

    require_once LOGIC_THEME_PATH . '/init.php';
}
