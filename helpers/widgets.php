<?php

function enable_widgets() {
  register_sidebar([
    'name' => 'Sidebar',
    'id' => 'sidebar-1',
    'description' => 'Main sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' =>  '</h2>'
  ]);
}

?>
