  <!-- Navbar -->
  <nav>
    <div class="logo">
      <!-- <h1>Curieux kfée</h1> -->
      <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>
  
    <!-- Menu Items -->
      <?php 
        $menu = wp_nav_menu([
          'theme_location' => 'main-menu',
          'container' => 'none',
          // 'container_class' => 'main-nav',
          'echo' => false
        ]);

        $menu = str_replace('class="menu"', 'class="nav-links"', $menu);

        echo $menu;
      ?>
  
    <!-- Menu Burger -->
    <div class="burger">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
  </nav>