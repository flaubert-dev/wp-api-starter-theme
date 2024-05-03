<?php

function dd( $dump )
{
  echo '<pre style="background: #f9f9f9; border: 1px solid #ddd; margin-bottom: 20px; padding: 10px;">';
  
  echo var_dump( $dump );
  
  echo '</pre>';
}

function printd( $print )
{
  echo '<pre style="background: #f9f9f9; border: 1px solid #ddd; margin-bottom: 20px; padding: 10px;">';
  
  echo print_r( $print );
  
  echo '</pre>';
}
