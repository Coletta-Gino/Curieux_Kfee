<?php 

if (!function_exists('curieuxkfee_enqueue')) {
    function curieuxkfee_enqueue() {
        wp_enqueue_style(
            'main-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '20211412'
        );

        wp_enqueue_script(
            'app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '20211412',
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'curieuxkfee_enqueue');
