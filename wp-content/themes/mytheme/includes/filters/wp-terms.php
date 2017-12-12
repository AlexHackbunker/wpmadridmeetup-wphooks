<?php

add_filter( 'wp_terms_checklist_args', 'wpmeetup_wp_terms_checklist_args' );

function wpmeetup_wp_terms_checklist_args( $args ) {
  $args['checked_ontop'] = false;
  return $args;
}