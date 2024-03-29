<div class="clear"></div>

<!-- Media Selection -->
<div class="item-wrap">
   <h3 class="clickable"><a href="javascript: void(0);"><?php _e('Media Selection', 'velocity'); ?></a></h3>	
   <div class="expand-wrap">
      <div class="inner clearfix">
         
         <h4><?php _e('Type', 'velocity'); ?> <span><?php _e('Select the media type', 'velocity'); ?>.</span></h4>
         <div class="item radio">
            <input type="radio" name="velocity_type" value="YouTube" id="YouTube" class="velocity_element">
            <label for="YouTube" class="youtube"><?php _e('YouTube', 'velocity'); ?></label>
         </div>
         <div class="item radio">
            <input type="radio" name="velocity_type" value="Vimeo" id="Vimeo" class="velocity_element">
            <label for="Vimeo" class="vimeo"><?php _e('Vimeo', 'velocity'); ?></label>
         </div>
         <div class="item radio">
            <input type="radio" name="velocity_type" value="Twitch" id="Twitch" class="velocity_element">
            <label for="Twitch" class="twitch"><?php _e('Twitch', 'velocity'); ?></label>
         </div>         
         <div class="item radio">
            <input type="radio" name="velocity_type" value="SoundCloud" id="SoundCloud" class="velocity_element">
            <label for="SoundCloud" class="soundcloud"><?php _e('SoundCloud', 'velocity'); ?></label>
         </div>
         
         <div class="item checkbox" id="velocity_soundcloud_playlist_wrap">
            <input type="checkbox" name="velocity_soundcloud_playlist" value="true" id="velocity_soundcloud_playlist" class="velocity_element">
            <label for="velocity_soundcloud_playlist"><?php _e('Playlist', 'velocity'); ?></label>
         </div>
         
         <div class="spacer"></div>
         <hr/>
         <div class="spacer"></div>
         
         <div class="half_col">
            <label for="velocity_type_id">
               <?php _e('Unique ID', 'velocity'); ?> 
               <span><?php _e('Enter the unique <em id="velocity_selected_media"></em> ID', 'velocity'); ?>.</span>
            </label>
            <input value="212986034" type="text" name="velocity_type_id" id="velocity_type_id" class="velocity_element" placeholder="2smWSF_NGWk">
         </div>
         <div class="half_col last">         
            <label for="velocity_type_options"><?php _e('Embed Parameters', 'velocity'); ?> <span><?php _e('Add optional styling parameters', 'velocity'); ?>.</label>
            <input type="text" name="velocity_type_options" id="velocity_type_options" class="velocity_element" placeholder="rel=0&amp;controls=0&amp;showinfo=0">       
         </div>
      </div>
   </div>
</div> 


