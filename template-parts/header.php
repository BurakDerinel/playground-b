<?php
// Einbinden des Template-Parts für den Header
get_template_part('template-parts/navigation');
<?php
wp_nav_menu([
    'theme_location' => 'main-menu',
    'menu_class' => 'navbar-nav',
    'container' => 'nav',
    'container_class' => 'navbar'
]);
?>
