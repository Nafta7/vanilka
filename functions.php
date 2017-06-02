<?php

require get_template_directory() . '/helpers/cleanse.php';
require get_template_directory() . '/helpers/theme_resources.php';
require get_template_directory() . '/helpers/menus.php';
require get_template_directory() . '/helpers/featured_image.php';


function vanilka_setup() {
  cleanse_theme();
}

function footer_setup(){
  cleanse_footer();
}

add_action('after_setup_theme', 'vanilka_setup');
add_action('wp_footer', 'footer_setup');
add_action('init', 'register_menus');

?>
