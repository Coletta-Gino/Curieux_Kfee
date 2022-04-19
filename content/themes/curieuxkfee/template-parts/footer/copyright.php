    <!-- Copyright -->
    <div class="copyright">
      <?php $copyright = get_field_object('copyright'); ?>

       <!-- TODO => be careful to change the value of 'get_permalink' = the id of the legal mentions page !!! -->
      <p><i class="fa fa-copyright" aria-hidden="true"></i> 2022 - <a href="mailto:<?php the_field('copyright'); ?>?subject="><?php echo esc_attr($copyright['default_value']); ?></a>, Tous droits réservés | <a href="<?= get_permalink(173); ?>">Mentions légales</a></p>
    </div>