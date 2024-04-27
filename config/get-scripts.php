<?php

use app\Contents\ContentCategory;
use app\Contents\ContentTemplateCustom;

add_action( 'wp_enqueue_scripts', 'get_scripts' );

function get_scripts() 
{
  $random  = rand(0, 999);
  $package = current_user_can( 'administrator' ) ? '' : 'minified/';
  $script  = current_user_can( 'administrator' ) ? '.js' : '.min.js';
  $version = current_user_can( 'administrator' ) ? $random : wp_get_theme()->get( 'Version' );
 
  switch ( true ) {
    case is_category():

      wp_enqueue_script( 'content-category', get_template_directory_uri() . '/resources/scripts/' . $package . 'content-category' . $script, ['wp-api'], $version, true );

      $content_category = new ContentCategory( get_queried_object()->term_id );
      $content_category->localize_script_content_category( 'content-category', 'category' );

    break;
  
    case is_page_template( 'template-custom.php' ) && class_exists( 'ACF' ):

      wp_enqueue_script( 'content-template-custom', get_template_directory_uri() . '/resources/scripts/' . $package . 'content-template-custom' . $script, ['wp-api'], $version, true );

      $content_custom = new ContentTemplateCustom;
      $content_custom->localize_template_custom( 'content-template-custom', 'contentCustom' );

    break;
  
    default:
      wp_enqueue_script( 'content-index', get_template_directory_uri() . '/resources/scripts/' . $package . 'content-index' . $script, [], $version, true );
  }
}
