<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_author_custom_post_type') ) {

  // Register Custom Post Type
  function register_author_custom_post_type() {

    $labels = array(
      'name'                => 'Author',
      'singular_name'       => 'Author',
      'menu_name'           => 'Author',
      'parent_item_colon'   => 'Parent Author',
      'all_items'           => 'All Authors',
      'view_item'           => 'View Author',
      'add_new_item'        => 'Add New Author',
      'add_new'             => 'New Author',
      'edit_item'           => 'Edit Author',
      'update_item'         => 'Update Author',
      'search_items'        => 'Search Author',
      'not_found'           => 'No author found',
      'not_found_in_trash'  => 'No author found in Trash',
    );
    $args = array(
      'label'               => 'team',
      'description'         => 'Author description',
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
    register_post_type( 'author', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_author_custom_post_type', 0 );

}