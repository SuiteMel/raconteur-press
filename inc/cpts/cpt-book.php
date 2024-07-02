<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_book_custom_post_type') ) {

  // Register Custom Post Type
  function register_book_custom_post_type() {

    $labels = array(
      'name'                => 'Books',
      'singular_name'       => 'Book',
      'menu_name'           => 'Books',
      'parent_item_colon'   => 'Parent Book',
      'all_items'           => 'All Books',
      'view_item'           => 'View Book',
      'add_new_item'        => 'Add New Book',
      'add_new'             => 'New Book',
      'edit_item'           => 'Edit Book',
      'update_item'         => 'Update Book',
      'search_items'        => 'Search Book',
      'not_found'           => 'No book found',
      'not_found_in_trash'  => 'No book found in Trash',
    );
    $args = array(
      'label'               => 'team',
      'description'         => 'Book description',
      'labels'              => $labels,
      'supports'            => array( 'title', 'page-attributes', 'thumbnail' ),
      // 'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => false,
      'show_in_admin_bar'   => true,
      'menu_position'       => 20,
      'menu_icon'           => 'dashicons-groups',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    );
    register_post_type( 'book', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_book_custom_post_type', 0 );

}