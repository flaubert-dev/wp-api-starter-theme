<?php

namespace App\Contents;

class ContentCategory
{
  private $termID;
  private $perPage;
  private $nonce;

  public function __construct( $term_id ) 
  {
    $this->termID  = $term_id;
    $this->perPage = 6;
    $this->nonce   = wp_create_nonce( 'wp_rest' );
  }

  public function localize_script_content_category( $script_name, $object_name ) 
  {
    wp_localize_script( $script_name, $object_name, [
      'id'      => $this->termID,
      'perPage' => $this->perPage,
      'nonce'   => $this->nonce
    ]);
  }
}
