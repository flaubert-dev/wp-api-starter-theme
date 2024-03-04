<?php

use App\Acf\RegisterAcfGroup;
use App\Acf\FieldsAcfGroup;

$fieldGroupTemplateCustom = new RegisterAcfGroup( 'example' );

if ( $fieldGroupTemplateCustom ) {
  function get_acf_fields() {
    $acf_fields = new FieldsAcfGroup;

    return $acf_fields;
  }
}
