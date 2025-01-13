<?php 
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/enqueue-scripts.php';
require_once get_template_directory() . '/inc/custom-functions.php';

// Menüregistrierung
function playground_theme_register_menus() {
    register_nav_menus([
        'main-menu' => __('Main Menu', 'playground-theme'),
    ]);
}
add_action('init', 'playground_theme_register_menus');
