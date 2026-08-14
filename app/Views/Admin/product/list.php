<?php
// app/Views/Admin/product/list.php
ob_start();
?>

<div class="admin-header-bar">
  <div>
    <h1 style="font-size: 2rem;">Daftar Produk</h1>
    <p style="color: var(--text-secondary);">Kelola seluruh produk souvenir dan boneka custom</p>
  </div>
  <div>
    <a href="/admin/products/create" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Produk Baru</a>
  </div>
</div>

<div class="glass-panel data-table-card">
  <table class="admin-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($products)): ?>
        <tr>
          <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 32px;">Belum ada produk. Klik tombol 'Tambah Produk Baru'.</td>
        </tr>
      <?php else: ?>
        <?php foreach ($products as $p): ?>
        <tr>
          <td>#<?= $p['id'] ?></td>
          <td>
            <img src="/assets/images/<?= htmlspecialchars($p['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" alt="Thumb">
          </td>
          <td>
            <strong><?= htmlspecialchars($p['product_name']) ?></strong>
            <div style="font-size: 0.8rem; color: var(--text-muted);">/katalog/<?= htmlspecialchars($p['slug']) ?></div>
          </td>
          <td><?= htmlspecialchars($p['category_name'] ?? 'Custom') ?></td>
          <td>
            <?php if (!empty($p['is_favorite'])): ?>
              <span class="badge" style="background: var(--brand-gold); color: white;">Favorite</span>
            <?php endif; ?>
            <?php if (!empty($p['is_new'])): ?>
              <span class="badge" style="background: var(--brand-green); color: white;">New</span>
            <?php endif; ?>
          </td>
          <td>
            <div class="action-btns">
              <a href="/admin/products/edit/<?= $p['id'] ?>" class="btn btn-outline btn-sm"><i class="fas fa-edit"></i> Edit</a>
              <form action="/admin/products/delete/<?= $p['id'] ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');" style="display:inline;">
                <button type="submit" class="btn btn-sm" style="background:#E53E3E; color:white; border:none;"><i class="fas fa-trash"></i> Hapus</button>
              </form>
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
require __DIR__ . '/../layout.php';
?>
