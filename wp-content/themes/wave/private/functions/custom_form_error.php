<?php

function contact_form_error_message( $error, $key, $rule ) {
  switch ( $key ) {

    case 'name':
      $error = 'お名前を入力してください';
      break;

    case 'email':
      $error = 'メールアドレスを入力してください';
      break;

    case 'inquiry_type':
      $error = 'お問合せ種別を入力してください';
      break;

    case 'details':
      $error = 'お問い合わせ内容を入力してください';
      break;

    default:
      $error = '入力してください';
      break;
  }

  return $error;
}

add_filter( 'mwform_error_message_mw-wp-form-66', 'contact_form_error_message', 10, 3 );
add_filter( 'mwform_error_message_mw-wp-form-60', 'contact_form_error_message', 10, 3 );