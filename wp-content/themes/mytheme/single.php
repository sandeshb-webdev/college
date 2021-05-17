<!-- Its working with just this html also.
      have a look at it once properly-->
      <!-- 0000000000000000000000000 -->
    <!-- <h1><?php echo the_title() ?></h1>
    <p><?php echo the_content() ?></p> -->
<!-- 00000000000000000000000000000000000000000 -->


    <?php
    get_header();
      while (have_posts()) {
        the_post();
        pageBanner();
        ?>
        

        <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog');?>"><i class="fa fa-home"
                  aria-hidden="true">
                </i> Back to Blog Home</a>
              <span class="metabox__main">Posted by <?php the_author_posts_link();?> on <?php the_time('n.j.y')?> in <?php echo get_the_category_list(', ');?></span></p>
          </div>
          <div class="generic-content">
        <p><?php echo the_content() ?></p>
          </div>


        

        </div>

        <?php
      }
      get_footer();
     ?>
 