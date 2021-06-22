<?php

class Home_News_Widget extends SiteOrigin_Widget
{

    function __construct()
    {
        // Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        // Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'home-news-widget',

            // The name of the widget for display purposes.
            __('Текущая – Слайдер новостей', 'main-header-hero-widget-text-domain'),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Отображаем блок с новостями', 'hello-world-widget-text-domain'),
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


    function initialize()
    {
        $this->register_frontend_scripts(
            array(
                array(
                    'swiper-slider',
                    get_template_directory_uri() . '/widgets/news/template/swiper-bundle.min.js',
                    array(),
                    null,
                    false // add to fotter
                ),
            )
        );

        $this->register_frontend_scripts(
            array(
                array(
                    'swiper-news-my-slider',
                    get_template_directory_uri() . '/widgets/news/template/slider.js',
                    array(),
                    null,
                    false // add to fotter
                ),
            )
        );

        $this->register_frontend_styles(
            array(
                array(
                    'swiper-slider-css',
                    'https://unpkg.com/swiper/swiper-bundle.min.css',
                    array(),
                    null
                )
            )
        );
        add_action('wp_enqueue_scripts', array($this, 'register_cycle_swipe'));
    }

    function get_template_name($instance)
    {
        return 'news-widget-template';
    }

    function get_template_dir($instance)
    {
        return 'template';
    }
}
siteorigin_widget_register('home-news-widget', __FILE__, 'Home_News_Widget');
