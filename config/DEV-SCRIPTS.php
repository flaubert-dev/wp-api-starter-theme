<?php

use app\Contents\ContentCategory;
use app\Contents\ContentTemplateCustom;

add_action( 'wp_enqueue_scripts', 'get_scripts' );

function get_scripts() 
{
  $dev_version = rand(0, 999);

  if ( is_home() && !is_page_template( 'template-custom.php' ) || is_author() && !is_category() )  {
    wp_enqueue_script( 'content-index', get_template_directory_uri() . '/resources/scripts/content-index.js', [], $dev_version, true );
  }

  if ( is_category() ) {
    wp_enqueue_script( 'content-category', get_template_directory_uri() . '/resources/scripts/content-category.js', ['wp-api'], $dev_version, true );

    $content_category = new ContentCategory( get_queried_object()->term_id );
    $content_category->localize_script_content_category( 'content-category', 'category' );
  }

  if ( is_page_template( 'template-custom.php' ) && class_exists( 'ACF' ) ) {
    wp_enqueue_script( 'content-template-custom', get_template_directory_uri() . '/resources/scripts/content-template-custom.js', ['wp-api'], $dev_version, true );

    $content_custom = new ContentTemplateCustom;
    $content_custom->localize_template_custom( 'content-template-custom', 'contentCustom' );
  }
}
