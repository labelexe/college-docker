<?php
if (!defined('ABSPATH')) {exit;}
?>

<div class="container">

    <h1><?php echo __(WP_MOODLE_PLUGIN_NM,WP_MOODLE_DOMAIN);?></h1>

    <ul class="nav nav-tabs">
        <li class="active"><a href="<?php echo admin_url('admin.php'); ?>?page=wp_moodle_handler">Home</a></li>
        <li><a  href="<?php echo admin_url('admin.php'); ?>?page=moodle_courses_handle">Moodle Courses</a></li>
    </ul>

<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <br>
        <form action="options.php" method="post" class="moodle_setting_form">
            <?php settings_fields( 'wp_moodle_group'); ?>
            <?php do_settings_sections( 'wp_moodle_group' ); ?>

            <div class="form-group">
                <label for="moodle_url">Moodle URL:</label>
                <input type="url" class="form-control" id="moodle_url" name="moodle_url" value="<?php echo get_option( 'moodle_url' ); ?>">
            </div>

            <div class="form-group">
                <label for="moodle_token">Moodle Webservice Token:</label>
                <input type="text" class="form-control" id="moodle_token" name="moodle_token" value="<?php echo get_option( 'moodle_token' ); ?>">
            </div>


            <div class="checkbox">
                <label><input name="moodle_disable" type="checkbox" value="disabled" <?php if ( 'disabled' == get_option('moodle_disable')) echo 'checked="checked"'; ?>> Disable Plugin</label>
            </div>
            <?php submit_button(); ?>
        </form>

    </div>

</div>
    <?php
    $moodle_url = get_option( 'moodle_url' );
    $moodle_token = get_option( 'moodle_token' );
    if(!empty($moodle_url) && !empty($moodle_token)){ ?>
    <div><a class="btn btn-danger" href="<?php echo admin_url('admin.php'); ?>?page=sync_moodle_courses_handle">Synchronize Moodle Courses</a> </div>


<br>
<br>
    <p>Use below shortcode to show moodle Courses</p>
<code>[wp_moodle_show_courses]</code>

    <?php }?>

<hr>
<h3>Need Customization</h3>
<p>Please contact us. If you need more features <a href="mailto:sony7596@gmail.com">Contact Us</a> </p>

</div>