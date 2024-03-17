<?php // https://www.advancedcustomfields.com/resources/get_field/

namespace App\Acf;

class Fields
{
  public function get_public_group1_template_custom()
  { // PUBLIC group 1: template-custom.php
    return [
      'title' => get_field( 'group_1_the_title' ) ? get_field( 'group_1_the_title' ) : '',
    ];
  }

  protected function get_protected_group1_template_custom()
  { // PROTECTED group 1: template-custom.php
    return [
      'id_section_1' => get_field( 'group_1_id_1' ) ? get_field( 'group_1_id_1' ) : '',
      'id_section_2' => get_field( 'group_1_id_2' ) ? get_field( 'group_1_id_2' ) : '',
      'id_section_3' => get_field( 'group_1_id_3' ) ? get_field( 'group_1_id_3' ) : '',
      'pp_section_1' => get_field( 'group_1_per_page_1' ) ? get_field( 'group_1_per_page_1' ) : '',
      'pp_section_2' => get_field( 'group_1_per_page_2' ) ? get_field( 'group_1_per_page_2' ) : '',
      'pp_section_3' => get_field( 'group_1_per_page_3' ) ? get_field( 'group_1_per_page_3' ) : '',
    ];
  }
}
