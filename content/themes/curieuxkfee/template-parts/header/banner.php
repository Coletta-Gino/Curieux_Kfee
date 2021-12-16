  <!-- Banner -->
  <section class="banner">
    <?php  
      $args = [
        'post_type' => 'post',
        'category_name' => 'header+banner',
      ];
        
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <?php the_content(); ?>
      <?php the_post_thumbnail(); ?>
    <?php endwhile; endif; ?>
  </section>