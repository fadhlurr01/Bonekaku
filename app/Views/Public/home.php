<?php
// app/Views/Public/home.php
require __DIR__ . '/partials/meta-head.php';
require __DIR__ . '/partials/navbar.php';
?>

<!-- 1. Hero Section -->
<section class="hero-section">
  <div class="container">
    <div class="hero-grid">
      <div class="hero-content reveal-up">
        <span class="badge"><i class="fas fa-certificate"></i> Standar Mutu SNI & Free Prototype 3D</span>
        <h1 class="hero-title">
          PROSES CEPAT, <br>
          BISA CUSTOM &mdash; <br>
          <span class="gradient-text">KAMI JAGONYA!</span>
        </h1>
        <p class="hero-description">
          Anda sudah benar. Boneka-boneka lucu, boneka custom, bantal karakter, bantal custom dapat menjadi pilihan souvenir yang cocok untuk promosi. Kami memiliki aneka pilihan model & desain yang dapat menghiasi momen spesial Anda.
        </p>
        <div class="hero-actions">
          <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Admin%20Bonekaku,%20saya%20ingin%20konsultasi%20pembuatan%20boneka%20custom" target="_blank" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> Kontak Kami Sekarang
          </a>
          <a href="/katalog" class="btn btn-outline">
            <i class="fas fa-th-large"></i> Lihat Katalog
          </a>
        </div>
      </div>

      <div class="hero-card-preview glass-panel reveal-up">
        <img src="/assets/images/Image-Archie-Bear_eA0g.png" alt="Featured Custom Plush Toy">
        <div style="position: absolute; bottom: 28px; left: 28px; right: 28px;" class="glass-panel-strong p-3">
          <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px 16px;">
            <div>
              <h4 style="font-size: 1rem; margin: 0;">Boneka Bear Archie Premium</h4>
              <p style="font-size: 0.8rem; margin: 0; color: var(--brand-gold);">★ Souvenir Favorit Corporate #1</p>
            </div>
            <a href="/katalog" class="btn btn-gold btn-sm">Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2. 4 Pilar Layanan -->
<section class="section-padding">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Layanan Utama Kami</span>
      <h2 class="section-title">Solusi Manufaktur & Custom Boneka Terlengkap</h2>
    </div>

    <div class="pillars-grid">
      <div class="pillar-card glass-panel glass-panel-interactive reveal-up" onclick="window.location.href='/layanan#boneka-souvenir'">
        <div class="pillar-icon"><i class="fas fa-gift"></i></div>
        <h3>Boneka Souvenir</h3>
        <p>Souvenir boneka mini hingga medium untuk promosi perusahaan, event, dan branding eksklusif.</p>
      </div>

      <div class="pillar-card glass-panel glass-panel-interactive reveal-up" onclick="window.location.href='/layanan#bantal-custom'">
        <div class="pillar-icon"><i class="fas fa-couch"></i></div>
        <h3>Bantal Custom</h3>
        <p>Bantal cetak digital HD full color busa dacron murni anti-kempes bebas desain sesukamu.</p>
      </div>

      <div class="pillar-card glass-panel glass-panel-interactive reveal-up" onclick="window.location.href='/layanan#boneka-custom'">
        <div class="pillar-icon"><i class="fas fa-pencil-ruler"></i></div>
        <h3>Boneka Custom</h3>
        <p>Realisasi karakter 2D/3D dari sketsa atau desain maskot menjadi fisik 98% akurat.</p>
      </div>

      <div class="pillar-card glass-panel glass-panel-interactive reveal-up" onclick="window.location.href='/layanan#maskot-badut'">
        <div class="pillar-icon"><i class="fas fa-user-ninja"></i></div>
        <h3>Maskot & Badut</h3>
        <p>Kostum maskot badut promosi dengan kerangka foam ringan dan sirkulasi udara nyaman.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3. Profil Singkat + Proses Cepat -->
