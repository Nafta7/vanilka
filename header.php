<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

  </head>
  <body>
    <div>
      <header>
        <h1>
          <a href="<?php echo esc_url( home_url( '/' )); ?>">
            <?php bloginfo('name'); ?>
          </a>
        </h1>
      </header>
      <nav>
        <?php get_template_part('partials/sections/main-nav-menu'); ?>
      </nav>
