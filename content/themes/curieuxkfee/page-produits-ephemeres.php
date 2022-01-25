<?php get_header(); ?>
  <?php get_template_part('template-parts/products/categories'); ?>

  <div class="container">
    <?php  
      $args = [
        'post_type' => 'post',
        'category_name' => 'ephemeral',
        'orderby' => 'rand',
      ];
          
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <?php get_template_part('template-parts/products/ephemerals'); ?>
    <?php endwhile; endif; ?>    
  </div>
<?php get_footer(); ?>