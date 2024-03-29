<!-- Its working with just this html also.
      have a look at it once properly-->
      <!-- 0000000000000000000000000 -->
   
<!-- 00000000000000000000000000000000000000000 -->

<?php 
   
    get_header();
      while (have_posts()) {
       the_post(); 
        pageBanner(array(
          'title' => 'Check out all the Program',
          'subtitle' => 'get admissino in you favorite program',
          'photo' => 'https://images.unsplash.com/photo-1621210439039-a6d0cbfeb476?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80'
        ));
       ?>
        
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
             $relatedProfessors = new WP_Query(array(
              'posts_per_page' => -1, // this value shows alll the post, bettter than putting 30,40 like that
              'post_type' => 'professor', // Calling events which is our custom post
              'orderby' => 'title',  // Default is by date posted
              'order' => 'ASC',
              'meta_query' => array(
                array(
                    'key' => 'related_programs',
                    'compare' => 'LIKE',
                    'value' => '"'.get_the_ID().'"'
                )
              )
            ));
            if($relatedProfessors -> have_posts()){
                echo '<hr classs = "section-break">';
                echo '<h2 class="headline headline--medium"> ' .get_the_title().' Professors </h2>';

                echo '<ul class = "professor-cards">';
                while($relatedProfessors -> have_posts() ){
                     $relatedProfessors -> the_post();?>
                     <li class = "professor-card__list-item">
                        <a class = "professor-card" href="<?php the_permalink();?>">
                          <img src="<?php the_post_thumbnail_url('professorLandscape'); ?>" alt="" class="professor-card__image">
                          <span class="professor-card__name"><?php the_title();?></span>
                        </a>
                      </li>
              <?php 
                }
                echo '</ul>';
              
            }

            wp_reset_postdata(); // Use it between two custom queries most of the times to avoid errors , i.e ID being taken by first one etc type of error

          
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
                     $homepageEvents -> the_post();
                     get_template_part('template-parts/content-event');
                    };
                  };
          ?>

        
          </div>


        

        </div>

        <?php
      };
      get_footer();
     ?>
 