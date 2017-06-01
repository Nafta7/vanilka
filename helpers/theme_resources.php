<?php


function add_script() {
  wp_enqueue_script(
    'app',
    get_template_directory_uri() . '/app.js',
    [],
    false,
    true
  );
}

function add_stylesheet() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

function theme_resources() {
  add_stylesheet();
  add_script();
}

add_action('wp_enqueue_scripts', 'theme_resources');

 ?>
