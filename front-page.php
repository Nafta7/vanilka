<?php
get_header(); ?>

<main>
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('partials/content', 'front-page');
    }
  } else {
    get_template_part('partials/content', 'none');
  }
  ?>
</main>

<?php
get_footer();
?>
