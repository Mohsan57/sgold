<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = t('gallery.page_title') . ' | ' . t('brand_name');
$metaDescription = t('gallery.page_subtitle');
$canonicalUrl = base_url('gallery.php');

$schemaData = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ImageGallery",
  "name": "' . t('gallery.page_title') . '",
  "description": "' . t('gallery.page_subtitle') . '",
  "publisher": {
    "@type": "Organization",
    "name": "' . t('brand_name') . ' ' . t('brand_sub') . '"
  }
}
</script>';

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/navbar.php';
?>

<main>
  <!-- ======= PAGE HEADER ======= -->
  <header class="page-header" aria-label="Gallery header">
    <div class="page-header-bg"></div>
    <div class="container page-header-inner">
      <h1><?= t('gallery.page_title') ?></h1>
      <p><?= t('gallery.page_subtitle') ?></p>
    </div>
  </header>

  <!-- ======= GALLERY SECTION ======= -->
  <section class="section gallery-page-section" id="gallery" aria-label="Image Gallery">
    <div class="container">

      <!-- Gallery Filter (Optional/Future enhancement) -->
      <div class="gallery-filters" style="display:flex; justify-content:center; gap:16px; margin-bottom:40px; flex-wrap:wrap;">
        <button class="btn btn-outline active" style="background:var(--red); color:white; border-color:var(--red);"><?= t('gallery.filter_all') ?></button>
        <button class="btn btn-outline"><?= t('gallery.filter_motors') ?></button>
        <button class="btn btn-outline"><?= t('gallery.filter_pumps') ?></button>
        <button class="btn btn-outline"><?= t('gallery.filter_facility') ?></button>
      </div>

      <!-- Masonry/Grid Gallery -->
      <div class="gallery-grid" style="display:grid; grid-template-columns:repeat(auto-fill, minmax(300px, 1fr)); gap:24px;">

        <!-- Gallery Item 1 -->
        <div class="gallery-item" style="border-radius:12px; overflow:hidden; box-shadow:var(--shadow-sm); background:var(--white); transition:transform 0.3s ease;">
          <a href="<?= asset_url('assets/products/sgold-industrial-ac-electric-motor.webp') ?>" target="_blank" rel="noopener">
            <img src="<?= asset_url('assets/products/sgold-industrial-ac-electric-motor.webp') ?>" alt="S.Gold Industrial AC Electric Motor" loading="lazy" style="width:100%; height:250px; object-fit:contain; background:#f8f9fa; padding:20px; display:block;">
          </a>
          <div class="gallery-caption" style="padding:16px; border-top:1px solid #eee;">
            <h3 style="font-size:1.1rem; margin-bottom:4px;"><?= t('gallery.img1_title') ?></h3>
            <p style="font-size:0.9rem; color:var(--text-light);"><?= t('gallery.img1_desc') ?></p>
          </div>
        </div>

        <!-- Gallery Item 2 -->
        <div class="gallery-item" style="border-radius:12px; overflow:hidden; box-shadow:var(--shadow-sm); background:var(--white); transition:transform 0.3s ease;">
          <a href="<?= asset_url('assets/products/sgold-centrifugal-water-pump-red.webp') ?>" target="_blank" rel="noopener">
            <img src="<?= asset_url('assets/products/sgold-centrifugal-water-pump-red.webp') ?>" alt="S.Gold Centrifugal Water Pump (Red)" loading="lazy" style="width:100%; height:250px; object-fit:contain; background:#f8f9fa; padding:20px; display:block;">
          </a>
          <div class="gallery-caption" style="padding:16px; border-top:1px solid #eee;">
            <h3 style="font-size:1.1rem; margin-bottom:4px;"><?= t('gallery.img2_title') ?></h3>
            <p style="font-size:0.9rem; color:var(--text-light);"><?= t('gallery.img2_desc') ?></p>
          </div>
        </div>

        <!-- Gallery Item 3 -->
        <div class="gallery-item" style="border-radius:12px; overflow:hidden; box-shadow:var(--shadow-sm); background:var(--white); transition:transform 0.3s ease;">
          <a href="<?= asset_url('assets/products/sgold-agricultural-water-pump.webp') ?>" target="_blank" rel="noopener">
            <img src="<?= asset_url('assets/products/sgold-agricultural-water-pump.webp') ?>" alt="S.Gold Agricultural Water Pump" loading="lazy" style="width:100%; height:250px; object-fit:contain; background:#f8f9fa; padding:20px; display:block;">
          </a>
          <div class="gallery-caption" style="padding:16px; border-top:1px solid #eee;">
            <h3 style="font-size:1.1rem; margin-bottom:4px;"><?= t('gallery.img3_title') ?></h3>
            <p style="font-size:0.9rem; color:var(--text-light);"><?= t('gallery.img3_desc') ?></p>
          </div>
        </div>

        <!-- Gallery Item 4 -->
        <div class="gallery-item" style="border-radius:12px; overflow:hidden; box-shadow:var(--shadow-sm); background:var(--white); transition:transform 0.3s ease;">
          <a href="<?= asset_url('assets/products/sgold-electric-water-pump.webp') ?>" target="_blank" rel="noopener">
            <img src="<?= asset_url('assets/products/sgold-electric-water-pump.webp') ?>" alt="S.Gold Electric Water Pump" loading="lazy" style="width:100%; height:250px; object-fit:contain; background:#f8f9fa; padding:20px; display:block;">
          </a>
          <div class="gallery-caption" style="padding:16px; border-top:1px solid #eee;">
            <h3 style="font-size:1.1rem; margin-bottom:4px;"><?= t('gallery.img4_title') ?></h3>
            <p style="font-size:0.9rem; color:var(--text-light);"><?= t('gallery.img4_desc') ?></p>
          </div>
        </div>

        <!-- Gallery Item 5 -->
        <div class="gallery-item" style="border-radius:12px; overflow:hidden; box-shadow:var(--shadow-sm); background:var(--white); transition:transform 0.3s ease;">
          <a href="<?= asset_url('assets/products/electric-motor.png') ?>" target="_blank" rel="noopener">
            <img src="<?= asset_url('assets/products/electric-motor.png') ?>" alt="S.Gold Standard Motor" loading="lazy" style="width:100%; height:250px; object-fit:contain; background:#f8f9fa; padding:20px; display:block;">
          </a>
          <div class="gallery-caption" style="padding:16px; border-top:1px solid #eee;">
            <h3 style="font-size:1.1rem; margin-bottom:4px;"><?= t('gallery.img5_title') ?></h3>
            <p style="font-size:0.9rem; color:var(--text-light);"><?= t('gallery.img5_desc') ?></p>
          </div>
        </div>

        <!-- Gallery Item 6 -->
        <div class="gallery-item" style="border-radius:12px; overflow:hidden; box-shadow:var(--shadow-sm); background:var(--white); transition:transform 0.3s ease;">
          <a href="<?= asset_url('assets/products/self-priming-pump.png') ?>" target="_blank" rel="noopener">
            <img src="<?= asset_url('assets/products/self-priming-pump.png') ?>" alt="S.Gold Self-Priming Pump" loading="lazy" style="width:100%; height:250px; object-fit:contain; background:#f8f9fa; padding:20px; display:block;">
          </a>
          <div class="gallery-caption" style="padding:16px; border-top:1px solid #eee;">
            <h3 style="font-size:1.1rem; margin-bottom:4px;"><?= t('gallery.img6_title') ?></h3>
            <p style="font-size:0.9rem; color:var(--text-light);"><?= t('gallery.img6_desc') ?></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ======= CTA BANNER ======= -->
  <section class="cta-banner" aria-label="Contact call to action">
    <div class="container">
      <div class="cta-content">
        <h2><?= t('gallery.cta_title') ?></h2>
        <p><?= t('gallery.cta_desc') ?></p>
        <a href="https://wa.me/923039351425" class="btn btn-whatsapp btn-lg" target="_blank" rel="noopener">
          <?= t('gallery.cta_btn') ?>
        </a>
      </div>
    </div>
  </section>

</main>

<?php
require_once __DIR__ . '/components/whatsapp.php';
require_once __DIR__ . '/components/footer.php';
require_once __DIR__ . '/components/scripts.php';
?>
