<?php

add_action( 'after_setup_theme', 'wp_support' );

function wp_support() 
{
  add_theme_support( 'title-tag' );
  
  add_theme_support( 'post-thumbnails' );

  add_theme_support( 
    'html5', [
    'comment-list', 
    'comment-form', 
    'search-form', 
    'gallery', 
    'caption', 
    'style', 
    'script'
  ]);
}
