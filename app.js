/* ==========================================================================
   BONEKAKU - ULTIMATE INTERACTIVE APP LOGIC & ANIMATIONS (app.js)
   Pusat Souvenir dan Boneka Terlengkap #1 di Indonesia
   ========================================================================== */

// --------------------------------------------------------------------------
// 1. COMPLETE PRODUCT CATALOG DATABASE (100% ALL WORKSPACE PRODUCT ASSETS)
// --------------------------------------------------------------------------
// Base image library from workspace files
const imagePool = [
  "Image-Archie-Bear-1030x729_eA0g.png",
  "Boneka-Bear-Arnold-20-3outfit-1536x1152_eA0g.jpg",
  "Boneka-Bear-Kempinski-22-3outfit-1536x1152_eA0g.jpg",
  "Boneka-Bear-Bobby-18-outfit2-1536x1152_eA0g.jpg",
  "Boneka-Bear-Jeslyn-12-outfit-1536x1149_eA0g.jpg",
  "Boneka-Bear-Luna-20-3Outfit-1536x1121_eA0g.jpg",
  "Boneka-Bear-Mayna-3outfit-1536x1152_eA0g.jpg",
  "Boneka-Bear-Vico-3outfit-1536x1149_eA0g.jpg",
  "Boneka-Bear-Boy-Girl-outfit-1536x1152_eA0g.jpg",
  "Image-Badut-1030x729_eA0g.png",
  "Image-Bantal-06-1030x729_eA0g.png",
  "Image-Graduation-series-04-1030x729_eA0g.png",
  "Image-Clown-Fish-1030x729_eA0g.png",
  "Image-Custom-05-1030x729_eA0g.png",
  "Slider-Masker-Product-1030x729_eA0g.jpg",
  "Image-Boneka-Custom-03-1030x729_eA0g.png",
  "hud-hud-tours_eA0g.jpg"
];

function generateCompleteCatalog() {
  const mostFavoriteItems = [
    {
      id: 1,
      title: "Bear Jeslyn, 12cm",
      category: "favorite",
      categoryLabel: "Most Favorite",
      size: "12cm",
      image: "Boneka-Bear-Jeslyn-12-outfit-1536x1149_eA0g.jpg",
      moq: "Min 50 Pcs",
      priceRange: "Rp 35.000 – 65.000",
      desc: "Boneka Souvenir Bear Jeslyn ukuran 12cm dengan busana custom logo perusahaan. Terbuat dari bahan Yelvo Super Soft dan isian Dakron Silicon Grade A.",
      specs: ["Bahan Super Soft Yelvo", "Isian Dakron Silicon Grade A", "100% Sertifikasi SNI", "Custom Logo Embroidery"]
    },
    {
      id: 2,
      title: "Bear Vico, 15cm",
      category: "favorite",
      categoryLabel: "Most Favorite",
      size: "15cm",
      image: "Boneka-Bear-Vico-3outfit-1536x1149_eA0g.jpg",
      moq: "Min 50 Pcs",
      priceRange: "Rp 42.000 – 75.000",
      desc: "Boneka Souvenir Bear Vico ukuran 15cm favorit corporate gift set. Baju kaos dapat dicetak logo brand presisi tinggi.",
      specs: ["Bahan Super Soft Yelvo", "Isian Dakron Silicon Grade A", "100% Sertifikasi SNI", "Pilihan 3 Model Outfit"]
    },
    {
      id: 3,
      title: "Bear Mayna, 15cm",
      category: "favorite",
      categoryLabel: "Most Favorite",
      size: "15cm",
      image: "Boneka-Bear-Mayna-3outfit-1536x1152_eA0g.jpg",
      moq: "Min 50 Pcs",
      priceRange: "Rp 45.000 – 80.000",
      desc: "Boneka Bear Mayna 15cm edisi khusus merchandise acara perusahaan. Jahitan presisi rapi dengan bulu lembut halus.",
      specs: ["Bahan Super Soft Yelvo", "Isian Dakron Silicon Grade A", "100% Sertifikasi SNI", "Custom Color Shirt"]
    },
    {
      id: 4,
      title: "Bear Bobby, 18cm",
      category: "favorite",
      categoryLabel: "Most Favorite",
      size: "18cm",
      image: "Boneka-Bear-Bobby-18-outfit2-1536x1152_eA0g.jpg",
      moq: "Min 50 Pcs",
      priceRange: "Rp 50.000 – 85.000",
      desc: "Boneka Bear Bobby 18cm top seller untuk souvenir promosi kantor, event corporate, dan merchandise pameran.",
      specs: ["Bahan Super Soft Yelvo", "Isian Dakron Silicon Grade A", "100% Sertifikasi SNI", "Free Sample 3D Design"]
    },
    {
      id: 5,
      title: "Bear Boy Girl, 20cm standing",
      category: "favorite",
      categoryLabel: "Most Favorite",
      size: "20cm",
      image: "Boneka-Bear-Boy-Girl-outfit-1536x1152_eA0g.jpg",
      moq: "Min 50 Pcs",
      priceRange: "Rp 55.000 – 90.000",
      desc: "Boneka sepasang Bear Boy & Girl 20cm standing position. Sangat diminati untuk hadiah wisuda, event pernikahan, dan souvenir eksklusif.",
      specs: ["Bahan Super Soft Yelvo", "Isian Dakron Silicon Grade A", "100% Sertifikasi SNI", "Standing Position Frame"]
    },
    {
      id: 6,
      title: "Bear Kempinski, 22cm",
      category: "favorite",
      categoryLabel: "Most Favorite",
      size: "22cm",
      image: "Boneka-Bear-Kempinski-22-3outfit-1536x1152_eA0g.jpg",
      moq: "Min 50 Pcs",
      priceRange: "Rp 65.000 – 95.000",
      desc: "Boneka Plush Bear Kempinski 22cm ukuran besar eksklusif hotel & corporate gift. Bahan berkualitas tinggi super empuk.",
      specs: ["Bahan Super Soft Yelvo", "Isian Dakron Silicon Grade A", "100% Sertifikasi SNI", "Eksklusif Outfit Custom"]
    }
  ];

  const otherCategoriesConfig = [
    { key: "animal-series", label: "Animal Series", count: 12, prefix: "Animal Plushie", size: "15cm" },
    { key: "bantal-custom", label: "Bantal Custom", count: 14, prefix: "Bantal Custom Print", size: "30cm" },
    { key: "boneka-custom", label: "Boneka Custom", count: 18, prefix: "Boneka Custom Brand", size: "18cm" },
    { key: "boneka-souvenir", label: "Boneka Souvenir", count: 16, prefix: "Souvenir Plush Edition", size: "12cm" },
    { key: "graduation-series", label: "Graduation Series", count: 7, prefix: "Boneka Wisuda Toga", size: "20cm" },
    { key: "maskot-badut", label: "Maskot/Badut", count: 1, prefix: "Kostum Maskot Badut Event", size: "50cm" },
    { key: "masker", label: "Masker", count: 1, prefix: "Plush Masker Custom Print", size: "12cm" },
    { key: "new-animal-series", label: "New Animal Series", count: 25, prefix: "New Edition Animal Plush", size: "15cm" }
  ];

  let idCounter = 7;
  const list = [...mostFavoriteItems];

  otherCategoriesConfig.forEach(cfg => {
    for (let i = 1; i <= cfg.count; i++) {
      const img = imagePool[(idCounter - 1) % imagePool.length];
      list.push({
        id: idCounter,
        title: `${cfg.prefix} ${i > 1 ? 'Series #' + i : ''}`,
        category: cfg.key,
        categoryLabel: cfg.label,
        size: cfg.size,
        image: img,
        moq: i % 2 === 0 ? "50 Pcs" : "100 Pcs",
        priceRange: i % 3 === 0 ? "Rp 45.000 - 85.000" : "Rp 32.000 - 65.000",
        desc: `Produk ${cfg.label} berkualitas tinggi dengan jahitan presisi, bahan yelvo super halus, dan sertifikasi SNI resmi.`,
        specs: ["Bahan Super Soft Yelvo", "Isian Dakron Silicon Grade A", "SNI Certified", "Custom Logo Embroidery"]
      });
      idCounter++;
    }
  });

  return list;
}

