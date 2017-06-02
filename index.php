<?php

  get_header();

  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('partials/content', get_post_format());
    }

    the_posts_navigation();

  } else {
    get_template_part( 'partials/content', 'none' );
  }

  get_footer();

?>
