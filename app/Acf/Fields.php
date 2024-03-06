<?php // https://www.advancedcustomfields.com/resources/get_field/

namespace App\Acf;

class Fields
{
  public function get_public_group_1()
  {
    return [
      'title' => get_field( 'group_1_the_text' ) ? get_field( 'group_1_the_text' ) : '',
    ];
  }

  protected function get_protected_group_1()
  {
    return [
      'id'      => get_field( 'group_1_id' ) ? get_field( 'group_1_id' ) : '',
      'perPage' => get_field( 'group_1_per_page' ) ? get_field( 'group_1_per_page' ) : '',
    ];
  }
}
