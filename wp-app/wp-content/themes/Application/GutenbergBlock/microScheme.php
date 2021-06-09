<?php

new microScheme();

class microScheme
{
    public function __construct()
    {
        //add_action('enqueue_block_editor_assets', [$this, 'gutenberg_block_editor_scripts']);
        add_action('enqueue_block_editor_assets', [$this,'gutenbergMicroSchemeBlockBack']);
        // Создание
//        add_filter( 'block_categories', [$this,'gutenbergMicroSchemeBlockCategory']);
    }


    /**
     * Подключение js редактора
     */
    function gutenbergMicroSchemeBlockBack()
    {
        wp_enqueue_script(
            'gutenberg-notice-block-editor',
            get_template_directory_uri() . '/GutenbergBlock/block.js',
            array('wp-blocks', 'wp-element')
        );
//        header(get_template_directory() . '/GutenbergBlock/block.js');
    }

    /**
     * Создание категории блоков - Мета блоки
     * @param $categories
     * @param $post
     * @return array
     */
//    function gutenbergMicroSchemeBlockCategory( $categories){
//    $category_slugs = wp_list_pluck( $categories, 'slug' );
//    return in_array( 'gwg', $category_slugs, true ) ? $categories : array_merge(
//        $categories,
//        array(
//            array(
//                'slug'  => 'gwg',
//                'title' => __( 'Get With Gutenberg', 'gwg' ),
//                'icon'  => null,
//            ),
//        )
//    );
//}

}
