  <!-- Contents -->
  <div class="wrapper">
    <?php  
      $args = [
        'post_type' => 'post',
        'orderby' => 'rand',
        'category_name' => 'home+content',
      ];
          
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <article class="content">  
        <h2><?php the_title(); ?></h2>
        
        <div class="content__picture">
          <?php the_post_thumbnail(); ?>
        </div>

        <div class="content__desc">
          <?php the_content(); ?>
          <a href="#">CTA</a>
        </div>
      </article>
    <?php endwhile; endif; ?>    
  </div>