<!-- Image Selection -->
<div class="item-wrap" id="velocity-img-selection">	
   <h3 class="clickable"><a href="javascript: void(0);"><?php _e('Image Preview', 'velocity'); ?></a></h3>
   <div class="expand-wrap">
      
      <div class="inner clearfix">         
         
         <!-- 
         <input type="checkbox" name="velocity_custom_preview" id="velocity_custom_preview" value="true" class="velocity_element" checked="checked">
         <label for="velocity_custom_preview"><?php _e('Use Custom Preview Image', 'velocity'); ?></label>       
         <div class="spacer"></div>         
         -->
         
         <section id="velocity-default-preview">
            <div class="velocity-preview-img-wrap">
               <a href="javascript: void(0);" class="velocity-preview-img-a">
                  <div id="velocity-service-img"></div>
                  <span style="background-color: #000000" class="velocity-play-btn">
                     <span style="border-left-color: #FFFFFF;" class="velocity-arrow"></span>
                  </span> 
               </a>
            </div>
         </section>
         
         <section id="velocity-custom">
            <div class="velocity-preview-img">
               <div class="velocity-preview-img-wrap">
                  <a class="clear-img" href="javascript:void(0);" data-placeholder="<?php echo VELOCITY_PLACEHOLDER; ?>">&times;</a>
                  <a href="javascript: void(0);" class="velocity-preview-img-a">
                  <?php
                     $placeholder = get_option('velocity_placeholder');
                     if(isset($placeholder) && !empty($placeholder) && $placeholder !== ''){
                        echo '<img src="'. esc_url($placeholder).'" alt=""/>';
                     }else{
                        echo '<img src="'.esc_url(VELOCITY_PLACEHOLDER).'" alt=""/>';                 
                     } 
                  ?>   
                  <span style="background-color: #000000" class="velocity-play-btn">
                     <span style="border-left-color: #FFFFFF;" class="velocity-arrow"></span>
                  </span>   
                  </a>    
               </div>
               <div class="clear"></div>            
               <div class="centered-btn">           
                  <button type="button" class="button button-primary button-large"  name="velocity_upload_btn" id="velocity_upload_btn"><?php _e('Select Image', 'velocity'); ?></button>
               </div>            
            </div>
            
            <div class="velocity-preview-controls">            
               <?php $sizes = get_intermediate_image_sizes(); ?>
               <label for="velocity_image_size"><?php _e('Preview Size', 'velocity'); ?></label>
               <div class="select-wrap">
                  <select name="velocity_image_size" id="velocity_image_size" disabled="disabled">
                     <option value="full" selected="selected"><?php _e('Full Size', 'velocity'); ?></option>
                     <?php foreach ($sizes as $img_size): 
                      $image_size = velocity_get_image_dimensions( "$img_size" );
                      $w = '';
                      $h = '';
                      if($image_size){
                         $w = $image_size['width'];
                         $h = $image_size['height'];
                      }
                     ?>
                     <option value="<?php echo $img_size ?>">
                      <?php 
                         echo $img_size; 
                         if(!empty($w) && !empty($h)){
                            echo ' - ' . $w . ' x ' . $h;
                         }
                      ?>
                     </option>
                     <?php endforeach; ?>
                  </select>
               </div>
               
               <div class="spacer"></div>
               
               <label for="velocity_image_alt"><?php _e('Alt Text', 'velocity'); ?></label>
               <input type="text" name="velocity_image_alt" id="velocity_image_alt" value="<?php _e('Play', 'velocity'); ?>" class="velocity_element">
               
               <div class="spacer"></div>
               
               <label for="velocity_image_path"><?php _e('Image Path', 'velocity'); ?></label>
               <input type="text" name="velocity_image_path" id="velocity_image_path" readonly="readonly" class="readonly">
               
               <div class="spacer"></div>   
                        
               <label for="velocity_image_id"><?php _e('Attachment ID', 'velocity'); ?></label>
               <input type="text" name="velocity_image_id" id="velocity_image_id" value="" readonly="readonly" disabled="disabled" class="readonly">
               
               <div class="spacer"></div>
               
            </div>
         </section>  
                
         
         <div class="spacer"></div>
         <hr/>
         <div class="spacer"></div>
         
         
         <input type="checkbox" name="velocity_play_btn" id="velocity_play_btn" value="true" class="velocity_element" checked="checked">
         <label for="velocity_play_btn"><?php _e('Display Play Button', 'velocity'); ?></label>
         
         <section id="velocity_play_btn_controls" class="clearfix">            
            <div class="spacer"></div>
            <div class="half_col">
               <label for="velocity_btn_color"><?php _e('Arrow Color', 'velocity'); ?></label>
               <div class="select-wrap">
                  <select name="velocity_btn_color" id="velocity_btn_color" class="velocity_element">
                     <option value="#FFFFFF" selected="selected"><?php _e('White', 'velocity'); ?></option>
                     <option value="#000000"><?php _e('Black', 'velocity'); ?></option>
                  </select>
               </div>
            </div>            
            <div class="half_col last">
               <label for="velocity_bkg_color"><?php _e('Background Color', 'velocity'); ?></label>
               <div class="select-wrap">
                  <select name="velocity_bkg_color" id="velocity_bkg_color" class="velocity_element">
                     <option value="#000000" selected="selected"><?php _e('Black', 'velocity'); ?></option>
                     <option value="#FFFFFF"><?php _e('White', 'velocity'); ?></option>
                     <option value="transparent"><?php _e('Transparent', 'velocity'); ?></option>
                  </select>
               </div>
            </div>            
         </section>
         
      </div>      
      <div class="velocity-loading"></div>
   </div>
</div>   

<!-- Shortcode Output -->
<div class="item-wrap last">
   <h3 class="clickable"><a href="javascript: void(0);"><?php _e('Shortcode Output', 'velocity'); ?></a></h3>
   <div class="expand-wrap">
      <div class="inner clearfix">
         <p><?php _e('Copy and paste the following shortcode into a content editor, widget zone or page template', 'velocity'); ?>.</p>
         <div class="velocity-shortcode-display">
            <div id="velocity-shortcode-output"></div>
            <a class="copy" href="javascript:void(0);" title="<?php _e('Copy Shortcode', 'velocity'); ?>"><?php _e('Copy', 'velocity'); ?></a>
         </div>
         <div class="velocity-output-wrap">
      	   <button onclick="javascript:velocityModal.insert(velocityModal.local_ed)" class="button-primary" id="insert-velocity">
         	   <i class="fa fa-chevron-circle-right"></i> <?php _e('Insert Shortcode', 'velocity'); ?>
            </button>
      	</div>
      </div>
   </div>
</div>
