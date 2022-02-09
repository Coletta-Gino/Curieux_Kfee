  <!-- Banner -->
  <section class="banner" id="top">
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

    <div class="banner__actions">
      <?php get_search_form(); ?>

      <div id="up" title="Vers le bas">
        <a href="#down">
          <i class="fa fa-arrow-down" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>