function getLiveProductsData() {
  const fullDefaults = generateCompleteCatalog();
  const stored = localStorage.getItem('bonekaku_products');
  
  if (!stored) {
    localStorage.setItem('bonekaku_products', JSON.stringify(fullDefaults));
    return fullDefaults;
  }
  
  try {
    const parsed = JSON.parse(stored);
    if (Array.isArray(parsed) && parsed.length > 0) {
      const catAliasMap = {
        'souvenir': 'boneka-souvenir',
        'bantal': 'bantal-custom',
        'custom': 'boneka-custom',
        'badut': 'maskot-badut'
      };

      const customAdminProds = [];
      const userEditedMap = new Map();

      parsed.forEach(item => {
        const cat = catAliasMap[item.category] || item.category || 'boneka-souvenir';
        const cleaned = {
          ...item,
          category: cat,
          size: (item.size && item.size !== 'undefined') ? item.size : '20cm',
          moq: (item.moq && item.moq !== 'undefined') ? item.moq : 'Min 50 Pcs',
          priceRange: (item.priceRange && item.priceRange !== 'undefined') ? item.priceRange : 'Rp 45.000 – 75.000'
        };

        if ((typeof item.id === 'number' && item.id > 1000) || typeof item.id === 'string') {
          customAdminProds.push(cleaned);
        } else {
          userEditedMap.set(item.id, cleaned);
        }
      });

      const mergedDefaults = fullDefaults.map(def => {
        return userEditedMap.has(def.id) ? userEditedMap.get(def.id) : def;
      });

      const result = [...customAdminProds, ...mergedDefaults];
      localStorage.setItem('bonekaku_products', JSON.stringify(result));
      return result;
    }
  } catch(e) {}
  
  localStorage.setItem('bonekaku_products', JSON.stringify(fullDefaults));
  return fullDefaults;
}

