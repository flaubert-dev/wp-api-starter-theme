<?php 

add_action( 'acf/settings/save_json', 'get_acf_json' );

function get_acf_json()
{
  return get_stylesheet_directory() . '/app/AcfJson';
}
