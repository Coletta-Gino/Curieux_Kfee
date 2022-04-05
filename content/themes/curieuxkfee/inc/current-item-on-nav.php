<?php 

// This function add the 'current' class to the active item on nav 
function current_item_on_nav($classes) {
  if(in_array('current-menu-item', $classes)) {
    $classes[] = 'current';
  }

  return $classes;
}

// TODO => be careful to change the value of the id of the permanents category !!!
add_filter('nav_menu_css_class' , 'current_item_on_nav');