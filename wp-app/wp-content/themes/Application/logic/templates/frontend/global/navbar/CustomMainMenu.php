<?php



/**
 * Class CustomMainMenu
 * Класс для построения произвольного меню
 */

class CustomMainMenu extends Walker_Nav_Menu
{

    /**
     * Добавляет классы в подменю ul
     * @param string $output
     * @param int $depth
     * @param null $args
     */
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        // классы, зависящие от глубины
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
        );
        $class_names = implode(' ', $classes);
        $output .= "\n" . '<ul class="' . $class_names . '">' . "\n";
    }

    /**
     * Добавиление основного / подклассы в li и ссылки
     * @param string $output
     * @param WP_Post $item
     * @param int $depth
     * @param null $args
     * @param int $id
     */
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // классы, зависящие от глубины
        $depth_classes = array(
            // 'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        // пройденные занятия
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        // построение html
        $output .= $indent . '<li id="head_menu-link-li-' . $item->ID . '" class="' . $depth_class_names . '">';

        // атрибуты и ссылки

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        // проверка глубины и вывод иконки dropdown
        if ($item->post_parent === $item->post_id) {
            $dropdown_icon = $args->dropdown_icon;
        } else {
            $dropdown_icon = '';
        }

        // построение тега
        $item_output = sprintf('%1$s<a %2$s>%3$s%4$s%5$s</a> %6$s%7$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after,
            $dropdown_icon
        );

        // построение html
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }


    /**
     * Завершает вывод element -а, если это необходимо.
     * @param string $output
     * @param WP_Post $item
     * @param int $depth
     * @param null $args
     */
    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
//        if($depth === 0){
//            $output .= "<div class='dropdown-show'><svg style='max-width: 24px' aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"caret-down\" class=\"svg-inline--fa fa-caret-down fa-w-10\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\"><path fill=\"currentColor\" d=\"M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\"></path></svg></div></li>{$n}";
//        }
        $output .= "</li>{$n}";
    }


    /**
     * Вывод главного меню ['head_menu']
     */

    function main_nav_menu()
    {
        $args = array(
            'theme_location' => 'head_menu',
            'container' => '',
            'container_id' => '',
            'container_class' => '',
            'menu' => '',
            'menu_id' => '',
            'before' => '',
            'after' => '',
            'menu_class' => 'head_menu',
            'depth' => 2,
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'dropdown_icon' => '<div class="dropdown-show"><svg style="max-width: 16px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="svg-inline--fa fa-caret-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path></svg></div>',
            'walker' => new self()
        );
        wp_nav_menu($args);
    }

    function old()
    {
        // main navigation menu
//        $args = array(
//            'theme_location' => 'navigation_menu_primary',
//            'container' => 'div',
//            'container_id' => 'top-navigation-primary',
//            'container_class' => 'top-navigation',
//            'menu_class' => 'menu main-menu menu-depth-0 menu-even',
//            'echo' => true,
//            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//            'depth' => 10,
//            'walker' => new magomra_walker_nav_menu
//        );
    }
}
