    <!-- Links -->
    <?php  
      $args = [
        'post_type' => 'post',
        'category_name' => 'footer+links',
      ];
      
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <ul class="links">
        <!-- TODO => be careful to change the value of 'get_permalink' = the id of the legal mentions page !!! -->
        <!-- TODO => be careful to change the value of 'get_permalink' = the id of the faq page !!! -->
        <li><a href="<?= get_permalink(173); ?>"><?php the_field('legal-mentions'); ?></a></li>
        <li><a href="<?= get_permalink(202); ?>"><?php the_field('faq'); ?></a></li>
        <li><?php $initiative = get_field_object('initiative'); ?><a href="<?php echo esc_attr($initiative['default_value']); ?>" target="_blank" rel="noopener noreferrer"><?= $initiative['value']; ?><i class="fa fa-external-link" aria-hidden="true"></i></a></li>
        <li><?php $region = get_field_object('region'); ?><a href="<?php echo esc_attr($region['default_value']); ?>" target="_blank" rel="noopener noreferrer"><?= $region['value']; ?><i class="fa fa-external-link" aria-hidden="true"></i></a></li>
      </ul>
    <?php endwhile; endif; ?>