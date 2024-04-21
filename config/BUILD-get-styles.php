<?php

add_action( 'wp_enqueue_scripts', 'get_styles' );

function get_styles() 
{
  wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/style.min.css', [], wp_get_theme()->get( 'Version' ), false ); 
}
