<?php
// app/Views/Admin/product/form.php
$isEdit = !empty($product);
$actionUrl = $isEdit ? '/admin/products/update/' . $product['id'] : '/admin/products/store';
ob_start();
?>

<div class="admin-header-bar">
  <div>
    <h1 style="font-size: 2rem;"><?= $isEdit ? 'Edit Produk' : 'Tambah Produk Baru' ?></h1>
    <p style="color: var(--text-secondary);"><?= $isEdit ? 'Perbarui informasi dan gambar produk' : 'Isi formulir untuk menambahkan produk baru' ?></p>
  </div>
  <div>
    <a href="/admin/products" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Kembali</a>
  </div>
</div>

<div class="glass-panel" style="padding: 36px; max-width: 800px;">
  <form action="<?= $actionUrl ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label>Nama Produk <span style="color:red;">*</span></label>
      <input type="text" name="product_name" class="form-control" value="<?= htmlspecialchars($product['product_name'] ?? '') ?>" placeholder="Contoh: Boneka Bear Archie Premium" required>
    </div>

    <div class="form-group">
      <label>Kategori Produk <span style="color:red;">*</span></label>
      <select name="category_id" class="form-control" required>
        <option value="">-- Pilih Kategori --</option>
        <?php foreach ($categories as $cat): ?>
          <option value="<?= $cat['id'] ?>" <?= (!empty($product) && $product['category_id'] == $cat['id']) ? 'selected' : '' ?>>
            <?= htmlspecialchars($cat['category_name']) ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="form-group">
      <label>Deskripsi Produk</label>
      <textarea name="description" class="form-control" placeholder="Tuliskan spesifikasi, bahan, ukuran, dan fitur produk..."><?= htmlspecialchars($product['description'] ?? '') ?></textarea>
    </div>

    <div class="form-group">
      <label>Gambar Produk</label>
      <?php if (!empty($product['image_path'])): ?>
        <div style="margin-bottom: 12px;">
          <img src="/assets/images/<?= htmlspecialchars($product['image_path']) ?>" alt="Current Image" style="height: 100px; border-radius: var(--radius-sm); object-fit: cover;">
          <p style="font-size: 0.8rem; color: var(--text-muted);">Gambar saat ini</p>
        </div>
      <?php endif; ?>
      <input type="file" name="image" class="form-control" accept="image/*">
      <small style="color: var(--text-muted);">Format didukung: JPG, PNG, WEBP. Maks 5MB.</small>
    </div>

    <div style="display: flex; gap: 24px; margin-top: 20px; margin-bottom: 24px;">
      <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
        <input type="checkbox" name="is_favorite" value="1" <?= (!empty($product['is_favorite'])) ? 'checked' : '' ?>>
        <span>Tampilkan di <strong>Souvenir Most Favorite</strong> (Home)</span>
      </label>

      <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
        <input type="checkbox" name="is_new" value="1" <?= (!empty($product['is_new'])) ? 'checked' : '' ?>>
        <span>Tanda sebagai <strong>New Product</strong></span>
      </label>
    </div>

    <button type="submit" class="btn btn-gold" style="width: 100%;">
      <i class="fas fa-save"></i> <?= $isEdit ? 'Simpan Perubahan' : 'Terbitkan Produk' ?>
    </button>
  </form>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
?>
