<?php

use app\Acf\Fields;

add_action( 'acf/init', 'get_acf_fields' );

function get_acf_fields() 
{
  $fields = new Fields;

  return $fields;
}
