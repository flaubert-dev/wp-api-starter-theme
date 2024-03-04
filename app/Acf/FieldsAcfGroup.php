<?php // https://www.advancedcustomfields.com/resources/get_field/

namespace App\Acf;

class FieldsAcfGroup
{
  public function get_first_field()
  {
    $id = get_field( 'id' );

    return $id ? $id : 'Category ID is not populated or does not exist';
  }

  public function get_second_field()
  {
    $perPage = get_field( 'perPage' );

    return $perPage ? $perPage : 'Posts per page is not populated or does not exist';
  }

  public function get_third_field()
  {
    $theText = get_field( 'theText' );

    return $theText ? $theText : 'You do not include a test text';
  }
}