<section class="section-padding">
  <div class="container">
    <div class="glass-panel" style="padding: 48px;">
      <div class="hero-grid">
        <div class="reveal-up">
          <span class="badge" style="margin-bottom: 12px;">Tentang Bonekaku</span>
          <h2 style="font-size: 2.25rem; margin-bottom: 16px;">Spesialis Pabrik Boneka & Merchandise Terpercaya</h2>
          <p style="margin-bottom: 16px;">
            Bonekaku.co.id adalah workshop & konveksi pembuatan boneka profesional yang berpengalaman melayani kebutuhan korporasi besar, instansi pemerintah, hingga UMKM di seluruh Indonesia.
          </p>
          <p style="margin-bottom: 24px;">
            Kami menjamin penggunaan bahan berstandar mutu SNI (Yelvo, Velboa, Dacron Silicon Grade A) serta bordir komputer presisi tinggi.
          </p>
          <a href="/tentang-kami" class="btn btn-gold"><i class="fas fa-arrow-right"></i> Selengkapnya Tentang Kami</a>
        </div>
        <div class="glass-panel-strong reveal-up" style="padding: 32px; border-radius: var(--radius-md);">
          <h3 style="color: var(--brand-brown-dark); margin-bottom: 12px;"><i class="fas fa-bolt" style="color: var(--brand-gold);"></i> Proses Cepat Bisa Custom</h3>
          <p style="font-size: 0.95rem; margin-bottom: 16px;">Butuh pengadaan cepat untuk event promosi terdesak? Kami menyediakan jalur express dengan jaminan ketepatan waktu tanpa mengorbankan kualitas.</p>
          <ul style="display: flex; flex-direction: column; gap: 10px; font-weight: 500; font-size: 0.9rem;">
            <li><i class="fas fa-check-circle" style="color: var(--brand-green);"></i> Gratis Prototipe / Sampel Fisik</li>
            <li><i class="fas fa-check-circle" style="color: var(--brand-green);"></i> Kapasitas Produksi Ribuan Pcs/Bulan</li>
            <li><i class="fas fa-check-circle" style="color: var(--brand-green);"></i> Pengiriman Aman Seluruh Indonesia</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. New Product Section -->
<?php if (!empty($newProducts)): ?>
<section class="section-padding">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Produk Terbaru</span>
      <h2 class="section-title">Rilisan Model & Desain Teranyar</h2>
    </div>

    <div class="products-grid">
      <?php foreach ($newProducts as $product): ?>
      <div class="glass-panel product-card reveal-up">
        <div class="product-image-wrap">
          <span class="badge product-tag" style="background: var(--brand-green); color: white;"><i class="fas fa-sparkles"></i> NEW</span>
          <img src="/assets/images/<?= htmlspecialchars($product['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" alt="<?= htmlspecialchars($product['product_name']) ?>" loading="lazy">
        </div>
        <div class="product-body">
          <div>
            <span class="product-category-name"><?= htmlspecialchars($product['category_name'] ?? 'Custom') ?></span>
            <h3 class="product-title"><?= htmlspecialchars($product['product_name']) ?></h3>
          </div>
          <a href="/katalog/<?= htmlspecialchars($product['slug']) ?>" class="btn btn-outline btn-sm" style="width: 100%;">
            Detail Produk
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 5. Katalog Preview Section -->
<section class="section-padding">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Eksplorasi Katalog</span>
      <h2 class="section-title">Pilihan Favorit Pelanggan Kami</h2>
    </div>

    <div class="catalog-filter-pills reveal-up">
      <button class="filter-pill active" data-filter="all">Semua</button>
      <?php foreach ($categories as $cat): ?>
      <button class="filter-pill" data-filter="<?= htmlspecialchars($cat['slug']) ?>"><?= htmlspecialchars($cat['category_name']) ?></button>
      <?php endforeach; ?>
    </div>

    <div class="products-grid" id="catalogPreviewGrid">
      <?php foreach ($allProducts as $product): ?>
      <div class="glass-panel product-card product-item-col reveal-up" data-category="<?= htmlspecialchars($product['category_slug'] ?? '') ?>">
        <div class="product-image-wrap">
          <?php if (!empty($product['is_favorite'])): ?>
            <span class="badge product-tag" style="background: var(--brand-gold); color: white;">★ Favorite</span>
          <?php endif; ?>
          <img src="/assets/images/<?= htmlspecialchars($product['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>" alt="<?= htmlspecialchars($product['product_name']) ?>" loading="lazy">
        </div>
        <div class="product-body">
          <div>
            <span class="product-category-name"><?= htmlspecialchars($product['category_name'] ?? 'Custom') ?></span>
            <h3 class="product-title"><?= htmlspecialchars($product['product_name']) ?></h3>
          </div>
          <div style="display: flex; gap: 8px;">
            <a href="/katalog/<?= htmlspecialchars($product['slug']) ?>" class="btn btn-outline btn-sm" style="flex: 1;">Detail</a>
            <button class="btn btn-gold btn-sm btn-quick-view" 
                    data-name="<?= htmlspecialchars($product['product_name']) ?>"
                    data-category="<?= htmlspecialchars($product['category_name'] ?? 'Custom') ?>"
                    data-img="/assets/images/<?= htmlspecialchars($product['image_path'] ?: 'Image-Archie-Bear_eA0g.png') ?>"
                    data-desc="<?= htmlspecialchars($product['description'] ?? '') ?>">
              Quick View
            </button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align: center; margin-top: 48px;" class="reveal-up">
      <a href="/katalog" class="btn btn-gold"><i class="fas fa-th-large"></i> Lihat Semua Katalog</a>
    </div>
  </div>
