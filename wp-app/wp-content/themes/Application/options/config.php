<?php


function aletheme_get_options()
{

    $imagepath = ALETHEME_URL . '/assets/images/';

    $options = array();

    $options[] = array("name" => "Настройки темы",
        "type" => "heading");

    $options[] = array("name" => "Логотип сайта",
        "desc" => "Загрузка логотипа сайта (Стандартный размер: 133-52px)",
        "id" => "ale_sitelogo",
        "std" => "",
        "type" => "upload");

    $options[] = array("name" => "Значок веб-сайта Favicon",
        "desc" => "Загрузка favicon значка",
        "id" => "ale_favicon",
        "std" => "",
        "type" => "upload");

    $options[] = array("name" => "Копирайт",
        "desc" => "Your copyright message.",
        "id" => "ale_copyrights",
        "std" => "",
        "type" => "editor");

    return $options;
}

function ale_get_option($name, $default = false)
{
    $name = 'ale_' . $name;
    if (false === $default) {
        $options = aletheme_get_options();
        foreach ($options as $option) {
            if (isset($option['id']) && $option['id'] == $name) {
                $default = isset($option['std']) ? $option['std'] : false;
                break;
            }
        }
    }
    return of_get_option($name, $default);
}

function optionsframework_option_name() {
    // This gets the theme name from the stylesheet (lowercase and without spaces)
    $themename = preg_replace("/\W/", "", strtolower(theme_data_variable('Name')) );

    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
    update_option('optionsframework', $optionsframework_settings);
}
