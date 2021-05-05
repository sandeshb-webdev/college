<?php


// Add custom post type like events or etc on wordpress.
function sandesh_own_custom_event(){
  register_post_type('events',array(
    'rewrite' => array('slug' => 'event'),
    'has_archive' => true,
    'public' => true,
    'menu_icon' => 'dashicons-calender',
    'labels' => array(
      'name' => 'Event',
      'add_new_item' => 'Add new Event',
      'edit_item' => 'Edit Offer',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    )
  ));

}
add_action('init', 'sandesh_own_custom_event');
