<?php
$data = array(
  'image' => get_field( 'image-content_image' ),
  'heading' => get_field( 'image-content_heading' ),
  'content' => get_field( 'image-content_content' )
);


// Dynamic block ID
$block_id = 'image-content-' . $block['id'];

if( !empty($block['anchor']) ) {
	$block_id = $block['anchor'];
}

// Dynamic class names
$class_name = 'image-content';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

get_template_part(
	'blocks/image-content/template',
	null,
	array(
		'block'      => $block,
		'is_preview' => $is_preview,
		'post_id'    => $post_id,
		'block_id'   => $block_id,
		'class_name'   => $class_name,
		'data'       => $data,
	)
);	