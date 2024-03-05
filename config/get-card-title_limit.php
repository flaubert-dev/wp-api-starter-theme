<?php

function get_card_title_limit( $title ) {
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

add_filter( 'the_title', 'get_card_title_limit' );
