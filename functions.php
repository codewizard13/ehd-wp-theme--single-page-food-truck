<?php

/**
 * Theme functions
 */

if (!defined('ABSPATH')) {
    exit;
}

function sps_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'single-page-starter'),
    ));
}
add_action('after_setup_theme', 'sps_theme_setup');

function sps_enqueue_assets()
{
    wp_enqueue_style('sps-style', get_stylesheet_uri(), array(), '1.5.0');
}
add_action('wp_enqueue_scripts', 'sps_enqueue_assets');


// CENTRAL DATA SYSTEM
function sps_data($section, $key = null, $default = '')
{
    static $theme_data = null;
    if ($theme_data === null) {
        $file = get_theme_file_path('theme-data.php');
        $theme_data = file_exists($file) ? include $file : array();
    }
    if ($key) {
        return $theme_data[$section][$key] ?? $default;
    }
    return $theme_data[$section] ?? $default;
}

// INACTIVE - UNTIL I add ACF

/**
 * Example helper for fetching fields (ACF or your own system).
 * Replace get_field() with your own implementation if needed.
 */
function sps_field($key, $default = '')
{
    if (function_exists('get_field')) {
        $value = get_field($key);
        return $value !== null && $value !== '' ? $value : $default;
    }
    return $default;
}