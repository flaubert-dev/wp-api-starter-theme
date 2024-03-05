<?php

namespace App\ContentTemplates\TemplateCustom;
use App\Acf\FieldsAcfGroups;

class Content extends FieldsAcfGroups
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
