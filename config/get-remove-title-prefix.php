<?php

add_filter( 'get_the_archive_title', 'get_remove_title_prefix' );

function get_remove_title_prefix( $title ) 
{
  // Remove the "Category:" prefix on the category page
  if( is_category() ) { 
    $title = single_cat_title( '', false ); 
  }

  // Remove the "Author:" prefix on the author page
  if( is_author() ) { 
    $title = get_the_author(); 
  } 
  
  return $title;
}
