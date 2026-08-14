<?php
// app/Views/Admin/article/form.php
$isEdit = !empty($article);
$actionUrl = $isEdit ? '/admin/articles/update/' . $article['id'] : '/admin/articles/store';
ob_start();
?>

<div class="admin-header-bar">
  <div>
    <h1 style="font-size: 2rem;"><?= $isEdit ? 'Edit Artikel' : 'Tulis Artikel Baru' ?></h1>
    <p style="color: var(--text-secondary);"><?= $isEdit ? 'Perbarui konten artikel' : 'Isi formulir untuk mempublikasikan artikel baru' ?></p>
  </div>
  <div>
    <a href="/admin/articles" class="btn btn-outline"><i class="fas fa-arrow-left"></i> Kembali</a>
  </div>
</div>

<div class="glass-panel" style="padding: 36px; max-width: 900px;">
  <form action="<?= $actionUrl ?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label>Judul Artikel <span style="color:red;">*</span></label>
      <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($article['title'] ?? '') ?>" placeholder="Contoh: 5 Alasan Mengapa Boneka Custom Menjadi Souvenir Corporate Terbaik" required>
    </div>

    <div class="form-group">
      <label>Penulis / Author</label>
      <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($article['author'] ?? 'Bonekaku.co.id') ?>" placeholder="Bonekaku.co.id">
    </div>

    <div class="form-group">
      <label>Gambar Header / Thumbnail</label>
      <?php if (!empty($article['thumbnail_path'])): ?>
        <div style="margin-bottom: 12px;">
          <img src="/assets/images/<?= htmlspecialchars($article['thumbnail_path']) ?>" alt="Current Thumbnail" style="height: 120px; border-radius: var(--radius-sm); object-fit: cover;">
        </div>
      <?php endif; ?>
      <input type="file" name="thumbnail" class="form-control" accept="image/*">
    </div>

    <div class="form-group">
      <label>Konten Lengkap Artikel (Mendukung Tag HTML seperti &lt;h3&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;strong&gt;) <span style="color:red;">*</span></label>
      <textarea name="content" class="form-control" style="min-height: 280px; font-family: monospace; font-size: 0.9rem;" placeholder="Tuliskan isi artikel menggunakan tag HTML..." required><?= htmlspecialchars($article['content'] ?? '') ?></textarea>
    </div>

    <button type="submit" class="btn btn-gold" style="width: 100%; margin-top: 12px;">
      <i class="fas fa-paper-plane"></i> <?= $isEdit ? 'Simpan Perubahan' : 'Terbitkan Artikel' ?>
    </button>
  </form>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
?>