function getLiveArticlesData() {
  const defaultArticles = [
    {
      id: 1,
      title: "Bantal Merchandise, Kenyamanan yang Membekas untuk Customer Anda",
      category: "Merchandise Corporate",
      author: "Bonekaku.co.id",
      date: "15 Juni 2021",
      status: "Published",
      image: "Image-Bantal-06-1030x729_eA0g.png",
      summary: "Industri boneka kini sudah semakin luas mengembangkan sayapnya. Tidak hanya souvenir boneka beruang, kini bantal leher merchandise custom print menjadi pilihan kenyamanan terbaik bagi customer Anda.",
      body: "Industri souvenir dan merchandise kini semakin luas berkembang. Bantal leher custom print berbahan kain Yelvo halus kini menjadi pilihan utama perusahaan penerbangan, travel agent, dan korporasi untuk memberikan kesan kenyamanan yang tak terlupakan kepada para pelanggan setia."
    },
    {
      id: 2,
      title: "Peranan Maskot Boneka bagi Sebuah Perusahaan",
      category: "Branding Strategy",
      author: "Bonekaku.co.id",
      date: "19 Mei 2021",
      status: "Published",
      image: "Image-Badut-1030x729_eA0g.png",
      summary: "Anda pasti sudah tidak asing dengan maskot, bukan? Ya, maskot berbentuk boneka dan badut event terbukti ampuh memperkuat identitas brand serta menciptakan hubungan emosional yang erat.",
      body: "Maskot perusahaan bukan sekadar kostum hiburan, melainkan investasi branding jangka panjang yang merepresentasikan karakter, nilai, dan profesionalisme bisnis Anda di mata konsumen saat pameran maupun acara nasional."
    },
    {
      id: 3,
      title: "Mencuci Boneka dengan Mesin Cuci, Ini Tips dan Trik nya!",
      category: "Tips & Trik",
      author: "Bonekaku.co.id",
      date: "19 Mei 2021",
      status: "Published",
      image: "Boneka-Bear-Luna-20-3Outfit-1536x1121_eA0g.jpg",
      summary: "Bagi Anda yang hobi mengoleksi boneka, tentu ingin boneka kesayangan selalu bersih dan harum. Simak panduan aman mencuci boneka menggunakan mesin cuci tanpa merusak serat kain.",
      body: "Mencuci boneka dengan mesin cuci memerlukan perhatian khusus pada setelan putaran (gentle wash) dan penggunaan kantong cuci (laundry bag). Gunakan deterjen lembut berbahan cair dan hindari pengering panas agar bulu kain halus tidak menggumpal."
    },
    {
      id: 4,
      title: "Bonekaku Sebagai Produsen Beanbag di Jabodetabek",
      category: "Product Showcase",
      author: "Bonekaku.co.id",
      date: "4 Januari 2021",
      status: "Published",
      image: "hud-hud-tours_eA0g.jpg",
      summary: "Halo sobat pecinta bonekaku, kini Bonekaku telah memproduksi beanbag empuk berkualitas tinggi dengan aneka ukuran dan pilihan warna paling estetik untuk rumah & cafe Anda.",
      body: "Bonekaku Enterprise memperluas jangkauan manufaktur dengan menghadirkan Bean Bag Bonekaku Bento Series. Terbuat dari double cover water-repellent dan isian butiran styrofoam Grade A anti-kempes."
    },
    {
      id: 5,
      title: "Cara Mudah Memilih Bean Bag Yang Nyaman & Awet",
      category: "Tips & Trik",
      author: "Bonekaku.co.id",
      date: "23 Desember 2020",
      status: "Published",
      image: "Slider-Masker-Product-1030x729_eA0g.jpg",
      summary: "Jauh sebelum Beanbag populer, tempat duduk santai ini telah menjadi pilihan favorit relaksasi. Ketahui tips memilih bahan cover dan kerapatan isian styrofoam terbaik.",
      body: "Memilih bean bag yang tepat memerlukan perhatian pada resleting ganda (double zipper safety) dan kualitas bahan kain luar yang mudah dilepas untuk dicuci."
    },
    {
      id: 6,
      title: "5 Tempat Penyimpanan Boneka Agar Terlihat Rapi",
      category: "Tips & Trik",
      author: "Bonekaku.co.id",
      date: "10 Oktober 2020",
      status: "Published",
      image: "Boneka-Bear-Jeslyn-12-outfit-1536x1149_eA0g.jpg",
      summary: "Tak dipungkiri bahwa terkadang boneka koleksi yang sudah kita beli menumpuk di kamar. Berikut 5 ide rak estetik dan hammock jaring untuk menata koleksi boneka Anda.",
      body: "Menata boneka tidak harus memakan tempat. Gunakan rak dinding melayang, keranjang kain katun, atau gantungan pouch gantung agar kamar tidur tetap rapi dan estetik."
    },
    {
      id: 7,
      title: "Cara Merawat dan Mencuci Boneka Supaya Tetap Kece",
      category: "Perawatan Boneka",
      author: "Bonekaku.co.id",
      date: "25 September 2020",
      status: "Published",
      image: "Boneka-Bear-Vico-3outfit-1536x1149_eA0g.jpg",
      summary: "Walau tidak terlihat kotor, boneka kesayangan tetap perlu dibersihkan secara rutin dari debu mikroskopis agar bebas dari alergen dan bau apek.",
      body: "Lakukan penyedotan debu ringan dengan vacuum cleaner bermoncong halus setiap minggu, dan jemur boneka di tempat teduh bersirkulasi udara baik."
    },
    {
      id: 8,
      title: "Product Baru Bonekaku Disaat Pandemi",
      category: "Product News",
      author: "Bonekaku.co.id",
      date: "25 September 2020",
      status: "Published",
      image: "Slider-Masker-Product-1030x729_eA0g.jpg",
      summary: "Halo sahabat bonekaku salam bahagia. Semoga selalu dilimpahkan kesehatan. Bonekaku menghadirkan inovasi masker plushie custom dan pouch medis steril.",
      body: "Di masa adaptasi kebiasaan baru, Bonekaku memproduksi masker kain 3-ply berbahan katun berstandar medis dengan cetakan logo custom brand yang dapat dicuci berulang kali."
    },
    {
      id: 9,
      title: "Inspirasi Boneka Sebagai Objek Usaha Kemitraan",
      category: "Ide Bisnis",
      author: "Bonekaku.co.id",
      date: "27 Agustus 2020",
      status: "Published",
      image: "Image-Archie-Bear-1030x729_eA0g.png",
      summary: "Beberapa negara di dunia sudah mulai memasuki tren cafe bertema boneka. Bisnis merchandise boneka custom kini menjadi peluang usaha beromzet tinggi.",
      body: "Peluang bisnis souvenir boneka custom tidak pernah padam karena kebutuhan acara wisuda, ulang tahun, merchandise pernikahan, dan branding kantor terus meningkat sepanjang tahun."
    },
    {
      id: 10,
      title: "Jangan Remehkan Manfaat Anak Bermain Boneka",
      category: "Edukasi & Manfaat",
      author: "Bonekaku.co.id",
      date: "26 Agustus 2020",
      status: "Published",
      image: "Boneka-Bear-Arnold-20-3outfit-1536x1152_eA0g.jpg",
      summary: "Bagi anak-anak, boneka bukan sekadar mainan kesayangan. Bermain boneka terbukti melatih empati, daya imajinasi, dan keterampilan komunikasi verbal.",
      body: "Studi psikologi anak menunjukkan bahwa role-play dengan boneka dapat merangsang perkembangan sosial emosional dan rasa kepedulian terhadap lingkungan sekitar."
    },
    {
      id: 11,
      title: "Peran Maskot untuk Perusahaan & Branding Event",
      category: "Branding Strategy",
      author: "Bonekaku.co.id",
      date: "20 Juli 2020",
      status: "Published",
      image: "Image-Badut-1030x729_eA0g.png",
      summary: "Pembuatan maskot bagi perusahaan atau UMKM merupakan sebuah strategi branding modern yang sangat efektif menarik perhatian konsumen di era digital.",
      body: "Maskot menghidupkan karakter brand Anda dalam pameran dan media sosial. Bonekaku siap mewujudkan maskot 3D Anda dari sketsa sketsa menjadi kenyataan."
    },
    {
      id: 12,
      title: "Alasan kenapa harus memberikan Boneka sebagai merchandise.",
      category: "Merchandise Corporate",
      author: "Bonekaku.co.id",
      date: "20 Juli 2020",
      status: "Published",
      image: "Boneka-Bear-Boy-Girl-outfit-1536x1152_eA0g.jpg",
      summary: "Dalam memberikan kenang-kenangan atau merchandise bagi pelanggan, lebih baik memilih produk yang berdaya pakai tinggi, menggemaskan, dan tahan lama.",
      body: "Boneka souvenir terbukti disimpan dalam jangka waktu lama di meja kerja atau mobil pelanggan, sehingga pesan promosi brand Anda terus diingat setiap hari."
    },
    {
      id: 13,
      title: "Kain Boneka terbaik untuk di produksi masal",
      category: "Bahan & Material",
      author: "Bonekaku.co.id",
      date: "20 Juli 2020",
      status: "Published",
      image: "Image-Custom-05-1030x729_eA0g.png",
      summary: "Dalam memproduksi boneka dengan jumlah massal yang banyak, Bonekaku tidak serta-merta memilih kain biasa. Kami menggunakan Yelvo Super Soft certified SNI.",
      body: "Kain Yelvo Super Soft pilihan pabrik Bonekaku memiliki keunggulan serat halus tidak gampang rontok, ramah lingkungan, serta sangat lembut saat dipeluk."
    },
    {
      id: 14,
      title: "Produksi Boneka Partai Besar dengan Kualitas Material Terjamin dari Bonekaku.",
      category: "Manufaktur Massal",
      author: "Bonekaku.co.id",
      date: "20 Juli 2020",
      status: "Published",
      image: "Boneka-Bear-Kempinski-22-3outfit-1536x1152_eA0g.jpg",
      summary: "Bonekaku Store membuat banyak boneka beruang dan maskot favorit untuk diproduksi secara massal ribuan pcs per minggu dengan QC ketat.",
      body: "Kapasitas pabrik manufaktur Bonekaku didukung oleh mesin lasercut presisi dan puluhan penjahit ahli berpengalaman untuk pesanan ribuan pcs tepat waktu."
    },
    {
      id: 15,
      title: "Apa itu Boneka Souvenir atau Promosi ??",
      category: "Edukasi Souvenir",
      author: "Bonekaku.co.id",
      date: "10 Mei 2018",
      status: "Published",
      image: "Boneka-Bear-Mayna-3outfit-1536x1152_eA0g.jpg",
      summary: "Boneka Souvenir atau Boneka Promosi adalah boneka yang dipesan untuk Souvenir ulang tahun, Souvenir Aqiqah, Souvenir satu bulanan, hingga promosi perusahaan.",
      body: "Souvenir boneka custom merupakan media promosi yang sangat disukai konsumen dari segala usia. Desain baju, warna kain, dan logo dapat disesuaikan sepenuhnya."
    },
    {
      id: 16,
      title: "Mengenal Jenis – Jenis Bahan Boneka",
      category: "Bahan & Material",
      author: "Bonekaku.co.id",
      date: "8 Mei 2018",
      status: "Published",
      image: "Image-Clown-Fish-1030x729_eA0g.png",
      summary: "Ketahui perbedaan serat kain Yelvo, Velboa, Nylex, Rasfur, hingga Snail rose sebelum memesan boneka custom agar hasil jahitan presisi dan bentuk sempurna.",
      body: "Setiap jenis kain boneka memiliki peruntukan tersendiri: Yelvo untuk kelembutan ekstra 3D, Velboa untuk bantal print, Rasfur untuk bulu lebat, dan Nylex untuk aksesoris."
    }
  ];

  const stored = localStorage.getItem('bonekaku_articles');
  if (!stored) {
    localStorage.setItem('bonekaku_articles', JSON.stringify(defaultArticles));
    return defaultArticles;
  }

  try {
    const parsed = JSON.parse(stored);
    if (Array.isArray(parsed) && parsed.length > 0) {
      const customAdminArticles = parsed.filter(a => typeof a.id === 'string' || (typeof a.id === 'number' && a.id > 1000));
      const userEditedMap = new Map();
      parsed.forEach(a => { if (typeof a.id === 'number' && a.id <= 100) userEditedMap.set(a.id, a); });

      const mergedDefaults = defaultArticles.map(def => userEditedMap.has(def.id) ? userEditedMap.get(def.id) : def);
      const result = [...customAdminArticles, ...mergedDefaults];
      localStorage.setItem('bonekaku_articles', JSON.stringify(result));
      return result;
    }
  } catch(e) {}

  localStorage.setItem('bonekaku_articles', JSON.stringify(defaultArticles));
  return defaultArticles;
}

const productsData = getLiveProductsData();

// --------------------------------------------------------------------------
// 2. REAL WORKSHOP & FACTORY GALLERY DATABASE (ALL WHATSAPP PHOTOS)
// --------------------------------------------------------------------------
const workshopGalleryData = [
  { title: "Proses Pemotongan Bahan Kain & Pola", desc: "Mesin laser cutting presisi untuk ribuan pola kain", image: "WhatsApp-Image-2020-08-26-at-8.43.39-AM-1030x1030_eA0g.jpeg" },
  { title: "Proses Pembordiran Logo Komputer", desc: "Mesin bordir otomatis multi-head kualitas tinggi", image: "WhatsApp-Image-2020-08-26-at-8.43.40-AM-1-1030x1030_eA0g.jpeg" },
  { title: "Proses Penjahitan & Sewing Workshop", desc: "Tenaga ahli jahit profesional berstandar SNI", image: "WhatsApp-Image-2020-08-26-at-8.43.40-AM-1030x1030_eA0g.jpeg" },
  { title: "Pengisian Dakron Silicone Grade A", desc: "Mesin pengisi dakron otomatis empuk anti kempes", image: "WhatsApp-Image-2020-08-26-at-8.43.40-AM-2-1030x1030_eA0g.jpeg" },
  { title: "Tahap Finishing & Quality Control", desc: "Inspeksi kerapian jahitan, kebersihan, & detail", image: "WhatsApp-Image-2020-08-26-at-8.43.41-AM-1-1030x1030_eA0g.jpeg" },
  { title: "Pengemasan Box & Pouch Eksklusif", desc: "Packaging rapi siap distribusikan ke klien", image: "WhatsApp-Image-2020-08-26-at-8.43.41-AM-1030x1030_eA0g.jpeg" },
  { title: "Pengiriman Massal Ekspedisi Kargo", desc: "Distribusi aman ke seluruh kota di Indonesia", image: "WhatsApp-Image-2020-08-26-at-8.43.42-AM-1-1030x1030_eA0g.jpeg" },
  { title: "Gudang Penyimpanan Ready Stock", desc: "Kapasitas produksi siap tampung pesanan besar", image: "WhatsApp-Image-2020-08-26-at-8.43.42-AM-1030x1030_eA0g.jpeg" }
];

