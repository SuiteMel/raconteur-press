<?php
$data = array(
	'form' => get_field('form_form_id')
);


// Dynamic block ID
$block_id = 'form-' . $block['id'];

if( !empty($block['anchor']) ) {
	$block_id = $block['anchor'];
}

// Dynamic class names
$class_name = 'form';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

get_template_part(
	'blocks/form/template',
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