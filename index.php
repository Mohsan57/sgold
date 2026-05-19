<?php
// Initialize language based on URL or session, handled primarily by config if using simple inclusion pattern
// But since we include config.php which sets default, that's fine.
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'S.Gold Electric Motors | Water Pumps & Electric Motors — Gujranwala';
$metaDescription = "S.Gold Electric Motors — Quality water pumps and electric motors manufactured in Gujranwala, Pakistan. Trusted by 13,000+ clients for agricultural irrigation and industrial applications. Available in 1-50 HP with 220V/440V options. Buy online or call 0303-9351425.";
$canonicalUrl = base_url('index.php');

$schemaData = '
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "S.Gold Electric Motors",
    "image": "https://sgold.pk/assets/logo/sgold-logo.png",
    "description": "Pakistan\'s trusted manufacturer of electric motors and water pumps for agriculture and industry. Made in Gujranwala with over 10 years of expertise.",
    "telephone": "+92-303-9351425",
    "email": "mateenmughal67@gmail.com",
    "url": "https://sgold.pk",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Rajkot",
      "addressLocality": "Gujranwala",
      "addressRegion": "Punjab",
      "postalCode": "52250",
      "addressCountry": "PK"
    },
    "areaServed": [
      {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": "32.1814",
          "longitude": "74.1855"
        },
        "geoRadius": "500"
      }
    ],
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "32.1814",
      "longitude": "74.1855"
    },
    "sameAs": [
      "https://www.facebook.com/sgoldmotors",
      "https://wa.me/923039351425"
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "5",
      "ratingCount": "10"
    },
    "priceRange": "PKR"
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "S.Gold Electric Motors",
    "url": "https://sgold.pk",
    "logo": "https://sgold.pk/assets/logo/sgold-logo.png",
    "sameAs": [
      "https://www.facebook.com/sgoldmotors",
      "https://wa.me/923039351425"
    ],
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "Sales",
      "telephone": "+92-303-9351425",
      "email": "mateenmughal67@gmail.com"
    },
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Rajkot",
      "addressLocality": "Gujranwala",
      "addressRegion": "Punjab",
      "postalCode": "52250",
      "addressCountry": "PK"
    },
    "foundingDate": "2015",
    "founders": [
      {
        "@type": "Person",
        "name": "S.Gold Management Team"
      }
    ],
    "about": "Manufacturer of quality electric motors and water pumps for agricultural and industrial applications across Pakistan."
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://sgold.pk/"
      }
    ]
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What electric motors does S.Gold manufacture?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "S.Gold manufactures industrial-grade electric motors ranging from 1 HP to 50 HP, available in 220V and 440V configurations with 3-phase power. Our motors are designed for agricultural pumps, irrigation systems, and industrial applications across Pakistan."
        }
      },
      {
        "@type": "Question",
        "name": "Where is S.Gold located?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "S.Gold is located in Gujranwala, Punjab, Pakistan (postal code 52250). We operate from Rajkot, Gujranwala, with a focus on serving customers across Pakistan\'s agricultural and industrial sectors."
        }
      },
      {
        "@type": "Question",
        "name": "What are the main applications for S.Gold water pumps?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "S.Gold water pumps are used for tube well irrigation, agricultural water supply, centrifugal water transfer, and industrial fluid handling. Our pumps are specifically engineered for Pakistan\'s agricultural needs and tough operating conditions."
        }
      },
      {
        "@type": "Question",
        "name": "How many customers does S.Gold serve?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "S.Gold is trusted by over 13,000 happy clients across Pakistan, with 100% quality assurance and a track record of 10+ years in electric motor and pump manufacturing."
        }
      },
      {
        "@type": "Question",
        "name": "What is S.Gold\'s customer rating?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "S.Gold has a perfect 5-star rating with all 10 customer reviews being 5 stars. Our customers consistently praise our product quality, reliability, and customer service."
        }
      },
      {
        "@type": "Question",
        "name": "How can I contact S.Gold?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can contact S.Gold via WhatsApp at +92-303-9351425, phone at 0303 935 1425, or email at mateenmughal67@gmail.com. We\'re available to answer questions about electric motors and water pumps."
        }
      }
    ]
  }
  </script>';

