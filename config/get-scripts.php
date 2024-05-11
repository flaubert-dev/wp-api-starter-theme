<?php

add_action( 'wp_enqueue_scripts', 'get_scripts' );

function get_scripts() 
{
  $random  = rand(0, 999);
  $package = current_user_can( 'administrator' ) ? '' : 'minified/';
  $script  = current_user_can( 'administrator' ) ? '.js' : '.min.js';
  $version = current_user_can( 'administrator' ) ? $random : wp_get_theme()->get( 'Version' );

  if ( is_category() ) {
    wp_enqueue_script( 'template-part-category', get_template_directory_uri() . '/resources/scripts/' . $package . 'template-part-category' . $script, ['wp-api'], $version, true );
    category()->cat_wp_api( get_queried_object()->term_id, 'template-part-category', 'category' );
  }
  
  else if ( is_page_template( 'template-wp-api-example.php' ) && class_exists( 'ACF' ) ) {
    wp_enqueue_script( 'template-wp-api-example', get_template_directory_uri() . '/resources/scripts/' . $package . 'template-wp-api-example' . $script, ['wp-api'], $version, true );
    template_wp_api_example()->fields_wp_api( 'template-wp-api-example', 'objExample' );
  }

  else {
    wp_enqueue_script( 'template-part-index', get_template_directory_uri() . '/resources/scripts/' . $package . 'template-part-index' . $script, [], $version, true );
  }
}
