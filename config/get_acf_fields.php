<?php

use App\Acf\Fields;

function get_acf_fields() {
  $fields = new Fields;

  return $fields;
}

add_action( 'acf/init', 'get_acf_fields' );
