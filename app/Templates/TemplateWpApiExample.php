<?php // Reference: https://www.advancedcustomfields.com/resources/get_field/

namespace app\Templates;

class TemplateWpApiExample
{
  public function field()
  {
    return [
      'title' => get_field( 'field_663f8592883b3' ) ?? null,
    ];
  }

  public function fields_wp_api( $script_name, $object_name )
  {
    $catID_1   = get_field( 'field_663f863e624d1' ) ?? null;
    $perPage_1 = get_field( 'field_663f894b7fe68' ) ?? null;

    wp_localize_script($script_name, $object_name, [
      'catID_1'   => $catID_1,
      'perPage_1' => $perPage_1,
      'nonce'     => wp_create_nonce( 'wp_rest' )
    ]);
  }
}
