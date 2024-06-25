<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  

// Add svg-defs to begining of body
add_action( 'wp_body_open', function() {
  include_once "assets/symbol-defs.svg";
}, 30 );

// functions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well

// Main switch to get frontend assets from a Vite dev server OR from production built folder
// it is recommended to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', true);
// define('IS_VITE_DEVELOPMENT', false);


include "inc/inc.vite.php";
include "inc/cpts/main.php";
include "blocks/register-blocks.php";
include "inc/utilities.php";