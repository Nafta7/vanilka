<?php

require get_template_directory() . '/helpers/cleanse.php';
require get_template_directory() . '/helpers/theme_resources.php';
require get_template_directory() . '/helpers/menus.php';
require get_template_directory() . '/helpers/featured_image.php';
require get_template_directory() . '/helpers/widgets.php';

function vanilka_setup() {
  cleanse_theme();
  enable_featured_image();
}

function vanilka_init() {
  register_menus();
}

function vanilka_resources() {
  add_resources();
}

function vanilka_widgets() {
  enable_widgets();
}

function vanilka_footer(){
  cleanse_footer();
}

add_action('after_setup_theme', 'vanilka_setup');
add_action('init', 'vanilka_init');
add_action('wp_enqueue_scripts', 'vanilka_resources');
add_action('wp_footer', 'vanilka_footer');
add_action('widgets_init', 'vanilka_widgets');

?>
