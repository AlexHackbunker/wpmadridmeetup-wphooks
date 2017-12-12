<?php



add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts_css' );

function wp_enqueue_scripts_css() {
	wp_enqueue_style( 'foundationcss', get_template_directory_uri() . '/css/foundation.min.css' ); 
}

add_action( 'wp_enqueue_scripts', 'wp_enqueue_scripts_js' );

function wp_enqueue_scripts_js() {

  // Encolamos JQUERY
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '',  true );

  // Encolamos FOUNDATION
  wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js', array(), '', true );

  // Encolamos nuestro JS
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(),'', true );

  // Creamos la variable ajax_url para gestionar AJAX
  wp_localize_script( 'main', 'wp', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );


  // IMPORTANT! wp_localize_script() MUST be called after the script has been registered using wp_register_script() or wp_enqueue_script().
  //wp_enqueue_script( 'ajax-script' );

}


