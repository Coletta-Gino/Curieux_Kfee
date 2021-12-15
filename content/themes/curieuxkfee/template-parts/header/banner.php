  <!-- Banner -->
  <section class="banner">
    <?php  
      $args = [
        'post_type' => 'post',
        'category__in' => 3,
      ];
            
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <?php the_content(); ?>
      <?php the_post_thumbnail(); ?>
    <?php endwhile; endif; ?>
  </section>