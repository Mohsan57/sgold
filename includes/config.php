<?php
// includes/config.php

// Define base URL - dynamically determine if possible, or set static for production
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'] ?? 'localhost';
// For local dev where app might be in a subfolder, we might need a more robust base_url
// But assuming it's served from document root:
define('BASE_URL', $protocol . "://" . $domain . "/");

// Set default language
if (!isset($lang)) {
    $lang = 'en';
}

// Load translations
$translations = require_once __DIR__ . "/../lang/{$lang}.php";

require_once __DIR__ . '/helpers.php';
