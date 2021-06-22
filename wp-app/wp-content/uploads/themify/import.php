<?php

function themify_do_demo_import() {
$term = array (
  'term_id' => 3,
  'name' => 'Blog',
  'slug' => 'blog',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 4,
  'name' => 'Featured',
  'slug' => 'featured',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 11,
  'name' => 'Images',
  'slug' => 'images',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 12,
  'name' => 'News',
  'slug' => 'news',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 13,
  'name' => 'Sports',
  'slug' => 'sports',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 12,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 14,
  'name' => 'Top Stories',
  'slug' => 'top-stories',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 12,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 19,
  'name' => 'gallery',
  'slug' => 'gallery-2',
  'term_group' => 0,
  'taxonomy' => 'post_tag',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 8,
  'name' => 'Main Menu',
  'slug' => 'main-menu',
  'term_group' => 0,
  'taxonomy' => 'nav_menu',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 9,
  'name' => 'Footer Menu',
  'slug' => 'footer-menu',
  'term_group' => 0,
  'taxonomy' => 'nav_menu',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 2,
  'name' => 'Blogroll',
  'slug' => 'blogroll',
  'term_group' => 0,
  'taxonomy' => 'link_category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 10,
  'name' => 'social',
  'slug' => 'social',
  'term_group' => 0,
  'taxonomy' => 'link_category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$post = array (
  'ID' => 1815,
  'post_date' => '2008-06-26 00:51:24',
  'post_date_gmt' => '2008-06-26 00:51:24',
  'post_content' => '<p>Sed eu urna quis lacus aliquet fermentum vel sed risus. Integer laoreet pretium interdum. Proin consequat consequat feugiat. Integer pellentesque faucibus aliquet.</p>

<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><h3>Alert Heading</h3> Alert Text <a href="#"> Action button </a><!--/themify_builder_static-->',
  'post_title' => 'The Desert Run',
  'post_excerpt' => '',
  'post_name' => 'the-desert-run',
  'post_modified' => '2019-05-27 21:34:20',
  'post_modified_gmt' => '2019-05-27 21:34:20',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1815',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'builder_switch_frontend' => '0',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"xp30588\\",\\"cols\\":[{\\"element_id\\":\\"9c3q589\\",\\"grid_class\\":\\"col-full\\"}]}]',
  ),
  'tax_input' => 
  array (
    'category' => 'sports',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/83151367.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1811,
  'post_date' => '2008-06-26 00:46:53',
  'post_date_gmt' => '2008-06-26 00:46:53',
  'post_content' => 'Duis diam urna, aliquam id mauris nec, tristique ultrices turpis. Nam non ante in nunc euismod rutrum. Cras tristique feugiat neque sed vestibulum.<!--themify_builder_static--><svg> <circle style="r:calc(50% - 1.5px)" cx="50%" cy="50%" stroke-width="3"/> <circle style="r:calc(50% - 1.5px)" cx="50%" cy="50%" stroke="#de5d5d" stroke-width="3" data-progress="100" stroke-dasharray="0,10000"/> </svg> <i><svg><use href="#tf-fas-home"></use></svg></i> <h3> Feature Title </h3> <p>Feature content</p><!--/themify_builder_static-->',
  'post_title' => 'Shop on the Run',
  'post_excerpt' => '',
  'post_name' => 'shop-on-the-run',
  'post_modified' => '2020-09-09 23:48:46',
  'post_modified_gmt' => '2020-09-09 23:48:46',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1811',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'builder_switch_frontend' => '0',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"e8wm383\\",\\"cols\\":[{\\"element_id\\":\\"gvss384\\",\\"grid_class\\":\\"col-full\\"}]},{\\"element_id\\":\\"zmc4834\\",\\"cols\\":[{\\"element_id\\":\\"k9wc834\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"feature\\",\\"element_id\\":\\"pzaj838\\",\\"mod_settings\\":{\\"title_feature\\":\\"Feature Title\\",\\"content_feature\\":\\"<p>Feature content<\\\\/p>\\",\\"circle_percentage_feature\\":\\"100\\",\\"circle_stroke_feature\\":\\"3\\",\\"icon_feature\\":\\"fa-home\\",\\"layout_feature\\":\\"icon-top\\",\\"circle_size_feature\\":\\"small\\",\\"icon_type_feature\\":\\"icon\\",\\"circle_color_feature\\":\\"#de5d5d\\",\\"custom_circle_size_feature\\":\\"120\\",\\"link_options\\":\\"regular\\",\\"feature_download_link\\":false}}]}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'category' => 'top-stories',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/99449315.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1808,
  'post_date' => '2008-06-26 00:45:33',
  'post_date_gmt' => '2008-06-26 00:45:33',
  'post_content' => 'Duis laoreet tortor magna, sit amet viverra elit dignissim sit amet. Aenean tempor et tortor eget blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed aliquam, sapien et tincidunt sodales, risus lectus rutrum turpis.',
  'post_title' => 'Greenhouse Plants',
  'post_excerpt' => '',
  'post_name' => 'greenhouse-plants',
  'post_modified' => '2017-10-27 17:27:13',
  'post_modified_gmt' => '2017-10-27 17:27:13',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1808',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'hide_post_title' => 'yes',
    '_themify_builder_settings_json' => '[{\\"row_order\\":\\"0\\",\\"cols\\":[{\\"column_order\\":\\"0\\",\\"grid_class\\":\\"col-full\\",\\"element_id\\":\\"io8y440\\"}],\\"element_id\\":\\"fkm3848\\"}]',
  ),
  'tax_input' => 
  array (
    'category' => 'top-stories',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/86807268.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1805,
  'post_date' => '2008-06-26 00:44:06',
  'post_date_gmt' => '2008-06-26 00:44:06',
  'post_content' => 'Fusce hendrerit adipiscing diam vitae sodales. Sed faucibus venenatis lectus sed laoreet. Sed in libero ac nisi placerat dictum. Donec dui neque, aliquam non nunc nec, porttitor tempor leo. Maecenas non sagittis neque.',
  'post_title' => 'Morning News',
  'post_excerpt' => '',
  'post_name' => 'morning-news',
  'post_modified' => '2017-08-24 07:21:49',
  'post_modified_gmt' => '2017-08-24 07:21:49',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1805',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'builder_switch_frontend' => '0',
  ),
  'tax_input' => 
  array (
    'category' => 'top-stories',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/129025022.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1802,
  'post_date' => '2008-06-26 00:43:06',
  'post_date_gmt' => '2008-06-26 00:43:06',
  'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis ac tellus id tempor. Aliquam pellentesque nibh quis justo commodo tristique. Aliquam erat volutpat. Etiam ut justo aliquam, euismod dolor eget, ullamcorper tortor. Aliquam eu ipsum a urna lacinia aliquam id non dui.',
  'post_title' => 'Travel the world',
  'post_excerpt' => '',
  'post_name' => 'travel-the-world',
  'post_modified' => '2017-08-24 07:21:51',
  'post_modified_gmt' => '2017-08-24 07:21:51',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1802',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'top-stories',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/83719858.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1775,
  'post_date' => '2008-06-25 02:04:40',
  'post_date_gmt' => '2008-06-25 02:04:40',
  'post_content' => 'Mauris varius fermentum velit sit amet varius. Aenean consectetur lacus tellus, sed vestibulum quam. Donec lorem lectus, posuere in pharetra at, vestibulum et magna. Ut viverra, risus eu commodo interdum, nunc ipsum mollis purus, ac varius ante purus sed diam.',
  'post_title' => 'How to Shop for Healthy Fruits',
  'post_excerpt' => '',
  'post_name' => 'how-to-shop-for-healthy-fruits',
  'post_modified' => '2017-08-24 07:21:52',
  'post_modified_gmt' => '2017-08-24 07:21:52',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1775',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'featured',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/86527435.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1772,
  'post_date' => '2008-06-25 02:04:04',
  'post_date_gmt' => '2008-06-25 02:04:04',
  'post_content' => 'Vivamus in risus non lacus vehicula vestibulum. In magna leo, malesuada eget pulvinar ut, pellentesque a arcu. Praesent rutrum feugiat nibh elementum posuere. Nulla volutpat porta enim vel consectetur.',
  'post_title' => '10 Travel Tips for Your Summer Vacation',
  'post_excerpt' => '',
  'post_name' => '10-travel-tips-for-your-summer-vacation',
  'post_modified' => '2017-08-24 07:21:54',
  'post_modified_gmt' => '2017-08-24 07:21:54',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1772',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'featured',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/106390351.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1769,
  'post_date' => '2008-06-25 02:03:33',
  'post_date_gmt' => '2008-06-25 02:03:33',
  'post_content' => 'Nunc et pharetra enim. Praesent pharetra, neque et luctus tempor, leo sapien faucibus leo, a dignissim turpis ipsum sed libero. Sed sed luctus purus. Aliquam faucibus turpis at libero consectetur euismod. Nam nunc lectus, congue non egestas quis, condimentum ut arcu.',
  'post_title' => 'Are Your Kids Under Stress?',
  'post_excerpt' => '',
  'post_name' => 'are-your-kids-under-stress',
  'post_modified' => '2017-08-24 07:21:56',
  'post_modified_gmt' => '2017-08-24 07:21:56',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1769',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'featured',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/83109689.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1766,
  'post_date' => '2008-06-25 02:02:31',
  'post_date_gmt' => '2008-06-25 02:02:31',
  'post_content' => 'Aliquam erat nulla, sodales at imperdiet vitae, convallis vel dui. Sed ultrices felis ut justo suscipit vestibulum. Pellentesque nisl nisi, vehicula vitae hendrerit vel, mattis eget mauris. Donec consequat eros eget lectus dictum sit amet ultrices neque sodales. Aliquam metus diam, mattis fringilla adipiscing at, lacinia at nulla.',
  'post_title' => 'How to Stay Connected on the Go',
  'post_excerpt' => '',
  'post_name' => 'how-to-stay-connected-on-the-go',
  'post_modified' => '2017-08-24 07:21:58',
  'post_modified_gmt' => '2017-08-24 07:21:58',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1766',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'featured',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/75627871.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1762,
  'post_date' => '2008-06-25 02:01:43',
  'post_date_gmt' => '2008-06-25 02:01:43',
  'post_content' => 'Nam risus velit, rhoncus eget consectetur id, <a href="https://themify.me/">Themify.me</a>. Vivamus imperdiet diam ac tortor tempus posuere. Curabitur at arcu id turpis posuere bibendum. Sed commodo mauris eget diam pretium cursus. In sagittis feugiat mauris, in ultrices mauris lacinia eu. Fusce augue velit, vulputate elementum semper congue, rhoncus adipiscing nisl. Curabitur vel risus eros, sed eleifend arcu. Donec porttitor hendrerit diam et blandit.',
  'post_title' => 'Top 10 Office Entertainment Gadgets',
  'post_excerpt' => '',
  'post_name' => 'top-10-office-entertainment-gadgets',
  'post_modified' => '2017-08-24 07:21:59',
  'post_modified_gmt' => '2017-08-24 07:21:59',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=1762',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'featured',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/sb10064068ac-001.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 53,
  'post_date' => '2008-06-11 21:19:37',
  'post_date_gmt' => '2008-06-11 21:19:37',
  'post_content' => 'Mauris faucibus, tellus sed commodo luctus, nibh libero tristique felis, a vulputate nibh tellus et purus. Donec dictum odio non magna accumsan pellentesque. Sed pharetra fringilla venenatis. Quisque quis lobortis nibh, nec egestas leo.',
  'post_title' => 'Landscape',
  'post_excerpt' => 'Mauris faucibus, tellus sed commodo luctus, nibh libero tristique felis, a vulputate nibh...',
  'post_name' => 'landscape',
  'post_modified' => '2017-08-24 07:22:02',
  'post_modified_gmt' => '2017-08-24 07:22:02',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=53',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'blog, images',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/65799673.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 50,
  'post_date' => '2008-06-11 21:16:04',
  'post_date_gmt' => '2008-06-11 21:16:04',
  'post_content' => 'Ut tempus nibh elit, eu faucibus lorem fringilla sed. Phasellus lobortis urna eget eleifend aliquet. Cras id augue id nulla interdum feugiat. Cras quam lacus, congue at consequat sit amet, consectetur id enim. Sed id lorem id turpis ultrices mattis at a odio.',
  'post_title' => 'External Link',
  'post_excerpt' => 'Ut tempus nibh elit, eu faucibus lorem fringilla sed. Phasellus lobortis urna eget.',
  'post_name' => 'external-link',
  'post_modified' => '2017-08-24 07:22:02',
  'post_modified_gmt' => '2017-08-24 07:22:02',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=50',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'external_link' => 'https://themify.me/',
  ),
  'tax_input' => 
  array (
    'category' => 'blog, images',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/59006500.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 46,
  'post_date' => '2008-06-11 21:08:52',
  'post_date_gmt' => '2008-06-11 21:08:52',
  'post_content' => 'Proin ornare scelerisque tellus, at porttitor urna pharetra in. Quisque mattis nibh sed dui fermentum, at porttitor nunc egestas. Vestibulum arcu eros, ultricies et ultricies scelerisque, gravida a eros. Nam eget commodo purus, quis mattis dui. Nunc vulputate rutrum odio vitae euismod.',
  'post_title' => 'Lightbox Video',
  'post_excerpt' => 'Proin ornare scelerisque tellus, at porttitor urna pharetra in. Quisque mattis nibh sed dui...',
  'post_name' => 'lightbox-video',
  'post_modified' => '2017-08-24 07:22:04',
  'post_modified_gmt' => '2017-08-24 07:22:04',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=46',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'lightbox_link' => 'http://vimeo.com/60779545',
    'lightbox_icon' => 'on',
  ),
  'tax_input' => 
  array (
    'category' => 'blog',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/26990563.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 2086,
  'post_date' => '2008-06-11 20:58:56',
  'post_date_gmt' => '2008-06-11 20:58:56',
  'post_content' => 'Sed pharetra fringilla venenatis. Quisque quis lobortis nibh, nec egestas leo. Pellentesque ornare auctor velit eget rutrum. Vivamus enim quam, commodo auctor erat sed, sodales tristique erat.

[gallery link="file" columns="6" ids="36,37,38,39,40,41"]',
  'post_title' => 'Gallery Post',
  'post_excerpt' => 'Sed pharetra fringilla venenatis. Quisque quis lobortis nibh, nec egestas leo.',
  'post_name' => 'gallery-post',
  'post_modified' => '2017-08-24 07:22:05',
  'post_modified_gmt' => '2017-08-24 07:22:05',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=34',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'blog, images',
    'post_tag' => 'gallery-2',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/56310136.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 31,
  'post_date' => '2008-06-11 20:45:36',
  'post_date_gmt' => '2008-06-11 20:45:36',
  'post_content' => 'Sed pharetra fringilla venenatis. Quisque quis lobortis nibh, nec egestas leo. Cras id augue id nulla interdum feugiat. Cras quam lacus, congue at consequat sit amet, consectetur id enim. Sed id lorem id turpis ultrices mattis at a odio.',
  'post_title' => 'Lightbox Link',
  'post_excerpt' => 'Sed pharetra fringilla venenatis. Quisque quis lobortis nibh, nec egestas leo.',
  'post_name' => 'lightbox-link',
  'post_modified' => '2017-08-24 07:22:07',
  'post_modified_gmt' => '2017-08-24 07:22:07',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=31',
  'menu_order' => 0,
  'post_type' => 'post',
  'meta_input' => 
  array (
    'lightbox_link' => 'https://themify.me/demo/themes/builder/files/2013/06/129025022.jpg',
    'lightbox_icon' => 'on',
  ),
  'tax_input' => 
  array (
    'category' => 'blog, images',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/129025022.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 28,
  'post_date' => '2008-06-11 20:42:29',
  'post_date_gmt' => '2008-06-11 20:42:29',
  'post_content' => 'Vestibulum malesuada neque nec hendrerit lobortis. Maecenas erat diam, fringilla et hendrerit eu, laoreet vel quam. Integer sollicitudin nec eros a fringilla. Mauris sed velit sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada.',
  'post_title' => 'Sweet Tooth',
  'post_excerpt' => 'Vestibulum malesuada neque nec hendrerit lobortis. Maecenas erat diam, fringilla...',
  'post_name' => 'sweet-tooth',
  'post_modified' => '2017-08-24 07:22:09',
  'post_modified_gmt' => '2017-08-24 07:22:09',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=28',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'blog, images',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/99449315.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 25,
  'post_date' => '2008-06-11 20:41:16',
  'post_date_gmt' => '2008-06-11 20:41:16',
  'post_content' => 'Etiam ipsum ligula, mollis eu vestibulum id, ornare vel nibh. Sed sollicitudin, arcu non auctor pulvinar, velit eros viverra sapien, a mattis sem tortor sed arcu. Aenean gravida tincidunt commodo. In felis nunc, ultricies vel congue nec, congue vitae lacus.',
  'post_title' => 'Empty House',
  'post_excerpt' => 'Etiam ipsum ligula, mollis eu vestibulum id, ornare vel nibh. Sed sollicitudin, arcu non...',
  'post_name' => 'empty-house',
  'post_modified' => '2017-08-24 07:22:11',
  'post_modified_gmt' => '2017-08-24 07:22:11',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=25',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'blog, images',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/92168305.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 22,
  'post_date' => '2008-06-11 20:38:30',
  'post_date_gmt' => '2008-06-11 20:38:30',
  'post_content' => 'Vestibulum a quam nisl. Nam sagittis neque erat, sed egestas urna facilisis et. Cras interdum imperdiet est, ac porttitor sapien porttitor id. Aenean semper congue dolor, non malesuada sapien. Sed neque diam, cursus eget eros at, pretium sagittis ligula. Sed pretium urna vitae velit pharetra',
  'post_title' => 'Late Stroll',
  'post_excerpt' => 'Vestibulum a quam nisl. Nam sagittis neque erat, sed egestas urna facilisis et.',
  'post_name' => 'late-stroll',
  'post_modified' => '2017-08-24 07:22:12',
  'post_modified_gmt' => '2017-08-24 07:22:12',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=22',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'blog, images',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/134602640.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 8,
  'post_date' => '2008-06-11 20:27:11',
  'post_date_gmt' => '2008-06-11 20:27:11',
  'post_content' => 'Integer ultrices turpis laoreet tellus venenatis, sed luctus libero gravida. Vestibulum eu hendrerit eros. Quisque eget luctus turpis, eget cursus velit. Nullam auctor ligula velit, fringilla molestie elit mattis et. Donec volutpat adipiscing urna, at egestas odio venenatis aliquet.',
  'post_title' => 'Sunset',
  'post_excerpt' => 'Integer ultrices turpis laoreet tellus venenatis, sed luctus libero gravida.',
  'post_name' => 'sunset',
  'post_modified' => '2017-08-24 07:22:13',
  'post_modified_gmt' => '2017-08-24 07:22:13',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=8',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'blog, images',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/60795601.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 6,
  'post_date' => '2008-06-11 20:22:47',
  'post_date_gmt' => '2008-06-11 20:22:47',
  'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac lobortis orci, a ornare dui. Phasellus consequat vulputate dignissim. Etiam condimentum aliquam augue, a ullamcorper erat facilisis et. Proin congue augue sit amet ligula dictum porta. Integer pharetra euismod velit ac laoreet. Ut dictum vitae ligula sed fermentum. Sed dapibus purus sit amet massa faucibus varius. Proin nec malesuada libero.',
  'post_title' => 'Butterfly Light',
  'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac lobortis orci...',
  'post_name' => 'butterfly-light',
  'post_modified' => '2017-08-24 07:22:15',
  'post_modified_gmt' => '2017-08-24 07:22:15',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/builder/?p=6',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'blog, images',
  ),
  'thumb' => 'https://themify.me/demo/themes/basic/files/2013/06/127880648.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 594,
  'post_date' => '2011-04-03 01:15:51',
  'post_date_gmt' => '2011-04-03 01:15:51',
  'post_content' => 'Download this contact plugin: <a href="http://wordpress.org/extend/plugins/contact-form-7">Contact Form 7</a>.

[contact-form 1 "Contact form 1"]',
  'post_title' => 'Contact',
  'post_excerpt' => '',
  'post_name' => 'contact',
  'post_modified' => '2017-11-07 20:59:08',
  'post_modified_gmt' => '2017-11-07 20:59:08',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=594',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    '_themify_builder_settings_json' => '[{\\"row_order\\":\\"0\\",\\"cols\\":[{\\"column_order\\":\\"0\\",\\"grid_class\\":\\"col-full\\",\\"element_id\\":\\"oj0t091\\"}],\\"element_id\\":\\"nkix010\\"}]',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 409,
  'post_date' => '2010-10-08 11:15:14',
  'post_date_gmt' => '2010-10-08 15:15:14',
  'post_content' => '',
  'post_title' => 'Layouts',
  'post_excerpt' => '',
  'post_name' => 'layouts',
  'post_modified' => '2017-08-24 07:24:50',
  'post_modified_gmt' => '2017-08-24 07:24:50',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'http://demo.themify.me/bizco',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'query_category' => '0',
    'layout' => 'list-thumb-image',
    'image_width' => '240',
    'image_height' => '160',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 542,
  'post_date' => '2011-04-03 00:52:10',
  'post_date_gmt' => '2011-04-03 00:52:10',
  'post_content' => '',
  'post_title' => 'Fullwidth',
  'post_excerpt' => '',
  'post_name' => 'fullwidth',
  'post_modified' => '2017-10-25 18:49:19',
  'post_modified_gmt' => '2017-10-25 18:49:19',
  'post_content_filtered' => '',
  'post_parent' => 409,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=542',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    '_themify_builder_settings_json' => '[{\\"row_order\\":\\"0\\",\\"cols\\":[{\\"column_order\\":\\"0\\",\\"grid_class\\":\\"col-full\\",\\"element_id\\":\\"vnkb673\\"}],\\"element_id\\":\\"k0c7063\\"}]',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 553,
  'post_date' => '2011-04-03 00:56:45',
  'post_date_gmt' => '2011-04-03 00:56:45',
  'post_content' => '',
  'post_title' => 'Full - 2 Column',
  'post_excerpt' => '',
  'post_name' => '2-column',
  'post_modified' => '2017-10-25 18:57:20',
  'post_modified_gmt' => '2017-10-25 18:57:20',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=553',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'layout' => 'grid2',
    'posts_per_page' => '8',
    'display_content' => 'none',
    '_themify_builder_settings_json' => '[{\\"row_order\\":\\"0\\",\\"cols\\":[{\\"column_order\\":\\"0\\",\\"grid_class\\":\\"col-full\\",\\"element_id\\":\\"wc08190\\"}],\\"element_id\\":\\"43em080\\"}]',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 559,
  'post_date' => '2011-04-03 01:00:03',
  'post_date_gmt' => '2011-04-03 01:00:03',
  'post_content' => '',
  'post_title' => 'Full - 2 Column Thumb',
  'post_excerpt' => '',
  'post_name' => '2-column-thumb',
  'post_modified' => '2017-08-24 07:23:53',
  'post_modified_gmt' => '2017-08-24 07:23:53',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=559',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'layout' => 'grid2-thumb',
    'posts_per_page' => '8',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 551,
  'post_date' => '2011-04-03 00:56:20',
  'post_date_gmt' => '2011-04-03 00:56:20',
  'post_content' => '',
  'post_title' => 'Full - 3 Column',
  'post_excerpt' => '',
  'post_name' => '3-column',
  'post_modified' => '2017-08-24 07:23:55',
  'post_modified_gmt' => '2017-08-24 07:23:55',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=551',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'layout' => 'grid3',
    'posts_per_page' => '9',
    'display_content' => 'none',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 547,
  'post_date' => '2011-04-03 00:53:59',
  'post_date_gmt' => '2011-04-03 00:53:59',
  'post_content' => '',
  'post_title' => 'Full - 4 Column',
  'post_excerpt' => '',
  'post_name' => '4-column',
  'post_modified' => '2017-08-24 07:23:57',
  'post_modified_gmt' => '2017-08-24 07:23:57',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=547',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'layout' => 'grid4',
    'posts_per_page' => '8',
    'display_content' => 'none',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 555,
  'post_date' => '2011-04-03 00:57:19',
  'post_date_gmt' => '2011-04-03 00:57:19',
  'post_content' => '',
  'post_title' => 'Full - Large Image List',
  'post_excerpt' => '',
  'post_name' => 'large-image-list',
  'post_modified' => '2017-08-24 07:23:58',
  'post_modified_gmt' => '2017-08-24 07:23:58',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=555',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'layout' => 'list-large-image',
    'posts_per_page' => '5',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 558,
  'post_date' => '2011-04-03 00:59:31',
  'post_date_gmt' => '2011-04-03 00:59:31',
  'post_content' => '',
  'post_title' => 'Full - Thumb Image List',
  'post_excerpt' => '',
  'post_name' => 'thumb-image-list',
  'post_modified' => '2017-08-24 07:24:00',
  'post_modified_gmt' => '2017-08-24 07:24:00',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=557',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'layout' => 'list-thumb-image',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 662,
  'post_date' => '2011-04-04 05:39:35',
  'post_date_gmt' => '2011-04-04 05:39:35',
  'post_content' => '',
  'post_title' => 'Sections',
  'post_excerpt' => '',
  'post_name' => 'sections',
  'post_modified' => '2017-08-24 07:24:01',
  'post_modified_gmt' => '2017-08-24 07:24:01',
  'post_content_filtered' => '',
  'post_parent' => 409,
  'guid' => 'https://themify.me/demo/themes/blogfolio/?page_id=662',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'section_categories' => 'yes',
    'layout' => 'list-thumb-image',
    'posts_per_page' => '2',
    'hide_meta' => 'yes',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 660,
  'post_date' => '2011-04-04 05:38:34',
  'post_date_gmt' => '2011-04-04 05:38:34',
  'post_content' => '<!--themify_builder_static--><p>Text contentqweqweqe</p>
 <h1>Text contentqweqweqeqweqweqweqeq</h1><!--/themify_builder_static-->',
  'post_title' => 'Section 2 Column',
  'post_excerpt' => '',
  'post_name' => 'section-2-column',
  'post_modified' => '2018-03-20 18:21:36',
  'post_modified_gmt' => '2018-03-20 18:21:36',
  'post_content_filtered' => '',
  'post_parent' => 662,
  'guid' => 'https://themify.me/demo/themes/blogfolio/?page_id=660',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'section_categories' => 'yes',
    'layout' => 'grid2',
    'posts_per_page' => '2',
    'display_content' => 'none',
    'hide_meta' => 'yes',
    '_themify_builder_settings_json' => '[{\\"row_order\\":\\"0\\",\\"cols\\":[{\\"column_order\\":\\"0\\",\\"grid_class\\":\\"col-full\\",\\"element_id\\":\\"uqfr694\\"}],\\"element_id\\":\\"zzyh079\\"}]',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 668,
  'post_date' => '2011-04-29 21:16:48',
  'post_date_gmt' => '2011-04-29 21:16:48',
  'post_content' => '',
  'post_title' => 'Section 2 Column Thumb',
  'post_excerpt' => '',
  'post_name' => 'section-2-column-thumb',
  'post_modified' => '2017-08-24 07:24:05',
  'post_modified_gmt' => '2017-08-24 07:24:05',
  'post_content_filtered' => '',
  'post_parent' => 662,
  'guid' => 'https://themify.me/demo/themes/blogfolio/?page_id=668',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'section_categories' => 'yes',
    'layout' => 'grid2-thumb',
    'posts_per_page' => '2',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 654,
  'post_date' => '2011-04-04 05:34:36',
  'post_date_gmt' => '2011-04-04 05:34:36',
  'post_content' => '',
  'post_title' => 'Section 3 Column',
  'post_excerpt' => '',
  'post_name' => 'section-3-column',
  'post_modified' => '2017-08-24 07:24:06',
  'post_modified_gmt' => '2017-08-24 07:24:06',
  'post_content_filtered' => '',
  'post_parent' => 662,
  'guid' => 'https://themify.me/demo/themes/blogfolio/?page_id=654',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'section_categories' => 'yes',
    'layout' => 'grid3',
    'posts_per_page' => '3',
    'display_content' => 'none',
    'hide_meta' => 'yes',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 652,
  'post_date' => '2011-04-04 05:33:51',
  'post_date_gmt' => '2011-04-04 05:33:51',
  'post_content' => '',
  'post_title' => 'Section 4 Column',
  'post_excerpt' => '',
  'post_name' => 'section-4-column',
  'post_modified' => '2017-08-24 07:24:08',
  'post_modified_gmt' => '2017-08-24 07:24:08',
  'post_content_filtered' => '',
  'post_parent' => 662,
  'guid' => 'https://themify.me/demo/themes/blogfolio/?page_id=652',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'query_category' => '0',
    'section_categories' => 'yes',
    'layout' => 'grid4',
    'posts_per_page' => '4',
    'display_content' => 'none',
    'hide_meta' => 'yes',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 561,
  'post_date' => '2011-04-03 01:01:38',
  'post_date_gmt' => '2011-04-03 01:01:38',
  'post_content' => '',
  'post_title' => 'Sidebar Left',
  'post_excerpt' => '',
  'post_name' => 'sidebar-left',
  'post_modified' => '2017-08-24 07:24:52',
  'post_modified_gmt' => '2017-08-24 07:24:52',
  'post_content_filtered' => '',
  'post_parent' => 409,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=561',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1 sidebar-left',
    'query_category' => '0',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 568,
  'post_date' => '2011-04-03 01:03:28',
  'post_date_gmt' => '2011-04-03 01:03:28',
  'post_content' => '',
  'post_title' => 'SB Left - 2 Column',
  'post_excerpt' => '',
  'post_name' => '2-column',
  'post_modified' => '2017-08-24 07:24:12',
  'post_modified_gmt' => '2017-08-24 07:24:12',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=568',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'query_category' => '0',
    'layout' => 'grid2',
    'posts_per_page' => '8',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 574,
  'post_date' => '2011-04-03 01:08:16',
  'post_date_gmt' => '2011-04-03 01:08:16',
  'post_content' => '',
  'post_title' => 'SB Left - 2 Column Thumb',
  'post_excerpt' => '',
  'post_name' => '2-column-thumb',
  'post_modified' => '2017-08-24 07:24:13',
  'post_modified_gmt' => '2017-08-24 07:24:13',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=574',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1 sidebar-left',
    'query_category' => '0',
    'layout' => 'grid2-thumb',
    'posts_per_page' => '8',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 566,
  'post_date' => '2011-04-03 01:03:05',
  'post_date_gmt' => '2011-04-03 01:03:05',
  'post_content' => '',
  'post_title' => 'SB Left - 3 Column',
  'post_excerpt' => '',
  'post_name' => '3-column',
  'post_modified' => '2017-08-24 07:24:14',
  'post_modified_gmt' => '2017-08-24 07:24:14',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=566',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1 sidebar-left',
    'query_category' => '0',
    'layout' => 'grid3',
    'posts_per_page' => '9',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 563,
  'post_date' => '2011-04-03 01:02:18',
  'post_date_gmt' => '2011-04-03 01:02:18',
  'post_content' => '',
  'post_title' => 'SB Left - 4 Column',
  'post_excerpt' => '',
  'post_name' => '4-column',
  'post_modified' => '2017-08-24 07:24:16',
  'post_modified_gmt' => '2017-08-24 07:24:16',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=563',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1 sidebar-left',
    'query_category' => '0',
    'layout' => 'grid4',
    'posts_per_page' => '8',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 570,
  'post_date' => '2011-04-03 01:03:48',
  'post_date_gmt' => '2011-04-03 01:03:48',
  'post_content' => '',
  'post_title' => 'SB Left - Large Image List',
  'post_excerpt' => '',
  'post_name' => 'large-image-list',
  'post_modified' => '2017-08-24 07:24:54',
  'post_modified_gmt' => '2017-08-24 07:24:54',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=570',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1 sidebar-left',
    'query_category' => '0',
    'layout' => 'list-large-image',
    'posts_per_page' => '5',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 572,
  'post_date' => '2011-04-03 01:04:11',
  'post_date_gmt' => '2011-04-03 01:04:11',
  'post_content' => '',
  'post_title' => 'SB Left - Thumb Image List',
  'post_excerpt' => '',
  'post_name' => 'thumb-image-list',
  'post_modified' => '2017-08-24 07:24:56',
  'post_modified_gmt' => '2017-08-24 07:24:56',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=572',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1 sidebar-left',
    'query_category' => '0',
    'layout' => 'list-thumb-image',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 576,
  'post_date' => '2011-04-03 01:09:14',
  'post_date_gmt' => '2011-04-03 01:09:14',
  'post_content' => '',
  'post_title' => 'Sidebar Right',
  'post_excerpt' => '',
  'post_name' => 'sidebar-right',
  'post_modified' => '2017-08-24 07:24:57',
  'post_modified_gmt' => '2017-08-24 07:24:57',
  'post_content_filtered' => '',
  'post_parent' => 409,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=576',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1',
    'query_category' => '0',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 582,
  'post_date' => '2011-04-03 01:10:24',
  'post_date_gmt' => '2011-04-03 01:10:24',
  'post_content' => '',
  'post_title' => 'SB Right - 2 Column',
  'post_excerpt' => '',
  'post_name' => '2-column',
  'post_modified' => '2017-08-24 07:24:59',
  'post_modified_gmt' => '2017-08-24 07:24:59',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=582',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'query_category' => '0',
    'layout' => 'grid2',
    'posts_per_page' => '8',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 588,
  'post_date' => '2011-04-03 01:11:50',
  'post_date_gmt' => '2011-04-03 01:11:50',
  'post_content' => '',
  'post_title' => 'SB Right - 2 Column Thumb',
  'post_excerpt' => '',
  'post_name' => '2-column-thumb',
  'post_modified' => '2017-08-24 07:25:01',
  'post_modified_gmt' => '2017-08-24 07:25:01',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=588',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1',
    'query_category' => '0',
    'layout' => 'grid2-thumb',
    'posts_per_page' => '8',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 580,
  'post_date' => '2011-04-03 01:10:05',
  'post_date_gmt' => '2011-04-03 01:10:05',
  'post_content' => '',
  'post_title' => 'SB Right - 3 Column',
  'post_excerpt' => '',
  'post_name' => '3-column',
  'post_modified' => '2017-08-24 07:25:02',
  'post_modified_gmt' => '2017-08-24 07:25:02',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=580',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'query_category' => '0',
    'layout' => 'grid3',
    'posts_per_page' => '9',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 578,
  'post_date' => '2011-04-03 01:09:38',
  'post_date_gmt' => '2011-04-03 01:09:38',
  'post_content' => '',
  'post_title' => 'SB Right - 4 Column',
  'post_excerpt' => '',
  'post_name' => '4-column',
  'post_modified' => '2017-08-24 07:25:03',
  'post_modified_gmt' => '2017-08-24 07:25:03',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=578',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1',
    'query_category' => '0',
    'layout' => 'grid4',
    'posts_per_page' => '8',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 584,
  'post_date' => '2011-04-03 01:10:47',
  'post_date_gmt' => '2011-04-03 01:10:47',
  'post_content' => '',
  'post_title' => 'SB Right - Large Image List',
  'post_excerpt' => '',
  'post_name' => 'large-image-list',
  'post_modified' => '2017-08-24 07:25:05',
  'post_modified_gmt' => '2017-08-24 07:25:05',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=584',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1',
    'query_category' => '0',
    'layout' => 'list-large-image',
    'posts_per_page' => '5',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 586,
  'post_date' => '2011-04-03 01:11:13',
  'post_date_gmt' => '2011-04-03 01:11:13',
  'post_content' => '',
  'post_title' => 'SB Right - Thumb Image List',
  'post_excerpt' => '',
  'post_name' => 'thumb-image-list',
  'post_modified' => '2017-08-24 07:25:07',
  'post_modified_gmt' => '2017-08-24 07:25:07',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/bizco/?page_id=586',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar1',
    'query_category' => '0',
    'layout' => 'list-thumb-image',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1053,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => 'Download this contact plugin: Contact Form 7. [contact-form 1 "Contact form 1"]',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1053',
  'post_modified' => '2017-07-25 21:40:11',
  'post_modified_gmt' => '2017-07-25 21:40:11',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1053/',
  'menu_order' => 1,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '594',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'footer-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1024,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => 'Download this contact plugin: Contact Form 7. [contact-form 1 "Contact form 1"]',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1024',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1024/',
  'menu_order' => 1,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '594',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1026,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1026',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1026/',
  'menu_order' => 2,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '409',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1027,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1027',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 409,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1027/',
  'menu_order' => 3,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1026',
    '_menu_item_object_id' => '542',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1028,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => '',
  'post_title' => 'Full – 2 Column',
  'post_excerpt' => '',
  'post_name' => '1028',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1028/',
  'menu_order' => 4,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1027',
    '_menu_item_object_id' => '553',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1029,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => '',
  'post_title' => 'Full – 2 Column Thumb',
  'post_excerpt' => '',
  'post_name' => '1029',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1029/',
  'menu_order' => 5,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1027',
    '_menu_item_object_id' => '559',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1030,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => '',
  'post_title' => 'Full – 3 Column',
  'post_excerpt' => '',
  'post_name' => '1030',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1030/',
  'menu_order' => 6,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1027',
    '_menu_item_object_id' => '551',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1031,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => '',
  'post_title' => 'Full – 4 Column',
  'post_excerpt' => '',
  'post_name' => '1031',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1031/',
  'menu_order' => 7,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1027',
    '_menu_item_object_id' => '547',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1032,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => '',
  'post_title' => 'Full – Large Image List',
  'post_excerpt' => '',
  'post_name' => '1032',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1032/',
  'menu_order' => 8,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1027',
    '_menu_item_object_id' => '555',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1033,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => '',
  'post_title' => 'Full – Thumb Image List',
  'post_excerpt' => '',
  'post_name' => '1033',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 542,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1033/',
  'menu_order' => 9,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1027',
    '_menu_item_object_id' => '558',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1034,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1034',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 409,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1034/',
  'menu_order' => 10,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1026',
    '_menu_item_object_id' => '662',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1035,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1035',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 662,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1035/',
  'menu_order' => 11,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1034',
    '_menu_item_object_id' => '660',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1036,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1036',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 662,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1036/',
  'menu_order' => 12,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1034',
    '_menu_item_object_id' => '668',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1037,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1037',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 662,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1037/',
  'menu_order' => 13,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1034',
    '_menu_item_object_id' => '654',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1038,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1038',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 662,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1038/',
  'menu_order' => 14,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1034',
    '_menu_item_object_id' => '652',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1039,
  'post_date' => '2011-12-01 04:58:21',
  'post_date_gmt' => '2011-12-01 04:58:21',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1039',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 409,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1039/',
  'menu_order' => 15,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1026',
    '_menu_item_object_id' => '561',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1040,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Left – 2 Column',
  'post_excerpt' => '',
  'post_name' => '1040',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1040/',
  'menu_order' => 16,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1039',
    '_menu_item_object_id' => '568',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1041,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Left – 2 Column Thumb',
  'post_excerpt' => '',
  'post_name' => '1041',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1041/',
  'menu_order' => 17,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1039',
    '_menu_item_object_id' => '574',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1042,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Left – 3 Column',
  'post_excerpt' => '',
  'post_name' => '1042',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1042/',
  'menu_order' => 18,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1039',
    '_menu_item_object_id' => '566',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1043,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Left – 4 Column',
  'post_excerpt' => '',
  'post_name' => '1043',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1043/',
  'menu_order' => 19,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1039',
    '_menu_item_object_id' => '563',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1044,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Left – Large Image List',
  'post_excerpt' => '',
  'post_name' => '1044',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1044/',
  'menu_order' => 20,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1039',
    '_menu_item_object_id' => '570',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1045,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Left – Thumb Image List',
  'post_excerpt' => '',
  'post_name' => '1045',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 561,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1045/',
  'menu_order' => 21,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1039',
    '_menu_item_object_id' => '572',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1046,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '1046',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 409,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1046/',
  'menu_order' => 22,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1026',
    '_menu_item_object_id' => '576',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1047,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Right – 2 Column',
  'post_excerpt' => '',
  'post_name' => '1047',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1047/',
  'menu_order' => 23,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1046',
    '_menu_item_object_id' => '582',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1048,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Right – 2 Column Thumb',
  'post_excerpt' => '',
  'post_name' => '1048',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1048/',
  'menu_order' => 24,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1046',
    '_menu_item_object_id' => '588',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1049,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Right – 3 Column',
  'post_excerpt' => '',
  'post_name' => '1049',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1049/',
  'menu_order' => 25,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1046',
    '_menu_item_object_id' => '580',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1050,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Right – 4 Column',
  'post_excerpt' => '',
  'post_name' => '1050',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1050/',
  'menu_order' => 26,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1046',
    '_menu_item_object_id' => '578',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1051,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Right – Large Image List',
  'post_excerpt' => '',
  'post_name' => '1051',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1051/',
  'menu_order' => 27,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1046',
    '_menu_item_object_id' => '584',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 1052,
  'post_date' => '2011-12-01 04:58:22',
  'post_date_gmt' => '2011-12-01 04:58:22',
  'post_content' => '',
  'post_title' => 'SB Right – Thumb Image List',
  'post_excerpt' => '',
  'post_name' => '1052',
  'post_modified' => '2020-09-05 04:02:13',
  'post_modified_gmt' => '2020-09-05 04:02:13',
  'post_content_filtered' => '',
  'post_parent' => 576,
  'guid' => 'https://themify.me/demo/themes/basic/2011/12/01/1052/',
  'menu_order' => 28,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '1046',
    '_menu_item_object_id' => '586',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$widgets = get_option( "widget_themify-feature-posts" );
$widgets[1002] = array (
  'title' => 'Recent Posts',
  'category' => '0',
  'show_count' => '3',
  'show_date' => 'on',
  'show_thumb' => 'on',
  'show_excerpt' => NULL,
  'hide_title' => NULL,
  'thumb_width' => '35',
  'thumb_height' => '35',
  'excerpt_length' => '55',
);
update_option( "widget_themify-feature-posts", $widgets );

$widgets = get_option( "widget_themify-twitter" );
$widgets[1003] = array (
  'title' => 'Latest Tweets',
  'username' => 'themify',
  'show_count' => '3',
  'hide_timestamp' => NULL,
  'show_follow' => 'on',
  'follow_text' => '→ Follow me',
);
update_option( "widget_themify-twitter", $widgets );

$widgets = get_option( "widget_themify-social-links" );
$widgets[1004] = array (
  'title' => '',
  'show_link_name' => NULL,
  'thumb_width' => '',
  'thumb_height' => '',
);
update_option( "widget_themify-social-links", $widgets );

$widgets = get_option( "widget_search" );
$widgets[1005] = array (
  'title' => '',
);
update_option( "widget_search", $widgets );

$widgets = get_option( "widget_recent-posts" );
$widgets[1006] = array (
  'title' => '',
  'number' => 5,
);
update_option( "widget_recent-posts", $widgets );

$widgets = get_option( "widget_recent-comments" );
$widgets[1007] = array (
  'title' => '',
  'number' => 5,
);
update_option( "widget_recent-comments", $widgets );

$widgets = get_option( "widget_archives" );
$widgets[1008] = array (
  'title' => '',
  'count' => 0,
  'dropdown' => 0,
);
update_option( "widget_archives", $widgets );

$widgets = get_option( "widget_categories" );
$widgets[1009] = array (
  'title' => '',
  'count' => 0,
  'hierarchical' => 0,
  'dropdown' => 0,
);
update_option( "widget_categories", $widgets );

$widgets = get_option( "widget_meta" );
$widgets[1010] = array (
  'title' => '',
);
update_option( "widget_meta", $widgets );

$widgets = get_option( "widget_themify-flickr" );
$widgets[1011] = array (
  'title' => 'Recent Photos',
  'username' => '52839779@N02',
  'show_count' => '8',
);
update_option( "widget_themify-flickr", $widgets );



$sidebars_widgets = array (
  'sidebar-main' => 
  array (
    0 => 'themify-feature-posts-1002',
    1 => 'themify-twitter-1003',
  ),
  'social-widget' => 
  array (
    0 => 'themify-social-links-1004',
  ),
  'orphaned_widgets_1' => 
  array (
    0 => 'search-1005',
    1 => 'recent-posts-1006',
    2 => 'recent-comments-1007',
    3 => 'archives-1008',
    4 => 'categories-1009',
    5 => 'meta-1010',
  ),
  'orphaned_widgets_2' => 
  array (
    0 => 'themify-flickr-1011',
  ),
); 
update_option( "sidebars_widgets", $sidebars_widgets );

$themify_data = array (
  'setting-webfonts_list' => 'recommended',
  'setting-default_layout' => 'sidebar1',
  'setting-default_post_layout' => 'grid2',
  'setting-default_layout_display' => 'excerpt',
  'setting-default_more_text' => 'More',
  'setting-index_orderby' => 'date',
  'setting-index_order' => 'DESC',
  'setting-image_post_feature_size' => 'blank',
  'setting-default_page_post_layout' => 'sidebar1',
  'setting-image_post_single_feature_size' => 'blank',
  'setting-default_page_layout' => 'sidebar1',
  'setting-customizer_responsive_design_tablet_landscape' => '1024',
  'setting-customizer_responsive_design_tablet' => '768',
  'setting-customizer_responsive_design_mobile' => '480',
  'setting-mobile_menu_trigger_point' => '1200',
  'setting-gallery_lightbox' => 'lightbox',
  'setting-lightbox_content_images' => 'on',
  'setting-entries_nav' => 'numbered',
  'setting-footer_widgets' => 'footerwidget-3col',
  'setting-img_php_base_size' => 'large',
  'setting-global_feature_size' => 'large',
  'setting-link_icon_type' => 'image-icon',
  'setting-link_type_themify-link-0' => 'image-icon',
  'setting-link_title_themify-link-0' => 'Twitter',
  'setting-link_link_themify-link-0' => 'https://twitter.com/twitter',
  'setting-link_img_themify-link-0' => 'https://themify.me/demo/themes/basic/wp-content/themes/basic/themify/img/social/twitter.png',
  'setting-link_type_themify-link-1' => 'image-icon',
  'setting-link_title_themify-link-1' => 'Facebook',
  'setting-link_link_themify-link-1' => 'https://facebook.com/themify',
  'setting-link_img_themify-link-1' => 'https://themify.me/demo/themes/basic/wp-content/themes/basic/themify/img/social/facebook.png',
  'setting-link_type_themify-link-2' => 'image-icon',
  'setting-link_title_themify-link-2' => 'Google+',
  'setting-link_img_themify-link-2' => 'https://themify.me/demo/themes/basic/wp-content/themes/basic/themify/img/social/google-plus.png',
  'setting-link_type_themify-link-3' => 'image-icon',
  'setting-link_title_themify-link-3' => 'YouTube',
  'setting-link_img_themify-link-3' => 'https://themify.me/demo/themes/basic/wp-content/themes/basic/themify/img/social/youtube.png',
  'setting-link_type_themify-link-4' => 'image-icon',
  'setting-link_title_themify-link-4' => 'Pinterest',
  'setting-link_img_themify-link-4' => 'https://themify.me/demo/themes/basic/wp-content/themes/basic/themify/img/social/pinterest.png',
  'setting-link_field_ids' => '{"themify-link-0":"themify-link-0","themify-link-1":"themify-link-1","themify-link-2":"themify-link-2","themify-link-3":"themify-link-3","themify-link-4":"themify-link-4"}',
  'setting-link_field_hash' => '5',
  'setting-page_builder_is_active' => 'enable',
  'setting-page_builder_animation_appearance' => 'none',
  'setting-page_builder_animation_parallax_bg' => 'none',
  'setting-page_builder_animation_scroll_effect' => 'none',
  'setting-page_builder_animation_sticky_scroll' => 'none',
  'setting-page_builder_cache' => 'on',
  'setting-page_builder_expiry' => '2',
  'skin' => 'img',
  'import_images' => 'on',
);
themify_set_data( $themify_data );
$theme = get_option( 'stylesheet' );
$theme_mods = array (
  0 => false,
  'start_body_acc' => '',
  'body_background' => '',
  'body_font' => '',
  'body_font_color' => '',
  'body_link_font' => '',
  'body_link_color' => '',
  'body_link_hover_font' => '',
  'body_link_hover_color' => '',
  'end_body_acc' => '',
  'start_header_acc' => '',
  'headerwrap_background' => '',
  'headerwrap_border' => '',
  'headerwrap_padding' => '',
  'headerwrap_margin' => '',
  'header_font' => '',
  'header_font_color' => '',
  'header_link_font' => '',
  'header_link_color' => '',
  'header_link_hover_font' => '',
  'header_link_hover_color' => '',
  'end_header_acc' => '',
  'start_titletagline_acc' => '',
  'site-logo_image' => '',
  'site-tagline' => '',
  'end_titletagline_acc' => '',
  'start_nav_acc' => '',
  'main_nav' => '',
  'main_nav_link_font' => '',
  'main_nav_link_color' => '',
  'main_nav_link_background' => '',
  'main_nav_link_border' => '',
  'main_nav_link_padding' => '',
  'main_nav_link_margin' => '',
  'main_nav_link_hover_background' => '',
  'main_nav_link_hover_color' => '',
  'main_nav_link_active_background' => '',
  'main_nav_link_active_color' => '',
  'main_nav_link_active_hover_background' => '',
  'main_nav_link_active_hover_color' => '',
  'end_nav_acc' => '',
  'start_post_acc' => '',
  'post_title_font' => '',
  'post_title_color' => '',
  'post_title_hover_font' => '',
  'post_title_hover_color' => '',
  'single_post_title_font' => '',
  'grid4_post_title_font' => '',
  'grid3_post_title_font' => '',
  'grid2_post_title_font' => '',
  'grid2_thumb_post_title_font' => '',
  'list_thumb_post_title_font' => '',
  'end_post_acc' => '',
  'start_page_title_acc' => '',
  'page_title_color' => '',
  'page_title_font' => '',
  'end_page_title_acc' => '',
  'start_module_title_acc' => '',
  'module_title_color' => '',
  'module_title_font' => '',
  'end_module_title_acc' => '',
  'start_sidebar_acc' => '',
  'sidebar_color' => '',
  'sidebar_font' => '',
  'sidebar_link_color' => '',
  'sidebar_link_font' => '',
  'sidebar_link_hover_color' => '',
  'sidebar_link_hover_font' => '',
  'sidebar_widget_title_color' => '',
  'sidebar_widget_title_font' => '',
  'end_sidebar_acc' => '',
  'start_footer_acc' => '',
  'footerwrap_background' => '',
  'footerwrap_border' => '',
  'footerwrap_padding' => '',
  'footerwrap_margin' => '',
  'footer_color' => '',
  'footer_font' => '',
  'footer_link_color' => '',
  'footer_link_font' => '',
  'footer_link_hover_color' => '',
  'footer_link_hover_font' => '',
  'footer_nav' => '',
  'footer_widget_title_color' => '',
  'footer_widget_title_font' => '',
  'end_footer_acc' => '',
  'start_customcss_acc' => '',
  'customcss' => '',
  'end_customcss_acc' => '',
  'clear' => '',
  'heading1_font' => '',
  'custom_css_post_id' => -1,
);
update_option( "theme_mods_{$theme}", $theme_mods );
$menu_locations = array();
set_theme_mod( "nav_menu_locations", $menu_locations );



}
