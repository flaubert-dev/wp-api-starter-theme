<?php

add_action( 'wp_enqueue_scripts', 'get_styles' );

function get_styles() 
{
  $dev_version = rand(0, 999);

  if ( is_user_logged_in() ) {
    wp_enqueue_style( 'styles', get_stylesheet_uri(), [], $dev_version, false );
  }
  
  else {
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/style.min.css', [], wp_get_theme()->get( 'Version' ), false );
  }
}
