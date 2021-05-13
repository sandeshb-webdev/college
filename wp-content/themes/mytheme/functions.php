<?php
  function mytheme_files(){
    wp_enqueue_script('myTheme-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');
    wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('myTheme_main_styles' , get_stylesheet_uri('style.css'));
  }
  add_action('wp_enqueue_scripts' , 'mytheme_files');


// Add page title on favicon place

  function page_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');//this is to register new nav menu from wp
    register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One'); 
    register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location two'); 
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'page_features');



  // to change the how the events are displayed in its own archive page
  function uni_adjust_queries($query){
    $today = date('Ymd');
    if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
      $query -> set('orderby', 'title');
      $query -> set('order','ASC');
      $query -> set('posts_per_page', -1);

    };

    if(!is_admin() AND is_post_type_archive('events') AND $query->is_main_query()){
      $query -> set('meta_key','event_date');
      $query -> set('orderby', 'meta_value_num');
      $query -> set('order','ASC');
      $query -> set('meta_query', array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
                )
        ));
    };
  }
  add_action('pre_get_posts', 'uni_adjust_queries');



