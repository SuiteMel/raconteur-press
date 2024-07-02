<?php
$data = [
  'heading' => get_field('open_calls_heading'),
  'intro' => get_field('open_calls_intro')
];

$block_id = 'open-calls-' . $block['id'];

if ( !empty( $block['anchor'] ) ) {
  $block_id = $block['anchor'];
}

// Dynamic class names
$class_name = 'open-calls';
if ( !empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}

get_template_part(
  'blocks/open-calls/template',
  null,
  [
    'block'      => $block,
		'is_preview' => $is_preview,
		'post_id'    => $post_id,
		'block_id'   => $block_id,
		'class_name'   => $class_name,
		'data'       => $data,
  ]
);