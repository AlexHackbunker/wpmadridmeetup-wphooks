<?php


function meetup_newsletter_form() {
  
  if ( !empty( $_POST['email'] ) ) {
   
    if  ( ! wp_mail( $_POST['email'], 'Hola meetup', 'Hola meetup' ) ) {
      wp_safe_redirect( site_url() . '?msg=ko' );
      exit;
    }

    wp_safe_redirect( site_url() . '?msg=ok' );
    exit;
    
  }


}
add_action( 'admin_post_nopriv_newsletter_form', 'meetup_newsletter_form' );
add_action( 'admin_post_newsletter_form', 'meetup_newsletter_form' );