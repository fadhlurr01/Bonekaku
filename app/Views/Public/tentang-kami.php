<?php
// app/Views/Public/tentang-kami.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>

<section class="section-padding" style="padding-top: 140px;">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">PROFIL PERUSAHAAN</span>
      <h2 class="section-title">Dedikasi Manufaktur & Kerajinan Boneka Terbaik</h2>
    </div>

    <!-- Asymmetric Layout -->
    <div style="position: relative; margin-bottom: 80px;" class="reveal-up">
      <div class="hero-grid">
        <div style="position: relative;">
          <img src="/assets/images/Image-Badut-1500x1061_eA0g.png" 
               alt="Bonekaku Workshop Production" 
               style="border-radius: var(--radius-lg); width: 100%; height: 480px; object-fit: cover; box-shadow: var(--glass-shadow);">
        </div>

        <div class="glass-panel-strong" style="padding: 40px; border-radius: var(--radius-lg);">
          <span class="badge" style="margin-bottom: 12px;">Sejak 2012</span>
          <h2 style="font-size: 2rem; margin-bottom: 16px;">Visi & Komitmen Mutu Bonekaku.co.id</h2>
          <p style="margin-bottom: 16px; color: var(--text-secondary); line-height: 1.7;">
            Berawal dari workshop konveksi rumahan, Bonekaku kini tumbuh menjadi pabrik manufaktur boneka custom dan supplier merchandise tepercaya yang telah melayani ratusan klien korporasi, institusi pemerintah, serta brand nasional.
          </p>
          <p style="margin-bottom: 24px; color: var(--text-secondary); line-height: 1.7;">
            Kami percaya bahwa setiap boneka bukan sekadar objek fisik, melainkan media pembawa pesan emosional dan representasi identitas brand yang harus dibuat dengan ketelitian tertinggi.
          </p>
          <div style="display: flex; gap: 24px;">
            <div>
              <h3 style="font-size: 1.8rem; color: var(--brand-gold);">10+</h3>
              <p style="font-size: 0.85rem; margin: 0;">Tahun Pengalaman</p>
            </div>
            <div>
              <h3 style="font-size: 1.8rem; color: var(--brand-gold);">500k+</h3>
              <p style="font-size: 0.85rem; margin: 0;">Pcs Boneka Diproduksi</p>
            </div>
            <div>
              <h3 style="font-size: 1.8rem; color: var(--brand-gold);">99.4%</h3>
              <p style="font-size: 0.85rem; margin: 0;">Tingkat Kepuasan Klien</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 4 Keunggulan / Value Cards -->
    <div style="margin-top: 64px;">
      <h3 style="text-align: center; margin-bottom: 40px; font-size: 1.75rem;">Mengapa Memilih Bonekaku?</h3>
      <div class="pillars-grid">
        <div class="glass-panel reveal-up" style="padding: 28px; text-align: center;">
          <div style="font-size: 2rem; color: var(--brand-gold); margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
          <h4 style="margin-bottom: 8px;">Standar Mutu SNI</h4>
          <p style="font-size: 0.85rem;">Bahan hypoallergenic anti-alergi dan aman bagi segala usia.</p>
        </div>
        <div class="glass-panel reveal-up" style="padding: 28px; text-align: center;">
          <div style="font-size: 2rem; color: var(--brand-gold); margin-bottom: 12px;"><i class="fas fa-drafting-compass"></i></div>
          <h4 style="margin-bottom: 8px;">Akurasi Desain High-Precision</h4>
          <p style="font-size: 0.85rem;">Potongan laser cut & bordir komputer presisi tanpa miss-align.</p>
        </div>
        <div class="glass-panel reveal-up" style="padding: 28px; text-align: center;">
          <div style="font-size: 2rem; color: var(--brand-gold); margin-bottom: 12px;"><i class="fas fa-clock"></i></div>
          <h4 style="margin-bottom: 8px;">Tepat Waktu & Express</h4>
          <p style="font-size: 0.85rem;">Jadwal pengerjaan terikat kontrak dan siap kirim tepat jadwal.</p>
        </div>
        <div class="glass-panel reveal-up" style="padding: 28px; text-align: center;">
          <div style="font-size: 2rem; color: var(--brand-gold); margin-bottom: 12px;"><i class="fas fa-hand-holding-usd"></i></div>
          <h4 style="margin-bottom: 8px;">Harga Pabrik Langsung</h4>
          <p style="font-size: 0.85rem;">Tanpa perantara tangan kedua, menghemat anggaran corporate Anda.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require __DIR__ . '/partials/whatsapp-float.php';
require __DIR__ . '/partials/footer.php';
?>
