<?php

add_action( 'pre_get_posts', 'wpmeetup_pre_get_posts' );


/*
 * The pre_get_posts action gives developers access to the $query object by reference
 *  (any  changes you make to $query are made directly to the original object - no return
 * value is necessary).
 * 
 */
function wpmeetup_pre_get_posts( $query ) {

  if ( $query->is_home() && $query->is_main_query() ) {
      $query->set( 'orderby', 'post_title' );
      $query->set( 'order', 'DESC' );
      //print_pre( $query );
  }

  return;
}