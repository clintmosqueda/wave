<?php

//Works
$args = array(
    'label' => 'Works',
    
    'labels' => array(
        'singular_name' => WORKS_POST_TYPE, 
        'menu_name' => strtoupper(WORKS_POST_TYPE), 
        'add_new_item' => 'Add New Work Title',
        'add_new' => 'Add New Work' , 
        'new_item' => 'New Item', 
        'edit_item' => 'Edit Work Post', 
        'view_item' => 'View Work Post', 
        'not_found' => 'No Posts Found', 
        'not_found_in_trash' => 'There are no post in the trash', 
        'search_items' => 'Search Work Post', 
    ),

    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,
    // 'show_in_rest' => true,
    'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
);

register_post_type(WORKS_POST_TYPE,$args);

$args = array(
  'label'        => 'Categories',
  'labels'       => array(
    'name'          => 'Categories',
    'singular_name' => 'Category',
    'all_items'     => 'Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => WORKS_POST_TYPE_CATEGORY ),
  'show_in_rest' => true
);
register_taxonomy( WORKS_POST_TYPE_CATEGORY, array( WORKS_POST_TYPE ), $args );

$args = array(

  'label'        => 'Tag',
  'labels'       => array(
    'name'          => 'Tags',
    'singular_name' => 'Tag',
    'all_items'     => 'Tags'
  ),
  'hierarchical' => false,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => WORKS_POST_TYPE_TAG )
);
register_taxonomy(WORKS_POST_TYPE_TAG, array(WORKS_POST_TYPE), $args );

//Black Penguin
$args = array(
    'label' => 'Black Penguin',
    'labels' => array(
        'singular_name' => 'Black Penguin', 
        'menu_name' => strtoupper('Black Penguin'), 
        'add_new_item' => 'Add New Black Penguin Title', 
        'add_new' => 'Add New Black Penguin' , 
        'new_item' => 'New Item', 
        'edit_item' => 'Edit Black Penguin Post', 
        'view_item' => 'View Black Penguin Post', 
        'not_found' => 'No Posts Found', 
        'not_found_in_trash' => 'There are no post in the trash', 
        'search_items' => 'Search Black Penguin Post', 
    ),

    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,
    // 'show_in_rest' => true,
    'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
);

register_post_type(PENGUIN_POST_TYPE,$args);

$args = array(
  'label'        => 'Categories',
  'labels'       => array(
    'name'          => 'Categories',
    'singular_name' => 'Category',
    'all_items'     => 'Categories'
  ),
  'hierarchical' => true,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => PENGUIN_POST_TYPE_CATEGORY ),
  'show_in_rest' => true
);
register_taxonomy( PENGUIN_POST_TYPE_CATEGORY, array( PENGUIN_POST_TYPE ), $args );

$args = array(
  'label'        => 'Tag',
  'labels'       => array(
    'name'          => 'Tags',
    'singular_name' => 'Tag',
    'all_items'     => 'Tags'
  ),
  'hierarchical' => false,
  'public'       => true,
  'show_ui'      => true,
  'rewrite'      => array( 'slug' => PENGUIN_POST_TYPE_TAG )
);
register_taxonomy(PENGUIN_POST_TYPE_TAG, array(PENGUIN_POST_TYPE), $args );

//News
$args = array(
  'label' => 'News',
  
  'labels' => array(
      'singular_name' => NEWS_POST_TYPE, 
      'menu_name' => strtoupper(NEWS_POST_TYPE), 
      'add_new_item' => 'Add New News Title',
      'add_new' => 'Add New News' , 
      'new_item' => 'New Item', 
      'edit_item' => 'Edit News Post', 
      'view_item' => 'View News Post', 
      'not_found' => 'No Posts Found', 
      'not_found_in_trash' => 'There are no post in the trash', 
      'search_items' => 'Search News Post', 
  ),

  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'query_var' => true,
  'has_archive' => true,
  'hierarchical' => false,
  'menu_position' => 5,
  'rewrite' => true,
  // 'show_in_rest' => true,
  'supports' => array('title', 'thumbnail'),
);

register_post_type(NEWS_POST_TYPE, $args);

//Interview
$args = array(
  'label' => 'Interview',
  
  'labels' => array(
      'singular_name' => INTERVIEW_POST_TYPE, 
      'menu_name' => strtoupper(INTERVIEW_POST_TYPE), 
      'add_new_item' => 'Add New Interview Title',
      'add_new' => 'Add New Interview' , 
      'new_item' => 'New Item', 
      'edit_item' => 'Edit Interview Post', 
      'view_item' => 'View Interview Post', 
      'not_found' => 'No Posts Found', 
      'not_found_in_trash' => 'There are no post in the trash', 
      'search_items' => 'Search Interview Post', 
  ),

  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'query_var' => true,
  'has_archive' => true,
  'hierarchical' => false,
  'menu_position' => 5,
  'rewrite' => true,
  // 'show_in_rest' => true,
  'supports' => array('title', 'thumbnail'),
);

register_post_type(INTERVIEW_POST_TYPE, $args);
