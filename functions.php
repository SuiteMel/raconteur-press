<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  

// functions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get frontend assets from a Vite dev server OR from production built folder
// it is recommended to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', true);


include "inc/inc.vite.php";

// add_action( 'wp_enqueue_scripts', 'theme_slug_enqueue_scripts' );

// function theme_slug_enqueue_scripts() {
// 	wp_enqueue_script( 
// 		'theme-js',
// 		get_parent_theme_file_uri( 'main.js' ),
// 		array(),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);
// }

// add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

// function add_type_attribute($tag, $handle, $src) {
//   // if not your script, do nothing and return original $tag
//   if ( 'theme-js' !== $handle ) {
//       return $tag;
//   }
//   // change the script tag by adding type="module" and return it.
//   $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
//   return $tag;
// }