# SGOLD Electric Motors — Website Implementation Plan
### Theme: Clean Professional | Stack: HTML + CSS + Vanilla JS

---

## 1. Project Overview

| Item | Detail |
|------|--------|
| Business | S.Gold Electric Motors — Water Pumps & Electric Motors |
| Location | Rajkot, Gujranwala, Pakistan |
| Domain | sgold.pk |
| Stack | HTML5, CSS3, Vanilla JS |
| Hosting | Netlify (Free Tier) |
| Goal | Professional online presence, product showcase, WhatsApp lead generation |

---

## 2. Design System

### 2.1 Color Palette

| Role | Name | Hex Code | Usage |
|------|------|----------|-------|
| Primary | Brand Red | `#C0201A` | Buttons, accents, top borders, CTAs |
| Dark | Near Black | `#1a1a1a` | Hero backgrounds, footer |
| Light | Off White | `#fafafa` | Page background |
| Surface | White | `#ffffff` | Cards, navbar |
| Border | Light Gray | `#eeeeee` | Card borders, dividers |
| Muted | Gray | `#888888` | Secondary text, subtitles |
| Text | Dark | `#222222` | Primary body text |

### 2.2 Typography

```
Headings  → Montserrat (Google Fonts) — weights 600, 700
Body      → Lato (Google Fonts)       — weights 400, 700
```

Google Fonts import:
```html
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
```

### 2.3 Spacing & Sizing

| Element | Value |
|---------|-------|
| Container max-width | 1200px |
| Section padding (vertical) | 80px top/bottom |
| Card border-radius | 10px |
| Button border-radius | 5px |
| Navbar height | 70px |
| Base font size | 16px |
| Line height (body) | 1.7 |

### 2.4 Component Tokens

```css
:root {
  --red:        #C0201A;
  --dark:       #1a1a1a;
  --bg:         #fafafa;
  --white:      #ffffff;
  --border:     #eeeeee;
  --muted:      #888888;
  --text:       #222222;
  --font-head:  'Montserrat', sans-serif;
  --font-body:  'Lato', sans-serif;
  --radius-card: 10px;
  --radius-btn:  5px;
  --shadow:     0 2px 16px rgba(0,0,0,0.08);
  --transition: all 0.25s ease;
}
```

---

## 3. File & Folder Structure

```
sgold-website/
│
├── index.html                  ← Home page
├── products.html               ← Full product catalog
├── about.html                  ← About the company
├── contact.html                ← Contact + inquiry form
│
├── css/
│   ├── style.css               ← Global styles, variables, resets
│   ├── components.css          ← Navbar, footer, buttons, cards
│   └── pages.css               ← Page-specific styles
│
├── js/
│   ├── main.js                 ← Navbar scroll, mobile menu, animations
│   └── products.js             ← Product filter tabs logic
│
├── assets/
│   ├── logo/
│   │   ├── sgold-logo.png      ← SGOLD red logo (provided)
│   │   └── sgold-logo-white.png← White version for dark hero
│   ├── products/
│   │   ├── electric-motor.png  ← Green motor (provided)
│   │   ├── centrifugal-pump.png← Yellow pump (provided)
│   │   ├── self-priming-pump.png← Blue pump (provided)
│   │   └── [more product photos]
│   ├── icons/
│   │   └── whatsapp.svg
│   └── hero-bg.jpg             ← Dark industrial background image
│
└── README.md
```

---

## 4. Pages — Detailed Breakdown

---

### 4.1 Shared Components (All Pages)

#### Navbar
- **Sticky** — stays at top on scroll, adds `box-shadow` after 50px scroll
- **Left:** SGOLD logo (PNG)
- **Center links:** Home | Products | About | Contact
- **Right CTA:** Red "WhatsApp Us" button with WhatsApp icon
- **Mobile:** Hamburger menu → full-screen slide-down overlay
- **Active state:** Red underline on current page link

#### Footer
- Background: `#1a1a1a` (dark)
- **Column 1:** Logo + tagline + social icons (Facebook link)
- **Column 2:** Quick Links (Home, Products, About, Contact)
- **Column 3:** Contact Info (phone, email, address, WhatsApp)
- **Bottom bar:** © 2025 S.Gold Electric Motors | Rajkot, Gujranwala

#### WhatsApp Floating Button
- Fixed, bottom-right corner
- Green circle with WhatsApp icon
- Tooltip on hover: "Chat with us"
- Pre-filled message: `"Hello, I'm interested in your products"`
- Link: `https://wa.me/923039351425?text=...`

---

### 4.2 Home Page — `index.html`