</section>

<!-- 6. Special Product (Bean Bag) -->
<section class="section-padding">
  <div class="container">
    <div class="glass-panel" style="padding: 48px;">
      <div class="hero-grid">
        <div class="reveal-up">
          <span class="badge">Special Offer</span>
          <h2 style="font-size: 2rem; margin-top: 10px; margin-bottom: 16px;">Custom Bean Bag & Seat Cushion Premium</h2>
          <p style="margin-bottom: 20px;">
            Bean bag custom logo perusahaan dan tempat duduk santai dengan isian styrofoam butiran halus, cover washable bisa dicuci, dan jahitan double-stitch super kuat.
          </p>
          <div style="background: rgba(255,255,255,0.7); padding: 20px; border-radius: var(--radius-md); margin-bottom: 20px;">
            <h4 style="margin-bottom: 10px; color: var(--brand-brown-dark);">Daftar Ukuran & Varian:</h4>
            <ul style="font-size: 0.9rem; color: var(--text-secondary); display: flex; flex-direction: column; gap: 6px;">
              <li>• Size S (75x110 cm) &mdash; Standar Relax</li>
              <li>• Size M (90x120 cm) &mdash; Comfort Lounge</li>
              <li>• Size L (100x140 cm) &mdash; Executive XL</li>
            </ul>
          </div>
          <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Bonekaku,%20saya%20ingin%20tanya%20harga%20Custom%20Bean%20Bag" target="_blank" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> Tanya Harga Bean Bag
          </a>
        </div>
        <div class="reveal-up">
          <div style="position: relative; padding-top: 56.25%; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--glass-shadow);">
            <iframe style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" 
                    src="https://www.youtube.com/embed/xPcnugruR-w" 
                    title="Bonekaku Workshop Tour Video" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 7. Proses Pemesanan (Accordion) -->
