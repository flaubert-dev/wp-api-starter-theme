<?php // https://www.advancedcustomfields.com/resources/register-fields-via-php/

namespace App\Acf;

class RegisterAcfGroup
{
  public function __construct( $name )
  {
    $prefix = 'app_';

    acf_add_local_field_group([
      'key'      => $prefix . $name,
      'title'    => 'Example custom loop & text',
      'location' => [
        [
          [
            'param'    => 'post_template',
            'operator' => '==',
            'value'    => 'template-custom.php',
          ]
        ]
      ],
      'position'       => 'normal',
      'style'          => 'default',
      'hide_on_screen' => '',
    ]);

    acf_add_local_field([
      'key'          => $prefix . 'id',
      'label'        => 'Category ID',
      'name'         => 'id',
      'type'         => 'text',
      'instructions' => 'Enter the category ID',
      'required'     => 0,
      'parent'       => $prefix . $name,
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
      'key'          => $prefix . 'perPage',
      'label'        => 'Posts per page',
      'name'         => 'perPage',
      'type'         => 'text',
      'instructions' => 'Enter the number',
      'required'     => 0,
      'parent'       => $prefix . $name,
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
      'key'          => $prefix . 'theText',
      'label'        => 'Test text',
      'name'         => 'theText',
      'type'         => 'text',
      'instructions' => 'Enter the text',
      'required'     => 0,
      'parent'       => $prefix . $name,
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
