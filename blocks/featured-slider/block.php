<?php
$data = array(
  'heading' => get_field('featured_slider_heading'),
  'slides' => get_field('featured_slider_slides')
);


// Dynamic block ID
$block_id = 'featured-slider-' . $block['id'];

if( !empty($block['anchor']) ) {
	$block_id = $block['anchor'];
}

// Dynamic class names
$class_name = 'featured-slider';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

get_template_part(
	'blocks/featured-slider/template',
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