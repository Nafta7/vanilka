<?php

function cleanse_theme () {
  remove_head_junk();
  remove_emoji();
  remove_cookies();
  remove_rest_api_links();
  remove_admin_bar();
}

function cleanse_footer() {
  wp_deregister_script('wp-embed');
}

function remove_emoji() {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
}

/*
removes rest api header links
*/
function remove_rest_api_links() {
  // disable REST API link tag
  remove_action('wp_head', 'rest_output_link_wp_head', 10);
  // disable oEmbed Discovery Links
  remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
  // disable REST API link in HTTP headers
  remove_action('template_redirect', 'rest_output_link_header', 11, 0);
}

function remove_cookies() {
  remove_action('set_comment_cookies', 'wp_set_comment_cookies');
}

function remove_head_junk() {
  // removes the “generator” meta tag from the document header
  remove_action('wp_head', 'wp_generator');
  // removes the “wlwmanifest” link
  remove_action('wp_head', 'wlwmanifest_link');
  // disables RSD API to edit your blog from external services and clients
  remove_action('wp_head', 'rsd_link');
  // don't let wp add a “shortlink” into your document head
  remove_action('wp_head', 'wp_shortlink_wp_head');
  // removes a link to the next and previous post from the document header
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
  // remove dns-prefetch
  remove_action('wp_head', 'wp_resource_hints', 2);
  // removes the generator name from the RSS feeds
  add_filter('the_generator', '__return_false');
}

/*
Removes the administrator’s bar and also the associated CSS styles
*/
function remove_admin_bar() {
  add_filter('show_admin_bar','__return_false');
}

/*
Some snippets taken from:
http://cubiq.org/clean-up-and-optimize-wordpress-for-your-next-theme
*/

?>
