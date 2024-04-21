<?php

namespace app\Contents;
use app\Acf\Fields;

class ContentTemplateCustom extends Fields
{
  public function localize_template_custom( $script_name, $object_name ) 
  {
    wp_localize_script( $script_name, $object_name, [ 
      'idSection_1' => $this->get_protected_group1_template_custom()['id_section_1'],
      'idSection_2' => $this->get_protected_group1_template_custom()['id_section_2'],
      'idSection_3' => $this->get_protected_group1_template_custom()['id_section_3'],
      'ppSection_1' => $this->get_protected_group1_template_custom()['pp_section_1'],
      'ppSection_2' => $this->get_protected_group1_template_custom()['pp_section_2'],
      'ppSection_3' => $this->get_protected_group1_template_custom()['pp_section_3'],
      'nonce'       => wp_create_nonce( 'wp_rest' )
    ]);
  }
}
