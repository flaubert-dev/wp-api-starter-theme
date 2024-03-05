<?php

use App\Acf\FieldsAcfGroups;

function get_acf_fields() {
  $acf_fields = new FieldsAcfGroups;

  return $acf_fields;
}

add_action( 'acf/init', 'get_acf_fields' );
