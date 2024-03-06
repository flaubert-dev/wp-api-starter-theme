<?php

namespace App\Contents;

class ContentCategory
{
  private $term_id;

  public function __construct( $get_queried_object_term_id ) 
  {
    $this->term_id  = $get_queried_object_term_id;
  }

  public function localize_script_content_category( $script_name, $object_name ) 
  {
    wp_localize_script( $script_name, $object_name, [
      'id'      => $this->term_id,
      'perPage' => 6,
      'nonce'   => wp_create_nonce( 'wp_rest' ),
    ]);
  }
}
