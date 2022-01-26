<?php get_header(); ?>

<div class="container">
  <?php
    $count = $wp_query->found_posts;
    if ($count <=1 ) {
        $several = '';
    }
    else {
        $several = 's';
    }

    if ($count > 0) {
        $output = $count . ' résultat' . $several . ' pour la recherche';
    }
    else {
        $output = 'Aucun résultat pour la recherche';
    }

    $result = $output . ' ' . '"' . get_search_query() . '"'; 
  ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- 1) S'il y a au moins un résultat -->
    <article class="article_found">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </article>
    <?php endwhile; wp_reset_query(); ?>
  
  <?php else : ?>
    <!-- 2) Si pas de résultat -->
    <p>Votre recherche est infructueuse. Veuillez essayer avec d&apos;autres termes de recherche.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>