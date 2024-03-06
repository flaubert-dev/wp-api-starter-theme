<?php // https://www.advancedcustomfields.com/resources/register-fields-via-php/

namespace App\Acf;

class RegisterGroups
{
  public function __construct()
  {
    $group_1 = 'group_1_';

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
      'key'          => $group_1 . 'id',
      'label'        => 'Category ID',
      'name'         => $group_1 . 'id',
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
      'key'          => $group_1 . 'per_page',
      'label'        => 'Posts per page',
      'name'         => $group_1 . 'per_page',
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
      'key'          => $group_1 . 'the_text',
      'label'        => 'Test text',
      'name'         => $group_1 . 'the_text',
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
