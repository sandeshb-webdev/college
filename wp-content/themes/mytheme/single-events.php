<!-- Its working with just this html also.
      have a look at it once properly-->
      <!-- 0000000000000000000000000 -->
    <!-- <h1><?php echo the_title() ?></h1>
    <p><?php echo the_content() ?></p> -->
<!-- 00000000000000000000000000000000000000000 -->

<?php 
    $singleEvent = new WP_Query(array(
      'posts_per_page' => 2,
      'post_type' => 'events'
            ));
    get_header();
      while ($singleEvent -> have_posts()) {
       $singleEvent -> the_post(); ?>
        <div class="page-banner">
          <div class="page-banner__bg-image"
            style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg');?>);"></div>
          <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php  the_title(); ?> </h1>
            <div class="page-banner__intro">
              <p>don't forget to make me dynamic later</p>
            </div>
          </div>
        </div>

        <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('events');?>"><i class="fa fa-home"
                  aria-hidden="true">
                </i> Back to Events</a>
              <span class="metabox__main"><?php the_title();?></span></p>
          </div>
          <div class="generic-content">
        <p><?php echo the_content() ?></p>
          </div>


        

        </div>

        <?php
      }
      get_footer();
     ?>
 