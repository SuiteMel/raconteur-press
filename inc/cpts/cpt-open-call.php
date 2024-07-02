<?php
/**
 * Register the custom post type
 */
if ( ! function_exists('register_open_call_custom_post_type') ) {

  // Register Custom Post Type
  function register_open_call_custom_post_type() {

    $labels = array(
      'name'                => 'Open Calls',
      'singular_name'       => 'Open Call',
      'menu_name'           => 'Open Calls',
      'parent_item_colon'   => 'Parent Open Call',
      'all_items'           => 'All Open Calls',
      'view_item'           => 'View Open Call',
      'add_new_item'        => 'Add New Open Call',
      'add_new'             => 'New Open Call',
      'edit_item'           => 'Edit Open Call',
      'update_item'         => 'Update Open Call',
      'search_items'        => 'Search Open Call',
      'not_found'           => 'No open call found',
      'not_found_in_trash'  => 'No open call found in Trash',
    );
    $args = array(
      'label'               => 'team',
      'description'         => 'Open Call description',
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
      'rewrite'             => array( 'slug' => 'open-call' )
    );
    register_post_type( 'open_call', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'register_open_call_custom_post_type', 0 );

}