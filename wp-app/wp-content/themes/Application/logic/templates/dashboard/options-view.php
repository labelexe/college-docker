<?php

require 'options/Options.php';

if (!function_exists('mlu_get_silentpost')) {

    function mlu_get_silentpost($_token)
    {

        global $wpdb;
        $_id = 0;

        // Check if the token is valid against a whitelist.
        // $_whitelist = array( 'of_logo', 'of_custom_favicon', 'of_ad_top_image' );
        // Sanitise the token.

        $_token = strtolower(str_replace(' ', '_', $_token));

        // if ( in_array( $_token, $_whitelist ) ) {
        if ($_token) {

            // Tell the function what to look for in a post.

            $_args = array('post_type' => 'logic_theme_options', 'post_name' => 'of-' . $_token, 'post_status' => 'draft', 'comment_status' => 'closed', 'ping_status' => 'closed');

            // Look in the database for a "silent" post that meets our criteria.
            $query = 'SELECT ID FROM ' . $wpdb->posts . ' WHERE post_parent = 0';
            foreach ($_args as $k => $v) {
                $query .= ' AND ' . $k . ' = "' . $v . '"';
            } // End FOREACH Loop

            $query .= ' LIMIT 1';
            $_posts = $wpdb->get_row($query);

            // If we've got a post, loop through and get it's ID.
            if (is_array($_posts) && count($_posts)) {
                $_id = $_posts->ID;
            } else {

                // If no post is present, insert one.
                // Prepare some additional data to go with the post insertion.
                $_words = explode('_', $_token);
                $_title = join(' ', $_words);
                $_title = ucwords($_title);
                $_post_data = array('post_title' => $_title);
                $_post_data = array_merge($_post_data, $_args);
                $_id = wp_insert_post($_post_data);
            }
        }
        return $_id;
    }
}

if (!function_exists('get_medialibrary_uploader')) {

    function get_medialibrary_uploader($_id, $_value, $_mode = 'full', $_desc = '', $_postid = 0, $_name = '')
    {

        $options = get_option('logic_theme_options');

        // Gets the unique option id
        $option_name = $options['id'];

        $output = '';
        $id = '';
        $class = '';
        $int = '';
        $value = '';
        $name = '';

        $id = strip_tags(strtolower($_id));
        // Change for each field, using a "silent" post. If no post is present, one will be created.
        $int = mlu_get_silentpost($id);

        // If a value is passed and we don't have a stored value, use the value that's passed through.
        if ($_value != '' && $value == '') {
            $value = $_value;
        }

        if ($_name != '') {
            $name = $option_name . '[' . $id . '][' . $_name . ']';
        } else {
            $name = $option_name . '[' . $id . ']';
        }

        if ($value) {
            $class = ' has-file';
        }
        $output .= '<input id="' . $id . '" class="upload' . $class . '" type="text" name="' . $name . '" value="' . $value . '" />' . "\n";
        $output .= '<input id="upload_' . $id . '" class="upload_button button" type="button" value="' . __('Upload', 'optionsframeworktheme') . '" rel="' . $int . '" />' . "\n";

        if ($_desc != '') {
            $output .= '<span class="of_metabox_desc">' . $_desc . '</span>' . "\n";
        }

        $output .= '<div class="screenshot" id="' . $id . '_image">' . "\n";

        if ($value != '') {
            $remove = '<a href="javascript:(void);" class="mlu_remove button">Remove</a>';
            $image = preg_match('/(^.*\.jpg|jpeg|png|gif|ico*)/i', $value);
            if ($image) {
                $output .= '<img src="' . $value . '" alt="" />' . $remove . '';
            } else {
                $parts = explode("/", $value);
                for ($i = 0; $i < sizeof($parts); ++$i) {
                    $title = $parts[$i];
                }

                // No output preview if it's not an image.
                $output .= '';

                // Standard generic output if it's not an image.
                $title = __('View File', 'optionsframework');
                $output .= '<div class="no_image"><span class="file_link"><a href="' . $value . '" target="_blank" rel="external">' . $title . '</a></span>' . $remove . '</div>';
            }
        }
        $output .= '</div>' . "\n";
        return $output;
    }
}


/**
 * Добавление пункта меню
 */
add_action('admin_menu', 'add_menu_option');
function add_menu_option()
{
    add_submenu_page('themes.php', 'Опции темы', 'Опции темы', 'manage_options', 'logic_theme_options', 'view_options');
    //add_options_page('Опции темы', 'Опции темы', 'manage_options', 'logic_theme_options', 'view_options');
}


/** Отображение формы */
function view_options()
{
    $option_class = new Options();
    if (!current_user_can('manage_options')) {
        wp_die(__('У вас недостаточно прав для доступа к этой странице.'));
    }
    ?>
    <div class="new-logic__header">
        <div class="new-logic__header__info">
            <h1 class="new-logic__header__info-title">Настройки темы</h1>
            <p class="new-logic__header__info-description">** В данном пункте Вы можете произвести основные настройки
                темы</p>
        </div>
    </div>

    <?php
    $options = [];
    $options[] = array("name" => "Настройки темы", "type" => "heading");
    $options[] = array("name" => "Логотип сайта", "desc" => "Загрузка логотипа сайта (Стандартный размер: 133-52px)", "type" => "upload", "id" => "logic_sitelogo", "std" => "");
    $options[] = array("name" => "Тест", "desc" => "", "type" => "text", "id" => "logic_test", "std" => "");
//    echo update_option('logic_theme_options', $options);
    ?>

    <div class="new-logic__wrap">

        <div class="new-logic__wrap__nav-tab-wrapper">
            <?php echo $option_class->get_tabs('logic_theme_options') ?>
        </div>

        <div id="options-metabox" class="metabox-holder">
            <div id="options" class="postbox" style="border-radius: 4px;border: solid 0.1px #ddd;">
                <form action="options.php" method="post" style="padding: 25px 25px;">
                    <?php echo $option_class->get_custom_fields('logic_theme_options'); ?>
                    <div id="options-submit">
                        <input type="submit" class="button-primary" name="update"
                               value="<?php esc_attr_e('Сохранить изменения', 'logic_theme_options'); ?>"/>
                        <input type="submit" class="reset-button button-secondary" name="reset"
                               value="<?php esc_attr_e('По умолчанию', 'logic_theme_options'); ?>"
                               onclick="return confirm( '<?php print esc_js(__('Click OK to reset. Any theme settings will be lost!', 'options_framework_theme')); ?>' );"/>
                        <div class="clear"></div>
                    </div>
                </form>
            </div> <!-- / #container -->
        </div>
    </div> <!-- / .wrap -->
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
}
