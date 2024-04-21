<?php

// Autoload: Composer
require_once get_template_directory() . '/vendor/autoload.php';

// (!!!) Please, uncomment the two lines below after running the command: npm run build (!!!)
// require_once get_template_directory() . '/config/BUILD-get-styles.php';
// require_once get_template_directory() . '/config/BUILD-get-scripts.php';

// (!!!) Please, comment the three lines below after running the command: npm run build (!!!)
require_once get_template_directory() . '/config/DEV-DEBUG.php'; // comment this line after build
require_once get_template_directory() . '/config/DEV-STYLES.php'; // comment this line after build
require_once get_template_directory() . '/config/DEV-SCRIPTS.php'; // comment this line after build

// ACF: Free version
require_once get_template_directory() . '/config/get_acf_fields.php';
require_once get_template_directory() . '/config/get_acf_register_groups.php';

// WordPress: Customizer
// This feature will possibly come at some point in the future...

// WordPress: Settings
require_once get_template_directory() . '/config/get-card-excerpt-length.php';
require_once get_template_directory() . '/config/get-card-excerpt-more.php';
require_once get_template_directory() . '/config/get-card-title_limit.php';
require_once get_template_directory() . '/config/get-remove-emojis-tinymce.php';
require_once get_template_directory() . '/config/get-remove-title-prefix.php';
require_once get_template_directory() . '/config/get-wp-support.php';
