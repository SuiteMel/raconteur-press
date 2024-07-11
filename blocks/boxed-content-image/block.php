<?php
$data = array(
  'heading' => get_field( 'boxed-content-image_heading' ),
  'intro' => get_field( 'boxed-content-image_intro' ),
  'content' => get_field( 'boxed-content-image_content' ),
  'image' => get_field( 'boxed-content-image_image' )
);


// Dynamic block ID
$block_id = 'boxed-content-image-' . $block['id'];

if( !empty($block['anchor']) ) {
	$block_id = $block['anchor'];
}

// Dynamic class names
$class_name = 'boxed-content-image';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

get_template_part(
	'blocks/boxed-content-image/template',
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