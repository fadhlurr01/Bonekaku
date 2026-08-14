<?php
// app/Views/Admin/login.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title) ?></title>
  <link rel="icon" type="image/png" href="/assets/images/Icon-001b-300x300_eA0g.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/base.css">
  <link rel="stylesheet" href="/assets/css/glass.css">
  <link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body class="admin-body">

<div class="admin-login-wrapper">
  <div class="glass-panel admin-login-card">
    <div class="admin-login-header">
      <img src="/assets/images/Logo-Baru-Bonekaku-600x163_eA0g.png" alt="Bonekaku Admin Logo">
      <h2 style="font-size: 1.5rem; margin-top: 12px;">Admin Login</h2>
      <p style="font-size: 0.85rem; color: var(--text-secondary);">Masuk ke Dashboard Pengelolaan Bonekaku</p>
    </div>

    <?php if (!empty($flash)): ?>
      <div class="glass-toast show <?= htmlspecialchars($flash['type']) ?>" style="position: relative; bottom: 0; left: 0; margin-bottom: 20px; width: 100%;">
        <span><?= htmlspecialchars($flash['message']) ?></span>
      </div>
    <?php endif; ?>

    <form action="/admin/login" method="POST">
      <div class="form-group">
        <label><i class="fas fa-user"></i> Username</label>
        <input type="text" name="username" class="form-control" placeholder="Masukkan username" required autofocus>
      </div>

      <div class="form-group">
        <label><i class="fas fa-lock"></i> Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
      </div>

      <button type="submit" class="btn btn-gold" style="width: 100%; margin-top: 12px;">
        <i class="fas fa-sign-in-alt"></i> Masuk Dashboard
      </button>
    </form>

    <div style="text-align: center; margin-top: 24px; font-size: 0.8rem; color: var(--text-muted);">
      <a href="/">&larr; Kembali ke Situs Utama</a>
    </div>
  </div>
</div>

</body>
</html>
