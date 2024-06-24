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

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'About History',
		'menu_title'	=> 'About History',
		'menu_slug' 	=> 'about_history',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-backup', 
  ));
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Journey',
		'menu_title'	=> 'Journey',
		'menu_slug' 	=> 'journey',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-airplane', 
  ));
}