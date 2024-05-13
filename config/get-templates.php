<?php

use app\Templates\Category;
use app\Templates\TemplateWpApiExampleUsingJS;
use app\Templates\TemplateWpQueryExampleUsingPHP;

add_action( 'init', 'category' );
add_action( 'acf/init', 'template_wp_api' );
add_action( 'acf/init', 'template_wp_query' );

function category()
{
  $category = new Category;

  return is_category() ? $category : null;
}

function template_wp_api()
{
  $templateWpApiExampleUsingJS = new TemplateWpApiExampleUsingJS;
  $template                    = is_page_template( 'template-wp-api-example-using-JS.php' );
  $acfExists                   = class_exists('ACF') != false;
  
  return $acfExists && $template ? $templateWpApiExampleUsingJS : null;
}

function template_wp_query()
{
  $templateWpQueryExampleUsingPHP = new TemplateWpQueryExampleUsingPHP;
  $fields                         = $templateWpQueryExampleUsingPHP->field();
  $template                       = is_page_template( 'template-wp-query-example-using-PHP.php' );
  $acfExists                      = class_exists('ACF') != false;
  
  return $acfExists && $template ? $fields : null;
}
