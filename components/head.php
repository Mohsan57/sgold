<?php
// components/head.php

// Set default variables if not provided by the page
$pageTitle = $pageTitle ?? 'S.Gold Electric Motors | Water Pumps & Electric Motors — Gujranwala';
$metaDescription = $metaDescription ?? "S.Gold Electric Motors — Quality water pumps and electric motors manufactured in Gujranwala, Pakistan. Trusted by 13,000+ clients for agricultural irrigation and industrial applications. Available in 1-50 HP with 220V/440V options. Buy online or call 0303-9351425.";
$canonicalUrl = $canonicalUrl ?? base_url();
$ogImage = $ogImage ?? asset_url('assets/logo/sgold-logo.png');

$langCode = t('lang_code');
$dir = t('dir');
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($langCode) ?>" dir="<?= htmlspecialchars($dir) ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($metaDescription) ?>">
  <meta name="keywords" content="electric motor, water pump, Gujranwala, Pakistan, agricultural pump, industrial motor, S.Gold, tube well pump, irrigation pump, Punjab, centrifugal pump, self-priming pump, 3-phase motor, agricultural equipment, industrial equipment">

  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDescription) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">
  <meta name="author" content="S.Gold Electric Motors">
  <meta name="robots" content="index, follow">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
  <meta property="og:type" content="website">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="icon" type="image/png" href="<?= asset_url('assets/logo/sgold-logo.png') ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= asset_url('css/style.css') ?>">
  <link rel="stylesheet" href="<?= asset_url('css/components.css') ?>">
  <link rel="stylesheet" href="<?= asset_url('css/pages.css') ?>">

  <?php if ($dir === 'rtl'): ?>
  <link rel="stylesheet" href="<?= asset_url('css/rtl.css') ?>">
  <?php endif; ?>

  <?php if (isset($schemaData)): ?>
  <?= $schemaData ?>
  <?php endif; ?>

  <link rel="alternate" hreflang="en" href="<?= BASE_URL ?>" />
  <link rel="alternate" hreflang="ur" href="<?= BASE_URL . 'ur/' ?>" />
</head>
<body>
