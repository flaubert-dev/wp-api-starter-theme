<?php

function get_card_excerpt_more( $more ) {
  // Any abstract will have a sequence ...
  return '...';
}

add_filter( 'excerpt_more', 'get_card_excerpt_more' );
