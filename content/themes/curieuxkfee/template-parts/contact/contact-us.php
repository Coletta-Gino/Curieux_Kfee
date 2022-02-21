  <!-- Contact Us -->
  <?php  
    $args = [
      'post_type' => 'post',
      'category_name' => 'informations+contact-us',
    ];
      
    $wpqueryArticles = new WP_Query($args);
  ?>

  <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
    <div class="contact-us">
      <!-- ?subject=[content] to pre-fill mail's object -->
      <!-- %20 to space out the words -->
      <!-- & to add informations like body, cc, bcc, etc -->
      <!-- body=[content] to allow the user to directly write the content of his message -->
      <a href="mailto:<?php the_field('mail'); ?>?subject=Mail%20Envoyé%20Depuis%20Le%20Site&body="><i class="fa fa-envelope" aria-hidden="true"></i>Email us</a>
      <a href="tel:+<?php the_field('phone_number'); ?>">Call us<i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
  <?php endwhile; endif; ?>