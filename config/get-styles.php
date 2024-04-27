<?php

add_action( 'wp_enqueue_scripts', 'get_styles' );
add_action( 'wp_enqueue_scripts', 'rm_styles_block_library', 100 );

function rm_styles_block_library() 
{
  if ( !is_singular() || is_page() ) :
    wp_dequeue_style( 'wp-block-library' );
  endif;
}

function get_styles() 
{
  $random = rand(0, 999);

  if ( current_user_can( 'administrator' ) ) {
    wp_enqueue_style( 'styles', get_stylesheet_uri(), [], $random, false );
  }
  
  else {
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/style.min.css', [], wp_get_theme()->get( 'Version' ), false );
  }
}
