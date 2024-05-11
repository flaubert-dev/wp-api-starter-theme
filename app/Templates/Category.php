<?php

namespace app\Templates;

class Category
{
  public function cat_wp_api( $get_queried_object_term_id, $script_name, $object_name ) 
  {
    wp_localize_script( $script_name, $object_name, [
      'id'      => $get_queried_object_term_id,
      'perPage' => 6,
      'nonce'   => wp_create_nonce( 'wp_rest' ),
    ]);
  }
}
