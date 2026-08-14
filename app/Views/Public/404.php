<?php
// app/Views/Public/404.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>
<section class="section-padding" style="min-height: 70vh; display: flex; align-items: center;">
  <div class="container" style="text-align: center;">
    <div class="glass-panel" style="max-width: 540px; margin: 0 auto; padding: 48px;">
      <h1 class="gradient-text" style="font-size: 5rem; margin-bottom: 0;">404</h1>
      <h2 style="margin-bottom: 16px;">Halaman Tidak Ditemukan</h2>
      <p style="margin-bottom: 28px;">Maaf, halaman yang Anda cari tidak tersedia atau telah dipindahkan.</p>
      <a href="/" class="btn btn-primary"><i class="fas fa-home"></i> Kembali ke Beranda</a>
    </div>
  </div>
</section>
<?php
require __DIR__ . '/partials/whatsapp-float.php';
require __DIR__ . '/partials/footer.php';
?>
