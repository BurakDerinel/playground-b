<?php
function pial_theme_setup() {
    // Titel-Tag, Menüs und Thumbnails aktivieren
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main-menu' => __('Main Menu', 'pial'),
    ]);
}
add_action('after_setup_theme', 'pial_theme_setup');
