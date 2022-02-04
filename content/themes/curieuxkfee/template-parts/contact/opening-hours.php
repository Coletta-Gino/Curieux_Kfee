  <!-- Opening Hours -->  
  <ul class="opening-hours">
    <h2 class="cmon">Venez<span>Nous sommes ouverts !</span></h2>
    
    <?php  
      $args = [
        'post_type' => 'post',
        'category_name' => 'informations+opening-hours',
        'orderby' => 'date',
        'order' => 'desc',
      ];
        
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <?php 
        $days = [
          'monday',
          'tuesday',
          'wednesday',
          'thursday',
          'friday',
          'saturday',
          'sunday'
        ];

        for ($i = 0; $i < 7; $i++) { 
          $opening = get_field_object($days[$i].'_opening');
          $closing = get_field_object($days[$i].'_closing');

          if ($opening && $closing) {
            $label = esc_attr($opening['label']);
            $open = esc_attr($opening['value']);
            $close = esc_attr($closing['value']);
  
            foreach ($days as $day) {
              $day = '<li>' . $label . '<span>' . $open . ' - ' . $close . '</span></li>';
            }
          }

          echo $day;
        }
      ?>
    <?php endwhile; endif; ?>
  </ul>