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
        $pastEvents -> the_post();
        get_template_part('template-parts/content-event');
        } 
          ?>
   
</div>

  <?php get_footer();
  
  ?>
