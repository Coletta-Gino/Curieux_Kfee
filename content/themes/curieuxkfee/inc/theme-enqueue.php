<?php 

if (!function_exists('curieuxkfee_enqueue')) {
  function curieuxkfee_enqueue() {
    // Styles
    wp_enqueue_style(
      'main-style',
      get_theme_file_uri('public/css/style.css'),
      [],
      '20211412'
    );

    // JavaScript
     wp_enqueue_script(
      'app',
      get_theme_file_uri('public/js/app.js'),
      [],
      '20211412',
      true
    );

    // Google Map Script
    wp_enqueue_script(
      'google-map',
      get_theme_file_uri() . '/app/js/google-map.js',
      ['jquery'],
      '3.3.2',
      true
    );

    // Google Map Api
    wp_enqueue_script(
      'google-api',
      'https://maps.googleapis.com/maps/api/js?key=AIzaSyDDwp6sLqy5EclOpanX0j8mcPdiQtNl-Cg',
      [],
      false,
      false
    );
  }
}

add_action('wp_enqueue_scripts', 'curieuxkfee_enqueue');