<?php
$data = [
  'heading' => get_field( 'author_grid_heading' ),
  'content' => get_field( 'author_grid_content' ),
  'authors' => get_field( 'author_grid_authors' )
];

$block_id = 'author-grid-' . $block['id'];

if ( !empty( $block['anchor'] ) ) {
  $block_id = $block['anchor'];
}

// Dynamic class names
$class_name = 'author-grid';
if ( !empty( $block['className'] ) ) {
  $class_name .= ' ' . $block['className'];
}

get_template_part(
  'blocks/author-grid/template',
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