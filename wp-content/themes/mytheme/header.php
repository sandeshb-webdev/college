<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <title></title>
  </head>
  <body class ="<?php body_class(); ?>"
    <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url();?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>

              <li <?php if(is_page('about-us')) echo 'class="current-menu-item"';?>><a href="<?php echo site_url('/about-us')?>">About Us</a></li>
              <li <?php if (get_post_type() =='program') echo 'class="current-menu-item"';?>><a href="<?php echo get_post_type_archive_link('program');?>">Programs</a></li>
              <li <?php if (get_post_type() =='events' OR is_page('past-events')) echo 'class="current-menu-item"';?>><a href="<?php echo get_post_type_archive_link('events');?>">Events</a></li>
              <li <?php if (get_post_type() =='campus') echo 'class="current-menu-item"';?>><a href="<?php echo get_post_type_archive_link('campus') ?>">Campuses</a></li>
              <li <?php if(get_post_type()=='post') echo 'class="current-menu-item"';?>><a href="<?php echo site_url('/blog')?>">Blog</a></li>
            </ul>

            <?php wp_nav_menu(array(
                  'theme_location' => 'headerMenuLocation'
            ));?>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>
    