// --------------------------------------------------------------------------
// 3. INITIALIZATION ON DOM READY
// --------------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', () => {
  initThemeToggle();
  initHeaderScroll();
  initMobileMenu();
  initActiveNavPage();
  initScrollRevealObserver();
  initCursorParallaxScene();
  
  const isHomePage = !document.getElementById('catalogSidebar');
  const liveProds = getLiveProductsData();
  
  if (isHomePage) {
    renderProducts(liveProds.slice(0, 8));
  } else {
    initCatalogFilters();
  }

  // Render articles dynamically if on artikel.html page
  renderPublicArticles();

  renderWorkshopGallery(workshopGalleryData);
  initCatalogSearch();
  initEstimatorCalculator();
  initFaqAccordion();
  initStatsCounter();
  initWhatsAppDrawer();
  initTestimonialCarousel();
  initBackToTop();
  initHero3DTilt();
  initAutoProductSlider();
});

function renderPublicArticles() {
  const grid = document.getElementById('articlesGrid');
  if (!grid) return;

  const articles = getLiveArticlesData();
  const publishedArticles = articles.filter(a => !a.status || a.status.toLowerCase() === 'published');

  if (publishedArticles.length === 0) {
    grid.innerHTML = `
      <div style="grid-column: 1/-1; text-align: center; padding: 4rem 1rem; color: var(--text-muted);">
        <i class="fas fa-newspaper" style="font-size: 3.5rem; margin-bottom: 1rem; color:var(--accent-gold);"></i>
        <p style="font-size: 1.15rem; font-weight:700;">Belum ada artikel yang dipublikasikan.</p>
      </div>
    `;
    return;
  }

  grid.innerHTML = publishedArticles.map((a, idx) => `
    <div class="article-card reveal-up delay-${(idx % 3) + 1}" onclick="window.location.href='artikel-detail.html?id=${a.id}'">
      <div class="article-img-wrapper">
        <img src="${a.image}" alt="${a.title}" class="article-img" onerror="this.onerror=null; this.src='Logo-Baru-Bonekaku-600x163_eA0g.png';">
        <span class="article-category">${a.category}</span>
      </div>
      <div class="article-body">
        <span class="article-date"><i class="far fa-calendar-alt"></i> ${a.date} &bull; oleh ${a.author || 'Admin'}</span>
        <h3 onclick="window.location.href='artikel-detail.html?id=${a.id}'; event.stopPropagation();">${a.title}</h3>
        <p>${a.summary}</p>
        <a href="artikel-detail.html?id=${a.id}" onclick="event.stopPropagation();" class="article-read-more">
          Read More <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  `).join('');
}

function initScrollRevealObserver() {
  const revealElements = document.querySelectorAll('.reveal-up, .reveal-scale');
  
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
        }
      });
    }, {
      threshold: 0.01,
      rootMargin: "100px 0px 100px 0px"
    });

    revealElements.forEach(el => observer.observe(el));
  } else {
    revealElements.forEach(el => el.classList.add('is-visible'));
  }

  // Ensure all elements become visible immediately
  revealElements.forEach(el => el.classList.add('is-visible'));
}

function initCursorParallaxScene() {
  const parallaxElements = document.querySelectorAll('.floating-shape, .hero-3d-particle, .hero-bg-glow');
  if (!parallaxElements.length) return;

  let mouseX = 0;
  let mouseY = 0;
  let targetX = 0;
  let targetY = 0;
  let isMoving = false;

  window.addEventListener('mousemove', (e) => {
    targetX = (e.clientX - window.innerWidth / 2);
    targetY = (e.clientY - window.innerHeight / 2);
    if (!isMoving) {
      isMoving = true;
      requestAnimationFrame(updateParallax);
    }
  });

  function updateParallax() {
    mouseX += (targetX - mouseX) * 0.05;
    mouseY += (targetY - mouseY) * 0.05;

    parallaxElements.forEach((el, idx) => {
      const depth = ((idx % 4) + 1) * 0.015;
      const moveX = mouseX * depth;
      const moveY = mouseY * depth;
      el.style.transform = `translate3d(${moveX.toFixed(2)}px, ${moveY.toFixed(2)}px, 0)`;
    });

    if (Math.abs(targetX - mouseX) > 0.1 || Math.abs(targetY - mouseY) > 0.1) {
      requestAnimationFrame(updateParallax);
    } else {
      isMoving = false;
    }
  }
}

function initThemeToggle() {
  // Website uses light theme exclusively (Directive 1)
  document.documentElement.setAttribute('data-theme', 'light');
  localStorage.setItem('bonekaku-theme', 'light');
}

function initHeaderScroll() {
  const header = document.getElementById('mainHeader');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  initScrollProgressBar();
  initActiveNavPage();
  initMobileMenu();
}

function initScrollProgressBar() {
  const bar = document.getElementById('scrollProgress');
  if (!bar) return;

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = Math.min((scrollTop / docHeight) * 100, 100);
    bar.style.width = progress + '%';
  });
}

function initActiveNavPage() {
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (!href) return;
    
    link.classList.remove('active');
    if (href === currentPath || (currentPath === '' && href === 'index.html') || (href === 'index.html' && (currentPath === '' || currentPath === 'index.html'))) {
      link.classList.add('active');
    }
  });
}

function initMobileMenu() {
  const mobileBtn = document.getElementById('mobileMenuBtn');
  const navMenu = document.querySelector('.nav-menu');

  if (!mobileBtn || !navMenu) return;

  mobileBtn.addEventListener('click', () => {
    navMenu.classList.toggle('mobile-active');
    const icon = mobileBtn.querySelector('i');
    if (navMenu.classList.contains('mobile-active')) {
      icon.className = 'fas fa-times';
    } else {
      icon.className = 'fas fa-bars';
    }
  });

  // Close mobile menu when clicking a link
  const navLinks = document.querySelectorAll('.nav-link');
  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('mobile-active');
      const icon = mobileBtn.querySelector('i');
      if (icon) icon.className = 'fas fa-bars';
    });
  });
}

