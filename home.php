<?php
  get_header(); ?>
  <div>
    <div>
    <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          get_template_part('partials/post/content', get_post_format());
        }

        the_posts_navigation();

      } else {
        get_template_part( 'partials/post/content', 'none' );
      }
    ?>
    </div>
    <aside>
      <?php get_template_part('partials/sections/sidebar'); ?>
    </aside>
  </div>
  <?php
    get_footer(); ?>