<section class="section-padding">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Alur Kerja</span>
      <h2 class="section-title">4 Langkah Mudah Pemesanan</h2>
    </div>

    <div class="hero-grid">
      <div class="reveal-up">
        <img src="/assets/images/Image-Boneka-Custom-03_eA0g.png" alt="Proses Pengerjaan Bonekaku" style="border-radius: var(--radius-lg); box-shadow: var(--glass-shadow);">
      </div>
      <div class="reveal-up" style="display: flex; flex-direction: column; gap: 16px;">
        <div class="glass-panel" style="padding: 20px 24px; display: flex; gap: 16px; align-items: flex-start;">
          <span class="badge" style="font-size: 1rem; padding: 6px 12px; background: var(--brand-gold); color: white; border: none;">01</span>
          <div>
            <h3 style="font-size: 1.1rem; color: var(--brand-brown-dark); margin: 0;">Konsultasi & Kirim Desain</h3>
            <p style="font-size: 0.9rem; margin-top: 4px; margin-bottom: 0;">Kirimkan gambar 2D/3D atau ide karakter melalui WhatsApp admin kami.</p>
          </div>
        </div>
        <div class="glass-panel" style="padding: 20px 24px; display: flex; gap: 16px; align-items: flex-start;">
          <span class="badge" style="font-size: 1rem; padding: 6px 12px; background: var(--brand-green); color: white; border: none;">02</span>
          <div>
            <h3 style="font-size: 1.1rem; color: var(--brand-brown-dark); margin: 0;">Approval Prototipe 3D Gratis</h3>
            <p style="font-size: 0.9rem; margin-top: 4px; margin-bottom: 0;">Tim desainer kami membuat sampel fisik hingga sesuai dengan preferensi Anda.</p>
          </div>
        </div>
        <div class="glass-panel" style="padding: 20px 24px; display: flex; gap: 16px; align-items: flex-start;">
          <span class="badge" style="font-size: 1rem; padding: 6px 12px; background: var(--brand-gold); color: white; border: none;">03</span>
          <div>
            <h3 style="font-size: 1.1rem; color: var(--brand-brown-dark); margin: 0;">Produksi Massal Presisi</h3>
            <p style="font-size: 0.9rem; margin-top: 4px; margin-bottom: 0;">Proses pemotongan bahan laser cut & pembordiran komputer berstandar mutu SNI.</p>
          </div>
        </div>
        <div class="glass-panel" style="padding: 20px 24px; display: flex; gap: 16px; align-items: flex-start;">
          <span class="badge" style="font-size: 1rem; padding: 6px 12px; background: var(--brand-green); color: white; border: none;">04</span>
          <div>
            <h3 style="font-size: 1.1rem; color: var(--brand-brown-dark); margin: 0;">Quality Control & Pengiriman</h3>
            <p style="font-size: 0.9rem; margin-top: 4px; margin-bottom: 0;">Pemeriksaan kualitas 100% dan pengemasan rapi siap kirim ke seluruh kota.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 8. Testimoni -->
<section class="section-padding">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Ulasan Klien</span>
      <h2 class="section-title">Apa Kata Mereka Tentang Bonekaku?</h2>
    </div>

    <div class="pillars-grid" style="grid-template-columns: repeat(3, 1fr);">
      <div class="glass-panel reveal-up" style="padding: 28px;">
        <div style="color: var(--brand-gold); margin-bottom: 12px;">★★★★★</div>
        <p style="font-size: 0.95rem; font-style: italic; margin-bottom: 20px;">"Hasil maskot badut perusahaan kami sangat sesuai gambar. Kerangka ringan dan nyaman dipakai performer seharian saat launching produk!"</p>
        <h4 style="font-size: 1rem;">Budi Santoso</h4>
        <p style="font-size: 0.8rem; color: var(--brand-gold);">Brand Manager Corporate</p>
      </div>

      <div class="glass-panel reveal-up" style="padding: 28px;">
        <div style="color: var(--brand-gold); margin-bottom: 12px;">★★★★★</div>
        <p style="font-size: 0.95rem; font-style: italic; margin-bottom: 20px;">"Pesan 2000 pcs souvenir boneka bear wisuda untuk event kampus. Hasil bordir logo sangat rapi dan selesai sebelum deadline!"</p>
        <h4 style="font-size: 1rem;">Siti Rahmawati</h4>
        <p style="font-size: 0.8rem; color: var(--brand-gold);">Panitia Event Kampus</p>
      </div>

      <div class="glass-panel reveal-up" style="padding: 28px;">
        <div style="color: var(--brand-gold); margin-bottom: 12px;">★★★★★</div>
        <p style="font-size: 0.95rem; font-style: italic; margin-bottom: 20px;">"Bantal custom cetak fotonya halus banget, bahan dacronnya kenyal gak gampang kempes. Rekomended banget buat merchandise!"</p>
        <h4 style="font-size: 1rem;">Kevin Wijaya</h4>
        <p style="font-size: 0.8rem; color: var(--brand-gold);">Creative Lead Agency</p>
      </div>
    </div>
  </div>
