<?php


// Add custom post type like events or etc on wordpress.
function sandesh_own_custom_event(){
  // CAMPUS POST TYPE
  register_post_type('campus',array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'campuses'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-location-alt',
    'labels' => array(
      'name' => 'Campuses',
      'add_new_item' => 'Add new Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus'
    )
  ));

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

  // PROFESSORS POST TYPE
  register_post_type('professor',array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add new Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professor',
      'singular_name' => 'Professor'
    )
  ));


}
add_action('init', 'sandesh_own_custom_event');
