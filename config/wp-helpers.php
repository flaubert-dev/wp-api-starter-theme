<?php

add_filter( 'excerpt_length', 'card_excerpt_length' );
add_filter( 'excerpt_more', 'card_excerpt_more' );
add_filter( 'the_title', 'card_title_limit' );
add_action( 'init', 'remove_emojis_tinymce' );
add_filter( 'get_the_archive_title', 'remove_title_prefix' );

function card_excerpt_length( $length ) 
{
  // Return up to 15 words for any abstract
  return 15;
}

function card_excerpt_more( $more ) 
{
  // Any abstract will have a sequence ...
  return '...';
}

function card_title_limit( $title ) 
{
  $limit     = 10;
  $num_words = str_word_count( $title );

  if ( $num_words > $limit && !is_singular() ) {
    $words         = explode( " ", $title );
    $words_limits  = array_slice( $words, 0, $limit );
    $title_limit   = implode( " ", $words_limits );
    $title_limit  .= "...";

    return $title_limit;
  }

  return $title;
}

function remove_emojis_tinymce() 
{
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

  if ( !is_user_logged_in() ) {
    add_filter( 'tiny_mce_plugins', 'get_remove_emojis_tinymce' );
  }
}

function remove_title_prefix( $title ) 
{
  // Remove the "Category:" prefix on the category page
  if( is_category() ) { 
    $title = single_cat_title( '', false ); 
  }

  // Remove the "Author:" prefix on the author page
  if( is_author() ) { 
    $title = get_the_author(); 
  } 
  
  return $title;
}
