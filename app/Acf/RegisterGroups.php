<?php // https://www.advancedcustomfields.com/resources/register-fields-via-php/

namespace app\Acf;

class RegisterGroups
{
  public function __construct()
  {
    $group_1 = 'group_1_';

    // GROUP 1
    acf_add_local_field_group([
      'key'      => $group_1,
      'title'    => 'Group 1: Example',
      'location' => [[[
        'param'    => 'post_template',
        'operator' => '==',
        'value'    => 'template-custom.php',
      ]]],

      'fields' => [
        [ // (GROUP 1) TAB 1
          'key'       => $group_1 . 'tab_1',
          'label'     => 'Page title',
          'name'      => 'tab_1',
          'type'      => 'tab',
          'placement' => 'left',
        ],

        [ // (GROUP 1) TAB 1: Field 1
          'key'          => $group_1 . 'the_title',
          'label'        => 'Title',
          'name'         => 'the_title_tab_1',
          'type'         => 'text',
          'instructions' => 'Enter the title',
          'required'     => 0,
          'parent'       => $group_1,
        ],

        [ // (GROUP 1) TAB 2
          'key'       => $group_1 . 'tab_2',
          'label'     => 'Category ID',
          'name'      => 'tab_2',
          'type'      => 'tab',
          'placement' => 'left',
        ],

        [ // (GROUP 1) TAB 2: Field 1
          'key'          => $group_1 . 'id_1',
          'label'        => 'Section 1',
          'name'         => 'category_id_1_tab_2',
          'type'         => 'text',
          'instructions' => 'Enter the category ID',
          'required'     => 0,
          'parent'       => $group_1,
        ],

        [ // (GROUP 1) TAB 2: Field 2
          'key'          => $group_1 . 'id_2',
          'label'        => 'Section 2',
          'name'         => 'category_id_2_tab_2',
          'type'         => 'text',
          'instructions' => 'Enter the category ID',
          'required'     => 0,
          'parent'       => $group_1,
        ],

        [ // (GROUP 1) TAB 2: Field 3
          'key'          => $group_1 . 'id_3',
          'label'        => 'Section 3',
          'name'         => 'category_id_3_tab_2',
          'type'         => 'text',
          'instructions' => 'Enter the category ID',
          'required'     => 0,
          'parent'       => $group_1,
        ],

        [ // (GROUP 1) TAB 3
          'key'       => $group_1 . 'tab_3',
          'label'     => 'Posts per page',
          'name'      => 'tab_3',
          'type'      => 'tab',
          'placement' => 'left',
        ],

        [ // (GROUP 1) TAB 3: Field 1
          'key'          => $group_1 . 'per_page_1',
          'label'        => 'Section 1',
          'name'         => 'posts_per_page_1_tab_3',
          'type'         => 'text',
          'instructions' => 'Enter the number of posts in this first section',
          'required'     => 0,
          'parent'       => $group_1,
        ],

        [ // (GROUP 1) TAB 3: Field 2
          'key'          => $group_1 . 'per_page_2',
          'label'        => 'Section 2',
          'name'         => 'posts_per_page_2_tab_3',
          'type'         => 'text',
          'instructions' => 'Enter the number of posts in this second section',
          'required'     => 0,
          'parent'       => $group_1,
        ],

        [ // (GROUP 1) TAB 3: Field 3
          'key'          => $group_1 . 'per_page_3',
          'label'        => 'Section 3',
          'name'         => 'posts_per_page_3_tab_3',
          'type'         => 'text',
          'instructions' => 'Enter the number of posts in this third section',
          'required'     => 0,
          'parent'       => $group_1,
        ],
      ],
    ]);
  }
}
