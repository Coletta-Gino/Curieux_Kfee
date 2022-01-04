  <!-- Product's Description -->
  <div class="container">
    <?php  
      $args = [
        'post_type' => 'post',
        'orderby' => 'rand',
        'category_name' => 'ephemeral',
      ];
          
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <article class="product">
        <div class="product__image">
          <?php the_post_thumbnail(); ?>
        </div>

        <div class="product__infos">
          <h2><?php the_title(); ?></h2>

          <?php the_content(); ?>
    
          <ul class="tags">
            <li><a href="#">ee</a></li>
            <li><a href="#">gte</a></li>
            <li><a href="#">kkh</a></li>
          </ul>
        </div>
      </article>
    <?php endwhile; endif; ?>    
  </div>