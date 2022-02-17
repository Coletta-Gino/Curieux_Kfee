<?php

// search filter
function my_search_filter($query) {
  if (!is_admin()) {
    if ($query->is_search) {
      // $query->set('post_type', 'pages'); // to exclude pages
      $query->set('category__not_in', array(1, 12, 41)); // to exclude 'uncategorized', 'banner', and 'footer' articles
    }

    return $query;
  }
}

add_filter('pre_get_posts','my_search_filter');