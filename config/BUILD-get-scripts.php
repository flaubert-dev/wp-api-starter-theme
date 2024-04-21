<?php

use app\Contents\ContentCategory;
use app\Contents\ContentTemplateCustom;

add_action( 'wp_enqueue_scripts', 'get_scripts' );

function get_scripts() 
{
  if ( is_home() && !is_page_template( 'template-custom.php' ) || is_author() && !is_category() )  {
    wp_enqueue_script( 'app', get_template_directory_uri() . '/resources/scripts/app.min.js', [], wp_get_theme()->get( 'Version' ), true );
  }

  if ( is_category() ) {
    wp_enqueue_script( 'app', get_template_directory_uri() . '/resources/scripts/app.min.js', ['wp-api'], wp_get_theme()->get( 'Version' ), true );

    $content_category = new ContentCategory( get_queried_object()->term_id );
    $content_category->localize_script_content_category( 'app', 'category' );
  }

  if ( is_page_template( 'template-custom.php' ) && class_exists( 'ACF' ) ) {
    wp_enqueue_script( 'app', get_template_directory_uri() . '/resources/scripts/app.min.js', ['wp-api'], wp_get_theme()->get( 'Version' ), true );

    $content_custom = new ContentTemplateCustom;
    $content_custom->localize_template_custom( 'app', 'contentCustom' );
  }
}
