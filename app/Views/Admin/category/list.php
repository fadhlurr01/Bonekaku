<?php
// app/Views/Admin/category/list.php
ob_start();
?>

<div class="admin-header-bar">
  <div>
    <h1 style="font-size: 2rem;">Daftar Kategori</h1>
    <p style="color: var(--text-secondary);">Kelola kategori untuk mempermudah navigasi katalog produk</p>
  </div>
</div>

<div class="hero-grid" style="grid-template-columns: 1fr 2fr; align-items: start;">
  <!-- Form Tambah Kategori -->
  <div class="glass-panel" style="padding: 28px;">
    <h3 style="margin-bottom: 20px; font-size: 1.25rem;">Tambah Kategori Baru</h3>
    <form action="/admin/categories/store" method="POST">
      <div class="form-group">
        <label>Nama Kategori <span style="color:red;">*</span></label>
        <input type="text" name="category_name" class="form-control" placeholder="Contoh: Boneka Wisuda" required>
      </div>
      <button type="submit" class="btn btn-gold" style="width: 100%;">
        <i class="fas fa-plus"></i> Simpan Kategori
      </button>
    </form>
  </div>

  <!-- Tabel Kategori -->
  <div class="glass-panel data-table-card">
    <table class="admin-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Kategori</th>
          <th>Slug</th>
          <th>Jumlah Produk</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($categories)): ?>
          <tr>
            <td colspan="5" style="text-align: center; color: var(--text-muted);">Belum ada kategori.</td>
          </tr>
        <?php else: ?>
          <?php foreach ($categories as $cat): ?>
          <tr>
            <td>#<?= $cat['id'] ?></td>
            <td><strong><?= htmlspecialchars($cat['category_name']) ?></strong></td>
            <td><code><?= htmlspecialchars($cat['slug']) ?></code></td>
            <td><span class="badge"><?= $cat['product_count'] ?> produk</span></td>
            <td>
              <form action="/admin/categories/delete/<?= $cat['id'] ?>" method="POST" onsubmit="return confirm('Menghapus kategori akan mempengaruhi produk di dalamnya. Lanjutkan?');">
                <button type="submit" class="btn btn-sm" style="background:#E53E3E; color:white; border:none;"><i class="fas fa-trash"></i> Hapus</button>
              </form>
            </td>
          </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
?>
