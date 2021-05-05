<?php
// Add custom post type like events or etc on wordpress.
function sandesh_own_custom_file(){
  register_post_type('events',array(
    'public' => true,
    'menu_icon' => 'dashicons-calendar',
    'labels' => array(
      'name' => 'Events'
    )
  ));

}
add_action('init', 'sandesh_own_custom_file');
