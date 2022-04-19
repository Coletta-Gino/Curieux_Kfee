  <!-- Introduction -->
  <section class="intro">
    <?php  
      $args = [
        'post_type' => 'post',
        'category_name' => 'home+intro',
      ];
        
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </section>