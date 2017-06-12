<?php

require_once get_template_directory() . '/core/cleanse.php';
require_once get_template_directory() . '/core/theme_resources.php';
require_once get_template_directory() . '/core/menus.php';
require_once get_template_directory() . '/core/featured_image.php';
require_once get_template_directory() . '/core/widgets.php';

function theme_setup() {
  cleanse_theme();
  enable_featured_image();
}

function theme_init() {
  register_menus();
}

function theme_resources() {
  add_script();
  add_stylesheet();
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
