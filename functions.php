<?php

function theme_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('app', get_template_directory_uri() . '/app.js');
}

add_action('wp_enqueue_scripts', 'theme_resources');

?>
