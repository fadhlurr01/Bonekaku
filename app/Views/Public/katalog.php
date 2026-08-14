<?php
// app/Views/Public/katalog.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>

<section class="section-padding" style="padding-top: 140px;">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">KATALOG PRODUK</span>
      <h2 class="section-title">Temukan Koleksi & Varian Boneka Impianmu</h2>
      <p>Pilih kategori produk di bawah ini untuk melihat berbagai pilihan souvenir, bantal custom, dan maskot.</p>
    </div>

    <!-- Interactive Pill Filters -->
    <div class="catalog-filter-pills reveal-up">
      <a href="/katalog" class="filter-pill <?= ($selectedCategory === 'all') ? 'active' : '' ?>">Semua (<?= array_sum(array_column($categories, 'product_count')) ?>)</a>
      <?php foreach ($categories as $cat): ?>
      <a href="/katalog?category=<?= htmlspecialchars($cat['slug']) ?>" 
         class="filter-pill <?= ($selectedCategory === $cat['slug']) ? 'active' : '' ?>">
         <?= htmlspecialchars($cat['category_name']) ?> (<?= $cat['product_count'] ?>)
      </a>
      <?php endforeach; ?>
    </div>

    <!-- Products Grid -->
    <div class="products-grid">
      <?php if (empty($products)): ?>
        <div style="grid-column: 1 / -1; text-align: center; padding: 48px;" class="glass-panel">
          <h3>Tidak ada produk ditemukan dalam kategori ini.</h3>
          <p>Silakan pilih kategori lain atau kontak admin kami untuk pesanan custom khusus.</p>
        </div>
      <?php else: ?>
        <?php foreach ($products as $product): ?>
        <div class="glass-panel product-card reveal-up">
          <div class="product-image-wrap">
            <?php if (!empty($product['is_favorite'])): ?>
              <span class="badge product-tag" style="background: var(--brand-gold); color: white;">★ Favorite</span>
            <?php elseif (!empty($product['is_new'])): ?>
              <span class="badge product-tag" style="background: var(--brand-green); color: white;">NEW</span>
            <?php endif; ?>
            <img src="/assets/images/<?= htmlspecialchars($product['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" alt="<?= htmlspecialchars($product['product_name']) ?>" loading="lazy">
          </div>
          <div class="product-body">
            <div>
              <span class="product-category-name"><?= htmlspecialchars($product['category_name'] ?? 'Custom') ?></span>
              <h3 class="product-title"><?= htmlspecialchars($product['product_name']) ?></h3>
            </div>
            <div style="display: flex; gap: 8px;">
              <a href="/katalog/<?= htmlspecialchars($product['slug']) ?>" class="btn btn-outline btn-sm" style="flex: 1;">Detail</a>
              <button class="btn btn-gold btn-sm btn-quick-view" 
                      data-name="<?= htmlspecialchars($product['product_name']) ?>"
                      data-category="<?= htmlspecialchars($product['category_name'] ?? 'Custom') ?>"
                      data-img="/assets/images/<?= htmlspecialchars($product['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>"
                      data-desc="<?= htmlspecialchars($product['description'] ?? '') ?>">
                Quick View
              </button>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Quick View Modal Container -->
<div class="glass-modal-overlay" id="quickViewModal">
  <div class="glass-modal-body">
    <button id="closeModalBtn" style="position: absolute; top: 16px; right: 20px; background: none; border: none; font-size: 1.5rem; cursor: pointer; color: var(--text-secondary);">&times;</button>
    <div class="hero-grid">
      <div>
        <img id="modalProductImg" src="" alt="Product Quick View" style="width:100%; border-radius: var(--radius-md); object-fit: cover;">
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center;">
        <span id="modalProductCategory" class="badge" style="margin-bottom: 8px;">Category</span>
        <h3 id="modalProductTitle" style="font-size: 1.5rem; margin-bottom: 12px;">Product Title</h3>
        <p id="modalProductDesc" style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 20px;"></p>
        <a id="modalWaBtn" href="#" target="_blank" class="btn btn-primary"><i class="fab fa-whatsapp"></i> Pesan via WhatsApp</a>
      </div>
    </div>
  </div>
</div>

<script src="/assets/js/filter-katalog.js"></script>

<?php
require __DIR__ . '/partials/whatsapp-float.php';
require __DIR__ . '/partials/footer.php';
?>
