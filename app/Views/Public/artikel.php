<?php
// app/Views/Public/artikel.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>

<section class="section-padding" style="padding-top: 140px;">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">BERITA & ARTIKEL</span>
      <h2 class="section-title">Wawasan Seputar Industri Boneka & Souvenir</h2>
      <p>Pelajari tips memilih bahan, inspirasi souvenir corporate, hingga panduan pengerjaan maskot.</p>
    </div>

    <div class="products-grid" style="grid-template-columns: repeat(3, 1fr);">
      <?php if (empty($articles)): ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 48px;" class="glass-panel">
          <h3>Belum ada artikel dipublikasikan.</h3>
        </div>
      <?php else: ?>
        <?php foreach ($articles as $article): ?>
        <div class="glass-panel product-card reveal-up">
          <div class="product-image-wrap">
            <img src="/assets/images/<?= htmlspecialchars($article['thumbnail_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" alt="<?= htmlspecialchars($article['title']) ?>" loading="lazy">
          </div>
          <div class="product-body">
            <div>
              <span class="product-category-name"><?= htmlspecialchars($article['author'] ?? 'Bonekaku') ?> &bull; <?= date('d M Y', strtotime($article['published_at'])) ?></span>
              <h3 class="product-title" style="font-size: 1.1rem; line-height: 1.3; margin-top: 6px;"><?= htmlspecialchars($article['title']) ?></h3>
            </div>
            <a href="/artikel/<?= htmlspecialchars($article['slug']) ?>" class="btn btn-primary btn-sm" style="width: 100%;">
              Baca Selengkapnya <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/partials/whatsapp-float.php';
require __DIR__ . '/partials/footer.php';
?>
