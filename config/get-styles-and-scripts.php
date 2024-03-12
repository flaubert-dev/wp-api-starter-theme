<?php

use App\Contents\ContentCategory;
use App\Contents\ContentTemplateCustom;

function get_styles_and_scripts() {
  // Development: npm run css:watch
  wp_enqueue_style( 'styles', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ), false );

  // Production: npm run css:minify
  // wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/style.min.css', [], wp_get_theme()->get( 'Version' ), false ); 

  if ( is_home() && !is_page_template( 'template-custom.php' ) || is_author() && !is_category() )  {
    // Development
    wp_enqueue_script( 'content-index', get_template_directory_uri() . '/resources/scripts/content-index.js', [], wp_get_theme()->get( 'Version' ), true );

    // Production: npm run js:minify
    // wp_enqueue_script( 'app', get_template_directory_uri() . '/resources/scripts/app.min.js', [], wp_get_theme()->get( 'Version' ), true );
  }

  if ( is_category() ) {
    // Development
    wp_enqueue_script( 'content-category', get_template_directory_uri() . '/resources/scripts/content-category.js', ['wp-api'], wp_get_theme()->get( 'Version' ), true );

    // Production: npm run js:minify
    // wp_enqueue_script( 'app', get_template_directory_uri() . '/resources/scripts/app.min.js', ['wp-api'], wp_get_theme()->get( 'Version' ), true );

    $content_category = new ContentCategory( get_queried_object()->term_id );
    
    // Development
    $content_category->localize_script_content_category( 'content-category', 'category' );

    // Production
    // $content_category->localize_script_content_category( 'app', 'category' );
  }

  if ( is_page_template( 'template-custom.php' ) && class_exists( 'ACF' ) ) {
    // Development
    wp_enqueue_script( 'content-template-custom', get_template_directory_uri() . '/resources/scripts/content-template-custom.js', ['wp-api'], wp_get_theme()->get( 'Version' ), true );

    // Production: npm run js:minify
    // wp_enqueue_script( 'app', get_template_directory_uri() . '/resources/scripts/app.min.js', ['wp-api'], wp_get_theme()->get( 'Version' ), true );

    $content_custom = new ContentTemplateCustom;

    // Development
    $content_custom->localize_template_custom( 'content-template-custom', 'contentCustom' );

    // Production
    // $content_custom->localize_template_custom( 'app', 'contentCustom' );
  }
}

add_action( 'wp_enqueue_scripts', 'get_styles_and_scripts' );
