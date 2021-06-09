<?php


/**
 * itemprop_ajax_tinymce
 * calls the editor page
 * @return void
 */

add_action( 'wp_ajax_itemprop_list_lightbox', 'itemprop_ajax_tinymce' );

function itemprop_ajax_tinymce(){
	// check for rights
	if ( ! current_user_can('edit_pages') && ! current_user_can('edit_posts') )
		die( __("You are not allowed to be here", 'velocity') );

	$window = dirname(__FILE__) . '/popup.php';
	include_once( $window );

	die();
}



add_action( 'after_setup_theme', 'itemprop_theme_setup' );



if ( ! function_exists( 'itemprop_theme_setup' ) ) {
  function itemprop_theme_setup(){
    /********* TinyMCE Buttons ***********/
    add_action( 'init', 'itemprop_buttons' );
  }
}



/********* TinyMCE Buttons ***********/
if ( ! function_exists( 'itemprop_buttons' ) ) {
  function itemprop_buttons() {
    if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
          return;
      }
      if ( get_user_option( 'rich_editing' ) !== 'true' ) {
          return;
      }
      add_filter( 'mce_external_plugins', 'itemprop_add_buttons' );
      add_filter( 'mce_buttons', 'itemprop_register_buttons' );

      //css editor
      add_filter('mce_css', 'tuts_mcekit_editor_style');
  }
}



if ( ! function_exists( 'itemprop_add_buttons' ) ) {
  function itemprop_add_buttons( $plugin_array ) {

      $plugin_array['itemprop_btn'] = plugins_url( '/assets/js/tinymce_itemprop.js',__FILE__ );
      return $plugin_array;
  }
}
if ( ! function_exists( 'itemprop_register_buttons' ) ) {
  function itemprop_register_buttons( $buttons ) {
      array_push( $buttons, 'itemprop_btn' );
      return $buttons;
  }
}


function tuts_mcekit_editor_style($url) {
 
    if ( !empty($url) )
        $url .= ',';
 
    // Retrieves the plugin directory URL
    // Change the path here if using different directories
    $url .= trailingslashit( plugin_dir_url(__FILE__) ) . 'assets/css/editor-styles.css';
 
    return $url;
}
 