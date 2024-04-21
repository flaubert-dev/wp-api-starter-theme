<?php

add_action( 'after_setup_theme', 'get_the_wp_support' );

function get_the_wp_support() 
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
