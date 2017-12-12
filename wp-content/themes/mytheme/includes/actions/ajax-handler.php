<?php

function meetup_ajax_newsletter_form() {
  
  if ( !empty( $_POST['email'] ) ) {

    if  ( !wp_mail( $_POST['email'], 'Hola meetup', 'Hola meetup' ) ) {
      status_header( 200 );
      die( json_encode( array( 'status' => 'ko' ) ) );
    }
    
    status_header( 200 );
    die( json_encode( array( 'status' => 'ok' ) ) );
  }


}
add_action( 'wp_ajax_nopriv_newsletter_form', 'meetup_ajax_newsletter_form' );
add_action( 'wp_ajax_newsletter_form', 'meetup_ajax_newsletter_form' );