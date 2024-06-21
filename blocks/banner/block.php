<?php
$data = array(
	'content' => get_field('banner_content'),
	'images' => get_field('banner_images'),
	'background' => get_field('banner_background')
);


// Dynamic block ID
$block_id = 'banner-' . $block['id'];

if( !empty($block['anchor']) ) {
	$block_id = $block['anchor'];
}

// Dynamic class names
$class_name = 'banner';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

get_template_part(
	'blocks/banner/template',
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