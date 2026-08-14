<?php
// app/Views/Public/partials/navbar.php
$currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<header class="header-navbar glass-navbar" id="mainNavbar">
  <div class="container nav-container">
    <a href="/" class="brand-logo">
      <img src="/assets/images/Logo-Baru-Bonekaku-600x163_eA0g.png" alt="Bonekaku Enterprise Logo">
    </a>

    <nav class="nav-links">
      <a href="/" class="nav-link-item <?= ($currentUri === '/' || $currentUri === '/index') ? 'active' : '' ?>">Home</a>
      <a href="/katalog" class="nav-link-item <?= (strpos($currentUri, '/katalog') === 0) ? 'active' : '' ?>">Katalog</a>
      <a href="/layanan" class="nav-link-item <?= (strpos($currentUri, '/layanan') === 0) ? 'active' : '' ?>">Layanan</a>
      <a href="/tentang-kami" class="nav-link-item <?= (strpos($currentUri, '/tentang-kami') === 0) ? 'active' : '' ?>">Tentang Kami</a>
      <a href="/kontak" class="nav-link-item <?= (strpos($currentUri, '/kontak') === 0) ? 'active' : '' ?>">Kontak Kami</a>
      <a href="/artikel" class="nav-link-item <?= (strpos($currentUri, '/artikel') === 0) ? 'active' : '' ?>">Artikel</a>
    </nav>

    <div class="nav-actions">
      <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Admin%20Bonekaku,%20saya%20ingin%20konsultasi%20pembuatan%20boneka%20custom" target="_blank" class="btn btn-primary btn-sm">
        <i class="fab fa-whatsapp"></i> Kontak Kami
      </a>
      <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Navigation">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Slide-in Drawer -->
<div class="glass-panel-strong mobile-drawer" id="mobileDrawer">
  <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <img src="/assets/images/Logo-Baru-Bonekaku-600x163_eA0g.png" alt="Logo" style="height: 32px;">
  </div>
  <a href="/" class="nav-link-item <?= ($currentUri === '/') ? 'active' : '' ?>">Home</a>
  <a href="/katalog" class="nav-link-item <?= (strpos($currentUri, '/katalog') === 0) ? 'active' : '' ?>">Katalog</a>
  <a href="/layanan" class="nav-link-item <?= (strpos($currentUri, '/layanan') === 0) ? 'active' : '' ?>">Layanan</a>
  <a href="/tentang-kami" class="nav-link-item <?= (strpos($currentUri, '/tentang-kami') === 0) ? 'active' : '' ?>">Tentang Kami</a>
  <a href="/kontak" class="nav-link-item <?= (strpos($currentUri, '/kontak') === 0) ? 'active' : '' ?>">Kontak Kami</a>
  <a href="/artikel" class="nav-link-item <?= (strpos($currentUri, '/artikel') === 0) ? 'active' : '' ?>">Artikel</a>
  <div style="margin-top: auto;">
    <a href="https://wa.me/<?= $config['hotline_wa'] ?>" target="_blank" class="btn btn-primary" style="width: 100%;">
      <i class="fab fa-whatsapp"></i> WhatsApp Us
    </a>
  </div>
</div>
<div id="drawerOverlay" style="position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.4); z-index:940; display:none;"></div>
