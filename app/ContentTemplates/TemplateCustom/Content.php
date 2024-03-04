<?php

namespace App\ContentTemplates\TemplateCustom;
use App\Acf\FieldsAcfGroup;

if ( class_exists( 'ACF' ) ) {
  class Content extends FieldsAcfGroup
  {
    public function localize_template_custom( $script_name, $object_name ) 
    {
      wp_localize_script( $script_name, $object_name, [
        'id'      => $this->get_first_field(),
        'perPage' => $this->get_second_field(),
        'nonce'   => wp_create_nonce( 'wp_rest' )
      ]);
    }
  }
}
