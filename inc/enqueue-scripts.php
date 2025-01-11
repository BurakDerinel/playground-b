<?php
function pial_enqueue_scripts() {
    // Lokales Bootstrap CSS und JS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.3.0');
    wp_enqueue_style('theme-main-style', 'http://localhost:8888/playground-b/wp-content/themes/playground-theme/assets/css/main.css', [], time(), 'all');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], '5.3.0', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'pial_enqueue_scripts');

