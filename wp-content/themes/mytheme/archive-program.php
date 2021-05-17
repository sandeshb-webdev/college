<?php
  get_header();
  pageBanner(array(
    'title' => 'Check the Programs',
    'subtitle' => 'Enroll for any program of your liking',
    
  ));
  ?>
  ?>

 

<div class="container container--narrow page-section"> 
  <ul class="link-list min-list">
<?php 
    while(have_posts() ){
        the_post();?>
        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>

      <?php } wp_reset_postdata();
          ?>
  </ul>
</div>

  <?php get_footer();
  
  ?>
