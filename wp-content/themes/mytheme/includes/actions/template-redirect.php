<?php

add_action( 'template_redirect', 'wpmeetup_register_visit' );

function wpmeetup_register_visit() {
  global $post, $wp_query;

  if ( is_page('about') ) {
   
    $visits = get_post_meta( $post->ID, '_post_visits', true );
    if ( $visits == '' ) {
      $visits = 0;
      
    }

    $visits++;

    update_post_meta( $post->ID, '_post_visits', $visits );
  }
}