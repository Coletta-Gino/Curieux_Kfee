      <!-- Product's Description -->
      <?php
        $taxonomies = get_terms([
          'taxonomy' => 'category',
          'parent' => 18,
          'hide_empty' => false
        ]);
        
        if ($taxonomies) :
          foreach ($taxonomies as $category) : ?>
            <article class="product" data-att="<?php $category = get_the_category(); echo esc_attr($category[0]->slug); ?>">
              <div class="product__image">
                <?php the_post_thumbnail(); ?>
              </div>

              <div class="product__infos">
                <h2><?php the_title(); ?></h2>

                <?php the_content(); ?>
        
                <ul class="tags">
                  <?php 
                    $post_tags = get_the_tags(); 
                    if ($post_tags) { 
                      foreach($post_tags as $post_tag) { 
                        echo '<li><a href="' . get_tag_link($post_tag) . '">' . $post_tag->name . '</a></li>';
                      } 
                    } 
                  ?>
                </ul>
              </div>
            </article>
            <?php break; ?>
          <?php endforeach; ?>
        <?php endif; ?>