// --------------------------------------------------------------------------
// 6. PRODUCT CATALOG & 3D TILT EFFECT
// --------------------------------------------------------------------------
function renderProducts(items) {
  const grid = document.getElementById('productsGrid');
  if (!grid) return;

  if (items.length === 0) {
    grid.innerHTML = `
      <div style="grid-column: 1/-1; text-align: center; padding: 4rem 1rem; color: var(--text-muted);">
        <i class="fas fa-search-minus" style="font-size: 3.5rem; margin-bottom: 1rem; color:var(--accent-pink);"></i>
        <p style="font-size: 1.15rem; font-weight:700;">Produk yang Anda cari tidak ditemukan.</p>
        <p style="font-size:0.9rem; color:var(--text-secondary);">Coba gunakan kata kunci lain seperti "Bear", "Wisuda", atau "Maskot".</p>
      </div>
    `;
    return;
  }

  if (currentCatalogViewMode === 'list') {
    grid.innerHTML = items.map(item => {
      const sizeVal = (item.size && item.size !== 'undefined') ? item.size : '12 cm';
      const moqVal = (item.moq && item.moq !== 'undefined') ? item.moq : 'Min 50 Pcs';
      const priceVal = (item.priceRange && item.priceRange !== 'undefined') ? item.priceRange : 'Rp 35.000 – 65.000';

      return `
      <div class="product-list-row reveal-up" data-category="${item.category}">
        <div class="list-row-img-box" onclick="openProductModal(${item.id})">
          <img src="${item.image}" alt="${item.title}" class="list-row-img" onerror="this.onerror=null; this.src='Logo-Baru-Bonekaku-600x163_eA0g.png';">
          <span class="card-category-badge"><i class="fas fa-tag"></i> ${item.categoryLabel}</span>
        </div>

        <div class="list-row-content">
          <h3 class="list-row-title" onclick="openProductModal(${item.id})">${item.title}</h3>
          
          <div class="list-row-meta">
            <span class="meta-pill"><i class="fas fa-ruler-vertical"></i> Size : ${sizeVal}</span>
            <span class="meta-pill"><i class="fas fa-boxes-stacked"></i> ${moqVal}</span>
            <span class="meta-pill price"><i class="fas fa-tag"></i> ${priceVal}</span>
          </div>

          <p class="list-row-desc">
            <strong>Apa itu Boneka Souvenir atau Promosi?</strong> Boneka Souvenir atau Boneka Promosi adalah boneka yang dipesan untuk Souvenir ulang tahun, Souvenir Aqiqah, Souvenir satu bulanan, termasuk untuk promosi produk & perusahaan.
          </p>

          <a href="#" onclick="openProductModal(${item.id}); return false;" class="list-row-readmore">
            Read More <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <div class="list-row-actions">
          <button class="btn btn-secondary btn-list-details" onclick="openProductModal(${item.id})">
            Details <i class="fas fa-arrow-circle-right"></i>
          </button>
          <a href="https://wa.me/6281385508611?text=Halo%20Admin,%20saya%20tertarik%20dengan%20produk%20${encodeURIComponent(item.title)}" 
             target="_blank" 
             class="btn btn-primary btn-list-wa">
            <i class="fab fa-whatsapp"></i> Pesan WA
          </a>
        </div>
      </div>
      `;
    }).join('');

    initScrollRevealObserver();
    return;
  }

  grid.innerHTML = items.map(item => {
    const sizeVal = (item.size && item.size !== 'undefined') ? item.size : '20cm';
    const moqVal = (item.moq && item.moq !== 'undefined') ? item.moq : 'Min 50 Pcs';
    const priceVal = (item.priceRange && item.priceRange !== 'undefined') ? item.priceRange : 'Rp 45.000 – 75.000';
    const specsList = (item.specs && item.specs.length) ? item.specs : ["Bahan Super Soft Yelvo", "Isian Dakron Silicon Grade A", "Standar SNI Resmi", "Custom Logo Embroidery"];

    return `
    <div class="product-card reveal-up" data-category="${item.category}" id="card-${item.id}" onclick="toggleFlipCard(${item.id}, event)">
      <div class="product-card-inner">
        
        <!-- FRONT SIDE (IMAGE & BADGES) -->
        <div class="product-card-front">
          <div class="product-img-wrapper">
            <img src="${item.image}" alt="${item.title}" class="product-img" onerror="this.onerror=null; this.src='Logo-Baru-Bonekaku-600x163_eA0g.png';">
            <span class="product-card-store-watermark">BONEKAKU_STORE</span>
            <div class="card-front-overlay">
              <span class="card-category-badge"><i class="fas fa-tag"></i> ${item.categoryLabel}</span>
              <h3 class="card-front-title">${item.title}</h3>
            </div>
          </div>
        </div>

        <!-- BACK SIDE (FLIPPED DETAILS & DESCRIPTION) -->
        <div class="product-card-back">
          <div class="card-back-header">
            <span class="card-category-badge"><i class="fas fa-cube"></i> ${item.categoryLabel}</span>
            <button class="flip-back-btn" onclick="toggleFlipCard(${item.id}, event)" title="Kembali ke Foto">
              <i class="fas fa-rotate-left"></i>
            </button>
          </div>
          
          <div class="card-back-body">
            <h3 class="card-back-title">${item.title}</h3>
            
            <div class="card-back-meta">
              <span class="meta-pill"><i class="fas fa-ruler-vertical"></i> ${sizeVal}</span>
              <span class="meta-pill"><i class="fas fa-boxes-stacked"></i> ${moqVal}</span>
              <span class="meta-pill price"><i class="fas fa-tag"></i> ${priceVal}</span>
            </div>

            <div class="card-back-desc-box">
              <p class="card-back-desc">${item.desc}</p>
            </div>

            <div class="card-back-specs">
              <h4><i class="fas fa-shield-alt" style="color:var(--accent-brand);"></i> Spesifikasi:</h4>
              <ul>
                ${specsList.map(spec => `<li><i class="fas fa-check-circle"></i> ${spec}</li>`).join('')}
              </ul>
            </div>
          </div>

          <div class="card-back-footer">
            <a href="https://wa.me/6281385508611?text=Halo%20Admin,%20saya%20tertarik%20dengan%20produk%20${encodeURIComponent(item.title)}" 
               target="_blank" 
               class="btn btn-primary btn-sm btn-card-wa" 
               onclick="event.stopPropagation();">
              <i class="fab fa-whatsapp"></i> Pesan WA
            </a>
            <button class="btn btn-secondary btn-sm btn-card-modal" 
                    onclick="openProductModal(${item.id}); event.stopPropagation();">
              <i class="fas fa-expand"></i> Modal Detail
            </button>
          </div>
        </div>

      </div>
    </div>
  `;
  }).join('');

  // Re-attach scroll reveal observer
  initScrollRevealObserver();
  // Re-attach 3D card tilt
  initCard3DTilt();
}