**Section 1 — Hero**
- Full-width, dark background (`#1a1a1a`) with subtle machine-texture or product image overlay
- Left side content:
  - Tag label: `MADE IN GUJRANWALA, PAKISTAN`
  - H1: `Pakistan's Trusted Electric Motor & Pump Manufacturer`
  - Subtext: `Industrial-grade motors and water pumps built for agriculture and industry.`
  - Two buttons: `[Explore Products]` (red filled) + `[Contact Us]` (red outline)
- Right side: Hero product image (electric motor PNG with transparent background)

**Section 2 — Stats Bar**
- Dark red background (`#C0201A`)
- 4 counters in a row (animated count-up on scroll):
  - `13K+ Clients`
  - `2+ Product Lines`
  - `100% Quality`
  - `Years of Trust`
- Font: White, Montserrat bold

**Section 3 — Product Categories**
- Heading: `Our Products`
- Subtitle: `Built for the Field. Engineered for Industry.`
- 3 product cards in a grid:

| Card | Product | Color Accent | Image |
|------|---------|--------------|-------|
| 1 | Electric Motors | Red top border | Green motor photo |
| 2 | Centrifugal Pumps | Red top border | Yellow pump photo |
| 3 | Self-Priming Pumps | Red top border | Blue pump photo |

- Each card: product photo → category tag → name → 1-line description → `View Details →` link
- Hover: card lifts with `box-shadow`, top border brightens

**Section 4 — Why Choose SGOLD**
- Light gray background (`#f4f4f4`)
- Heading: `Why Choose S.Gold?`
- 4 icon boxes in a row:
  1. ⚙️ `Industrial Grade` — Built for heavy-duty continuous use
  2. 🌾 `Agricultural Ready` — Reliable for tube wells and irrigation
  3. ✅ `100% Recommended` — 10 reviews, all 5-star
  4. 📍 `Local Manufacturing` — Made in Gujranwala, Pakistan

**Section 5 — CTA Banner**
- Dark background
- Text: `Ready to Order? Get in Touch on WhatsApp`
- Big green WhatsApp button + phone number displayed

---

### 4.3 Products Page — `products.html`

**Header**
- Page title: `Our Products`
- Breadcrumb: `Home > Products`

**Filter Tabs**
- Tab buttons: `All` | `Electric Motors` | `Water Pumps`
- Active tab: red background, white text
- Inactive: white background, dark text, gray border
- JS filters cards by `data-category` attribute — no page reload

**Product Grid**
- 3-column grid on desktop, 2 on tablet, 1 on mobile
- Each card contains:
  - Product image (transparent background photos work perfectly)
  - Red top border (3px)
  - Category badge (`Electric Motor` or `Water Pump`)
  - Product name
  - Short description (1–2 lines)
  - Key specs (e.g. HP range, voltage, use case) as small tags
  - `Inquire on WhatsApp →` button

**Initial Product List (from your photos):**

| # | Name | Category | Description |
|---|------|----------|-------------|
| 1 | S.Gold Electric Motor (Green) | Electric Motor | General purpose industrial motor for agriculture and industrial machinery |
| 2 | S.Gold Centrifugal Pump (Yellow) | Water Pump | High-flow centrifugal pump for irrigation and water supply |
| 3 | S.Gold Self-Priming Pump (Blue) | Water Pump | Self-priming pump for tube wells, suitable for deep-water applications |

*(Add more products as photos become available)*

---

### 4.4 About Page — `about.html`

**Section 1 — Company Story**
- Two-column layout
- Left: text — company history, mission, values, Gujranwala roots
- Right: collage of product images or factory/workshop photo

**Section 2 — Mission & Values**
- 3 cards: Quality | Reliability | Customer First

**Section 3 — Location**
- Google Maps embed for `Rajkot, Gujranwala, Pakistan`
- Address displayed below map

---

### 4.5 Contact Page — `contact.html`

**Two-column layout:**

Left — Contact Info:
- Phone: `0303 9351425`
- WhatsApp: `+92 303 9351425` (clickable)
- Email: `mateenmughal67@gmail.com` (clickable)
- Address: Rajkot, Gujranwala, Pakistan, 52250
- Facebook: link to page

Right — Inquiry Form (via Formspree.io — free, no backend):
- Fields: Full Name, Phone Number, City, Message
- Submit button: red, "Send Inquiry"
- On submit: success message "We'll contact you on WhatsApp shortly!"

---

## 5. JavaScript Features

### 5.1 `main.js`
```
1. Navbar scroll effect
   - Add class 'scrolled' after 50px → box-shadow appears
   
2. Mobile hamburger menu
   - Toggle open/close class on nav links overlay
   - Close on outside click
   
3. Stats counter animation
   - IntersectionObserver watches the stats bar
   - On enter viewport → animate numbers from 0 to target
   
4. Smooth scroll
   - All anchor links scroll smoothly to sections
   
5. Active nav link
   - Detect current page URL → add 'active' class to matching nav link
```

