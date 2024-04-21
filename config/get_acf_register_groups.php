<?php

use app\Acf\RegisterGroups;

add_action( 'acf/init', 'get_acf_register_groups' );

function get_acf_register_groups() 
{
  $register_groups = new RegisterGroups();

  return $register_groups;
}
