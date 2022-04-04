      <!-- Product's Description -->
      <?php
        // TODO => be carreful to change the value of 'parent' = the id of the permanents category !!!
        $taxonomies = get_terms([
          'taxonomy' => 'category',
          'parent' => 19,
          'hide_empty' => false
        ]);
        
        if ($taxonomies) :
          foreach ($taxonomies as $category) : ?>
            <article class="product" data-att="<?php $category = get_the_category(); echo esc_attr($category[0]->slug); ?>">
              <?php
                $latest = get_field_object('new');

                if ($latest) {
                  $name = $latest['name'];
                  $value = $latest['value'];

                  if (!empty($value)) {
                    $new = '<span class="' . $name . '">' . $value . '</span>';
                  }
                  else {
                    $new = '';
                  }
                }

                echo $new;
              ?>
              
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
                        echo '<li>' . $post_tag->name . '</li>';
                      } 
                    } 
                  ?>
                </ul>
              </div>
            </article>
            <?php break; ?>
          <?php endforeach; ?>
        <?php endif; ?>