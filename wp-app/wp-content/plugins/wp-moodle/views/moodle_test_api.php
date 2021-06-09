<?php
if (!defined('ABSPATH')) {exit;}
?>

<div class="container">

    <h1><?php echo __(WP_MOODLE_PLUGIN_NM,WP_MOODLE_DOMAIN);?></h1>

    <div id="test_api" class="">
        <br>
        <?php

         if(!empty($contents_arr)){
             echo '<p class="btn btn-success">Success! Moodle API returning Courses...</p>';
         }
        else{
            echo '<p class="danger">Failure! Moodle API not returning Courses...</p>';
        }

        ?>
    </div>

</div>


<!---->
<!--<h3>Create your Facebook API KEY:</h3>-->
<!--<ul>-->
<!--    <li>1.Go to your <a target="_blank" href="https://www.facebook.com/ads/manager/pixel/facebook_pixel"> Facebook Pixel tab</a> in Ads Manager.</li>-->
<!--    <li>2.Click Create a Pixel.</li>-->
<!--    <li>3.Enter a name for your pixel. You can have only one pixel per ad account, so choose a name that represents your business.</li>-->
<!--    <li>Note: You can change the name of the pixel later from the Facebook Pixel tab.</li>-->
<!--    <li>4.Check the box to accept the terms.</li>-->
<!--    <li>5.Click Create Pixel.</li>-->
<!--    <li>6.Copy code and paste</li>-->
<!--</ul>-->
<!--<h3>You can visit our tutorial to setup Facebook pixel</h3>-->
<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/gAzQSmnyV6M" frameborder="0" allowfullscreen></iframe>-->