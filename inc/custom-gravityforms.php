<?php
add_filter( 'gform_disable_form_theme_css', '__return_true' );

/*
 * Change the submit button to be an actual button element rather
 * than input submit. This is so we can style the inputs the exact
 * same as other buttons, which often have pseudo elements that aren't
 * allowed on inputs
 */
function ll_custom_gform_submit( $submit_button, $form ) {
  $submit_button = "<button class='btn-primary' id='gform_submit_button_{$form['id']}' type='submit'>{$form['button']['text']}</button>";

  return $submit_button;
}
add_filter( 'gform_submit_button', 'll_custom_gform_submit', 10, 2 );


// Populate select with available gravity forms, shows form name, outputs form id
// Usage: Field Type: Select, Field Name containing "form_id"
add_filter('acf/load_field/type=select', 'gravity_form_type_select', 99);
function gravity_form_type_select($field) {
  global $post;
  if ( !is_admin() || !class_exists( 'RGFormsModel' ) ) {
    return $field;
  }

  if ( strpos( $field['name'], 'form_id' ) !== false ) {

    //empty out choices just in case
    $field['choices'] = array();

    $forms = RGFormsModel::get_forms( null, 'title' );

    if ( $forms ) {
      foreach ($forms as $key => $form) {
        $field['choices'][$form->id] = $form->title;
      };
    }

  }
  return $field;
}
