<?php

/**
 * THEME FUNCTIONS & DEFINITIONS
 * 
 * @package Aquila
 */

use AQUILA_THEME\Inc\AQUILA_THEME;

?>

<?php

// DEFINING VARIABLE FOR GET_TEMPLATE_DIRECTORY

if (!defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

// DEFINING VARIABLE FOR GET_TEMPLATE_DIRECTORY_URI

if (!defined('AQUILA_DIR_URI')) {
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

// INCLUDING HELPER FILES

require_once get_template_directory() . '/inc/helpers/autoloader.php';
require_once get_template_directory() . '/inc/helpers/template-tags.php';

// CREATING FUNCTION FOR CLASS INSTANTIATION

function aquila_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}
aquila_get_theme_instance();


//  ADDING FEATURED IMAGE & SVG

// add_theme_support('post-thumbnails');
// add_theme_support('mime-types', array('image/svg+xml'));

//  ADDING OPTIONS PAGE

// if (function_exists('acf_add_options_page')) {
//     acf_add_options_page();
// }

// ADDING MENUS

// function register_my_menu()
// {
//     register_nav_menu('header-menu', __('Header Menu'));
//     register_nav_menu('footer-menu', __('Footer Menu'));
// }
// add_action('init', 'register_my_menu');
