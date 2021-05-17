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
        the_post();
        get_template_part('template-parts/content-event');
        }
        ?>
   
</div>
<div>
  <p><a href="<?php echo site_url('/past-events'); ?>">Check out our past events</a></p>
</div>

  <?php get_footer();
  
  ?>
