/* ============================================
   SGOLD — Main JavaScript
   ============================================ */

(function () {
  'use strict';

  // ==========================================
  // 1. Navbar Scroll Effect
  // ==========================================
  const navbar = document.getElementById('navbar');

  function handleNavbarScroll() {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  if (navbar) {
    window.addEventListener('scroll', handleNavbarScroll, { passive: true });
    handleNavbarScroll(); // run on load
  }

  // ==========================================
  // 2. Mobile Hamburger Menu
  // ==========================================
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobile-menu');

  function toggleMobileMenu() {
    const isOpen = hamburger.classList.toggle('open');
    if (isOpen) {
      mobileMenu.classList.add('open');
      mobileMenu.setAttribute('aria-hidden', 'false');
      hamburger.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    } else {
      mobileMenu.classList.remove('open');
      mobileMenu.setAttribute('aria-hidden', 'true');
      hamburger.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }
  }

  function closeMobileMenu() {
    if (hamburger) {
      hamburger.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
    }
    if (mobileMenu) {
      mobileMenu.classList.remove('open');
      mobileMenu.setAttribute('aria-hidden', 'true');
    }
    document.body.style.overflow = '';
  }

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', toggleMobileMenu);

    // Close when clicking a link
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeMobileMenu);
    });

    // Close on outside click
    document.addEventListener('click', function (e) {
      if (
        mobileMenu.classList.contains('open') &&
        !mobileMenu.contains(e.target) &&
        !hamburger.contains(e.target)
      ) {
        closeMobileMenu();
      }
    });
  }

  // ==========================================
  // 3. Active Nav Link Detection
  // ==========================================
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';

  document.querySelectorAll('.navbar-nav a, .mobile-menu a').forEach(link => {
    const href = link.getAttribute('href');
    if (
      href === currentPage ||
      (currentPage === '' && href === 'index.html') ||
      (currentPage === 'index.html' && href === 'index.html')
    ) {
      link.classList.add('active');
      link.setAttribute('aria-current', 'page');
    }
  });

  if (mobileMenu) {
    mobileMenu.setAttribute('aria-hidden', 'true');
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileMenu.classList.contains('open')) {
      closeMobileMenu();
    }
  });

  // ==========================================
  // 4. Stats Counter Animation
  // ==========================================
  function animateCounter(el, target, suffix) {
    const duration = 1800;
    const start = performance.now();
    const isDecimal = target % 1 !== 0;

    function update(time) {
      const elapsed = time - start;
      const progress = Math.min(elapsed / duration, 1);
      // easeOutQuart
      const ease = 1 - Math.pow(1 - progress, 4);
      const current = Math.round(ease * target);
      el.textContent = current.toLocaleString() + suffix;
      if (progress < 1) requestAnimationFrame(update);
    }

    requestAnimationFrame(update);
  }

  const statsBar = document.querySelector('.stats-bar');
  if (statsBar) {
    const counters = statsBar.querySelectorAll('[data-count]');
    let animated = false;

    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(entry => {
          if (entry.isIntersecting && !animated) {
            animated = true;
            counters.forEach(counter => {
              const target = parseFloat(counter.dataset.count);
              const suffix = counter.dataset.suffix || '';
              animateCounter(counter, target, suffix);
            });
          }
        });
      },
      { threshold: 0.3 }
    );

    observer.observe(statsBar);
  }

  // ==========================================
  // 5. Smooth Scroll for anchor links
  // ==========================================
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // ==========================================
  // 6. Scroll-reveal Animation (fade in on scroll)
  // ==========================================
  const revealElements = document.querySelectorAll(
    '.product-card, .feature-box, .value-card, .stat-item'
  );

  if ('IntersectionObserver' in window && revealElements.length) {
    const revealObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach((entry, i) => {
          if (entry.isIntersecting) {
            setTimeout(() => {
              entry.target.style.opacity = '1';
              entry.target.style.transform = 'translateY(0)';
            }, 80 * i);
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
    );

    revealElements.forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
      revealObserver.observe(el);
    });
  }

})();
