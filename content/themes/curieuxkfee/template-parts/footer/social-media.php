    <!-- Social Media -->
    <?php  
      $args = [
        'post_type' => 'post',
        'category_name' => 'footer+social-media',
      ];
      
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <div class="social-media">
        <!-- ?subject=[content] to pre-fill mail's object -->
        <!-- %20 to space out the words -->
        <!-- & to add informations like body, cc, bcc, etc -->
        <!-- body=[content] to allow the user to directly write the content of his message -->
        <a href="mailto:<?php the_field('mail_footer'); ?>?subject=Mail%20Envoyé%20Depuis%20Le%20Site&body="><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <a href="tel:+<?php the_field('phone_number_footer'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
        <a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
    <?php endwhile; endif; ?>