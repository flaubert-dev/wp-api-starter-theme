<?php // https://www.advancedcustomfields.com/resources/register-fields-via-php/

namespace App\Acf;

class RegisterAcfGroups
{
  public function __construct()
  {
    $group_1 = 'group-1';

    acf_add_local_field_group([
      'key'      => $group_1,
      'title'    => 'Example custom loop & text',
      'location' => [[[
        'param'    => 'post_template',
        'operator' => '==',
        'value'    => 'template-custom.php',
      ]]],
    ]);

    acf_add_local_field([
      'key'          => 'id',
      'label'        => 'Category ID',
      'name'         => 'id',
      'type'         => 'text',
      'instructions' => 'Enter the category ID',
      'required'     => 0,
      'parent'       => $group_1,
      'wrapper'      => [
        'width' => '',
        'class' => '',
        'id'    => '',
      ],
      'default_value' => '',
      'placeholder'   => '',
      'prepend'       => '',
      'append'        => '',
      'maxlength'     => '',
    ]);

    acf_add_local_field([
      'key'          => 'perPage',
      'label'        => 'Posts per page',
      'name'         => 'perPage',
      'type'         => 'text',
      'instructions' => 'Enter the number',
      'required'     => 0,
      'parent'       => $group_1,
      'wrapper'      => [
        'width' => '',
        'class' => '',
        'id'    => '',
      ],
      'default_value' => '',
      'placeholder'   => '',
      'prepend'       => '',
      'append'        => '',
      'maxlength'     => '',
    ]);

    acf_add_local_field([
      'key'          => 'theText',
      'label'        => 'Test text',
      'name'         => 'theText',
      'type'         => 'text',
      'instructions' => 'Enter the text',
      'required'     => 0,
      'parent'       => $group_1,
      'wrapper'      => [
        'width' => '',
        'class' => '',
        'id'    => '',
      ],
      'default_value' => '',
      'placeholder'   => '',
      'prepend'       => '',
      'append'        => '',
      'maxlength'     => '',
    ]);
  }
}
