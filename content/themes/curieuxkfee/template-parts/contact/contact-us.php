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
      <!-- ?subject=[contenu] pour pré-remplir l'objet du mail -->
      <!-- %20 pour s'ssurer du fonctionnement des espaces entre les mots -->
      <!-- & pour ajouter des infoamtions comme body, cc, bcc, etc -->
      <!-- body=[contenu] pour permettre à l'utilisateur de rédiger directement le contenu de son message -->
      <a href="mailto:<?php the_field('mail'); ?>?subject=Mail%20Envoyé%20Depuis%20Le%20Site&body="><i class="fa fa-envelope" aria-hidden="true"></i>Email us</a>
      <!-- Version Cryptée -->
      <!-- <a href="mailto:&#99;%6f%6et&#97;&#99;t&#64;%63%75&#114;%69%65&#117;%78&#107;f&#101;e%2e&#102;%72?subject=Mail%20Envoyé%20Depuis%20Le%20Site&body="> -->
      <a href="tel:+<?php the_field('phone_number'); ?>">Call us<i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
  <?php endwhile; endif; ?>