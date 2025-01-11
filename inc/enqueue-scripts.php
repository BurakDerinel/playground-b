<?php
function pial_enqueue_scripts() {
    // Styles
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.3.0');
    wp_enqueue_style('theme-main-style', get_template_directory_uri() . '/assets/css/main.css', [], '1.0', 'all');

    // Scripts
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], '5.3.0', true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'pial_enqueue_scripts');


