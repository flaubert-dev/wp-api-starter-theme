<?php

add_filter( 'excerpt_length', 'get_card_excerpt_length' );

function get_card_excerpt_length( $length ) 
{
  // Return up to 15 words for any abstract
  return 15;
}
