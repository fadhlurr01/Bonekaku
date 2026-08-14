<?php
// app/Views/Public/artikel-detail.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>

<section class="section-padding" style="padding-top: 140px;">
  <div class="container" style="max-width: 900px;">
    <!-- Breadcrumb -->
    <div style="margin-bottom: 24px; font-size: 0.9rem; color: var(--text-secondary);">
      <a href="/">Home</a> &gt; <a href="/artikel">Artikel</a> &gt; <span style="color: var(--brand-gold);"><?= htmlspecialchars($article['title']) ?></span>
    </div>

    <article class="glass-panel" style="padding: 48px;">
      <span class="badge" style="margin-bottom: 12px;">
        <i class="fas fa-user-edit"></i> <?= htmlspecialchars($article['author']) ?> &bull; <?= date('d F Y', strtotime($article['published_at'])) ?>
      </span>
      <h1 style="font-size: 2.25rem; margin-bottom: 24px; line-height: 1.2;"><?= htmlspecialchars($article['title']) ?></h1>

      <?php if (!empty($article['thumbnail_path'])): ?>
      <div style="margin-bottom: 32px; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--glass-shadow);">
        <img src="/assets/images/<?= htmlspecialchars($article['thumbnail_path']) ?>" alt="<?= htmlspecialchars($article['title']) ?>" style="width:100%; max-height:480px; object-fit:cover;">
      </div>
      <?php endif; ?>

      <div style="font-size: 1.05rem; line-height: 1.8; color: var(--text-primary);" class="article-rendered-content">
        <?= $article['content'] ?>
      </div>

      <div style="margin-top: 40px; padding-top: 24px; border-top: 1px solid var(--border-light); display: flex; justify-content: space-between; align-items: center;">
        <a href="/artikel" class="btn btn-outline btn-sm"><i class="fas fa-arrow-left"></i> Kembali ke Artikel</a>
        <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Admin,%20saya%20membaca%20artikel%20<?= urlencode($article['title']) ?>" target="_blank" class="btn btn-primary btn-sm">
          <i class="fab fa-whatsapp"></i> Tanya Admin
        </a>
      </div>
    </article>

    <!-- Latest Articles Sidebar -->
    <?php if (!empty($latestArticles)): ?>
    <div style="margin-top: 60px;">
      <h3 style="margin-bottom: 24px;">Artikel Lainnya</h3>
      <div class="products-grid" style="grid-template-columns: repeat(3, 1fr);">
        <?php foreach ($latestArticles as $lat): ?>
        <div class="glass-panel product-card">
          <div class="product-body">
            <h4 style="font-size: 1rem; margin-bottom: 8px;"><?= htmlspecialchars($lat['title']) ?></h4>
            <a href="/artikel/<?= htmlspecialchars($lat['slug']) ?>" class="btn btn-outline btn-sm">Baca Artikel</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php
require __DIR__ . '/partials/whatsapp-float.php';
require __DIR__ . '/partials/footer.php';
?>
