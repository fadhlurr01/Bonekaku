<?php
// app/Views/Public/layanan.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>

<section class="section-padding" style="padding-top: 140px;">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">LAYANAN UTAMA</span>
      <h2 class="section-title">4 Pilar Layanan Manufaktur & Custom Bonekaku</h2>
      <p>Pilih pilar layanan di bawah untuk mempelajari keunggulan, spesifikasi bahan, dan galeri pengerjaan.</p>
    </div>

    <div class="services-tabs-container reveal-up">
      <!-- Tab Navigation Sidebar (Desktop) -->
      <div class="tab-nav-vertical">
        <button class="tab-btn-item active" data-tab="tab-souvenir">
          <i class="fas fa-gift" style="color: var(--brand-gold);"></i> Boneka Souvenir
        </button>
        <button class="tab-btn-item" data-tab="tab-bantal">
          <i class="fas fa-couch" style="color: var(--brand-gold);"></i> Bantal Custom
        </button>
        <button class="tab-btn-item" data-tab="tab-custom">
          <i class="fas fa-pencil-ruler" style="color: var(--brand-gold);"></i> Boneka Custom
        </button>
        <button class="tab-btn-item" data-tab="tab-maskot">
          <i class="fas fa-user-ninja" style="color: var(--brand-gold);"></i> Maskot & Badut
        </button>
      </div>

      <!-- Tab Content Panels -->
      <div class="glass-panel" style="padding: 40px;">
        <!-- Tab 1: Boneka Souvenir -->
        <div class="tab-content-panel active" id="tab-souvenir">
          <span class="badge" style="margin-bottom: 12px;">Pilar 1</span>
          <h2 style="font-size: 2rem; margin-bottom: 16px;">Boneka Souvenir Event & Merchandise Corporate</h2>
          <p style="margin-bottom: 20px; color: var(--text-secondary);">
            Layanan pengadaan souvenir boneka mini (10cm - 25cm) berlogo perusahaan untuk merchandise seminar, ulang tahun perusahaan, promosi brand, dan souvenir instansi.
          </p>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 28px;">
            <div style="background: rgba(255,255,255,0.6); padding: 16px; border-radius: var(--radius-sm);">
              <h4 style="color: var(--brand-brown-dark);"><i class="fas fa-check" style="color: var(--brand-green);"></i> Minimal Order Rendah</h4>
              <p style="font-size: 0.85rem;">Menerima pesanan mulai dari 50 pcs hingga puluhan ribu pcs.</p>
            </div>
            <div style="background: rgba(255,255,255,0.6); padding: 16px; border-radius: var(--radius-sm);">
              <h4 style="color: var(--brand-brown-dark);"><i class="fas fa-check" style="color: var(--brand-green);"></i> Packaging Custom</h4>
              <p style="font-size: 0.85rem;">Pilihan packaging tile, box mika, pita satin, dan hangtag promosi.</p>
            </div>
          </div>

          <div style="margin-bottom: 28px;">
            <h4 style="margin-bottom: 12px;">Contoh Hasil Produksi:</h4>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
              <img src="/assets/images/Image-Archie-Bear_eA0g.png" style="border-radius: var(--radius-sm); height: 120px; width: 100%; object-fit: cover;">
              <img src="/assets/images/Boneka-Bear-Luna-20-3Outfit-1536x1121_eA0g.jpg" style="border-radius: var(--radius-sm); height: 120px; width: 100%; object-fit: cover;">
              <img src="/assets/images/Boneka-Bear-Jeslyn-12-outfit-1536x1149_eA0g.jpg" style="border-radius: var(--radius-sm); height: 120px; width: 100%; object-fit: cover;">
            </div>
          </div>

          <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Admin,%20saya%20konsultasi%20Boneka%20Souvenir" target="_blank" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> Konsultasi Boneka Souvenir
          </a>
        </div>

        <!-- Tab 2: Bantal Custom -->
        <div class="tab-content-panel" id="tab-bantal">
          <span class="badge" style="margin-bottom: 12px;">Pilar 2</span>
          <h2 style="font-size: 2rem; margin-bottom: 16px;">Bantal Custom Print Full Color HD</h2>
          <p style="margin-bottom: 20px; color: var(--text-secondary);">
            Bantal cetak digital full color tanpa batas warna. Menggunakan bahan velboa lembut dan dacron murni berkualitas grade A anti-kempes saat dicuci.
          </p>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 28px;">
            <div style="background: rgba(255,255,255,0.6); padding: 16px; border-radius: var(--radius-sm);">
              <h4 style="color: var(--brand-brown-dark);"><i class="fas fa-check" style="color: var(--brand-green);"></i> Cetak Sublimasi HD</h4>
              <p style="font-size: 0.85rem;">Hasil gambar tajam, warna tidak mudah pudar walaupun dicuci berulang kali.</p>
            </div>
            <div style="background: rgba(255,255,255,0.6); padding: 16px; border-radius: var(--radius-sm);">
              <h4 style="color: var(--brand-brown-dark);"><i class="fas fa-check" style="color: var(--brand-green);"></i> Varian Bentuk</h4>
              <p style="font-size: 0.85rem;">Bantal kotak, bulat, bantal leher travel, hingga bantal potong bentuk karakter (die-cut).</p>
            </div>
          </div>

          <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Admin,%20saya%20konsultasi%20Bantal%20Custom" target="_blank" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> Konsultasi Bantal Custom
          </a>
        </div>

        <!-- Tab 3: Boneka Custom -->
        <div class="tab-content-panel" id="tab-custom">
          <span class="badge" style="margin-bottom: 12px;">Pilar 3</span>
          <h2 style="font-size: 2rem; margin-bottom: 16px;">Boneka Custom Karakter & Prototipe Desain</h2>
          <p style="margin-bottom: 20px; color: var(--text-secondary);">
            Realisasikan ide gambar 2D, maskot aplikasi, atau karakter game menjadi boneka 3D bernyawa. Tim desainer sampel kami ahli menerjemahkan proporsi dengan 98% akurasi.
          </p>

          <div style="background: rgba(255,255,255,0.6); padding: 20px; border-radius: var(--radius-sm); margin-bottom: 28px;">
            <h4 style="color: var(--brand-brown-dark); margin-bottom: 8px;">Fasilitas Prototipe 3D:</h4>
            <p style="font-size: 0.9rem;">Setiap pesanan custom massal berhak mendapatkan garansi pembuatan sampel fisik terlebih dahulu sampai disetujui sebelum dimulainya produksi.</p>
          </div>

          <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Admin,%20saya%20konsultasi%20Boneka%20Custom" target="_blank" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> Konsultasi Boneka Custom
          </a>
        </div>

        <!-- Tab 4: Maskot & Badut -->
        <div class="tab-content-panel" id="tab-maskot">
          <span class="badge" style="margin-bottom: 12px;">Pilar 4</span>
          <h2 style="font-size: 2rem; margin-bottom: 16px;">Kostum Maskot Perusahaan & Badut Promosi</h2>
          <p style="margin-bottom: 20px; color: var(--text-secondary);">
            Kostum maskot ukuran manusia dewasa (human-size mascot) untuk branding toko, pameran expo, dan aktivasi event. Ringan, bernapas, dan nyaman dipakai bergerak.
          </p>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 28px;">
            <div style="background: rgba(255,255,255,0.6); padding: 16px; border-radius: var(--radius-sm);">
              <h4 style="color: var(--brand-brown-dark);"><i class="fas fa-check" style="color: var(--brand-green);"></i> Kerangka Busa Ringan</h4>
              <p style="font-size: 0.85rem;">Meminimalkan beban performer saat beratraksi di panggung.</p>
            </div>
            <div style="background: rgba(255,255,255,0.6); padding: 16px; border-radius: var(--radius-sm);">
              <h4 style="color: var(--brand-brown-dark);"><i class="fas fa-check" style="color: var(--brand-green);"></i> Kipas Angin Mini Inside</h4>
              <p style="font-size: 0.85rem;">Dilengkapi exhaust fan mini baterai di dalam kepala maskot.</p>
            </div>
          </div>

          <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Admin,%20saya%20konsultasi%20Maskot%20Badut" target="_blank" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> Konsultasi Maskot & Badut
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/layanan-tabs.js"></script>

<?php
require __DIR__ . '/partials/whatsapp-float.php';
require __DIR__ . '/partials/footer.php';
?>
