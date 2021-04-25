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
    register_nav_menu('headerMenuLocation', 'Header Menu Location'); //this is to register new nav menu from wp
    add_theme_support('title-tag');
  }
  

  add_action('after_setup_theme', 'page_features');


 ?>

