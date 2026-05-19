<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = t('contact.page_title') . ' | ' . t('brand_name');
$metaDescription = t('contact.page_subtitle');
$canonicalUrl = base_url('contact.php');

$schemaData = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "' . t('contact.page_title') . '",
  "description": "' . t('contact.page_subtitle') . '",
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "' . t('brand_name') . ' ' . t('brand_sub') . '",
    "telephone": "+92-303-9351425",
    "email": "mateenmughal67@gmail.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Rajkot",
      "addressLocality": "Gujranwala",
      "addressRegion": "Punjab",
      "postalCode": "52250",
      "addressCountry": "PK"
    }
  }
}
</script>';

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/navbar.php';
?>

<main>
  <!-- ======= PAGE HEADER ======= -->
  <header class="page-header" aria-label="Contact Us header">
    <div class="page-header-bg"></div>
    <div class="container page-header-inner">
      <h1><?= t('contact.page_title') ?></h1>
      <p><?= t('contact.page_subtitle') ?></p>
    </div>
  </header>

  <!-- ======= CONTACT SECTION ======= -->
  <section class="section contact-page-section" aria-label="Contact Information">
    <div class="container">
      <div class="contact-grid">

        <!-- Contact Information Cards -->
        <div class="contact-info-wrapper">
          <div class="section-header" style="text-align: left; align-items: flex-start;">
            <div class="tag"><?= t('contact.touch_tag') ?></div>
            <h2><?= t('contact.touch_title') ?></h2>
            <p><?= t('contact.touch_desc') ?></p>
          </div>

          <div class="contact-info-cards mt-32">
            <!-- Phone -->
            <div class="info-card">
              <div class="icon">📞</div>
              <div class="details">
                <h3><?= t('contact.call_title') ?></h3>
                <p><?= t('contact.call_desc') ?></p>
                <a href="tel:+923039351425" dir="ltr">0303 935 1425</a>
              </div>
            </div>

            <!-- WhatsApp -->
            <div class="info-card">
              <div class="icon">💬</div>
              <div class="details">
                <h3><?= t('contact.wa_title') ?></h3>
                <p><?= t('contact.wa_desc') ?></p>
                <a href="https://wa.me/923039351425" target="_blank" rel="noopener" dir="ltr">+92 303 9351425</a>
              </div>
            </div>

            <!-- Email -->
            <div class="info-card">
              <div class="icon">✉️</div>
              <div class="details">
                <h3><?= t('contact.email_title') ?></h3>
                <p><?= t('contact.email_desc') ?></p>
                <a href="mailto:mateenmughal67@gmail.com">mateenmughal67@gmail.com</a>
              </div>
            </div>

            <!-- Address -->
            <div class="info-card">
              <div class="icon">📍</div>
              <div class="details">
                <h3><?= t('contact.visit_title') ?></h3>
                <p><?= t('contact.visit_desc') ?></p>
                <address><?= t('contact.address') ?></address>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-wrapper">
          <div class="contact-form-card">
            <h3><?= t('contact.direct_title') ?></h3>
            <p style="margin-bottom:24px; color:var(--text-light);"><?= t('contact.direct_desc') ?></p>
            <form action="https://formspree.io/f/xbjnqqlg" method="POST" class="contact-form" id="contact-form">
              <div class="form-group">
                <label for="name"><?= t('contact.form_name') ?> *</label>
                <input type="text" id="name" name="name" required placeholder="<?= t('contact.form_name') ?>">
              </div>
              <div class="form-group">
                <label for="phone"><?= t('contact.form_phone') ?> *</label>
                <input type="tel" id="phone" name="phone" required placeholder="03XXXXXXXXX" dir="ltr">
              </div>
              <div class="form-group">
                <label for="message"><?= t('contact.form_msg') ?> *</label>
                <textarea id="message" name="message" rows="5" required placeholder="<?= t('contact.form_msg') ?>"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100" id="contact-submit-btn"><?= t('contact.form_btn') ?></button>
            </form>
            <p id="form-status" style="margin-top:16px; font-weight:600; text-align:center;"></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ======= MAP ======= -->
  <section class="section map-section" aria-label="Our Location on Map" style="padding-top:0;">
    <div class="container">
      <div class="map-wrap" style="height:400px; border-radius:12px; overflow:hidden; box-shadow:var(--shadow-md);">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13588.822!2d74.1769!3d32.1877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391f2e7c3a3a3a3a%3A0x3a3a3a3a3a3a3a3a!2sGujranwala%2C%20Pakistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="S.Gold location in Gujranwala, Pakistan">
        </iframe>
      </div>
    </div>
  </section>
</main>

<?php
require_once __DIR__ . '/components/whatsapp.php';
require_once __DIR__ . '/components/footer.php';
require_once __DIR__ . '/components/scripts.php';
?>
