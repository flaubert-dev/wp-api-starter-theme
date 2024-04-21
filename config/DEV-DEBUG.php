<?php

function dd( $dump )
{
  echo '<pre style="background-color: #f9f9f9; border: 1px solid #ddd; padding: 10px;">';
  
  echo var_dump( $dump );
  
  echo '</pre>';
  
  die();
}

function printd( $print )
{
  echo '<pre style="background-color: #f9f9f9; border: 1px solid #ddd; padding: 10px;">';
  
  echo print_r( $print );
  
  echo '</pre>';
  
  die();
}
