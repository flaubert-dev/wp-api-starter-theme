<?php

// DEBUG
require_once get_template_directory() . '/config/DEV-DEBUG.php';

// AUTOLOAD
require_once get_template_directory() . '/vendor/autoload.php';

// Styles
require_once get_template_directory() . '/config/get-styles.php';

// ACF: Free version
require_once get_template_directory() . '/config/get_acf_json.php';

// Templates
require_once get_template_directory() . '/config/get-templates.php';

// WordPress: Helpers and Support 
require_once get_template_directory() . '/config/wp-helpers.php';
require_once get_template_directory() . '/config/wp-support.php';

// Scripts
require_once get_template_directory() . '/config/get-scripts.php';
