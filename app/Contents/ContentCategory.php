<?php

namespace App\Contents;

class ContentCategory
{
  private $term_id;
  private $per_page;
  private $nonce;

  public function __construct( $get_queried_object_term_id ) 
  {
    $this->term_id  = $get_queried_object_term_id;
    $this->per_page = 6;
    $this->nonce    = wp_create_nonce( 'wp_rest' );
  }

  public function localize_script_content_category( $script_name, $object_name ) 
  {
    wp_localize_script( $script_name, $object_name, [
      'id'      => $this->term_id,
      'perPage' => $this->per_page,
      'nonce'   => $this->nonce
    ]);
  }
}
