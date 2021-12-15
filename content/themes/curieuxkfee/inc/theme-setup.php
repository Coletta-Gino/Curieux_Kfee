<?php

if (!function_exists('curieuxkfee_setup')) {
    function curieuxkfee_setup() {
        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'main-menu' => 'menu'
        ]);
    }
}

add_action('after_setup_theme', 'curieuxkfee_setup');