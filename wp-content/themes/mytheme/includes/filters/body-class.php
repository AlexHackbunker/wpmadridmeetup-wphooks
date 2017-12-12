<?php

add_filter('body_class', 'wpmeetup_body_class');

function wpmeetup_body_class( $classes ) {
  global $wp_query;
  #print_pre( $wp_query );

  if ( is_multisite() ) {
    $id = get_current_blog_id();
    $classes[] = 'site-id-'.$id;
  }

  if ( is_page( 'about' ) ) {
    $classes[] = 'whatever';
  }

  return $classes;
}