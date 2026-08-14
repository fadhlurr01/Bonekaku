<?php
// app/Views/Public/kontak.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>

<section class="section-padding" style="padding-top: 140px;">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">HUBUNGI KAMI</span>
      <h2 class="section-title">Mari Berkonsultasi Mengenai Proyek Boneka Anda</h2>
      <p>Kunjungi workshop kami atau kirimkan pesan langsung kepada tim customer service.</p>
    </div>

    <!-- Map with Floating Glass Card Overlay -->
    <div class="contact-map-wrapper reveal-up" style="margin-bottom: 48px;">
      <iframe class="contact-map-iframe" 
              src="<?= htmlspecialchars($config['google_maps_embed']) ?>" 
              allowfullscreen="" 
              loading="lazy">
      </iframe>

      <div class="glass-panel-strong contact-info-card-overlay">
        <h3 style="font-size: 1.25rem; color: var(--brand-brown-dark); margin-bottom: 16px;"><i class="fas fa-map-marker-alt" style="color: var(--brand-gold);"></i> Kantor & Workshop</h3>
        
        <div style="display: flex; flex-direction: column; gap: 14px; font-size: 0.9rem;">
          <div>
            <strong>Office Address:</strong>
            <p style="margin: 0; font-size: 0.85rem; color: var(--text-secondary);"><?= htmlspecialchars($config['office_address']) ?></p>
          </div>
          <div>
            <strong>Workshop Address:</strong>
            <p style="margin: 0; font-size: 0.85rem; color: var(--text-secondary);"><?= htmlspecialchars($config['workshop_address']) ?></p>
          </div>
          <div>
            <strong>Hotline / WhatsApp:</strong>
            <p style="margin: 0;"><a href="tel:<?= $config['hotline'] ?>" style="color: var(--brand-green); font-weight: 600;"><?= htmlspecialchars($config['hotline']) ?></a></p>
          </div>
          <div>
            <strong>Email:</strong>
            <p style="margin: 0;"><a href="mailto:<?= $config['email'] ?>" style="color: var(--brand-brown);"><?= htmlspecialchars($config['email']) ?></a></p>
          </div>
        </div>

        <div style="margin-top: 20px;">
          <a href="https://maps.google.com" target="_blank" class="btn btn-gold btn-sm" style="width: 100%;">
            <i class="fas fa-external-link-alt"></i> Buka di Google Maps
          </a>
        </div>
      </div>
    </div>

    <!-- Form Kontak Quick Send -->
    <div class="glass-panel reveal-up" style="max-width: 680px; margin: 0 auto; padding: 40px;">
      <h3 style="text-align: center; margin-bottom: 24px;">Kirim Pesan Cepat</h3>
      <form action="/kontak/submit" method="POST">
        <div class="form-group">
          <label>Nama Lengkap / Instansi</label>
          <input type="text" name="name" class="form-control" placeholder="Contoh: Budi (PT Maju Bersama)" required>
        </div>
        <div class="form-group">
          <label>Nomor WhatsApp</label>
          <input type="tel" name="phone" class="form-control" placeholder="Contoh: 081234567890" required>
        </div>
        <div class="form-group">
          <label>Pesan & Rincian Pesanan Custom</label>
          <textarea name="message" class="form-control" placeholder="Tuliskan jumlah pcs, ukuran, dan jenis boneka..." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%;">
          <i class="fab fa-whatsapp"></i> Kirim Langsung ke WA Admin
        </button>
      </form>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/partials/whatsapp-float.php';
require __DIR__ . '/partials/footer.php';
?>
