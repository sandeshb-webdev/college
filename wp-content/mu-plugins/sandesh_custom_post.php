<?php


// Add custom post type like events or etc on wordpress.
function sandesh_own_custom_event(){
  // EVENT POST TYPE
  register_post_type('events',array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'event'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-calendar',
    'labels' => array(
      'name' => 'Event',
      'add_new_item' => 'Add new Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    )
  ));

  // PROGRAM POST TYPE
  register_post_type('program',array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-awards',
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add new Program',
      'edit_item' => 'Edit Program',
      'all_items' => 'All Programs',
      'singular_name' => 'Program'
    )
  ));

}
add_action('init', 'sandesh_own_custom_event');
