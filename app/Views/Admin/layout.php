<?php
// app/Views/Admin/layout.php
$title = $title ?? 'Admin Dashboard – Bonekaku.co.id';
$currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
  <link rel="icon" type="image/png" href="/assets/images/Icon-001b-300x300_eA0g.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/glass.css">
  <link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body class="admin-body">

<div class="admin-layout">
  <!-- Sidebar -->
  <aside class="admin-sidebar">
    <div class="admin-brand">
      <img src="/assets/images/Logo-Baru-Bonekaku-600x163_eA0g.png" alt="Admin Logo">
    </div>

    <nav class="admin-nav">
      <a href="/admin" class="admin-nav-item <?= ($currentUri === '/admin') ? 'active' : '' ?>">
        <i class="fas fa-tachometer-alt"></i> Dashboard
      </a>
      <a href="/admin/products" class="admin-nav-item <?= (strpos($currentUri, '/admin/products') === 0) ? 'active' : '' ?>">
        <i class="fas fa-boxes"></i> Produk
      </a>
      <a href="/admin/categories" class="admin-nav-item <?= (strpos($currentUri, '/admin/categories') === 0) ? 'active' : '' ?>">
        <i class="fas fa-tags"></i> Kategori
      </a>
      <a href="/admin/articles" class="admin-nav-item <?= (strpos($currentUri, '/admin/articles') === 0) ? 'active' : '' ?>">
        <i class="fas fa-newspaper"></i> Artikel
      </a>
    </nav>

    <div style="margin-top: auto;">
      <a href="/" target="_blank" class="admin-nav-item" style="color: var(--brand-brown);">
        <i class="fas fa-globe"></i> Lihat Situs Publik
      </a>
      <a href="/admin/logout" class="admin-nav-item" style="color: #E53E3E; margin-top: 8px;">
        <i class="fas fa-sign-out-alt"></i> Keluar (Logout)
      </a>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="admin-main">
    <!-- Flash Messages -->
    <?php if (!empty($flash)): ?>
      <div class="glass-toast show <?= htmlspecialchars($flash['type']) ?>" style="position: relative; bottom: 0; left: 0; margin-bottom: 24px; width: 100%;">
        <i class="fas <?= $flash['type'] === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle' ?>"></i>
        <span><?= htmlspecialchars($flash['message']) ?></span>
      </div>
    <?php endif; ?>

    <?= $content ?>
  </main>
</div>

</body>
</html>
