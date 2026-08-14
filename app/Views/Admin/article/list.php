<?php
// app/Views/Admin/article/list.php
ob_start();
?>

<div class="admin-header-bar">
  <div>
    <h1 style="font-size: 2rem;">Daftar Artikel Blog</h1>
    <p style="color: var(--text-secondary);">Kelola postingan artikel dan berita seputar industri boneka</p>
  </div>
  <div>
    <a href="/admin/articles/create" class="btn btn-primary"><i class="fas fa-pen"></i> Tulis Artikel Baru</a>
  </div>
</div>

<div class="glass-panel data-table-card">
  <table class="admin-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Thumbnail</th>
        <th>Judul Artikel</th>
        <th>Penulis</th>
        <th>Tanggal Terbit</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($articles)): ?>
        <tr>
          <td colspan="6" style="text-align: center; color: var(--text-muted); padding: 32px;">Belum ada artikel. Klik 'Tulis Artikel Baru'.</td>
        </tr>
      <?php else: ?>
        <?php foreach ($articles as $a): ?>
        <tr>
          <td>#<?= $a['id'] ?></td>
          <td>
            <img src="/assets/images/<?= htmlspecialchars($a['thumbnail_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" alt="Thumb">
          </td>
          <td>
            <strong><?= htmlspecialchars($a['title']) ?></strong>
            <div style="font-size: 0.8rem; color: var(--text-muted);">/artikel/<?= htmlspecialchars($a['slug']) ?></div>
          </td>
          <td><?= htmlspecialchars($a['author'] ?? 'Admin') ?></td>
          <td><?= date('d M Y H:i', strtotime($a['published_at'])) ?></td>
          <td>
            <div class="action-btns">
              <a href="/admin/articles/edit/<?= $a['id'] ?>" class="btn btn-outline btn-sm"><i class="fas fa-edit"></i> Edit</a>
              <form action="/admin/articles/delete/<?= $a['id'] ?>" method="POST" onsubmit="return confirm('Hapus artikel ini?');" style="display:inline;">
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
