<?php

use App\Acf\RegisterGroups;

function get_acf_register_groups() {
  $register_groups = new RegisterGroups();

  return $register_groups;
}

add_action( 'acf/init', 'get_acf_register_groups' );