function initCard3DTilt() {
  const cards = document.querySelectorAll('.bento-card, .feature-card, .article-card');
  cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = ((y - centerY) / centerY) * -4;
      const rotateY = ((x - centerX) / centerX) * 4;

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)`;
    });
  });
}

function toggleFlipCard(id, event) {
  if (event) event.stopPropagation();
  const card = document.getElementById(`card-${id}`);
  if (card) {
    card.style.transform = '';
    card.classList.toggle('is-flipped');
  }
}

function initCatalogFilters() {
  const checkboxes = document.querySelectorAll('.sidebar-checkbox');
  const sizeCheckboxes = document.querySelectorAll('.size-checkbox');
  const searchInput = document.getElementById('searchInput');
  const resetBtn = document.getElementById('resetFilterBtn');
  const sortSelect = document.getElementById('sortSelect');
  const mobileToggleBtn = document.getElementById('mobileFilterToggleBtn');
  const sidebar = document.getElementById('catalogSidebar');

  // Handle category checkboxes
  checkboxes.forEach(chk => {
    chk.addEventListener('change', (e) => {
      if (e.target.value === 'all' && e.target.checked) {
        checkboxes.forEach(c => { if (c.value !== 'all') c.checked = false; });
      } else if (e.target.checked) {
        const chkAll = document.getElementById('chk-all');
        if (chkAll) chkAll.checked = false;
      }
      applySidebarFilters();
    });
  });

  // Handle size checkboxes
  sizeCheckboxes.forEach(chk => {
    chk.addEventListener('change', () => applySidebarFilters());
  });

  // Handle search input
  if (searchInput) {
    searchInput.addEventListener('input', () => applySidebarFilters());
  }

  // Handle sorting
  if (sortSelect) {
    sortSelect.addEventListener('change', () => applySidebarFilters());
  }

  // Reset button
  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      checkboxes.forEach(c => c.checked = (c.value === 'favorite'));
      sizeCheckboxes.forEach(c => c.checked = false);
      if (searchInput) searchInput.value = '';
      if (sortSelect) sortSelect.value = 'default';
      applySidebarFilters();
    });
  }

  // Mobile sidebar toggle
  if (mobileToggleBtn && sidebar) {
    mobileToggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('mobile-open');
    });

    document.addEventListener('click', (e) => {
      if (!sidebar.contains(e.target) && !mobileToggleBtn.contains(e.target)) {
        sidebar.classList.remove('mobile-open');
      }
    });
  }

  // Initialize custom luxury dropdown UI
  initCustomDropdown();

  // Guarantee default selection is Most Favorite if none selected
  const checkedAny = Array.from(checkboxes).some(c => c.checked);
  if (!checkedAny) {
    const favoriteChk = document.getElementById('chk-favorite');
    if (favoriteChk) favoriteChk.checked = true;
  }

  // Initial calculation & rendering
  applySidebarFilters();
}

function initCustomDropdown() {
  const dropdown = document.getElementById('customSortDropdown');
  const triggerBtn = document.getElementById('dropdownTriggerBtn');
  const triggerLabel = document.getElementById('triggerLabel');
  const popupMenu = document.getElementById('dropdownMenuPopup');
  const sortSelect = document.getElementById('sortSelect');
  if (!dropdown || !triggerBtn || !popupMenu || !sortSelect) return;

  const optionItems = popupMenu.querySelectorAll('.dropdown-option-item');

  function toggleDropdown() {
    const isOpen = dropdown.classList.contains('is-open');
    if (isOpen) {
      closeDropdown();
    } else {
      dropdown.classList.add('is-open');
      triggerBtn.setAttribute('aria-expanded', 'true');
    }
  }

  function closeDropdown() {
    dropdown.classList.remove('is-open');
    triggerBtn.setAttribute('aria-expanded', 'false');
  }

  triggerBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    toggleDropdown();
  });

  optionItems.forEach(item => {
    item.addEventListener('click', (e) => {
      e.stopPropagation();
      const value = item.getAttribute('data-value');
      
      // Update active state
      optionItems.forEach(opt => opt.classList.remove('active'));
      item.classList.add('active');

      // Update trigger label innerHTML with item's icon & text
      const icon = item.querySelector('.option-icon').cloneNode(true);
      const text = item.querySelector('.option-text').textContent;
      
      triggerLabel.innerHTML = '';
      triggerLabel.appendChild(icon);
      triggerLabel.appendChild(document.createTextNode(' ' + text));

      // Sync hidden select value & dispatch change event
      sortSelect.value = value;
      sortSelect.dispatchEvent(new Event('change'));

      closeDropdown();
    });
  });

  // Close when clicking outside
  document.addEventListener('click', (e) => {
    if (!dropdown.contains(e.target)) {
      closeDropdown();
    }
  });

  // Listen for native reset filter button
  const resetBtn = document.getElementById('resetFilterBtn');
  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      // Sync back to default
      const defaultItem = popupMenu.querySelector('.dropdown-option-item[data-value="default"]');
      if (defaultItem) {
        optionItems.forEach(opt => opt.classList.remove('active'));
        defaultItem.classList.add('active');
        triggerLabel.innerHTML = '<i class="fas fa-star option-icon" style="color:var(--accent-gold);"></i> Rekomendasi Utama';
      }
    });
  }
}

function initCatalogSearch() {
  // Maintained for backward compatibility
}

function applySidebarFilters() {
  const checkboxes = document.querySelectorAll('.sidebar-checkbox:checked');
  const sizeCheckboxes = document.querySelectorAll('.size-checkbox:checked');
  const searchInput = document.getElementById('searchInput');
  const sortSelect = document.getElementById('sortSelect');
  
  const selectedCategories = Array.from(checkboxes).map(c => c.value);
  const selectedSizes = Array.from(sizeCheckboxes).map(c => c.value);
  const searchQuery = searchInput ? searchInput.value.toLowerCase().trim() : '';
  const sortBy = sortSelect ? sortSelect.value : 'default';

  const liveData = getLiveProductsData();
  let filtered = liveData.filter(item => {
    // 1. Category Filter
    let matchesCategory = false;
    if (selectedCategories.length === 0 || selectedCategories.includes('all')) {
      matchesCategory = true;
    } else {
      matchesCategory = selectedCategories.includes(item.category);
    }

    // 2. Size Filter
    let matchesSize = false;
    if (selectedSizes.length === 0) {
      matchesSize = true;
    } else {
      matchesSize = selectedSizes.includes(item.size);
    }

    // 3. Search Query Filter
    const matchesSearch = !searchQuery ||
                          item.title.toLowerCase().includes(searchQuery) ||
                          item.desc.toLowerCase().includes(searchQuery) ||
                          item.categoryLabel.toLowerCase().includes(searchQuery) ||
                          (item.specs && item.specs.some(s => s.toLowerCase().includes(searchQuery)));

    return matchesCategory && matchesSize && matchesSearch;
  });

  // 3. Sorting
  if (sortBy === 'name-asc') {
    filtered.sort((a, b) => a.title.localeCompare(b.title));
  } else if (sortBy === 'name-desc') {
    filtered.sort((a, b) => b.title.localeCompare(a.title));
  }

  // Update total count badges
  const countText = document.getElementById('productTotalCountText');
  const mobileCount = document.getElementById('mobileTotalCount');
  const countAll = document.getElementById('count-all');
  
  if (countText) countText.textContent = `${filtered.length} Produk`;
  if (mobileCount) mobileCount.textContent = `${filtered.length} Produk`;
  if (countAll) countAll.textContent = liveData.length;

  // Update dynamic category count badges
  const catCounts = {
    'all': liveData.length,
    'favorite': 0,
    'animal-series': 0,
    'bantal-custom': 0,
    'boneka-custom': 0,
    'boneka-souvenir': 0,
    'graduation-series': 0,
    'maskot-badut': 0,
    'masker': 0,
    'new-animal-series': 0
  };

  liveData.forEach(item => {
    if (catCounts[item.category] !== undefined) catCounts[item.category]++;
  });

  Object.keys(catCounts).forEach(k => {
    const badge = document.getElementById(`count-${k}`);
    if (badge) badge.textContent = catCounts[k];
  });

  renderProducts(filtered);
}

// --------------------------------------------------------------------------
// 7. REAL WORKSHOP GALLERY RENDERING
// --------------------------------------------------------------------------
function renderWorkshopGallery(items) {
  const grid = document.getElementById('workshopGrid');
  if (!grid) return;

  grid.innerHTML = items.map((item, idx) => `
    <div class="workshop-card reveal-scale delay-${(idx % 4) + 1}" onclick="openImageModal('${item.image}', '${item.title}', '${item.desc}')">
      <img src="${item.image}" alt="${item.title}" class="workshop-img" onerror="this.onerror=null; this.src='Logo-Baru-Bonekaku-600x163_eA0g.png';">
      <div class="workshop-overlay">
        <h4>${item.title}</h4>
        <p><i class="fas fa-search-plus"></i> ${item.desc}</p>
      </div>
    </div>
  `).join('');

  initScrollRevealObserver();
}

// --------------------------------------------------------------------------
// 8. ESTIMATOR & INTERACTIVE MASCOT MORPHING PREVIEW
// --------------------------------------------------------------------------
let estimatorState = {
  type: 'maskot',
  typeName: 'Boneka Maskot Brand',
  size: 30,
  material: 'yelvo',
  materialName: 'Yelvo Super Soft',
  qty: 100
};

function initEstimatorCalculator() {
  const typeBtns = document.querySelectorAll('#plushTypeGroup .option-btn');
  typeBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      typeBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      estimatorState.type = btn.getAttribute('data-value');
      estimatorState.typeName = btn.innerText;
      updateEstimator();
    });
  });

  const sizeBtns = document.querySelectorAll('#sizeGroup .option-btn');
  sizeBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      sizeBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      estimatorState.size = parseInt(btn.getAttribute('data-value'));
      updateEstimator();
    });
  });

  const matBtns = document.querySelectorAll('#materialGroup .option-btn');
  matBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      matBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      estimatorState.material = btn.getAttribute('data-value');
      estimatorState.materialName = btn.innerText;
      updateEstimator();
    });
  });

  const qtyRange = document.getElementById('qtyRange');
  const qtyValueDisplay = document.getElementById('qtyValue');
  if (qtyRange) {
    qtyRange.addEventListener('input', (e) => {
      estimatorState.qty = parseInt(e.target.value);
      qtyValueDisplay.innerText = estimatorState.qty + " Pcs";
      updateEstimator();
    });
  }

  updateEstimator();
}

function updateEstimator() {
  let basePrice = 45000;

  if (estimatorState.type === 'maskot') basePrice += 10000;
  if (estimatorState.type === 'bear') basePrice += 5000;
  if (estimatorState.type === 'bantal') basePrice -= 8000;
  if (estimatorState.type === 'wisuda') basePrice += 8000;

  if (estimatorState.size === 20) basePrice *= 0.8;
  if (estimatorState.size === 30) basePrice *= 1.0;
  if (estimatorState.size === 40) basePrice *= 1.35;
  if (estimatorState.size === 50) basePrice *= 1.75;

  if (estimatorState.material === 'yelvo') basePrice += 3000;
  if (estimatorState.material === 'rasfur') basePrice += 5000;

  if (estimatorState.qty >= 500) basePrice *= 0.85;
  else if (estimatorState.qty >= 300) basePrice *= 0.9;
  else if (estimatorState.qty >= 100) basePrice *= 0.95;

  const unitPrice = Math.round(basePrice / 500) * 500;
  const totalPrice = unitPrice * estimatorState.qty;

  const formattedUnit = "Rp " + unitPrice.toLocaleString('id-ID');
  const formattedTotal = "Rp " + totalPrice.toLocaleString('id-ID');

  document.getElementById('summaryType').innerText = estimatorState.typeName;
  document.getElementById('summarySize').innerText = estimatorState.size + " cm";
  document.getElementById('summaryMaterial').innerText = estimatorState.materialName;
  document.getElementById('summaryQty').innerText = estimatorState.qty + " Pcs";
  document.getElementById('summaryUnitPrice').innerText = formattedUnit;
  document.getElementById('summaryTotal').innerText = formattedTotal;

  // Mascot Morphing Scale Effect
  const morphImg = document.getElementById('plushMorphImg');
  const morphLabel = document.getElementById('plushScaleLabel');
  if (morphImg) {
    const scaleFactor = 0.7 + ((estimatorState.size - 20) / 30) * 0.55;
    morphImg.style.transform = `scale(${scaleFactor})`;
    morphLabel.innerText = `Skala Visual: ${estimatorState.size} cm`;
  }

  // Generate WhatsApp Order Link
  const waBtn = document.getElementById('estimatorWaBtn');
  if (waBtn) {
    const textMessage = `Halo Bonekaku, saya ingin berkonsultasi mengenai pesanan custom:
