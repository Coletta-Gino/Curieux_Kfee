  <!-- Opening Hours -->
  <h2 class="cmon">Venez<span>Nous sommes ouverts !</span></h2>
    
  <ul class="opening-hours">
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
      <li><?php $field_name = get_field_object('monday_opening'); echo $field_name['label']; ?><span><?php the_field('monday_opening'); ?> - <?php the_field('monday_closing'); ?></span></li>
      <li><?php $field_name = get_field_object('tuesday_opening'); echo $field_name['label']; ?><span><?php the_field('tuesday_opening'); ?> - <?php the_field('tuesday_closing'); ?></span></li>
      <li><?php $field_name = get_field_object('wednesday_opening'); echo $field_name['label']; ?><span><?php the_field('wednesday_opening'); ?> - <?php the_field('wednesday_closing'); ?></span></li>
      <li><?php $field_name = get_field_object('thursday_opening'); echo $field_name['label']; ?><span><?php the_field('thursday_opening'); ?> - <?php the_field('thursday_closing'); ?></span></li>
      <li><?php $field_name = get_field_object('friday_opening'); echo $field_name['label']; ?><span><?php the_field('friday_opening'); ?> - <?php the_field('friday_closing'); ?></span></li>
      <li><?php $field_name = get_field_object('saturday_opening'); echo $field_name['label']; ?><span><?php the_field('saturday_opening'); ?> - <?php the_field('saturday_closing'); ?></span></li>
      <li><?php $field_name = get_field_object('sunday_opening'); echo $field_name['label']; ?><span><?php the_field('sunday_opening'); ?> - <?php the_field('sunday_closing'); ?></span></li>
    <?php endwhile; endif; ?>
  </ul>