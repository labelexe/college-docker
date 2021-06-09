<?php 
function tsm_get_extended_valid_elements() {
	$elements = array(
		'@' => array(
			'id',
			'class',
			'style',
			'title',
			'itemscope',
			'itemtype',
			'itemprop',
			'datetime',
			'rel'
		),
        'article', 'div', 'p', 'dl', 'dt', 'dd', 'ul', 'li', 'span', 'a','section','h1','h2','h3','h4','','td','tr','p','div' => array(
            'itemscope',
			'itemtype',
			'itemprop',
        ),
        // 'img' => array(
        //                 'src',
        //                 'alt',
        //                 'width',
        //                 'height'
        //         ),
		// 'meta' => array(
		// 	'content'
		// ),
		// 'link' => array(
		// 	'href'
		// ),
		// 'time' => array(
		// 	'itemprop'
		// )
	);

	return apply_filters( 'tsm_extended_valid_elements', $elements );
}

function tsm_tinymce_init( $settings )
{
	if( !empty( $settings['extended_valid_elements'] ) ) {
		$settings['extended_valid_elements'] .= ',';
	}

	$result = $settings['extended_valid_elements'];

	$elements = tsm_get_extended_valid_elements();

	foreach ( $elements as $key => $element ) {
		if ( is_array( $element ) && !empty( $key ) ) {
			$name = $key;
			$attributes = $element;
		} else {
			$name = $element;
			$attributes = array();
		}

		if ( !empty( $result ) ) {
			$result .= ',';
		}

		$result .= $name;

		if ( !empty( $attributes ) ) {
			$result .= '[' . implode('|', $attributes) . ']';
		}

	}

	$settings['extended_valid_elements'] = $result;
	if ( !isset($settings['valid_children'] ) ) {
		$settings['valid_children'] = '';
	}
	$settings['valid_children'] .= '+body[meta],+div[meta],+body[link],+div[link]';

	return $settings;
}

add_filter( 'tiny_mce_before_init', 'tsm_tinymce_init' );

?>