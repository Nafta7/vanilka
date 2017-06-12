<?php

function add_script() {
  $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';
  wp_enqueue_script(
    'app',
    get_template_directory_uri() . '/app' . $suffix . '.js',
    [],
    false,
    true
  );
}

function add_stylesheet() {
  $suffix = (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min';
  wp_enqueue_style(
    'style',
    get_template_directory_uri() . '/style' . $suffix . '.css'
  );
}

 ?>
