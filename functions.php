<?php

// Autoload: Composer
require_once get_template_directory() . '/vendor/autoload.php';

// DEV MODE: Debug
require_once get_template_directory() . '/config/DEV-DEBUG.php';

// Styles
require_once get_template_directory() . '/config/get-styles.php';

// Scripts
require_once get_template_directory() . '/config/get-scripts.php';

// ACF: Free version
require_once get_template_directory() . '/config/get_acf_fields.php';
require_once get_template_directory() . '/config/get_acf_register_groups.php';
require_once get_template_directory() . '/config/get_acf_json.php';

// WordPress: Customizer
// This feature will possibly come at some point in the future...

// WordPress: Settings
require_once get_template_directory() . '/config/get-card-excerpt-length.php';
require_once get_template_directory() . '/config/get-card-excerpt-more.php';
require_once get_template_directory() . '/config/get-card-title_limit.php';
require_once get_template_directory() . '/config/get-remove-emojis-tinymce.php';
require_once get_template_directory() . '/config/get-remove-title-prefix.php';
require_once get_template_directory() . '/config/get-wp-support.php';
