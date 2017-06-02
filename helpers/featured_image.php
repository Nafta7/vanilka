<?php

function enable_featured_image() {
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'enable_featured_image');

?>
