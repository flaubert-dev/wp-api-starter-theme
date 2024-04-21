<?php

add_action( 'wp_enqueue_scripts', 'get_styles' );

function get_styles() 
{
  $dev_version = rand(0, 999);

  wp_enqueue_style( 'styles', get_stylesheet_uri(), [], $dev_version, false );
}
