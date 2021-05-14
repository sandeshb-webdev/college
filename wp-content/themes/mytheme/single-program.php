<!-- Its working with just this html also.
      have a look at it once properly-->
      <!-- 0000000000000000000000000 -->
   
<!-- 00000000000000000000000000000000000000000 -->

<?php 
   
    get_header();
      while (have_posts()) {
       the_post(); ?>
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
            <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program');?>"><i class="fa fa-home"
                  aria-hidden="true">
                </i> All Programs</a>
              <span class="metabox__main"><?php the_title();?></span></p>
          </div>
          <div class="generic-content">
             <p><?php echo the_content() ?></p>
             <?php 
            $today = date('Ymd'); // date format same as custom field date format
            $homepageEvents = new WP_Query(array(
              'posts_per_page' => -1, // this value shows alll the post, bettter than putting 30,40 like that
              'post_type' => 'events', // Calling events which is our custom post
              'meta_key' => 'event_date',
              'orderby' => 'meta_value_num',  // Default is by date posted
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'event_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
                ),
                array(
                    'key' => 'related_programs',
                    'compare' => 'LIKE',
                    'value' => '"'.get_the_ID().'"'
                )
              )
            ));
            if($homepageEvents -> have_posts()){
                echo '<hr classs = "section-break">';
                echo '<h2 class="headline headline--medium">Upcoming ' .get_the_title().' Events </h2>';
                while($homepageEvents -> have_posts() ){
                     $homepageEvents -> the_post();?>
                    <div class="event-summary">
                    <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                        <span class="event-summary__month"><?php
                        $eventDate = new DateTime(get_field('event_date'));
                        echo $eventDate->format('M')?> </span>
                        <span class="event-summary__day"><?php
                        echo $eventDate->format('d')?></span>
                    </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                        <p><?php if(has_excerpt()){
                                echo get_the_excerpt();
                        }else echo wp_trim_words(get_the_content(), 20);?> <a href="<?php the_permalink();?>" class="nu gray">Read more</a></p>
                    </div>
                    </div>
                
            

      <?php };}; wp_reset_postdata();
          ?>

        
          </div>


        

        </div>

        <?php
      };
      get_footer();
     ?>
 