- Jenis: ${estimatorState.typeName}
- Ukuran: ${estimatorState.size} cm
- Bahan: ${estimatorState.materialName}
- Jumlah: ${estimatorState.qty} Pcs
- Estimasi Biaya Total: ${formattedTotal}

Apakah bisa dibuatkan sample 3D / prototype-nya? Terima kasih!`;

    const encoded = encodeURIComponent(textMessage);
    waBtn.href = `https://wa.me/6281385508611?text=${encoded}`;
  }
}

let currentCatalogViewMode = 'grid';

function switchCatalogViewMode(mode) {
  currentCatalogViewMode = mode;
  const grid = document.getElementById('productsGrid');
  const btns = document.querySelectorAll('.view-mode-switcher .view-btn');
  
  btns.forEach(btn => {
    btn.classList.remove('active');
    if (btn.getAttribute('data-view') === mode) {
      btn.classList.add('active');
    }
  });

  if (grid) {
    grid.className = `products-grid view-${mode}-mode`;
  }

  applySidebarFilters();
}

function openProductModal(productId) {
  const liveList = getLiveProductsData();
  const product = liveList.find(p => p.id == productId);
  if (!product) return;

  const modal = document.getElementById('productModal');
  const modalImg = document.getElementById('modalImg');
  const modalTitle = document.getElementById('modalTitle');
  const modalCategory = document.getElementById('modalCategory');
  const modalSizePill = document.getElementById('modalSizePill');
  const modalMoqPill = document.getElementById('modalMoqPill');
  const modalPricePill = document.getElementById('modalPricePill');
  const modalSpecs = document.getElementById('modalSpecs');
  const modalWaBtn = document.getElementById('modalWaBtn');

  const sizeVal = product.size || '12 cm';
  const moqVal = product.moq || 'Min 50 Pcs';
  const priceVal = product.priceRange || 'Rp 35.000 – 65.000';
  const specsList = (product.specs && product.specs.length) ? product.specs : [
    "Bahan Super Soft Yelvo",
    "Isian Dakron Silicon Grade A",
    "100% Sertifikasi SNI",
    "Custom Logo Embroidery"
  ];

  if (modalImg) modalImg.src = product.image;
  if (modalTitle) modalTitle.innerText = product.title;
  if (modalCategory) modalCategory.innerText = product.categoryLabel || "Most Favorite";

  if (modalSizePill) modalSizePill.innerHTML = `<i class="fas fa-ruler-vertical"></i> Size : ${sizeVal}`;
  if (modalMoqPill) modalMoqPill.innerHTML = `<i class="fas fa-boxes-stacked"></i> Minimum : ${moqVal}`;
  if (modalPricePill) modalPricePill.innerHTML = `<i class="fas fa-tag"></i> ${priceVal}`;

  if (modalSpecs) {
    modalSpecs.innerHTML = specsList.map(spec => `
      <li><i class="fas fa-check-circle" style="color:var(--accent-emerald);"></i> ${spec}</li>
    `).join('');
  }

  if (modalWaBtn) {
    const waText = encodeURIComponent(`Halo Admin Bonekaku, saya tertarik dengan produk "${product.title}" (${sizeVal}). Mohon info lebih lanjut & penawaran harganya.`);
    modalWaBtn.href = `https://wa.me/6281385508611?text=${waText}`;
  }

  if (modal) modal.classList.add('active');
}

function openImageModal(imgSrc, title, desc) {
  const modal = document.getElementById('productModal');
  const modalImg = document.getElementById('modalImg');
  const modalTitle = document.getElementById('modalTitle');
  const modalCategory = document.getElementById('modalCategory');
  const modalDesc = document.getElementById('modalDesc');
  const modalSpecs = document.getElementById('modalSpecs');
  const modalWaBtn = document.getElementById('modalWaBtn');

  modalImg.src = imgSrc;
  modalTitle.innerText = title;
  modalCategory.innerText = "Galeri Real Workshop & Pabrik";
  modalDesc.innerText = desc;

  modalSpecs.innerHTML = `
    <li><i class="fas fa-shield-alt"></i> Standar Operasional Pabrik SNI</li>
    <li><i class="fas fa-check-double"></i> Quality Control 100% Terjamin</li>
    <li><i class="fas fa-industry"></i> Kapasitas Produksi Massal Ribuan Pcs/Minggu</li>
  `;

  const waText = encodeURIComponent(`Halo Admin Bonekaku, saya melihat foto workshop "${title}". Saya ingin berkonsultasi mengenai produksi pesanan saya.`);
  modalWaBtn.href = `https://wa.me/6281385508611?text=${waText}`;

  modal.classList.add('active');
}

function closeModal() {
  const modal = document.getElementById('productModal');
  if (modal) modal.classList.remove('active');
}

/* --------------------------------------------------------------------------
   FULL ARTICLE READER MODAL (REF SS_1574 & SS_1575)
   -------------------------------------------------------------------------- */
let currentOpenArticleId = 1;

