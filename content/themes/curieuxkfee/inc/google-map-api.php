<?php

// if (!function_exists('curieuxkfee_acf_init')) {
//     function curieuxkfee_acf_init() {
//         acf_update_setting('google_api_key', 'AIzaSyDDwp6sLqy5EclOpanX0j8mcPdiQtNl-Cg');
//     }
// }

// add_action('acf/init', 'curieuxkfee_acf_init');

if (!function_exists('curieuxkfee_acf_google_map_api')) {
    function curieuxkfee_acf_google_map_api($api) {
        $api['key'] = 'AIzaSyDDwp6sLqy5EclOpanX0j8mcPdiQtNl-Cg';
        return $api;
    }
}

add_filter('acf/fields/google_map/api', 'curieuxkfee_acf_google_map_api');