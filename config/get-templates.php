<?php

use app\Templates\Category;
use app\Templates\TemplateWpApiExampleUsingJS;

add_action( 'init', 'category' );
add_action( 'acf/init', 'template_wp_api_example_using_js' );

function category()
{
  $category = new Category;
  return is_category() ? $category : null;
}

function template_wp_api_example_using_js()
{
  $templateWpApiExampleUsingJS = new TemplateWpApiExampleUsingJS;
  $acfExists                   = class_exists('ACF') != false;
  
  return $acfExists && is_page_template('template-wp-api-example-using-JS.php') ? $templateWpApiExampleUsingJS : null;
}
