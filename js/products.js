/* ============================================
   SGOLD — Products Filter JavaScript
   ============================================ */

(function () {
  'use strict';

  const tabs = document.querySelectorAll('.filter-tab');
  const items = document.querySelectorAll('.product-item');

  if (!tabs.length || !items.length) return;

  function filterProducts(category) {
    items.forEach(item => {
      const itemCat = item.dataset.category;
      if (category === 'all' || itemCat === category) {
        item.classList.remove('hidden');
        // Trigger fade-in
        item.style.opacity = '0';
        item.style.transform = 'translateY(16px)';
        requestAnimationFrame(() => {
          setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
          }, 30);
        });
      } else {
        item.classList.add('hidden');
      }
    });
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', function () {
      // Update active tab
      tabs.forEach(t => t.classList.remove('active'));
      this.classList.add('active');

      // Filter
      const category = this.dataset.filter;
      filterProducts(category);
    });
  });

  // Apply transitions to items
  items.forEach(item => {
    item.style.transition = 'opacity 0.35s ease, transform 0.35s ease';
  });

})();
