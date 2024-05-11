<?php

use app\Templates\Category;
use app\Templates\TemplateWpApiExample;

add_action( 'init', 'category' );
add_action( 'acf/init', 'template_wp_api_example' );

function category()
{
  $category = new Category;
  return is_category() ? $category : null;
}

function template_wp_api_example()
{
  $templateWpApiExample = new TemplateWpApiExample;
  $acfExists            = class_exists('ACF') != false;
  return $acfExists && is_page_template('template-wp-api-example.php') ? $templateWpApiExample : null;
}