require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/navbar.php';
?>

<main>
  <!-- ======= HERO ======= -->
  <section class="hero" id="hero" aria-label="Hero section">
    <div class="hero-bg" aria-hidden="true"></div>
    <div class="hero-overlay" aria-hidden="true"></div>
    <div class="container hero-inner">
      <div class="hero-content">
        <div class="hero-tag"><?= htmlspecialchars(t('home.hero_tag')) ?></div>
        <h1><?= t('home.hero_title') ?></h1>
        <p><?= htmlspecialchars(t('home.hero_desc')) ?></p>
        <div class="hero-actions">
          <a href="<?= base_url('products.php') ?>" class="btn btn-primary btn-lg" id="hero-explore-btn">
            <?= htmlspecialchars(t('home.hero_explore')) ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="<?= base_url('contact.php') ?>" class="btn btn-outline btn-lg" id="hero-contact-btn"><?= htmlspecialchars(t('home.hero_contact')) ?></a>
        </div>
        <div class="hero-trust">
          <div class="hero-trust-item">
            <span>⭐</span>
            <span><?= htmlspecialchars(t('home.hero_trust_reviews')) ?></span>
          </div>
          <div class="hero-trust-item">
            <span>🏭</span>
            <span><?= htmlspecialchars(t('home.hero_trust_local')) ?></span>
          </div>
        </div>
      </div>
      <div class="hero-image-wrap">
        <div class="hero-image-bg" aria-hidden="true"></div>
        <img src="<?= asset_url('assets/products/optimized/industrial-ac-electric-motor.webp') ?>" alt="S.Gold Electric Motor — Industrial Grade" loading="eager">
      </div>
    </div>
  </section>

  <!-- ======= STATS BAR ======= -->
  <section class="stats-bar" aria-label="Company statistics">
    <div class="stats-inner">
      <div class="stat-item">
        <div class="stat-number" data-count="13000" data-suffix="+" id="stat-clients">0+</div>
        <div class="stat-label"><?= htmlspecialchars(t('home.stat_clients')) ?></div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="2" data-suffix="+" id="stat-lines">0+</div>
        <div class="stat-label"><?= htmlspecialchars(t('home.stat_lines')) ?></div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="100" data-suffix="%" id="stat-quality">0%</div>
        <div class="stat-label"><?= htmlspecialchars(t('home.stat_quality')) ?></div>
      </div>
      <div class="stat-item">
        <div class="stat-number" data-count="10" data-suffix="+" id="stat-years">0+</div>
        <div class="stat-label"><?= htmlspecialchars(t('home.stat_years')) ?></div>
      </div>
    </div>
  </section>

  <!-- ======= PRODUCT CATEGORIES ======= -->
  <section class="section home-products" id="products-overview" aria-label="Product categories">
    <div class="container">
      <div class="section-header">
        <div class="tag"><?= htmlspecialchars(t('home.products_tag')) ?></div>
        <h2><?= htmlspecialchars(t('home.products_title')) ?></h2>
        <p><?= htmlspecialchars(t('home.products_desc')) ?></p>
      </div>
      <div class="grid-3" role="list">
        <!-- Card 1 -->
        <article class="product-card" role="listitem">
          <div class="product-card-image">
            <img src="<?= asset_url('assets/products/sgold-industrial-ac-electric-motor.webp') ?>" alt="S.Gold Industrial AC Electric Motor" loading="lazy">
          </div>
          <div class="product-card-body">
            <span class="product-card-badge"><?= htmlspecialchars(t('home.prod1_badge')) ?></span>
            <h3><?= htmlspecialchars(t('home.prod1_title')) ?></h3>
            <p><?= htmlspecialchars(t('home.prod1_desc')) ?></p>
            <div class="product-card-specs">
              <span class="spec-tag" dir="ltr">1–50 HP</span>
              <span class="spec-tag" dir="ltr">220V / 440V</span>
              <span class="spec-tag" dir="ltr">3-Phase</span>
            </div>
            <a href="<?= base_url('products.php') ?>" class="product-card-link" id="home-motor-link">
              <?= htmlspecialchars(t('view_details')) ?>
            </a>
          </div>
        </article>
        <!-- Card 2 -->
        <article class="product-card" role="listitem">
          <div class="product-card-image">
            <img src="<?= asset_url('assets/products/sgold-centrifugal-water-pump-red.webp') ?>" alt="S.Gold Centrifugal Water Pump (Red)" loading="lazy">
          </div>
          <div class="product-card-body">
            <span class="product-card-badge"><?= htmlspecialchars(t('home.prod2_badge')) ?></span>
            <h3><?= htmlspecialchars(t('home.prod2_title')) ?></h3>
            <p><?= htmlspecialchars(t('home.prod2_desc')) ?></p>
            <div class="product-card-specs">
              <span class="spec-tag">High Flow</span>
              <span class="spec-tag">Irrigation</span>
              <span class="spec-tag">Industrial</span>
            </div>
            <a href="<?= base_url('products.php') ?>" class="product-card-link" id="home-centrifugal-link">
              <?= htmlspecialchars(t('view_details')) ?>
            </a>
          </div>
        </article>
        <!-- Card 3 -->
        <article class="product-card" role="listitem">
          <div class="product-card-image">
            <img src="<?= asset_url('assets/products/sgold-agricultural-water-pump.webp') ?>" alt="S.Gold Agricultural Water Pump" loading="lazy">
          </div>
          <div class="product-card-body">
            <span class="product-card-badge"><?= htmlspecialchars(t('home.prod3_badge')) ?></span>
            <h3><?= htmlspecialchars(t('home.prod3_title')) ?></h3>
            <p><?= htmlspecialchars(t('home.prod3_desc')) ?></p>
            <div class="product-card-specs">
              <span class="spec-tag">Agricultural</span>
              <span class="spec-tag">Tube Well</span>
              <span class="spec-tag">Heavy-Duty</span>
            </div>
            <a href="<?= base_url('products.php') ?>" class="product-card-link" id="home-selfpriming-link">
              <?= htmlspecialchars(t('view_details')) ?>
            </a>
          </div>
        </article>
      </div>
      <div class="text-center mt-32">
        <a href="<?= base_url('products.php') ?>" class="btn btn-outline-red btn-lg" id="home-all-products-btn"><?= htmlspecialchars(t('home.view_all_products')) ?></a>
      </div>
    </div>
  </section>

  <!-- ======= INDUSTRY APPLICATIONS ======= -->
  <section class="section industry-applications" id="industry-applications" aria-label="Industry applications and use cases">
    <div class="container">
      <div class="section-header">
        <div class="tag"><?= htmlspecialchars(t('home.app_tag')) ?></div>
        <h2><?= htmlspecialchars(t('home.app_title')) ?></h2>
        <p><?= htmlspecialchars(t('home.app_desc')) ?></p>
      </div>
      <div class="grid-3" role="list">
        <article class="application-card" role="listitem">
          <div class="app-icon" aria-hidden="true">🌾</div>
          <h3><?= htmlspecialchars(t('home.app1_title')) ?></h3>
          <p><?= htmlspecialchars(t('home.app1_desc')) ?></p>
          <ul>
            <li><?= htmlspecialchars(t('home.app1_l1')) ?></li>
            <li><?= htmlspecialchars(t('home.app1_l2')) ?></li>
            <li><?= htmlspecialchars(t('home.app1_l3')) ?></li>
            <li><?= htmlspecialchars(t('home.app1_l4')) ?></li>
          </ul>
        </article>
        <article class="application-card" role="listitem">
          <div class="app-icon" aria-hidden="true">🏭</div>
          <h3><?= htmlspecialchars(t('home.app2_title')) ?></h3>
          <p><?= htmlspecialchars(t('home.app2_desc')) ?></p>
          <ul>
            <li><?= htmlspecialchars(t('home.app2_l1')) ?></li>
            <li><?= htmlspecialchars(t('home.app2_l2')) ?></li>
            <li><?= htmlspecialchars(t('home.app2_l3')) ?></li>
            <li><?= htmlspecialchars(t('home.app2_l4')) ?></li>
          </ul>
        </article>
        <article class="application-card" role="listitem">
          <div class="app-icon" aria-hidden="true">💧</div>
          <h3><?= htmlspecialchars(t('home.app3_title')) ?></h3>
          <p><?= htmlspecialchars(t('home.app3_desc')) ?></p>
          <ul>
            <li><?= htmlspecialchars(t('home.app3_l1')) ?></li>
            <li><?= htmlspecialchars(t('home.app3_l2')) ?></li>
            <li><?= htmlspecialchars(t('home.app3_l3')) ?></li>
            <li><?= htmlspecialchars(t('home.app3_l4')) ?></li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- ======= PRODUCT SPECIFICATIONS ======= -->
  <section class="section product-specs" id="product-specs" aria-label="Product specifications and features">
    <div class="container">
      <div class="section-header">
        <div class="tag"><?= htmlspecialchars(t('home.specs_tag')) ?></div>
        <h2><?= htmlspecialchars(t('home.specs_title')) ?></h2>
        <p><?= htmlspecialchars(t('home.specs_desc')) ?></p>
      </div>
      <div class="specs-table-wrapper">
        <table class="specs-table" role="table">
          <thead>
            <tr>
              <th><?= htmlspecialchars(t('home.th_type')) ?></th>
              <th><?= htmlspecialchars(t('home.th_power')) ?></th>
              <th><?= htmlspecialchars(t('home.th_voltage')) ?></th>
              <th><?= htmlspecialchars(t('home.th_phase')) ?></th>
              <th><?= htmlspecialchars(t('home.th_apps')) ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?= htmlspecialchars(t('home.tr1_c1')) ?></td>
              <td dir="ltr"><?= htmlspecialchars(t('home.tr1_c2')) ?></td>
              <td dir="ltr"><?= htmlspecialchars(t('home.tr1_c3')) ?></td>
              <td><?= htmlspecialchars(t('home.tr1_c4')) ?></td>
              <td><?= htmlspecialchars(t('home.tr1_c5')) ?></td>
            </tr>
            <tr>
              <td><?= htmlspecialchars(t('home.tr2_c1')) ?></td>
              <td><?= htmlspecialchars(t('home.tr2_c2')) ?></td>
              <td dir="ltr"><?= htmlspecialchars(t('home.tr2_c3')) ?></td>
              <td><?= htmlspecialchars(t('home.tr2_c4')) ?></td>
              <td><?= htmlspecialchars(t('home.tr2_c5')) ?></td>
            </tr>
            <tr>
              <td><?= htmlspecialchars(t('home.tr3_c1')) ?></td>
              <td><?= htmlspecialchars(t('home.tr3_c2')) ?></td>
              <td dir="ltr"><?= htmlspecialchars(t('home.tr3_c3')) ?></td>
              <td><?= htmlspecialchars(t('home.tr3_c4')) ?></td>
              <td><?= htmlspecialchars(t('home.tr3_c5')) ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="specs-benefits mt-40">
        <div class="benefit-item">
          <h4><?= htmlspecialchars(t('home.ben1_title')) ?></h4>
          <p><?= htmlspecialchars(t('home.ben1_desc')) ?></p>
        </div>
        <div class="benefit-item">
          <h4><?= htmlspecialchars(t('home.ben2_title')) ?></h4>
          <p><?= htmlspecialchars(t('home.ben2_desc')) ?></p>
        </div>
        <div class="benefit-item">
          <h4><?= htmlspecialchars(t('home.ben3_title')) ?></h4>
          <p><?= htmlspecialchars(t('home.ben3_desc')) ?></p>
        </div>
        <div class="benefit-item">
          <h4><?= htmlspecialchars(t('home.ben4_title')) ?></h4>
          <p><?= htmlspecialchars(t('home.ben4_desc')) ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= WHY CHOOSE SGOLD ======= -->
  <section class="section why-choose" id="why-choose" aria-label="Why choose S.Gold">
    <div class="container">
      <div class="section-header">
        <div class="tag"><?= htmlspecialchars(t('home.why_tag')) ?></div>
        <h2><?= htmlspecialchars(t('home.why_title')) ?></h2>
        <p><?= htmlspecialchars(t('home.why_desc')) ?></p>
      </div>
      <div class="grid-4" role="list">
        <div class="feature-box" role="listitem">
          <div class="feature-icon" aria-hidden="true">⚙️</div>
          <h3><?= htmlspecialchars(t('home.why1_title')) ?></h3>
          <p><?= htmlspecialchars(t('home.why1_desc')) ?></p>
        </div>
        <div class="feature-box" role="listitem">
          <div class="feature-icon" aria-hidden="true">🌾</div>
          <h3><?= htmlspecialchars(t('home.why2_title')) ?></h3>
          <p><?= htmlspecialchars(t('home.why2_desc')) ?></p>
        </div>
        <div class="feature-box" role="listitem">
          <div class="feature-icon" aria-hidden="true">⭐</div>
          <h3><?= htmlspecialchars(t('home.why3_title')) ?></h3>
          <p><?= htmlspecialchars(t('home.why3_desc')) ?></p>
        </div>
        <div class="feature-box" role="listitem">
          <div class="feature-icon" aria-hidden="true">📍</div>
          <h3><?= htmlspecialchars(t('home.why4_title')) ?></h3>
          <p><?= htmlspecialchars(t('home.why4_desc')) ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= FAQ SECTION ======= -->
  <section class="section faq-section" id="faq" aria-label="Frequently asked questions">
    <div class="container">
      <div class="section-header">
        <div class="tag"><?= htmlspecialchars(t('home.faq_tag')) ?></div>
        <h2><?= htmlspecialchars(t('home.faq_title')) ?></h2>
        <p><?= htmlspecialchars(t('home.faq_desc')) ?></p>
      </div>
      <div class="faq-grid" role="list">
        <article class="faq-item" role="listitem">
          <h3><?= htmlspecialchars(t('home.faq1_q')) ?></h3>
          <p><?= htmlspecialchars(t('home.faq1_a')) ?></p>
        </article>
        <article class="faq-item" role="listitem">
          <h3><?= htmlspecialchars(t('home.faq2_q')) ?></h3>
          <p><?= htmlspecialchars(t('home.faq2_a')) ?></p>
        </article>
        <article class="faq-item" role="listitem">
          <h3><?= htmlspecialchars(t('home.faq3_q')) ?></h3>
          <p><?= htmlspecialchars(t('home.faq3_a')) ?></p>
        </article>
        <article class="faq-item" role="listitem">
          <h3><?= htmlspecialchars(t('home.faq4_q')) ?></h3>
          <p><?= htmlspecialchars(t('home.faq4_a')) ?></p>
        </article>
        <article class="faq-item" role="listitem">
          <h3><?= htmlspecialchars(t('home.faq5_q')) ?></h3>
          <p><?= htmlspecialchars(t('home.faq5_a')) ?></p>
        </article>
        <article class="faq-item" role="listitem">
          <h3><?= htmlspecialchars(t('home.faq6_q')) ?></h3>
          <p><?= htmlspecialchars(t('home.faq6_a')) ?></p>
        </article>
        <article class="faq-item" role="listitem">
          <h3><?= htmlspecialchars(t('home.faq7_q')) ?></h3>
          <p><?= htmlspecialchars(t('home.faq7_a')) ?></p>
        </article>
        <article class="faq-item" role="listitem">
          <h3><?= htmlspecialchars(t('home.faq8_q')) ?></h3>
          <p><?= htmlspecialchars(t('home.faq8_a')) ?></p>
        </article>
      </div>
    </div>
  </section>

  <!-- ======= CTA BANNER ======= -->
  <section class="cta-banner" id="cta-banner" aria-label="Contact call to action">
    <div class="container">
      <div class="cta-content">
        <h2><?= htmlspecialchars(t('home.cta_title')) ?></h2>
        <p><?= htmlspecialchars(t('home.cta_desc')) ?></p>
        <a href="https://wa.me/923039351425?text=Hello%2C%20I'm%20interested%20in%20your%20products.%20Please%20share%20details." class="btn btn-whatsapp btn-lg" id="cta-whatsapp-btn" target="_blank" rel="noopener">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          <?= htmlspecialchars(t('chat_on_whatsapp')) ?>
        </a>
        <div class="cta-phone" dir="ltr">
          <span class="phone-icon">📞</span>
          <a href="tel:+923039351425" style="color:inherit;">0303 935 1425</a>
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
