<?php

namespace App\Contents;
use App\Acf\Fields;

class ContentTemplateCustom extends Fields
{
  public function localize_template_custom( $script_name, $object_name ) 
  {
    wp_localize_script( $script_name, $object_name, [ 
      'id'      => $this->get_protected_group1_template_custom()['id'],
      'perPage' => $this->get_protected_group1_template_custom()['perPage'],
      'nonce'   => wp_create_nonce( 'wp_rest' )
    ]);
  }
}
