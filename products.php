<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = t('products.page_title') . ' | ' . t('brand_name');
$metaDescription = t('products.page_subtitle');
$canonicalUrl = base_url('products.php');

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/navbar.php';
?>

<main>
  <!-- ======= PAGE HEADER ======= -->
  <header class="page-header" aria-label="Products header">
    <div class="page-header-bg"></div>
    <div class="container page-header-inner">
      <h1><?= t('products.page_title') ?></h1>
      <p><?= t('products.page_subtitle') ?></p>
    </div>
  </header>

  <!-- ======= PRODUCT CATALOG ======= -->
  <section class="section product-catalog" id="catalog" aria-label="Product Catalog">
    <div class="container">

      <!-- Category: Electric Motors -->
      <div class="catalog-category">
        <div class="category-header">
          <h2><?= t('products.cat1_title') ?></h2>
          <p><?= t('products.cat1_desc') ?></p>
        </div>
        <div class="grid-3">
          <!-- Product -->
          <article class="product-card">
            <div class="product-card-image">
              <img src="<?= asset_url('assets/products/sgold-industrial-ac-electric-motor.webp') ?>" alt="S.Gold Industrial AC Electric Motor" loading="lazy">
            </div>
            <div class="product-card-body">
              <span class="product-card-badge"><?= t('products.motor1_badge') ?></span>
              <h3><?= t('products.motor1_title') ?></h3>
              <p><?= t('products.motor1_desc') ?></p>
              <div class="product-card-specs">
                <span class="spec-tag" dir="ltr"><?= t('products.motor1_s1') ?></span>
                <span class="spec-tag" dir="ltr"><?= t('products.motor1_s2') ?></span>
                <span class="spec-tag" dir="ltr"><?= t('products.motor1_s3') ?></span>
              </div>
              <a href="https://wa.me/923039351425?text=I%20am%20interested%20in%20the%20Industrial%20AC%20Electric%20Motor" class="btn btn-primary" style="width:100%; margin-top:16px; text-align:center;" target="_blank"><?= t('products.inquire_wa') ?></a>
            </div>
          </article>

          <!-- Product -->
          <article class="product-card">
            <div class="product-card-image">
              <img src="<?= asset_url('assets/products/electric-motor.png') ?>" alt="S.Gold Standard Electric Motor" loading="lazy">
            </div>
            <div class="product-card-body">
              <span class="product-card-badge"><?= t('products.motor2_badge') ?></span>
              <h3><?= t('products.motor2_title') ?></h3>
              <p><?= t('products.motor2_desc') ?></p>
              <div class="product-card-specs">
                <span class="spec-tag" dir="ltr"><?= t('products.motor2_s1') ?></span>
                <span class="spec-tag" dir="ltr"><?= t('products.motor2_s2') ?></span>
              </div>
              <a href="https://wa.me/923039351425?text=I%20am%20interested%20in%20the%20Standard%20Electric%20Motor" class="btn btn-primary" style="width:100%; margin-top:16px; text-align:center;" target="_blank"><?= t('products.inquire_wa') ?></a>
            </div>
          </article>
        </div>
      </div>

      <!-- Category: Water Pumps -->
      <div class="catalog-category" style="margin-top: 60px;">
        <div class="category-header">
          <h2><?= t('products.cat2_title') ?></h2>
          <p><?= t('products.cat2_desc') ?></p>
        </div>
        <div class="grid-3">
          <!-- Product -->
          <article class="product-card">
            <div class="product-card-image">
              <img src="<?= asset_url('assets/products/sgold-centrifugal-water-pump-red.webp') ?>" alt="S.Gold Centrifugal Water Pump (Red)" loading="lazy">
            </div>
            <div class="product-card-body">
              <span class="product-card-badge"><?= t('products.pump1_badge') ?></span>
              <h3><?= t('products.pump1_title') ?></h3>
              <p><?= t('products.pump1_desc') ?></p>
              <div class="product-card-specs">
                <span class="spec-tag"><?= t('products.pump1_s1') ?></span>
                <span class="spec-tag"><?= t('products.pump1_s2') ?></span>
              </div>
              <a href="https://wa.me/923039351425?text=I%20am%20interested%20in%20the%20Centrifugal%20Water%20Pump" class="btn btn-primary" style="width:100%; margin-top:16px; text-align:center;" target="_blank"><?= t('products.inquire_wa') ?></a>
            </div>
          </article>

          <!-- Product -->
          <article class="product-card">
            <div class="product-card-image">
              <img src="<?= asset_url('assets/products/sgold-agricultural-water-pump.webp') ?>" alt="S.Gold Agricultural Water Pump" loading="lazy">
            </div>
            <div class="product-card-body">
              <span class="product-card-badge"><?= t('products.pump2_badge') ?></span>
              <h3><?= t('products.pump2_title') ?></h3>
              <p><?= t('products.pump2_desc') ?></p>
              <div class="product-card-specs">
                <span class="spec-tag"><?= t('products.pump2_s1') ?></span>
                <span class="spec-tag"><?= t('products.pump2_s2') ?></span>
              </div>
              <a href="https://wa.me/923039351425?text=I%20am%20interested%20in%20the%20Agricultural%20Water%20Pump" class="btn btn-primary" style="width:100%; margin-top:16px; text-align:center;" target="_blank"><?= t('products.inquire_wa') ?></a>
            </div>
          </article>

          <!-- Product -->
          <article class="product-card">
            <div class="product-card-image">
              <img src="<?= asset_url('assets/products/sgold-electric-water-pump.webp') ?>" alt="S.Gold Electric Water Pump Assembly" loading="lazy">
            </div>
            <div class="product-card-body">
              <span class="product-card-badge"><?= t('products.pump3_badge') ?></span>
              <h3><?= t('products.pump3_title') ?></h3>
              <p><?= t('products.pump3_desc') ?></p>
              <div class="product-card-specs">
                <span class="spec-tag"><?= t('products.pump3_s1') ?></span>
                <span class="spec-tag"><?= t('products.pump3_s2') ?></span>
              </div>
              <a href="https://wa.me/923039351425?text=I%20am%20interested%20in%20the%20Complete%20Pump%20Assembly" class="btn btn-primary" style="width:100%; margin-top:16px; text-align:center;" target="_blank"><?= t('products.inquire_wa') ?></a>
            </div>
          </article>
        </div>
      </div>

    </div>
  </section>

</main>

<?php
require_once __DIR__ . '/components/whatsapp.php';
require_once __DIR__ . '/components/footer.php';
require_once __DIR__ . '/components/scripts.php';
?>
