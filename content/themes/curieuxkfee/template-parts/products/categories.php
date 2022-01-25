      <!-- Categories -->
      <section class="categories">
        <button>Tous</button>

        <?php
          $args = [
            'taxonomy' => 'category',
            'parent' => 18,
            'hide_empty' => false
          ];

          $categories = get_categories($args);

          foreach ($categories as $category) {
            $category = $category->name;

            echo '<button>' . $category . '</button>';
          }
        ?>
      </section>