</section>

<!-- 9. Customer Kami (Marquee Logo) -->
<section class="section-padding">
  <div class="container">
    <div class="section-header reveal-up">
      <span class="section-subtitle">Kepercayaan Klien</span>
      <h2 class="section-title">Dipercaya Oleh Perusahaan Terkemuka</h2>
    </div>

    <div class="glass-panel marquee-container reveal-up">
      <div class="marquee-track">
        <div class="client-logo-item"><img src="/assets/images/Astra-Daihatsu_eA0g.png" alt="Astra Daihatsu"></div>
        <div class="client-logo-item"><img src="/assets/images/BNI_eA0g.png" alt="BNI"></div>
        <div class="client-logo-item"><img src="/assets/images/Dipostar_eA0g.png" alt="Dipostar"></div>
        <div class="client-logo-item"><img src="/assets/images/Ibis-Hotel_eA0g.png" alt="Ibis Hotel"></div>
        <div class="client-logo-item"><img src="/assets/images/Indofood_eA0g.png" alt="Indofood"></div>
        <div class="client-logo-item"><img src="/assets/images/Mandiri_eA0g.png" alt="Mandiri"></div>
        <div class="client-logo-item"><img src="/assets/images/Rumah-Sakit-Haji_eA0g.png" alt="Rumah Sakit Haji"></div>
        <div class="client-logo-item"><img src="/assets/images/Rumah-Sakit-Siloam_eA0g.png" alt="Rumah Sakit Siloam"></div>
        <div class="client-logo-item"><img src="/assets/images/Telkomsel_eA0g.png" alt="Telkomsel"></div>
        <div class="client-logo-item"><img src="/assets/images/Toyota_eA0g.png" alt="Toyota"></div>
        <!-- Duplicate for infinite seamless loop -->
        <div class="client-logo-item"><img src="/assets/images/Astra-Daihatsu_eA0g.png" alt="Astra Daihatsu"></div>
        <div class="client-logo-item"><img src="/assets/images/BNI_eA0g.png" alt="BNI"></div>
        <div class="client-logo-item"><img src="/assets/images/Indofood_eA0g.png" alt="Indofood"></div>
        <div class="client-logo-item"><img src="/assets/images/Telkomsel_eA0g.png" alt="Telkomsel"></div>
      </div>
    </div>
  </div>
</section>

<!-- Quick View Modal Container -->
<div class="glass-modal-overlay" id="quickViewModal">
  <div class="glass-modal-body">
    <button id="closeModalBtn" style="position: absolute; top: 16px; right: 20px; background: none; border: none; font-size: 1.5rem; cursor: pointer; color: var(--text-secondary);">&times;</button>
    <div class="hero-grid">
      <div>
        <img id="modalProductImg" src="" alt="Product Quick View" style="width:100%; border-radius: var(--radius-md); object-fit: cover;">
      </div>
      <div style="display: flex; flex-direction: column; justify-content: center;">
        <span id="modalProductCategory" class="badge" style="margin-bottom: 8px;">Category</span>
        <h3 id="modalProductTitle" style="font-size: 1.5rem; margin-bottom: 12px;">Product Title</h3>
        <p id="modalProductDesc" style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 20px;"></p>
        <a id="modalWaBtn" href="#" target="_blank" class="btn btn-primary"><i class="fab fa-whatsapp"></i> Pesan via WhatsApp</a>
      </div>
    </div>
  </div>
</div>

<script src="/assets/js/filter-katalog.js"></script>

<?php
require __DIR__ . '/partials/whatsapp-float.php';
require __DIR__ . '/partials/footer.php';
?>
