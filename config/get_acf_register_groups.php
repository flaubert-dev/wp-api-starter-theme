<?php

use App\Acf\RegisterAcfGroups;

function get_acf_register_groups() {
  $acf_register_groups = new RegisterAcfGroups();

  return $acf_register_groups;
}

add_action( 'acf/init', 'get_acf_register_groups' );
