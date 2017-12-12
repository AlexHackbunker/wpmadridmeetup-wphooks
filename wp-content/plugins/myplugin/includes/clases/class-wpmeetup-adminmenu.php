<?php
/**
 * WPHack_Admin_Menu
 *
 * Setups theme admin theme
 *
 * @class       WPHack_Admin_Menu
 * @version     2.3.0
 * @package     _framework
 * @category    Class
 * @author      Alejandro Sevilla
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * WPHack_Admin_Menu Class
 */
class WPHack_Admin_Menu {

  /**
   * Hook in methods.
   */
  public static function init() {
  
   add_action( 'admin_menu', array( __CLASS__, 'admin_menus_by_role' ), 99 );
  } 

  public static function admin_menus_by_role() {
    global $current_user;

    // Ocultmos para los editores todos los menus que no necesita
    if ( empty( $current_user->roles ) || in_array( 'editor', $current_user->roles ) ) {
        
      remove_menu_page( 'edit.php' );              
      remove_menu_page( 'upload.php' );             

      remove_menu_page( 'edit-comments.php' );       
      remove_menu_page( 'tools.php' );              

    }
    
  } 
}

WPHack_Admin_Menu::init();