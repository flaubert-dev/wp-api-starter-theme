<?php

add_action( 'wp_enqueue_scripts', 'get_styles' );

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
