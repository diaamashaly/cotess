<?php

if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */
$options = array(
    fw()->theme->get_options('general-settings'),
    fw()->theme->get_options('header-data'),
    // fw()->theme->get_options('home-about'),
    fw()->theme->get_options('about-page'),
    fw()->theme->get_options('work-with-us'),
    fw()->theme->get_options('need-consaltaion'),
    fw()->theme->get_options('pages-settings'),
    fw()->theme->get_options( 'social-settings' )
);