### 5.2 `products.js`
```
1. Filter tabs
   - Click tab → hide all cards → show matching data-category cards
   - Smooth fade-in animation on filtered cards
```

---

## 6. Responsive Breakpoints

| Breakpoint | Width | Changes |
|------------|-------|---------|
| Desktop | 1200px+ | Full layout as designed |
| Laptop | 1024px | Slightly reduced padding |
| Tablet | 768px | 2-col grids, hamburger menu shows |
| Mobile | 480px | 1-col layout, larger touch targets |

**Mobile priorities:**
- Navbar collapses to hamburger
- Hero becomes single column (text above image)
- Product grid → single column
- WhatsApp button always visible and tappable (min 48px touch target)
- Font sizes slightly reduced

---

## 7. SEO Setup

Add to every `<head>`:
```html
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="S.Gold Electric Motors — Quality water pumps and electric motors manufactured in Gujranwala, Pakistan for industrial and agricultural use.">
<meta name="keywords" content="electric motor, water pump, Gujranwala, Pakistan, agricultural pump, industrial motor, S.Gold">
<meta property="og:title" content="S.Gold Electric Motors — The Name of Trust">
<meta property="og:description" content="Water pumps and electric motors for industry and agriculture. Made in Gujranwala, Pakistan.">
<meta property="og:image" content="assets/logo/sgold-logo.png">
<title>S.Gold Electric Motors | Water Pumps & Electric Motors — Gujranwala</title>
```

---

## 8. WhatsApp Integration

Pre-filled WhatsApp links for each product:
```
Electric Motor inquiry:
https://wa.me/923039351425?text=Hello%2C%20I'm%20interested%20in%20the%20S.Gold%20Electric%20Motor.%20Please%20share%20details.

Centrifugal Pump inquiry:
https://wa.me/923039351425?text=Hello%2C%20I'm%20interested%20in%20the%20S.Gold%20Centrifugal%20Pump.%20Please%20share%20details.

Self-Priming Pump inquiry:
https://wa.me/923039351425?text=Hello%2C%20I'm%20interested%20in%20the%20S.Gold%20Self-Priming%20Pump.%20Please%20share%20details.

General inquiry:
https://wa.me/923039351425?text=Hello%2C%20I'm%20interested%20in%20your%20products.%20Please%20share%20details.
```

---

## 9. Deployment Steps

### Step 1 — GitHub
```bash
git init
git add .
git commit -m "Initial SGOLD website"
git remote add origin https://github.com/yourusername/sgold-website.git
git push -u origin main
```

### Step 2 — Netlify (Free)
1. Go to netlify.com → Sign up free
2. Click "Add new site" → "Import from Git"
3. Connect your GitHub repo
4. Deploy — Netlify gives you a free URL instantly (e.g. `sgold.netlify.app`)

### Step 3 — Custom Domain (sgold.pk)
1. In Netlify: Site Settings → Domain Management → Add custom domain → `sgold.pk`
2. Netlify gives you DNS nameservers
3. Log in to your domain registrar → Replace nameservers with Netlify's
4. Wait 24–48 hours → HTTPS activates automatically (free SSL)

---

## 10. Build Order (Recommended Sequence)

| Day | Task |
|-----|------|
| Day 1 | Set up folder structure, CSS variables, Google Fonts, reset styles |
| Day 2 | Build navbar + footer components (shared across all pages) |
| Day 3 | Build Home page — Hero + Stats + Product Cards |
| Day 4 | Build Home page — Why Choose + CTA Banner |
| Day 5 | Build Products page with filter tabs |
| Day 6 | Build About + Contact pages |
| Day 7 | Responsive testing on mobile, fix layout issues |
| Day 8 | SEO meta tags, WhatsApp links, final polish |
| Day 9 | Deploy to Netlify + connect sgold.pk |
| Day 10 | Test live site, share on Facebook page |

---

## 11. Future Enhancements (Phase 2)

After the initial site is live, consider adding:

- **Product detail pages** — individual page per product with full specs table
- **Urdu language toggle** — serve Urdu content for local buyers
- **Image gallery** — lightbox photo gallery of factory and products
- **Dealer/distributor locator** — if SGOLD has regional distributors
- **Google Analytics** — track visitor traffic and which products get most clicks
- **WhatsApp chat widget** — embed a chat bubble using WATI or similar

---

*Plan prepared for S.Gold Electric Motors — sgold.pk*
*Stack: HTML5 · CSS3 · Vanilla JS · Netlify Hosting*
