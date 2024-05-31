<?php
$data = array(
	'name' => get_field( 'name' ),
	'avatar' => get_field( 'avatar' ),
	'position' => get_field('position'),
	'bio' => get_field( 'bio' ),
);


// Dynamic block ID
$block_id = 'team-member-' . $block['id'];

if( !empty($block['anchor']) ) {
	$block_id = $block['anchor'];
}

// Dynamic class names
$class_name = 'team-member';
if( !empty($block['className']) ) {
    $class_name .= ' ' . $block['className'];
}

get_template_part(
	'blocks/team-member/template',
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