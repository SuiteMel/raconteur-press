<?php

function rc_theme_setup() {
    // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus( array(
    'primary_navigation' => __('Primary Navigation', 'roots'),
    'footer_menu'    => __('Footer Menu', 'roots'),
  ) );

}

add_action('after_setup_theme', 'rc_theme_setup');