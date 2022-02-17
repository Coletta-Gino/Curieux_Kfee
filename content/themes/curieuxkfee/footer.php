  </main>

  <!-- Footer -->
  <footer>
    <!-- Links -->
    <ul class="links">
      <li><a href="#">Lorem dolor sit amet.</a></li>
      <li><a href="#">Lorem ipsum amet.</a></li>
      <li><a href="#">Lorem sit amet.</a></li>
      <li><a href="#">Lipsum dolor sit amet.</a></li>
      <li><a href="#">Losum amet.</a></li>
    </ul>

    <!-- Logo (Simplified) -->
    <div class="simplified-logo">
      <?php 
        $image_attributes = wp_get_attachment_image_src($attachment_id = 125);
        $alt_text = get_post_meta(125, '_wp_attachment_image_alt', true);
      ?>
  
      <img src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt_text; ?>" />
    </div>

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
        <!-- ?subject=[contenu] pour pré-remplir l'objet du mail -->
        <!-- %20 pour s'ssurer du fonctionnement des espaces entre les mots -->
        <!-- & pour ajouter des infoamtions comme body, cc, bcc, etc -->
        <!-- body=[contenu] pour permettre à l'utilisateur de rédiger directement le contenu de son message -->
        <a href="mailto:<?php the_field('mail_footer'); ?>?subject=Mail%20Envoyé%20Depuis%20Le%20Site&body="><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <!-- Version Cryptée -->
        <!-- <a href="mailto:&#99;%6f%6et&#97;&#99;t&#64;%63%75&#114;%69%65&#117;%78&#107;f&#101;e%2e&#102;%72?subject=Mail%20Envoyé%20Depuis%20Le%20Site&body="> -->
        <a href="tel:+<?php the_field('phone_number_footer'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
        <a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
    <?php endwhile; endif; ?>

    <!-- Copyright -->
    <div class="copyright">
      <?php $copyright = get_field_object('copyright'); ?>

      <p><i class="fa fa-copyright" aria-hidden="true"></i> 2022 - <a href="mailto:<?php the_field('copyright'); ?>?subject="><?php echo esc_attr($copyright['default_value']); ?></a>, Tous droits réservés</p>
    </div>

    <!-- Anchor -->
    <div id="down" title="Vers le haut">
      <a href="#top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
      </a>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>