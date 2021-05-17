<?php
  get_header();
  pageBanner(array(
    'title' => 'Check out all the Past events',
    'subtitle' => 'Check out what we were upto',
    'photo' => 'https://images.unsplash.com/photo-1621210439039-a6d0cbfeb476?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80'
    
  ));
  ?>

<div class="container container--narrow page-section"> 
<?php
    $today = date('Ymd');
    $pastEvents = new WP_Query(array(
    'post_type' => 'events', // Calling events which is our custom post
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',  // Default is by date posted
    'order' => 'ASC',
    'meta_query' => array(
      array(
        'key' => 'event_date',
        'compare' => '<',
        'value' => $today,
        'type' => 'numeric'
      )
    )
     ));
    while($pastEvents -> have_posts() ){
        $pastEvents -> the_post();?>
        <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php
                    $eventDate = new DateTime(get_field('event_date'));
                    echo $eventDate->format('M')?></span>
            <span class="event-summary__day"><?php echo $eventDate->format('j')?></span>
            </a>
            <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(), 20);?> <a href="<?php the_permalink();?>" class="nu gray">Read more</a></p>
            </div>
        </div>

      <?php } wp_reset_postdata();
          ?>
   
</div>

  <?php get_footer();
  
  ?>
