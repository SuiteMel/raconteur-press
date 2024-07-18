<?php
/**
 * Emulates var_dump into the log file.
 * Useful for var_dumping AJAX calls
 */
function var_error_log( $object=null ){
  ob_start();
  $object = json_encode($object);
  echo $object;
  $contents = ob_get_contents();
  ob_end_clean();
  error_log( $contents );
}

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

add_action('admin_init', function() {
  add_filter( 'mce_buttons_2', 'myplugin_tinymce_buttons' );

  function myplugin_tinymce_buttons( $buttons ) {
        //Add style selector to the beginning of the toolbar
        array_unshift( $buttons, 'styleselect' );

        return $buttons;
  }

  add_filter('tiny_mce_before_init', function( $data ) {
    $data['style_formats'] = json_encode([
      [
        'title' => 'Text Sizes',
        'items' => [
          [
            'title' => 'Small Text: 14px',
            'classes' => 'text-sm',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Normal Text: 16px',
            'classes' => 'text-base',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Large Text: 20px',
            'classes' => 'text-lg',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Extra Large Text: 32px',
            'classes' => 'text-xl',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => '2XL Text: 40px',
            'classes' => 'text-2xl',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => '3XL Text: 64px',
            'classes' => 'text-3xl',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => '4XL Text: 96px',
            'classes' => 'text-4xl',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
        ]
      ],
      [
        'title' => 'Font Family',
        'items' => [
          [
            'title' => 'Fox Veteran',
            'classes' => 'font-serif',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Inter',
            'classes' => 'font-sans',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ]
        ]
      ],
      [
        'title' => 'Font Weight',
        'items' => [
          [
            'title' => 'Font Normal: 400',
            'classes' => 'font-normal',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Font Medium: 500',
            'classes' => 'font-medium',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Font SemiBold: 600',
            'classes' => 'font-semibold',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Font Bold: 700',
            'classes' => 'font-bold',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Font Extra Bold: 800',
            'classes' => 'font-extrabold',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Font Black: 900',
            'classes' => 'font-black',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
        ]
      ],
      [
        'title' => 'Text Color',
        'items' => [
          [
            'title' => 'Orange',
            'classes' => 'text-brand-orange',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Dark Orange',
            'classes' => 'text-brand-dark-orange',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Light Gray',
            'classes' => 'text-brand-light-gray',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Brand White',
            'classes' => 'text-brand-white',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ],
          [
            'title' => 'Brand Black',
            'classes' => 'text-brand-black',
            'selector' => 'p, a, span, li, h1, h2, h3, h4, h5, h6',
            'wrapper'  => false
          ]
        ]
      ],
      [
        'title' => 'Buttons',
        'items' => [
          [
            'title' => 'Orange Button',
            'classes' => 'btn-light',
            'selector' => 'a',
            'wrapper' => false
          ],
          [
            'title' => 'Dark Orange Button',
            'classes' => 'btn-dark',
            'selector' => 'a',
            'wrapper' => false
          ],
        ]
      ]
    ]);

    return $data;
  });

});