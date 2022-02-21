<?php get_header(); ?>
  <!-- Categories -->
  <section class="categories">
    <button class="selected">Tous</button>

    <?php
      $args = [
        'taxonomy' => 'category',
        'parent' => 19,
        'hide_empty' => false
      ];

      $categories = get_categories($args);

      foreach ($categories as $category) {
        $category = $category->name;

        echo '<button>' . $category . '</button>';
      }
    ?>
  </section>

  <div class="container">
    <?php  
      $args = [
        'post_type' => 'post',
        'category_name' => 'permanent',
        'orderby' => 'rand',
      ];
          
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <?php get_template_part('template-parts/products/permanents'); ?>
    <?php endwhile; endif; ?>    
  </div>
<?php get_footer(); ?>