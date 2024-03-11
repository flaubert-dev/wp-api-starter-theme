<?php

use App\Contents\ContentCategory;
use App\Contents\ContentTemplateCustom;

function get_styles_and_scripts() {
  wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/style.min.css', [], wp_get_theme()->get( 'Version' ), false );

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

add_action( 'wp_enqueue_scripts', 'get_styles_and_scripts' );
