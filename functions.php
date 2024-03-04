<?php

// ============ composer autoload

require_once get_template_directory() . '/vendor/autoload.php';
require_once get_template_directory() . '/config/get-card-excerpt-length.php';
require_once get_template_directory() . '/config/get-card-excerpt-more.php';
require_once get_template_directory() . '/config/get-card-title_limit.php';
require_once get_template_directory() . '/config/get-remove-emojis-tinymce.php';
require_once get_template_directory() . '/config/get-remove-title-prefix.php';
require_once get_template_directory() . '/config/get-styles-scripts.php';
require_once get_template_directory() . '/config/get-wp-support.php';

// ============ actions & filters

add_action( 'wp_enqueue_scripts', 'styles_and_scripts' );
add_filter( 'the_title', 'card_title_limit' );
add_filter( 'excerpt_length', 'card_excerpt_length' );
add_filter( 'excerpt_more', 'card_excerpt_more' );
add_filter( 'get_the_archive_title', 'remove_title_prefix' );
add_action( 'init', 'remove_emojis_tinymce' );
add_action( 'after_setup_theme', 'the_wp_support' );

if ( class_exists( 'ACF' ) ) {
  require_once get_template_directory() . '/config/get-template-custom-fields.php';
  add_action( 'admin_init', 'get_acf_fields' );
}
