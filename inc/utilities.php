<?php
// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
    return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
    'ext'             => $filetype['ext'],
    'type'            => $filetype['type'],
    'proper_filename' => $data['proper_filename']
  ];

  }, 10, 4 );

  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter( 'upload_mimes', 'cc_mime_types' );

// Display social media icons+links
function get_socials() {
  // echo 'hey';
  $title = get_field( 'site_socials_title', 'option' );
  $socials = get_field( 'site_socials', 'option' );

  $output = '';
  if ( $title ) {
    $output .= '<h3 class="social-title">' . $title . '</h3>';
  }
  $output .= '<ul class="social-list">';
  foreach ( $socials as $social => $link ) {
    if ( $link ) {
      $output .= '<li class="social-item"><a href="'.$link.'" class="social-link"><svg class="social-icon icon icon-'.$social.'"><use xlink:href="#icon-'.$social.'"></use></svg></a></li>';
    }
  }
  
  $output .= '</ul>';

  return $output;
}

add_shortcode("my_socials", "get_socials");