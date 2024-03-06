<?php // https://www.advancedcustomfields.com/resources/get_field/

namespace App\Acf;

class Fields
{
  public function get_public_group_1()
  {
    return [
      'title' => get_field( 'the_text' ) ? get_field( 'the_text' ) : '',
    ];
  }

  protected function get_protected_group_1()
  {
    return [
      'id'      => get_field( 'id' ) ? get_field( 'id' ) : '',
      'perPage' => get_field( 'per_page' ) ? get_field( 'per_page' ) : '',
    ];
  }
}
