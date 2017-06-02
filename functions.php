<?php

require get_template_directory() . '/helpers/cleanse.php';
require get_template_directory() . '/helpers/theme_resources.php';
require get_template_directory() . '/helpers/menus.php';
require get_template_directory() . '/helpers/featured_image.php';
require get_template_directory() . '/helpers/widgets.php';

function theme_setup() {
  cleanse_theme();
  enable_featured_image();
}

function theme_init() {
  register_menus();
}

function theme_resources() {
  add_resources();
}

function theme_widgets() {
  enable_widgets();
}

function theme_footer(){
  cleanse_footer();
}

add_action('after_setup_theme', 'theme_setup');
add_action('init', 'theme_init');
add_action('wp_enqueue_scripts', 'theme_resources');
add_action('wp_footer', 'theme_footer');
add_action('widgets_init', 'theme_widgets');

?>
