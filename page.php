<?php

  get_header();

  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('partials/page/content', 'page');
    }
  } else {
    get_template_part( 'partials/post/content', 'none' );
  }

  get_footer();

?>
