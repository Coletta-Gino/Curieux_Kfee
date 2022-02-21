  <!-- Map -->
  <?php  
    $args = [
      'post_type' => 'post',
      'category_name' => 'informations+map',
    ];
      
    $wpqueryArticles = new WP_Query($args);
  ?>

  <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
    <div class="map">
      <?php 
        $location = get_field('map'); 

        if($location):
          $zoom = esc_attr($location['zoom']);
          $lat = esc_attr($location['lat']);
          $lng = esc_attr($location['lng']);
          $name = esc_attr($location['name']);
          $post_code = esc_attr($location['post_code']);
          $city = esc_attr($location['city']);
          // $state = esc_attr($location['state']);
          $country = esc_attr($location['country']);
          $address = $post_code . ', ' . $city . ', ' . $country;
          // $address = $post_code . ', ' . $city . ', ' . $state . ', ' . $country;
      ?>

        <strong>
          <address>
            <span><?php echo $name; ?></span><?php echo $address; ?>
          </address>
        </strong>

        <div class="acf-map" data-zoom="<?php echo $zoom; ?>">
          <div class="marker" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $lng; ?>"></div>
        </div>
      <?php endif; ?>
    </div>
  <?php endwhile; endif; ?>