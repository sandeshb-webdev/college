<?php
  get_header();
  pageBanner(array(
    'title' => 'Check out all the events',
    'subtitle' => 'Dont miss out any events. Check it out as per your need',
    'photo' => 'https://images.unsplash.com/photo-1621210439039-a6d0cbfeb476?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80'
    
  ));
  ?>

 

<div class="container container--narrow page-section"> 
<?php 
    
    while(have_posts() ){
        the_post();?>
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
<div>
  <p><a href="<?php echo site_url('/past-events'); ?>">Check out our past events</a></p>
</div>

  <?php get_footer();
  
  ?>