function openArticleDetailModal(articleId) {
  const articles = getLiveArticlesData();
  const article = articles.find(a => a.id == articleId) || articles[0];
  if (!article) return;

  currentOpenArticleId = article.id;
  const modal = document.getElementById('articleReaderModal');
  if (!modal) return;

  const breadcrumbTitle = document.getElementById('artModalBreadcrumbTitle');
  const catBadge = document.getElementById('artModalCategory');
  const titleEl = document.getElementById('artModalTitle');
  const dateEl = document.getElementById('artModalDate');
  const authorEl = document.getElementById('artModalAuthor');
  const imgEl = document.getElementById('artModalImg');
  const bodyEl = document.getElementById('artModalBody');
  const nextBtn = document.getElementById('artModalNextBtn');
  const commentTitle = document.getElementById('artModalCommentTitle');

  if (breadcrumbTitle) breadcrumbTitle.innerText = article.title;
  if (catBadge) catBadge.innerText = article.category || "Panduan Industri";
  if (titleEl) titleEl.innerText = article.title;
  if (dateEl) dateEl.innerText = article.date || "10 Agustus 2026";
  if (authorEl) authorEl.innerText = article.author || "Admin Bonekaku.co.id";
  if (imgEl) imgEl.src = article.image;
  if (commentTitle) commentTitle.innerText = article.title;

  if (bodyEl) {
    bodyEl.innerHTML = `
      <p class="lead-paragraph">
        <strong>${article.summary || article.title}</strong> Industri pembuatan souvenir plushie dan boneka custom kini telah berkembang pesat dengan berbagai inovasi teknik serat kain serta standar manufaktur otomatis.
      </p>

      <h3>1. Memahami Karakteristik Bahan Kain (Yelvo vs Velboa)</h3>
      <p>
        Dalam memilih bahan kain untuk merchandise atau maskot corporate, aspek utama yang perlu diperhatikan adalah kerapatan serat (density), elastisitas, dan kelembutan permukaan. Kain <strong>Yelvo Super Soft</strong> memiliki tekstur yang sangat halus dengan peregangan 2-arah yang sempurna untuk membungkus lekukan maskot 3D. Sementara kain Velboa memiliki karakter tekstur yang lebih pendek dan sedikit lebih kaku, ideal untuk bantal karakter.
      </p>

      <blockquote class="article-quote">
        <i class="fas fa-quote-left"></i> Standar mutu Bonekaku memastikan 100% bahan baku kain telah lolos uji laboratorium sertifikasi resmi SNI (Standar Nasional Indonesia) sehingga bebas zat pewarna beracun dan aman bagi anak-anak.
      </blockquote>

      <h3>2. Kepresisian Pembordiran Komputer HD</h3>
      <p>
        Setiap logo perusahaan, tulisan brand, maupun detail ekspresi wajah maskot dikerjakan menggunakan mesin pembordiran komputer multi-head otomatis dengan kerapatan jarum tinggi. Hasil pembordiran dijamin rapi, simetris, tidak mudah terlepas, serta memiliki ketahanan warna hingga bertahun-tahun.
      </p>

      <h3>3. Isian Kapas Dakron Silicon Grade A</h3>
      <p>
        Untuk menjaga keempukan dan bentuk boneka tetap kokoh dan anti-kempes, Bonekaku mengunakan 100% serat kapas <strong>Dakron Silicon Grade A</strong> murni. Kapas ini sangat membal, higienis, dan tidak menyerap kelembaban udara sehingga bebas dari bau apek atau jamur.
      </p>
    `;
  }

  const nextArticle = articles.find(a => a.id != article.id) || article;
  if (nextBtn) {
    nextBtn.innerHTML = `Next: ${nextArticle.title} <i class="fas fa-arrow-right"></i>`;
    nextBtn.setAttribute('data-next-id', nextArticle.id);
  }

  modal.classList.add('active');
}

function nextArticleModal() {
  const articles = getLiveArticlesData();
  const nextBtn = document.getElementById('artModalNextBtn');
  const nextId = nextBtn ? nextBtn.getAttribute('data-next-id') : null;
  
  if (nextId) {
    openArticleDetailModal(nextId);
  } else {
    const nextArt = articles.find(a => a.id != currentOpenArticleId) || articles[0];
    openArticleDetailModal(nextArt.id);
  }

  const container = document.querySelector('.article-modal-scrollable');
  if (container) container.scrollTop = 0;
}

function closeArticleModal() {
  const modal = document.getElementById('articleReaderModal');
  if (modal) modal.classList.remove('active');
}

function focusCommentForm() {
  const form = document.getElementById('commentContent');
  if (form) {
    form.focus();
    form.scrollIntoView({ behavior: 'smooth' });
  }
}

function submitArticleComment(e) {
  e.preventDefault();
  const name = document.getElementById('commentName').value;
  const content = document.getElementById('commentContent').value;
  const list = document.getElementById('artModalCommentsList');

  if (list && name && content) {
    const now = new Date();
    const dateStr = now.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' }) + ` at ${now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}`;
    
    const newCommentHtml = `
      <div class="comment-item new-comment" style="animation: fadeIn 0.4s ease;">
        <div class="comment-avatar">
          <i class="fas fa-user-circle" style="color:var(--accent-brand);"></i>
        </div>
        <div class="comment-content">
          <div class="comment-header">
            <strong>${name}</strong> <span class="comment-date">${dateStr}</span>
          </div>
          <p class="comment-text">${content}</p>
          <button class="comment-reply-btn" onclick="focusCommentForm()"><i class="fas fa-reply"></i> Reply</button>
        </div>
      </div>
    `;
    list.insertAdjacentHTML('beforeend', newCommentHtml);
    document.getElementById('commentContent').value = '';
    
    const alertBox = document.createElement('div');
    alertBox.className = 'comment-success-alert';
    alertBox.innerHTML = `<i class="fas fa-check-circle" style="color:#10b981;"></i> Terima kasih! Komentar Anda telah berhasil dikirim.`;
    e.target.appendChild(alertBox);
    setTimeout(() => alertBox.remove(), 4000);
  }
}

function shareArticle(platform) {
  const url = encodeURIComponent(window.location.href);
  const title = encodeURIComponent(document.getElementById('artModalTitle')?.innerText || "Artikel Bonekaku");

  let targetUrl = '';
  if (platform === 'wa') targetUrl = `https://api.whatsapp.com/send?text=${title}%20${url}`;
  else if (platform === 'fb') targetUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
  else if (platform === 'tw') targetUrl = `https://twitter.com/intent/tweet?text=${title}&url=${url}`;
  else if (platform === 'in') targetUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;

  if (targetUrl) window.open(targetUrl, '_blank', 'width=600,height=500');
}

// --------------------------------------------------------------------------
// 10. INTERACTIVE WHATSAPP CHAT DRAWER
// --------------------------------------------------------------------------
function initWhatsAppDrawer() {
  const waToggleBtn = document.getElementById('waFloatingBtn');
  const targetWaUrl = "https://wa.me/6281385508611?text=Halo%20Admin%20Bonekaku,%20saya%20ingin%20konsultasi%20pemesanan%20boneka%20custom";

  if (waToggleBtn) {
    waToggleBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.open(targetWaUrl, '_blank');
    });
  }

  const waOrderChip = document.querySelector('.wa-order-chip');
  if (waOrderChip) {
    waOrderChip.addEventListener('click', (e) => {
      e.preventDefault();
      window.open(targetWaUrl, '_blank');
    });
  }
}

// --------------------------------------------------------------------------
// 11. FAQ ACCORDION & ANIMATED COUNTER
// --------------------------------------------------------------------------
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    header.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      faqItems.forEach(i => i.classList.remove('active'));
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
}

function initStatsCounter() {
  const stats = document.querySelectorAll('.stat-number');
  let animated = false;

  window.addEventListener('scroll', () => {
    const section = document.querySelector('.hero-stats');
    if (!section || animated) return;

    const rect = section.getBoundingClientRect();
    if (rect.top <= window.innerHeight) {
      animated = true;
      stats.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-target'));
        let count = 0;
        const increment = Math.ceil(target / 45);
        const timer = setInterval(() => {
          count += increment;
          if (count >= target) {
            stat.innerText = target.toLocaleString('id-ID') + "+";
            clearInterval(timer);
          } else {
            stat.innerText = count.toLocaleString('id-ID') + "+";
          }
        }, 25);
      });
    }
  });
}

// --------------------------------------------------------------------------
// 12. CENTERED LARGE TESTIMONIAL CAROUSEL SLIDER
// --------------------------------------------------------------------------
let currentTestimonialSlide = 0;
let testimonialTimer = null;

function initTestimonialCarousel() {
  const slides = document.querySelectorAll('.testimonial-slide');
  const dots = document.querySelectorAll('.carousel-dots .dot');
  const prevBtn = document.getElementById('testimonialPrevBtn');
  const nextBtn = document.getElementById('testimonialNextBtn');

  if (!slides.length) return;

  function showSlide(index) {
    if (index >= slides.length) currentTestimonialSlide = 0;
    else if (index < 0) currentTestimonialSlide = slides.length - 1;
    else currentTestimonialSlide = index;

    slides.forEach((slide, idx) => {
      slide.classList.toggle('active', idx === currentTestimonialSlide);
    });

    dots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentTestimonialSlide);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      showSlide(currentTestimonialSlide - 1);
      resetTimer();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      showSlide(currentTestimonialSlide + 1);
      resetTimer();
    });
  }

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      const slideIndex = parseInt(dot.getAttribute('data-slide'));
      showSlide(slideIndex);
      resetTimer();
    });
  });

  function startTimer() {
    testimonialTimer = setInterval(() => {
      showSlide(currentTestimonialSlide + 1);
    }, 5000);
  }

  function resetTimer() {
    if (testimonialTimer) clearInterval(testimonialTimer);
    startTimer();
  }

  showSlide(0);
  startTimer();
}
