/* public/assets/js/main.js */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Sticky Navbar Shrink on Scroll (> 40px)
  const navbar = document.getElementById('mainNavbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 40) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }, { passive: true });
  }

  // 2. Mobile Drawer Toggle
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const drawerOverlay = document.getElementById('drawerOverlay');

  if (mobileToggle && mobileDrawer) {
    mobileToggle.addEventListener('click', () => {
      mobileDrawer.classList.toggle('open');
      if (drawerOverlay) drawerOverlay.classList.toggle('active');
    });

    if (drawerOverlay) {
      drawerOverlay.addEventListener('click', () => {
        mobileDrawer.classList.remove('open');
        drawerOverlay.classList.remove('active');
      });
    }
  }

  // 3. Scroll Reveal Animation using IntersectionObserver
  const revealElements = document.querySelectorAll('.reveal-up');
  if (revealElements.length > 0 && 'IntersectionObserver' in window) {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -40px 0px'
    };

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add('revealed');
          }, index * 60); // stagger 60ms
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    revealElements.forEach(el => observer.observe(el));
  } else {
    revealElements.forEach(el => el.classList.add('revealed'));
  }

  // 4. Floating WhatsApp Order Chip Auto-hide on Scroll
  const waChip = document.getElementById('waChipLabel');
  if (waChip) {
    setTimeout(() => {
      waChip.style.opacity = '0';
      setTimeout(() => waChip.style.display = 'none', 300);
    }, 6000);
  }
});
