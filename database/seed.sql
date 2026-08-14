-- database/seed.sql

-- Default Admin (Password: admin123)
INSERT INTO admins (username, password_hash) VALUES 
('admin', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHeF0u/M0t./5fTqX5rR/O6P.G7Xo8kQ/K');

-- Categories
INSERT INTO categories (id, category_name, slug) VALUES
(1, 'Boneka Souvenir', 'boneka-souvenir'),
(2, 'Bantal Custom', 'bantal-custom'),
(3, 'Boneka Custom', 'boneka-custom'),
(4, 'Graduation Series', 'graduation-series'),
(5, 'Maskot & Badut', 'maskot-badut'),
(6, 'Animal Series', 'animal-series'),
(7, 'Masker & Aksesoris', 'masker-aksesoris');

-- 100% Full Products Database matching original website reference
INSERT INTO products (id, category_id, product_name, slug, description, image_path, is_favorite, is_new) VALUES
(1, 5, 'Boneka Mascot Bear Archie', 'boneka-mascot-bear-archie', 'Boneka maskot karakter Teddy Bear eksklusif dengan seragam kemeja custom & logo bordir presisi tinggi.', 'Image-Archie-Bear-1030x729_eA0g.png', 1, 1),
(2, 1, 'Teddy Bear Arnold Outfit Set', 'teddy-bear-arnold-outfit-set', 'Boneka beruang premium 20 inci dengan 3 pilihan outfit pakaian gaya casual hingga formal.', 'Boneka-Bear-Arnold-20-3outfit-1536x1152_eA0g.jpg', 1, 0),
(3, 5, 'Hotel Mascot Bear Kempinski', 'hotel-mascot-bear-kempinski', 'Boneka souvenir khusus perhotelan & hospitality dengan vest elegan dan bordir monogram emas.', 'Boneka-Bear-Kempinski-22-3outfit-1536x1152_eA0g.jpg', 1, 1),
(4, 1, 'Teddy Bear Bobby Casual Series', 'teddy-bear-bobby-casual-series', 'Boneka teddy beruang ukuran 18 inci bergaya santai dengan kaos custom logo perusahaan.', 'Boneka-Bear-Bobby-18-outfit2-1536x1152_eA0g.jpg', 0, 0),
(5, 1, 'Teddy Bear Jeslyn Cute Outfit', 'teddy-bear-jeslyn-cute-outfit', 'Teddy bear mungil 12 inci nan imut dengan baju rajut custom cocok untuk gift set hampers.', 'Boneka-Bear-Jeslyn-12-outfit-1536x1149_eA0g.jpg', 0, 0),
(6, 1, 'Teddy Bear Luna Fashion Dress', 'teddy-bear-luna-fashion-dress', 'Teddy bear edisi fashion 20 inci dengan gaun anggun 3 pilihan style menarik.', 'Boneka-Bear-Luna-20-3Outfit-1536x1121_eA0g.jpg', 1, 1),
(7, 1, 'Teddy Bear Mayna Special Gift', 'teddy-bear-mayna-special-gift', 'Teddy bear edisi koleksi dengan aksesoris pita & 3 variasi baju tema istimewa.', 'Boneka-Bear-Mayna-3outfit-1536x1152_eA0g.jpg', 0, 0),
(8, 1, 'Teddy Bear Vico Executive Outfit', 'teddy-bear-vico-executive-outfit', 'Teddy bear berbusana jas formal executive cocok untuk souvenir korporat & pimpinan.', 'Boneka-Bear-Vico-3outfit-1536x1149_eA0g.jpg', 1, 0),
(9, 1, 'Teddy Bear Boy & Girl Couple Outfit', 'teddy-bear-boy-girl-couple-outfit', 'Pasangan teddy bear sepasang (pria & wanita) dengan outfit berpasangan yang lucu.', 'Boneka-Bear-Boy-Girl-outfit-1536x1152_eA0g.jpg', 0, 1),
(10, 5, 'Kostum & Character Mascot Badut', 'kostum-character-mascot-badut', 'Kostum maskot badut promosi event, maskot perusahaan, dan parade brand dengan bahan adem & tahan lama.', 'Image-Badut-1030x729_eA0g.png', 1, 1),
(11, 2, 'Bantal Custom Printing Souvenir', 'bantal-custom-printing-souvenir', 'Bantal leher, bantal foto, dan bantal souvenir perusahaan dengan print digital tajam anti pudar.', 'Image-Bantal-06-1030x729_eA0g.png', 1, 0),
(12, 4, 'Boneka Wisuda Graduation Series', 'boneka-wisuda-graduation-series', 'Teddy bear souvenir graduations lengkap dengan toga, pin universitas, slempang nama, dan box kado.', 'Image-Graduation-series-04-1030x729_eA0g.png', 1, 0),
(13, 6, 'Plushie Clownfish Sea Animal', 'plushie-clownfish-sea-animal', 'Plushie hewan laut edukatif untuk akuarium utama, wahana rekreasi, dan souvenir toko kehati.', 'Image-Clown-Fish-1030x729_eA0g.png', 0, 0),
(14, 3, 'Merchandise Custom Promo Product', 'merchandise-custom-promo-product', 'Plush toy kustom bentuk karakter logo atau produk perusahaan untuk campaign launching.', 'Image-Custom-05-1030x729_eA0g.png', 0, 1),
(15, 7, 'Plush Masker & Custom Accessories', 'plush-masker-custom-accessories', 'Aksesoris plushie kustom seperti masker kain bergambar karakter, pouch, dan gantungan kunci.', 'Slider-Masker-Product-1030x729_eA0g.jpg', 0, 0);

-- Articles
INSERT INTO articles (title, slug, content, thumbnail_path, author, published_at) VALUES
('5 Alasan Mengapa Boneka Custom Menjadi Souvenir Corporate Terbaik', '5-alasan-mengapa-boneka-custom-menjadi-souvenir-corporate-terbaik', '<p>Dalam dunia pemasaran modern, brand awareness bukan lagi sekadar logo di pen atau kaos. <strong>Boneka custom dan maskot perusahaan</strong> telah terbukti menjadi media promosi yang jauh lebih emosional, tahan lama, dan disukai oleh semua kalangan.</p><h3>1. Daya Tarik Emosional Tinggi</h3><p>Boneka memiliki tekstur lembut yang secara psikologis memberikan rasa hangat dan ramah. Saat penerima membawa pulang boneka berlogo perusahaan Anda, rasa keterikatan emosional terhadap brand akan terbentuk secara alami.</p><h3>2. Daya Tahan Berkelanjutan</h3><p>Berbeda dengan flyer atau brosur yang langsung dibuang, boneka souvenir dipajang di meja kerja, dashboard mobil, atau ruang tamu dalam hitungan tahun.</p><h3>3. Kustomisasi Tanpa Batas</h3><p>Di Bonekaku.co.id, Anda bisa menyesuaikan dari segi bentuk maskot, baju, warna bahan velboa, hingga bordir logo komputer berpresisi tinggi standar SNI.</p>', 'Image-Archie-Bear-1030x729_eA0g.png', 'Bonekaku.co.id', '2026-08-01 10:00:00'),
('Tips Memilih Bahan Boneka Custom yang Aman dan Berstandar SNI', 'tips-memilih-bahan-boneka-custom-yang-aman-dan-berstandar-sni', '<p>Memilih bahan boneka bukan hanya soal penampilan, tetapi juga keamanan dan kenyamanan pengguna, terutama anak-anak. Berikut petunjuk singkat mengenal jenis bahan kain boneka terbaik:</p><ul><li><strong>Yelvo:</strong> Bahan paling fleksibel dan super lembut dengan bulu sangat pendek. Sangat disukai untuk boneka impor.</li><li><strong>Velboa:</strong> Bahan bertekstur halus tanpa bulu rontok. Paling populer untuk boneka custom & maskot corporate.</li><li><strong>Dacron Silicon Grade A:</strong> Isian serat sintetis murni yang kenyal, tidak berdebu, dan dapat dicuci tanpa kempes.</li></ul>', 'Image-Badut-1030x729_eA0g.png', 'Tim Riset Bonekaku', '2026-08-05 14:30:00'),
('Panduan Memesan Maskot Badut Perusahaan dari Desain 2D ke Produk Nyata', 'panduan-memesan-maskot-badut-perusahaan-dari-desain-2d-ke-produk-nyata', '<p>Ingin menghidupkan karakter 2D perusahaan Anda menjadi kostum maskot nyata? Bonekaku menyediakan layanan pembuatan <em>prototype 3D</em> gratis sebelum produksi massal.</p><p>Proses dimulai dari analisis gambar acuan, penyesuaian proporsi tubuh manusia pemakai, pembuatan kerangka busa foam ringan berpori breathability tinggi, hingga finishing detail busana maskot.</p>', 'Image-Boneka-Custom-03-1030x729_eA0g.png', 'Studio Desain Bonekaku', '2026-08-10 09:15:00');
