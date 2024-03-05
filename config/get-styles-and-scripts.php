<?php

use App\Contents\ContentCategory;
use App\ContentTemplates\TemplateCustom\Content;

function get_styles_and_scripts() {
  wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ), false );

  if ( is_home() && !is_category() && !is_page_template( 'template-custom.php' ) ) {
    wp_enqueue_script( 'content-index', get_template_directory_uri() . '/resources/scripts/content-index.js', [], '1.0.0', true );
  }

  if ( is_category() ) {
    wp_enqueue_script( 'content-category', get_template_directory_uri() . '/resources/scripts/content-category.js', ['wp-api'], '1.0.0', true );

    $content_category = new ContentCategory( get_queried_object()->term_id );
    
    $content_category->localize_script_content_category( 'content-category', 'category' );
  }

  if ( is_page_template( 'template-custom.php' ) && class_exists( 'ACF' ) ) {
    wp_enqueue_script( 'content-template-custom', get_template_directory_uri() . '/resources/scripts/contentTemplates/templateCustom/content-template-custom.js', ['wp-api'], '1.0.0', true );

    $content_custom = new Content;

    $content_custom->localize_template_custom( 'content-template-custom', 'contentCustom' );
  }
}

add_action( 'wp_enqueue_scripts', 'get_styles_and_scripts' );
