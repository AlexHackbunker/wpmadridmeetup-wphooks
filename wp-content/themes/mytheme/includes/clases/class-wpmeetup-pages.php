<?php
/**
 * Handle WPMeetup_Page
 *
 * @class       WPHack_Page
 * @version     1.0.0
 * @package
 * @category    Class
 * @author      Actycrea
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * WPMeetup_Page Class
 */
class WPMeetup_Page {

  /**
   * Constructor
   */
  public function __construct() {
    
    // actions
    add_action( 'init', array( $this, 'init' ) );
    add_action( 'manage_pages_custom_column', array( $this, 'manage_pages_custom_column' ) , 10, 2 );

    // filters
    add_filter( 'manage_pages_columns', array( $this, 'manage_pages_columns' ), 99 );

  }  

  /**
   *
   */
  public function init( $atts ) {

    remove_post_type_support( 'page', 'comments' );
    remove_post_type_support( 'page', 'custom-fields' );
    remove_post_type_support( 'page', 'post-formats' );
    remove_post_type_support( 'page', 'trackbacks' );
    remove_post_type_support( 'page', 'author' );
    remove_post_type_support( 'page', 'excerpt' );

  }

  /**
   *
   */
  function manage_pages_columns( $columns ) {

    $columns['menu_order'] = __('Menu Order' , 'wphack' ); 
    $columns['slug']       = __('Slug' , 'wphack' ); 
    $columns['template']   = __('Template' , 'wphack' ); 
    
    return $columns;
  }

/**
  *
  */
  function manage_pages_custom_column( $column_name, $post_id ) {

    global $wpdb, $post;

    if ( 'menu_order' == $column_name ) {
      echo $post->menu_order ;
    }

    if ( 'template' == $column_name ) {
      echo get_post_meta( $post->ID, '_wp_page_template', true )  ;
    }

    if ( 'slug' == $column_name ) {
      echo str_replace( SITE_URL, "", get_permalink( $post->ID ) );
    }
  }

} // class

new WPMeetup_Page();