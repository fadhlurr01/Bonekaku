<?php
// app/Views/Public/partials/footer.php
?>
<footer class="footer-section">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <img src="/assets/images/Logo-Baru-Bonekaku-600x163_eA0g.png" alt="Bonekaku Logo" style="height: 40px; margin-bottom: 20px; filter: brightness(0) invert(1);">
        <p style="color: #A0958B; margin-bottom: 16px;">
          Pabrik manufaktur boneka custom, maskot perusahaan, souvenir bantal, dan merchandise berkualitas tinggi berstandar mutu SNI.
        </p>
        <p style="font-size: 0.9rem; color: #D4C9BF;">
          <strong>Office:</strong> <?= htmlspecialchars($config['office_address']) ?>
        </p>
      </div>

      <div class="footer-col">
        <h4>Menu Utama</h4>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/katalog">Katalog Produk</a></li>
          <li><a href="/layanan">Layanan Kami</a></li>
          <li><a href="/tentang-kami">Tentang Kami</a></li>
          <li><a href="/kontak">Kontak & Lokasi</a></li>
          <li><a href="/artikel">Artikel Blog</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Kategori Popular</h4>
        <ul>
          <li><a href="/katalog?category=boneka-souvenir">Boneka Souvenir</a></li>
          <li><a href="/katalog?category=bantal-custom">Bantal Custom</a></li>
          <li><a href="/katalog?category=boneka-custom">Boneka Custom</a></li>
          <li><a href="/katalog?category=maskot-badut">Maskot & Badut</a></li>
          <li><a href="/katalog?category=graduation-series">Graduation Series</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Hotline & Contact</h4>
        <p style="margin-bottom: 8px;"><strong>WA / Call:</strong> <?= htmlspecialchars($config['hotline']) ?></p>
        <p style="margin-bottom: 16px;"><strong>Email:</strong> <?= htmlspecialchars($config['email']) ?></p>
        <div style="display: flex; gap: 12px; font-size: 1.2rem;">
          <a href="#" style="color: var(--brand-gold);"><i class="fab fa-facebook"></i></a>
          <a href="#" style="color: var(--brand-gold);"><i class="fab fa-instagram"></i></a>
          <a href="#" style="color: var(--brand-gold);"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> BONEKAKU.CO.ID. All Rights Reserved. Rebuilt with Custom MVC & Glassmorphism Design.</p>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
