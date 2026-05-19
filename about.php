<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = t('about.page_title');
$metaDescription = t('about.page_subtitle');
$canonicalUrl = base_url('about.php');

$schemaData = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "' . t('about.page_title') . '",
  "description": "' . t('about.page_subtitle') . '",
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
  <header class="page-header" aria-label="About Us header">
    <div class="page-header-bg"></div>
    <div class="container page-header-inner">
      <h1><?= t('about.page_title') ?></h1>
      <p><?= t('about.page_subtitle') ?></p>
    </div>
  </header>

  <!-- ======= STORY / OVERVIEW ======= -->
  <section class="section about-story" id="our-story" aria-label="Our Story">
    <div class="container">
      <div class="about-grid">
        <div class="about-content">
          <div class="tag"><?= t('about.story_tag') ?></div>
          <h2><?= t('about.story_title') ?></h2>
          <p><?= t('about.story_p1') ?></p>
          <p><?= t('about.story_p2') ?></p>
          <div class="about-stats mt-32">
            <div class="about-stat">
              <div class="num" dir="ltr"><?= t('about.stat1_num') ?></div>
              <div class="text"><?= t('about.stat1_text') ?></div>
            </div>
            <div class="about-stat">
              <div class="num" dir="ltr"><?= t('about.stat2_num') ?></div>
              <div class="text"><?= t('about.stat2_text') ?></div>
            </div>
            <div class="about-stat">
              <div class="num" dir="ltr"><?= t('about.stat3_num') ?></div>
              <div class="text"><?= t('about.stat3_text') ?></div>
            </div>
          </div>
          <div class="about-highlights mt-32">
            <div class="about-highlight"><?= t('about.hl1') ?></div>
            <div class="about-highlight"><?= t('about.hl2') ?></div>
            <div class="about-highlight"><?= t('about.hl3') ?></div>
            <div class="about-highlight"><?= t('about.hl4') ?></div>
            <div class="about-highlight"><?= t('about.hl5') ?></div>
          </div>
        </div>
        <div class="about-image-grid">
          <img src="<?= asset_url('assets/products/electric-motor.png') ?>" alt="S.Gold Electric Motor — flagship product" loading="lazy" style="object-fit:contain; background:#f4f4f4; padding:16px;">
          <img src="<?= asset_url('assets/products/centrifugal-pump.png') ?>" alt="S.Gold Centrifugal Pump" loading="lazy" style="object-fit:contain; background:#f4f4f4; padding:16px;">
          <img src="<?= asset_url('assets/products/self-priming-pump.png') ?>" alt="S.Gold Self-Priming Pump" loading="lazy" style="object-fit:contain; background:#f4f4f4; padding:16px;">
        </div>
      </div>
    </div>
  </section>

  <!-- ======= OWNER ======= -->
  <section class="about-owner" id="our-team" aria-label="Company owner">
    <div class="container">
      <div class="section-header" style="margin-bottom:40px;">
        <div class="tag" style="color:var(--red-light); background:rgba(192,32,26,0.15); border-color:rgba(192,32,26,0.3);"><?= t('about.leadership_tag') ?></div>
        <h2 style="color:var(--white);"><?= t('about.leadership_title') ?></h2>
      </div>
      <div class="owner-card">
        <div class="owner-photo">
          <img src="<?= asset_url('assets/final.png') ?>" alt="S.Gold Owner and Founder" loading="lazy">
        </div>
        <div class="owner-info">
          <h3><?= t('about.owner_name') ?></h3>
          <span class="role"><?= t('about.owner_role') ?></span>
          <p><?= t('about.owner_p1') ?></p>
          <p style="margin-top:12px;"><?= t('about.owner_p2') ?></p>
          <a href="https://wa.me/923039351425?text=Hello%2C%20I'd%20like%20to%20speak%20with%20the%20owner%20about%20your%20products." class="btn btn-whatsapp" style="margin-top:24px;" target="_blank" rel="noopener" id="owner-whatsapp-btn">
            <?= t('about.contact_owner') ?>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= VALUES ======= -->
  <section class="section values-section" id="our-values" aria-label="Company values">
    <div class="container">
      <div class="section-header">
        <div class="tag"><?= t('about.values_tag') ?></div>
        <h2><?= t('about.values_title') ?></h2>
        <p><?= t('about.values_desc') ?></p>
      </div>
      <div class="grid-3" role="list">
        <div class="value-card" role="listitem">
          <div class="value-icon">🏆</div>
          <h3><?= t('about.val1_title') ?></h3>
          <p><?= t('about.val1_desc') ?></p>
        </div>
        <div class="value-card" role="listitem">
          <div class="value-icon">⚡</div>
          <h3><?= t('about.val2_title') ?></h3>
          <p><?= t('about.val2_desc') ?></p>
        </div>
        <div class="value-card" role="listitem">
          <div class="value-icon">🤝</div>
          <h3><?= t('about.val3_title') ?></h3>
          <p><?= t('about.val3_desc') ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= LOCATION ======= -->
  <section class="section location-section" id="our-location" aria-label="Company location">
    <div class="container">
      <div class="section-header">
        <div class="tag"><?= t('about.loc_tag') ?></div>
        <h2><?= t('about.loc_title') ?></h2>
        <p><?= t('about.loc_desc') ?></p>
      </div>
      <div class="map-wrap">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13588.822!2d74.1769!3d32.1877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f2e7c3a3a3a3a%3A0x3a3a3a3a3a3a3a3a!2sGujranwala%2C%20Pakistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
          loading="lazy"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"
          title="S.Gold location in Gujranwala, Pakistan">
        </iframe>
      </div>
      <div class="location-info">
        <div class="icon">📍</div>
        <div>
          <strong><?= t('brand_name') ?> <?= t('brand_sub') ?></strong><br>
          Rajkot, Gujranwala, Pakistan — 52250<br>
          <a href="https://wa.me/923039351425" target="_blank" rel="noopener" style="color:var(--red);" dir="ltr">WhatsApp: +92 303 9351425</a> &nbsp;|&nbsp;
          <a href="tel:+923039351425" style="color:var(--red);" dir="ltr">Call: 0303 935 1425</a>
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
