<?php

function contact_form_error_message( $error, $key, $rule ) {
  switch ( $key ) {

    default:
      $error = '入力してください';
      break;
  }

  return $error;
}

add_filter( 'mwform_error_message_mw-wp-form-60', 'contact_form_error_message', 10, 3 );