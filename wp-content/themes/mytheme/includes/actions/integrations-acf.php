<?php

add_action('admin_menu', 'meetup_admin_menu' );

function meetup_admin_menu() {
  
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title' 	=> 'Theme General Settings',
      'menu_title'	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
      'page_title' 	=> 'Theme Settings',
      'menu_title'	=> 'Metrics',
      'parent_slug'	=> 'theme-general-settings',
    ));

  }

}

add_action('acf/init', 'meetup_settings_metrics' );

function meetup_settings_metrics() {

  acf_add_local_field_group(array(
    'key' => 'group_5a2fce188e4da',
    'title' => 'Metrics',
    'fields' => array(
      array(
        'key' => 'field_5a2fce279b931',
        'label' => 'Header Scripts',
        'name' => 'metrics_head',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-metrics',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));

}

add_action('wp_head', 'meetup_wphead_metrics', 100 );

function meetup_wphead_metrics() {
  
  if ( get_field('metrics_head', 'options' ) ) {
    the_field('metrics_head', 'options' );
  }
}