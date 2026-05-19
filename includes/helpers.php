<?php
// includes/helpers.php

/**
 * Translation helper function
 */
function t($key) {
    global $translations;
    // Support nested keys like 'home.title' using dot notation
    $keys = explode('.', $key);
    $value = $translations;

    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $key; // Return the key itself if translation is missing
        }
    }

    return is_string($value) ? $value : $key;
}

/**
 * Base URL helper function
 */
function base_url($path = '') {
    global $lang;

    // Remove leading slash if present
    $path = ltrim($path, '/');

    // If we are in 'ur' language, prepend 'ur/' to the path
    // UNLESS the path already starts with 'ur/' or is an asset
    if ($lang === 'ur' && !str_starts_with($path, 'ur/') && !str_starts_with($path, 'assets/')) {
        // Special case for root
        if ($path === '' || $path === 'index.php') {
            return BASE_URL . 'ur/';
        }
        return BASE_URL . 'ur/' . $path;
    }

    // For english, just return base + path
    if ($path === 'index.php') {
        return BASE_URL;
    }

    return BASE_URL . $path;
}

/**
 * Asset URL helper function (always loads from root assets directory)
 */
function asset_url($path = '') {
    $path = ltrim($path, '/');
    return BASE_URL . $path;
}

/**
 * Helper to determine if a nav link is active
 */
function is_active($path) {
    $current_uri = $_SERVER['REQUEST_URI'];

    // Clean up current URI
    $current_uri = strtok($current_uri, '?');

    // Determine base script name
    $script_name = basename($_SERVER['SCRIPT_NAME']);

    if ($path === 'index.php') {
        return ($script_name === 'index.php' && $current_uri === '/') ||
               str_ends_with($current_uri, 'index.php') ||
               str_ends_with($current_uri, '/ur/') ||
               str_ends_with($current_uri, '/ur');
    }

    return strpos($current_uri, $path) !== false;
}
