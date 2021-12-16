  <!-- Events/Promotions -->
  <div class="special-event finished">
    <a href="#"><i class="fa fa-pause-circle-o fa-2x" aria-hidden="true"></i></a>

    <div class="special-event__items offer">
      <div class="special-event__items__single">
      <?php  
        $args = [
          'post_type' => 'post',
          'category_name' => 'header+events',
        ];
          
        $wpqueryArticles = new WP_Query($args);
      ?>

      <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
        <strong>20% de réduction</strong>
        <i class="fa fa-coffee" aria-hidden="true"></i>
        <span>Jusqu'au 05/12</span>
      <?php endwhile; endif; ?>
      </div>
    </div>
  </div>