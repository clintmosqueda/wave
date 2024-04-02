<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Reviews',
		'menu_title'	=> 'Reviews',
		'menu_slug' 	=> 'reviews',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-star-filled', 
  ));
}