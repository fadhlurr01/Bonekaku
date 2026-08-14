<?php
// app/Views/Public/katalog-detail.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>

<section class="section-padding" style="padding-top: 140px;">
  <div class="container">
    <!-- Breadcrumb -->
    <div style="margin-bottom: 32px; font-size: 0.9rem; color: var(--text-secondary);">
      <a href="/">Home</a> &gt; <a href="/katalog">Katalog</a> &gt; <span style="color: var(--brand-gold);"><?= htmlspecialchars($product['product_name']) ?></span>
    </div>

    <div class="glass-panel" style="padding: 48px;">
      <div class="hero-grid">
        <div>
          <img src="/assets/images/<?= htmlspecialchars($product['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" 
               alt="<?= htmlspecialchars($product['product_name']) ?>" 
               style="width: 100%; border-radius: var(--radius-md); box-shadow: var(--glass-shadow); object-fit: cover;">
        </div>

        <div style="display: flex; flex-direction: column; justify-content: center; gap: 16px;">
          <div>
            <span class="badge"><?= htmlspecialchars($product['category_name'] ?? 'Custom') ?></span>
            <h1 style="font-size: 2.25rem; margin-top: 8px;"><?= htmlspecialchars($product['product_name']) ?></h1>
          </div>

          <div style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.7;">
            <p><?= nl2br(htmlspecialchars($product['description'] ?? 'Boneka souvenir custom berkualitas tinggi berstandar mutu SNI.')) ?></p>
          </div>

          <div style="background: rgba(255,255,255,0.6); padding: 20px; border-radius: var(--radius-sm); border: 1px solid var(--glass-border);">
            <h4 style="margin-bottom: 8px; color: var(--brand-brown-dark);"><i class="fas fa-check-circle" style="color: var(--brand-green);"></i> Keunggulan Produk ini:</h4>
            <ul style="font-size: 0.875rem; color: var(--text-secondary); display: flex; flex-direction: column; gap: 6px;">
              <li>• Bahan Premium Velvet/Velboa/Yelvo halus anti rontok</li>
              <li>• Isian Dacron Silicon Grade A 100% murni</li>
              <li>• Bordir logo komputer presisi tinggi</li>
              <li>• Sertifikasi Standar Nasional Indonesia (SNI)</li>
            </ul>
          </div>

          <div style="display: flex; gap: 16px; margin-top: 12px;">
            <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Bonekaku,%20saya%20tertarik%20dengan%20produk%20<?= urlencode($product['product_name']) ?>" 
               target="_blank" 
               class="btn btn-primary" style="flex: 1;">
              <i class="fab fa-whatsapp"></i> Konsultasi Order via WhatsApp
            </a>
            <a href="/katalog" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Kembali</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Related Products -->
    <?php if (!empty($relatedProducts)): ?>
    <div style="margin-top: 64px;">
      <h3 style="margin-bottom: 24px; font-size: 1.5rem;">Produk Terkait Lainnya</h3>
      <div class="products-grid">
        <?php foreach ($relatedProducts as $rel): ?>
        <div class="glass-panel product-card">
          <div class="product-image-wrap">
            <img src="/assets/images/<?= htmlspecialchars($rel['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" alt="<?= htmlspecialchars($rel['product_name']) ?>" loading="lazy">
          </div>
          <div class="product-body">
            <h3 class="product-title" style="font-size: 1rem;"><?= htmlspecialchars($rel['product_name']) ?></h3>
            <a href="/katalog/<?= htmlspecialchars($rel['slug']) ?>" class="btn btn-outline btn-sm">Lihat Detail</a>
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
