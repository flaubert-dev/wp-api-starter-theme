<?php // Reference: https://www.advancedcustomfields.com/resources/get_field/

namespace app\Templates;

class TemplateWpQueryExampleUsingPHP
{
  public function field()
  {
    return [
      'title'      => get_field( 'field_664146c44ea23' ) ?? null,
      'catID'      => get_field( 'field_664146c452bbc' ) ?? null,
      'stickyPost' => get_field( 'field_664149557e77b' ) ?? true,
      'perPage'    => get_field( 'field_664154492ec64' ) ?? 3,
    ];
  }
}
