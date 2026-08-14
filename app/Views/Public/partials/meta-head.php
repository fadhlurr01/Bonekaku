<?php
// app/Views/Public/partials/meta-head.php
$pageTitle = $title ?? 'Bonekaku – Pusat Souvenir, Maskot & Boneka Custom Terlengkap';
$pageDesc = $description ?? 'Pabrik & Konveksi Boneka Custom, Maskot Perusahaan, Merchandise Corporate & Souvenir Bantal Terlengkap #1 di Indonesia. Standar SNI, Bahan Premium.';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta name="keywords" content="boneka custom, konveksi boneka, pabrik boneka, maskot perusahaan, souvenir bantal, boneka wisuda, plush toy vendor">
  
  <!-- OG Tags -->
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:type" content="website">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/assets/images/Icon-001b-300x300_eA0g.png">

  <!-- Icons (FontAwesome) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Custom CSS System -->
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/glass.css">
  <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
