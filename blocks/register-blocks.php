<?php
/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function register_acf_blocks() {
  /**
   * We register our block's with WordPress's handy
   * register_block_type();
   *
   * @link https://developer.wordpress.org/reference/functions/register_block_type/
   */
  register_block_type( __DIR__ . '/team-member' );
  register_block_type( __DIR__ . '/author-grid' );
  register_block_type( __DIR__ . '/image-content' );
  register_block_type( __DIR__ . '/socials' );
  register_block_type( __DIR__ . '/featured-slider' );
  register_block_type( __DIR__ . '/banner' );
}
// Here we call our register_acf_block() function on init.
add_action( 'init', 'register_acf_blocks' );