<?php
/*
Plugin Name:Wordpress Moodle
Description:Wordpress Moodle plugin used to resgiter wordpress users into moodle
Version:2
Author:sony7596, miraclewebssoft, reachbaljit
Author URI:http://www.miraclewebsoft.com
License:GPL2
License URI:https://www.gnu.org/licenses/gpl-2.0.html
*/
if (!defined('ABSPATH')) {
    exit;
}

if (!defined("WP_MOODLE_VERSION_CURRENT")) define("WP_MOODLE_VERSION_CURRENT", '1');
if (!defined("WP_MOODLE_URL")) define("WP_MOODLE_URL", plugin_dir_url( __FILE__ ) );
if (!defined("WP_MOODLE_PLUGIN_DIR")) define("WP_MOODLE_PLUGIN_DIR", plugin_dir_path(__FILE__));
if (!defined("WP_MOODLE_PLUGIN_NM")) define("WP_MOODLE_PLUGIN_NM", 'WP Moodle');
if (!defined("WP_MOODLE_DOMAIN")) define("WP_MOODLE_DOMAIN", 'WPM');


Class WP_MOODLE
{
    public $pre_name = 'wp_moodle';

    public function __construct()
    {
        // Installation and uninstallation hooks
        register_activation_hook(__FILE__, array($this, $this->pre_name . '_activate'));
        register_deactivation_hook(__FILE__, array($this, $this->pre_name . '_deactivate'));
        add_action('admin_menu', array($this, $this->pre_name . '_setup_admin_menu'));
        add_action("admin_init", array($this, $this->pre_name . '_backend_plugin_js_scripts'));
        add_action("admin_init", array($this, $this->pre_name . '_backend_plugin_css_scripts'));
        add_action("wp_enqueue_scripts", array($this, $this->pre_name . '_frontend_sources'));
        add_action('admin_init', array($this, $this->pre_name . '_settings'));
        add_action('admin_init', array($this, $this->pre_name . '_settings'));
        add_action('init', array($this, $this->pre_name . '_custom_post_type'));
        add_action( 'user_register', array($this, $this->pre_name . '_registration_save'), 10, 1 );
        add_shortcode( 'wp_moodle_show_courses', array($this, $this->pre_name . '_show_moodle_courses'));

    }


    public function wp_moodle_setup_admin_menu()
    {
        add_menu_page(__(WP_MOODLE_PLUGIN_NM, WP_MOODLE_DOMAIN), 'Wp Moodle', 'activate_plugins', 'wp_moodle_handler',
            array($this, 'wp_moodle_admin_page'), WP_MOODLE_URL . 'assets/image/icon.png');


        add_submenu_page('wp_moodle_handler'            // -> Set to null - will hide menu link
            , __('Test Moodle API', WP_MOODLE_DOMAIN)// -> Page Title
            , 'Test Moodle API'    // -> Title that would otherwise appear in the menu
            , 'administrator' // -> Capability level
            , 'moodle_test_api_handle'   // -> Still accessible via admin.php?page=menu_handle
            , array($this, 'wp_moodle_test_api_page') // -> To render the page
        );

        add_submenu_page(null            // -> Set to null - will hide menu link
            , __('Moodle Courses', WP_MOODLE_DOMAIN)// -> Page Title
            , 'Moodle Courses'    // -> Title that would otherwise appear in the menu
            , 'administrator' // -> Capability level
            , 'moodle_courses_handle'   // -> Still accessible via admin.php?page=menu_handle
            , array($this, 'wp_moodle_courses_page') // -> To render the page
        );

        add_submenu_page(null            // -> Set to null - will hide menu link
            , __('Sync Moodle Courses', WP_MOODLE_DOMAIN)// -> Page Title
            , 'Sync Moodle Courses'    // -> Title that would otherwise appear in the menu
            , 'administrator' // -> Capability level
            , 'sync_moodle_courses_handle'   // -> Still accessible via admin.php?page=menu_handle
            , array($this, 'wp_moodle_sync_courses') // -> To render the page
        );

    }

    public function wp_moodle_admin_page()
    {
        include(WP_MOODLE_PLUGIN_DIR . 'views/dashboard.php');
    }

    public function wp_moodle_test_api_page(){

        $domainname = get_option('moodle_url');


        $token = get_option('moodle_token');
        $restformat = 'json';
        $functionname = 'core_course_get_courses';
        $param = "";

        $contents_arr = $this->moodle_api($functionname, $param);

        include(WP_MOODLE_PLUGIN_DIR . 'views/moodle_test_api.php');
    }

    public function wp_moodle_courses_page(){

        $functionname = 'core_course_get_courses';
        $param = "";

        $contents_arr = $this->moodle_api($functionname, $param);

        include(WP_MOODLE_PLUGIN_DIR . 'views/moodle_courses.php');
    }


    function wp_moodle_backend_plugin_js_scripts(){
        wp_enqueue_script("jquery");
        wp_enqueue_script("wp_moodle.js", WP_MOODLE_URL . "assets/js/wp_moodle.js");
        wp_enqueue_script("bootstrap.min.js", WP_MOODLE_URL . "assets/js/bootstrap.min.js");

    }

    function wp_moodle_backend_plugin_css_scripts()
    {

        wp_enqueue_style("bootstrap.min.css", WP_MOODLE_URL . "assets/css/bootstrap.min.css");
        wp_enqueue_style("wp_moodle.css", WP_MOODLE_URL . "assets/css/wp_moodle.css");
    }


    function wp_moodle_frontend_sources()
    {

       // CSS
        wp_register_style('wp_moodle_css',WP_MOODLE_URL . "assets/css/wp_moodle_front.css");
        wp_enqueue_style('wp_moodle_css');
    }

    public function wp_moodle_activate()
    {

    }

    public function wp_moodle_deactivate()
    {
    }
    function wp_moodle_settings()
    {    //register our settings
        register_setting('wp_moodle_group', 'moodle_url');
        register_setting('wp_moodle_group', 'moodle_token');
        register_setting('wp_moodle_group', 'moodle_disable');

    }

    function wp_moodle_custom_post_type()
    {
        register_post_type('wp_moodle_courses',
            [
                'labels'      => [
                    'name'          => __('Moodle Courses', WP_MOODLE_DOMAIN),
                    'singular_name' => __('Moodle Course',WP_MOODLE_DOMAIN),
                ],
                'public'      => true,
                'has_archive' => true,
                'rewrite'     => ['slug' => 'wp_moodle_courses'],

            ]
        );
    }

    //moodle register use
    function wp_moodle_registration_save( $user_id )
    {
        if(isset($_POST['email'])){
            $email = sanitize_email($_POST['email'])?sanitize_email($_POST['email']):sanitize_email($_POST['user_email']);
            $user_login = sanitize_text_field($_POST['user_login']);
            $first_name = sanitize_text_field($_POST['first_name'])? sanitize_text_field($_POST['first_name']): "no-first-name";
            $last_name = sanitize_text_field($_POST['last_name'])? sanitize_text_field($_POST['last_name']): "no-last-name";

            $password = $_POST['pass1'];
            $role = 5; //student

            $auth ="manual";
            $createpassword = 1;

            $params = '&users[0][username]=' . $user_login .
                '&users[0][firstname]=' . $first_name .
                '&users[0][lastname]=' . $last_name .
                '&users[0][auth]=' . $auth .
                '&users[0][createpassword]=' . $createpassword .
                '&users[0][email]=' . $email;


            $functionname = 'core_user_create_users';

            $contents_arr = $this->moodle_api($functionname, $params);

            if(isset($contents_arr->id)) {
                update_user_meta($user_id, 'lms_id', sanitize_text_field($contents_arr->id));
            }

            return true;

        }
    }

    function wp_moodle_show_moodle_courses()
    {
        $content_html = "";

        $args = array(
            'post_type' => 'wp_moodle_courses',
            'posts_per_page' => -1
            );

        // The Query
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) :
         $content_html .= "<div class='course_content'>";
            while ( $the_query->have_posts() ) : $the_query->the_post();
                $content_html .='<div class="wp_moodle_course_title">'.the_title().'</div>
                                <div class="wp_moodle_course_content">'.the_content().'</div>';
                endwhile;
         $content_html .= "</div>";

        wp_reset_postdata(); ?>

        <?php else : ?>

        <?php endif;

        return $content_html;
    }

    function wp_moodle_sync_courses()
    {
        $functionname = 'core_course_get_courses';
        $param = "";

        $contents_arr = $this->moodle_api($functionname, $param);


        if (!empty($contents_arr)) {

            foreach ($contents_arr as $content) {
                if(!get_page_by_title( $content->fullname, 'ARRAY_A', 'wp_moodle_courses')){

                    $content_html = '<p>'.$content->summary.'</p>
                <a target="_blank" href="'.get_option( 'moodle_url' ).'/course/view.php?id='.$content->id.'">Goto Course</a>';

                    // Create post object
                    $my_post = array(
                        'post_type' => 'wp_moodle_courses',
                        'post_title'    => $content->fullname,
                        'post_content'  => $content_html,
                        'post_status'   => 'publish',
                        'post_author'   => get_current_user_id(),
                    );

                    // Insert the post into the database
                    wp_insert_post( $my_post );
                }

            }

        }
        echo '<br><p>Courses synchronized successfully.</p>';
        $url = admin_url('admin.php')."?page=wp_moodle_handler";
        echo "<a href=$url>Home</a>";
    }

    //Moodle api function
    Private function moodle_api($functionname, $params){
        $domainname = get_option( 'moodle_url' );
        $token = get_option( 'moodle_token' );
        $restformat = 'json';

        $serverurl = $domainname . '/webservice/rest/server.php' . '?wstoken=' . $token . '&wsfunction=' . $functionname . '&moodlewsrestformat=' . $restformat . $params;
        $contents = file_get_contents($serverurl);
        return $contents_arr = json_decode($contents);

    }

}

$WP_MOODLE_OBJ = new WP_MOODLE();
