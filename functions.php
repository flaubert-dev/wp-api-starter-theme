<?php

// Autoload: Composer
require_once get_template_directory() . '/vendor/autoload.php';

// DEV: Styles and Scripts (comment after npm run build)
require_once get_template_directory() . '/config/get-styles-and-scripts-DEV.php';

// BUILD: Styles and Scripts (uncomment after npm run build)
// require_once get_template_directory() . '/config/get-styles-and-scripts-BUILD.php';

// ACF: Free version
require_once get_template_directory() . '/config/get_acf_fields.php';
require_once get_template_directory() . '/config/get_acf_register_groups.php';

// WordPress: Settings
require_once get_template_directory() . '/config/get-card-excerpt-length.php';
require_once get_template_directory() . '/config/get-card-excerpt-more.php';
require_once get_template_directory() . '/config/get-card-title_limit.php';
require_once get_template_directory() . '/config/get-remove-emojis-tinymce.php';
require_once get_template_directory() . '/config/get-remove-title-prefix.php';
require_once get_template_directory() . '/config/get-wp-support.php';
