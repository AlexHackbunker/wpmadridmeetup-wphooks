<?php
/*
Plugin Name: Hello WP Madrid Meetup
Plugin URI: http://actycrea.com
Description: Code is poetry
Author: Alejandro Sevilla
Version: 1.0
Author URI: http://actycrea.com
*/


// TOOLS ( Must have )
require_once( 'includes/tools/debug.php' );

// 1. action => init
require_once( 'includes/actions/register-post-types.php' );

// 2. action => enqueue
require_once( 'includes/actions/enqueue-scripts.php' );

// 3. action => admin-post
require_once( 'includes/actions/form-handler.php' );

// 4. action => admin-ajax
require_once( 'includes/actions/ajax-handler.php' );

// 5. action => template-redirect
require_once( 'includes/actions/template-redirect.php' );

// 6. action => template-redirect
require_once( 'includes/actions/pre-get-posts.php' );

/***************************  FILTERS  *******************************/

// 7. --> Body class
require_once( 'includes/filters/body-class.php' );

// 8.- Filter -> 
require_once( 'includes/filters/wp-terms.php' );

// 9.- Footer ->
require_once( 'includes/filters/wp-footer.php' );

/****************    INTEGRACIONES CON TERCEROS    **********************/

// 10.- action => wp-head, acf/init
require_once( 'includes/actions/integrations-acf.php' );


/****************************** BONUS - CLASES  ********************************/

// Estática
require_once( 'includes/clases/class-wpmeetup-adminmenu.php' );

// Instancia
require_once( 'includes/clases/class-wpmeetup-pages.php' );