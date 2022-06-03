  <!-- Artists -->
  <section class="artists">
    <?php  
      $args = [
        'post_type' => 'post',
        'category_name' => 'home+artists',
      ];
        
      $wpqueryArticles = new WP_Query($args);
    ?>

    <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>
      <h2><?php the_title(); ?></h2>

      <?php $fields = get_fields();
      if($fields) : ?>
        <ul>
          <?php foreach($fields as $name => $value) : ?>
            <li><a href="<?= $value; ?>" target="_blank" rel="noopener noreferrer"><?= $name; ?><i class="fa fa-external-link" aria-hidden="true"></i></a></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    <?php endwhile; endif; ?>
  </section>