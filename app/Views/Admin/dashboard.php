<?php
// app/Views/Admin/dashboard.php
ob_start();
?>

<div class="admin-header-bar">
  <div>
    <h1 style="font-size: 2rem;">Dashboard Admin</h1>
    <p style="color: var(--text-secondary);">Kelola data produk, kategori, dan artikel situs Bonekaku.co.id</p>
  </div>
  <div>
    <a href="/admin/products/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Produk</a>
  </div>
</div>

<!-- Stats Cards -->
<div class="admin-stats-grid">
  <div class="glass-panel stat-card">
    <div class="stat-icon"><i class="fas fa-boxes"></i></div>
    <div>
      <div class="stat-number"><?= $totalProducts ?></div>
      <div class="stat-label">Total Produk</div>
    </div>
  </div>

  <div class="glass-panel stat-card">
    <div class="stat-icon"><i class="fas fa-tags"></i></div>
    <div>
      <div class="stat-number"><?= $totalCategories ?></div>
      <div class="stat-label">Kategori Produk</div>
    </div>
  </div>

  <div class="glass-panel stat-card">
    <div class="stat-icon"><i class="fas fa-newspaper"></i></div>
    <div>
      <div class="stat-number"><?= $totalArticles ?></div>
      <div class="stat-label">Artikel Terbit</div>
    </div>
  </div>
</div>

<!-- Latest Products Table -->
<div class="glass-panel data-table-card">
  <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h3 style="font-size: 1.25rem;">Produk Terbaru</h3>
    <a href="/admin/products" class="btn btn-outline btn-sm">Lihat Semua</a>
  </div>

  <table class="admin-table">
    <thead>
      <tr>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Favorit</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($latestProducts)): ?>
        <tr>
          <td colspan="5" style="text-align: center; color: var(--text-muted);">Belum ada produk.</td>
        </tr>
      <?php else: ?>
        <?php foreach ($latestProducts as $p): ?>
        <tr>
          <td>
            <img src="/assets/images/<?= htmlspecialchars($p['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" alt="Thumb">
          </td>
          <td><strong><?= htmlspecialchars($p['product_name']) ?></strong></td>
          <td><?= htmlspecialchars($p['category_name'] ?? 'Custom') ?></td>
          <td>
            <?= !empty($p['is_favorite']) ? '<span class="badge" style="background:var(--brand-gold); color:white;">Ya</span>' : '<span style="color:var(--text-muted);">Tidak</span>' ?>
          </td>
          <td>
            <div class="action-btns">
              <a href="/admin/products/edit/<?= $p['id'] ?>" class="btn btn-outline btn-sm"><i class="fas fa-edit"></i> Edit</a>
            </div>
          </td>
        </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/layout.php';
?>
