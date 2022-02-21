    <!-- Copyright -->
    <div class="copyright">
      <?php $copyright = get_field_object('copyright'); ?>

      <p><i class="fa fa-copyright" aria-hidden="true"></i> 2022 - <a href="mailto:<?php the_field('copyright'); ?>?subject="><?php echo esc_attr($copyright['default_value']); ?></a>, Tous droits réservés</p>
    </div>