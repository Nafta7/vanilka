<?php
get_header(); ?>

<main>
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('partials/page/content', 'front-page');
    }
  } else {
    get_template_part('partials/post/content', 'none');
  }
  ?>
</main>

<?php
get_footer();
?>
