<?php

// Search Filter
function my_search_filter($query) {
  if (!is_admin()) {
    // TODO => be carreful to change the values of the id of all categories !!!
    if ($query->is_search) {
      // $query->set('post_type', 'pages'); // to exclude pages
      $query->set('cat', array(-8, -9)); // to exclude children of 'ephemeral' and 'permanent' categories
      $query->set('category__not_in', array(1, 10, 3, 14, 18)); // to exclude 'uncategorized', 'header', 'home', 'informations', and 'footer' articles
    }

    return $query;
  }
}

add_filter('pre_get_posts','my_search_filter');