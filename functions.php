<?php

$theme = wp_get_theme();
define('KR_THEME_NAME', $theme->Name);


define('KR_THEME_DIR', get_template_directory());
define('KR_THEME_URI', get_template_directory_uri());

// define('KR_THEME_ASSETS_URL', KR_THEME_URI . '/assets/');
define('KR_THEME_CSS_URI', KR_THEME_URI . '/assets/css/');
define('KR_THEME_JS_URI', KR_THEME_URI . '/assets/js/');
define('KR_THEME_IMAGES_URI', KR_THEME_URI . '/assets/images/');

define('KR_THEME_ELEMENTS', KR_THEME_DIR . '/elements/');
define('KR_THEME_ELEMENTS_URL', KR_THEME_URI . '/elements/');

define('KR_THEME_INC_DIR', KR_THEME_DIR . '/inc/');
define('KR_THEME_INC_URI', KR_THEME_URI . '/inc/');

define('KR_THEME_INC_IMAGES', KR_THEME_INC_URI . 'assets/images/');
define('KR_THEME_INC_CSS', KR_THEME_INC_URI . 'assets/css/');
define('KR_THEME_INC_JS', KR_THEME_INC_URI . 'assets/js/');

require_once KR_THEME_INC_DIR . 'kr-functions.php';
require_once KR_THEME_INC_DIR . 'lib.php';
