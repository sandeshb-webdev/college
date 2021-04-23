<!-- Its working with just this html also.
      have a look at it once properly-->
      <!-- 0000000000000000000000000 -->
    <!-- <h1><?php echo the_title() ?></h1>
    <p><?php echo the_content() ?></p> -->
<!-- 00000000000000000000000000000000000000000 -->


    <?php
    get_header();
      while (have_posts()) {
        the_post(); ?>
        <h1><?php echo the_title() ?></h1>
        <p><?php echo the_content() ?></p>

        <?php
      }
      get_footer();
     ?>
