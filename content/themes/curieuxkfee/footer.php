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
    <div class="social-media">
      <!-- ?subject=[contenu] pour pré-remplir l'objet du mail -->
      <!-- %20 pour s'ssurer du fonctionnement des espaces entre les mots -->
      <!-- & pour ajouter des infoamtions comme body, cc, bcc, etc -->
      <!-- body=[contenu] pour permettre à l'utilisateur de rédiger directement le contenu de son message -->
      <a href="mailto:<?php the_field('mail'); ?>?subject=Mail%20Envoyé%20Depuis%20Le%20Site&body="><i class="fa fa-envelope" aria-hidden="true"></i></a>
      <!-- Version Cryptée -->
      <!-- <a href="mailto:&#99;%6f%6et&#97;&#99;t&#64;%63%75&#114;%69%65&#117;%78&#107;f&#101;e%2e&#102;%72?subject=Mail%20Envoyé%20Depuis%20Le%20Site&body="> -->
      <a href="tel:+<?php the_field('phone_number'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>

    <!-- Copyright -->
    <div class="copyright">
      <p><i class="fa fa-copyright" aria-hidden="true"></i> 2022 - <a href="#">Gino Coletta</a>, Tous droits réservés</p>
    </div>

    <!-- Anchor -->
    <div id="up" title="Vers le haut">
      <a href="#top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
      </a>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>