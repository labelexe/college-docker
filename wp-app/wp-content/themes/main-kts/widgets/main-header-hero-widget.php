<?php

class Main_Header_Hero_Widget extends SiteOrigin_Widget
{

    function __construct()
    {
        // Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        // Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'main-header-hero-widget',

            // The name of the widget for display purposes.
            __('Текущая – Основная шапка', 'main-header-hero-widget-text-domain'),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Отображаем основную шапку', 'hello-world-widget-text-domain'),
                // 'help'        => 'http://example.com/hello-world-widget-docs',
            ),

            // The $control_options array, which is passed through to WP_Widget
            array(),

            // The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                // 'navbar' => array(
                //     'type' => 'select',
                //     'label' => __('Выберите меню', 'main-header-hero-widget-text-domain'),
                //     'default' => 'Hello world!',
                //     'options' => $this->locations()
                // ),

                'text' => array(
                    'type' => 'text',
                    'label' => __('Hello world! goes here.', 'main-header-hero-widget-text-domain'),
                    'default' => 'Hello world!',
                ),
            ),

            // The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
        $this->initialize();
    }

    function locations()
    {
        $result = [];
        $nav_locations = get_nav_menu_locations();

        if (!isset($nav_locations)) {
            foreach ($nav_locations as $key => $value) {
                // echo $locate;
                array_push($result, [
                    $key => $value
                ]);
            }
        }
        return $result;
    }

    function initialize()
    {

        $frontend_scripts = array();
        $frontend_scripts[] = array(
            'sow-slider-slider-cycle2',
            plugin_dir_url(SOW_BUNDLE_BASE_FILE) . 'js/jquery.cycle' . SOW_BUNDLE_JS_SUFFIX . '.js',
            array('jquery'),
            SOW_BUNDLE_VERSION
        );

        // $frontend_scripts[] = array(
        //     'sow-slider-slider',
        //     plugin_dir_url(SOW_BUNDLE_BASE_FILE) . 'js/slider/jquery.slider' . SOW_BUNDLE_JS_SUFFIX . '.js',
        //     array('jquery'),
        //     SOW_BUNDLE_VERSION
        // );

        $this->register_frontend_scripts($frontend_scripts);
        // $this->register_frontend_styles([
        //     'svg-loader',
        //     'https://unpkg.com/external-svg-loader@1.2.1/svg-loader.min.js',
        //     array(),
        //     SOW_BUNDLE_VERSION
        // ]);

        // $this->register_frontend_styles(
        //     array(
        //         array(
        //             'sow-slider-slider',
        //             get_template_directory_uri() . '/widgets/hr-templates/hero-template-style.css',
        //             array(),
        //             SOW_BUNDLE_VERSION
        //         )
        //     )
        // );
        add_action('wp_enqueue_scripts', array($this, 'register_cycle_swipe'));
    }

    function get_template_name($instance)
    {
        return 'hero-template';
    }

    function get_template_dir($instance)
    {
        return 'hr-templates';
    }
}
siteorigin_widget_register('main-header-hero-widget', __FILE__, 'Main_Header_Hero_Widget');
