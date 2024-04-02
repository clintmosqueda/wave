<?php

function string_limit($input, $length) {
  $result = '';
  $result = mb_strlen( $input ) > $length ? mb_substr($input, 0, $length) . '...' : $input;
  return $result;
}

function get_first_paragraph(){
  global $post;
  $str = wpautop( get_the_content() );
  $start = strpos($str, '<p>');
  $str = substr( $str, $start, strpos( $str, '</p>' ) + 4 );
  $str = strip_tags($str, '<a><strong><em>');
  return string_limit($str, 130);
}

function query_post($post_type, $item = 5) {
  $args = array(
    'post_type'      => $post_type,
    'post_status'    => 'publish',
    'posts_per_page' => $item,
    'order'          => 'DESC',
  );

  return new WP_Query( $args );
}

add_filter( 'body_class', 'slug_class_name' );
function slug_class_name( $classes ) {
  global $post;

  if(is_single()) {
    $classes[] = 'is-single';
    // $classes[] = 'single-page-'.$post;
  }
  elseif (is_archive()) {
    $title = strtolower(post_type_archive_title('', false));
    $classes[] = 'is-archive';
    $classes[] = 'archive-'.$title;
  }
  else {
    $name = $post->post_name;
    $others =  $name .'-page';
    $classes[$others] = $others;
  }
  
  return $classes;

  // return the $classes array
}

//hide default post in admin
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
  remove_menu_page( 'edit.php' );
}

add_filter('use_block_editor_for_post', '__return_false');

