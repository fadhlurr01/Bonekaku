/* public/assets/js/filter-katalog.js */

document.addEventListener('DOMContentLoaded', () => {
  const filterPills = document.querySelectorAll('.filter-pill');
  const productCards = document.querySelectorAll('.product-item-col');

  if (filterPills.length > 0 && productCards.length > 0) {
    filterPills.forEach(pill => {
      pill.addEventListener('click', (e) => {
        const categorySlug = pill.getAttribute('data-filter');

        // Update active class
        filterPills.forEach(p => p.classList.remove('active'));
        pill.classList.add('active');

        // Filter products
        productCards.forEach(card => {
          const cardCat = card.getAttribute('data-category');
          if (categorySlug === 'all' || cardCat === categorySlug) {
            card.style.display = 'block';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'scale(1)';
            }, 50);
          } else {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.95)';
            setTimeout(() => {
              card.style.display = 'none';
            }, 250);
          }
        });
      });
    });
  }

  // Quick View Glass Modal Logic
  const quickViewBtns = document.querySelectorAll('.btn-quick-view');
  const modalOverlay = document.getElementById('quickViewModal');
  const modalCloseBtn = document.getElementById('closeModalBtn');

  if (quickViewBtns.length > 0 && modalOverlay) {
    quickViewBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const name = btn.getAttribute('data-name');
        const img = btn.getAttribute('data-img');
        const category = btn.getAttribute('data-category');
        const desc = btn.getAttribute('data-desc');

        document.getElementById('modalProductTitle').textContent = name;
        document.getElementById('modalProductCategory').textContent = category;
        document.getElementById('modalProductDesc').textContent = desc || 'Boneka custom berbahan velboa/yelvo standar SNI berkualitas tinggi.';
        document.getElementById('modalProductImg').src = img;

        const waUrl = `https://wa.me/6281385508611?text=Halo%20Bonekaku,%20saya%20tertarik%20dengan%20produk%20${encodeURIComponent(name)}`;
        document.getElementById('modalWaBtn').href = waUrl;

        modalOverlay.classList.add('active');
      });
    });

    if (modalCloseBtn) {
      modalCloseBtn.addEventListener('click', () => {
        modalOverlay.classList.remove('active');
      });
    }

    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.remove('active');
      }
    });
  }
});
