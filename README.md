![Site Logo](/pix/logos/2025_FingerLickinChicken-FullColor-Horizontal.png)


# Finger Lickin' Chicken Theme


---

## ⚖️ Disclaimer / Important Note

> ⚠️ **FICTIONAL EXAMPLE & STARTER TEMPLATE**  
>  
> This repository contains a **custom single-page (classic PHP-based, non‑React)** WordPress theme originally built as both a **developer portfolio example** and a **reusable starter theme** for rapid client customization.  
>  
> The showcased business, **“Finger Lickin’ Chicken,”** is **completely fictional** and created **solely for illustrative, educational, and demonstrative purposes.** It is **not a real organization** and **has no affiliation** with any actual companies or trademarks.  
>  
> This theme illustrates best practices in **separation of concerns**, featuring minimal database dependence. All user-editable data is sourced via a dedicated `theme-data.php` file, allowing for **faster updates, easier troubleshooting,** and **simplified site maintenance.**  
>  
> 🧾 **Disclaimer:** No defamation, infringement, or endorsement is implied or intended. Any resemblance to real entities, products, or individuals is entirely coincidental.

---

## 🔖 Current Release
**Version:** `1.00.00`  
**Release Date:** December 30, 2025  
**Status:** 🟢 *Initial Release — Responsive Single-Page Food Truck Brochure*

---

## 🧭 Next Planned Release
**Target Version:** `1.01` *(in planning)*  
**Focus:** Events section expansion and social feed integration  

---

## Project Status
**Phase:** Active Development & Client Review  
**Support Level:** Active Development  
**Repository:** Private — EricHepperleES / Finger Lickin' Chicken Theme

---

## Contributors

**Core Development Team**

- [**EricHepperleES**](https://github.com/EricHepperleES) — Lead Developer  
  *Architected complete single-page structure, PHP templates, and responsive design system.*

- [**MackTurner**](mailto:mack.turner@flchicken.com) — Client / Content Provider  
  *Brand vision, menu content, photography, and business requirements.*

Contact the dev team for technical collaboration or content updates.

---

## Requirements

| Dependency     | Minimum Version         |
| -------------- | ----------------------- |
| **WordPress**  | 6.7.2+                  |
| **PHP**        | 8.3.11+                 |
| **Node.js**    | 18.x (development only) |
| **npm**        | 9.x (development only)  |

---

## Core Dependencies

* Bootstrap 5.x  
* ACF Pro (Advanced Custom Fields)  
* Contact Form 7  
* WP Google Maps (recommended)  

---

## Design Philosophy

* **Classic PHP Templates:** 100% custom code, no page builders.  
* **Single-Page Architecture:** Optimized for food truck marketing and mobile users.  
* **Performance Optimized:** Lightweight, fast-loading, SEO-ready.  
* **Modular Structure:** Clean template parts for easy maintenance.  

---

## Purpose

**Finger Lickin' Chicken Theme** powers the single-page brochure site for [Finger Lickin' Chicken](https://fingerlickinchickenal.com) — Ozark, AL's premier food truck serving KFC-style fried chicken, spicy gizzards, watermelon drinks, and signature cheesecakes.

This project doubles as both a **portfolio example** and a **lightweight starter template** designed for rapid customization across future client builds.  
Built for mobile-first browsing with Google Maps integration, contact forms, and easy content updates.

---

## What's New (v1.00.00)

* **Complete Single-Page Layout:** Hero, About, Services, Testimonials, FAQ, CTA, Contact sections  
* **Responsive Template Parts:** All sections mobile-optimized with Bootstrap 5  
* **Google Maps Ready:** Contact section prepared for truck locations  
* **ACF Integration:** Flexible content fields in `theme-data.php`  
* **Brand Color System:** Fried chicken golds, watermelon pinks, creamy whites  
* **Clean PHP Structure:** Zero bloat, maximum control  

See [`CHANGELOG.md`](CHANGELOG.md) for details.

---

## Quick Start

1. **Copy to WordPress**
   ```
   # Upload folder to wp-content/themes/
   # Folder name: ehw-wp-theme-single-page__food-truck__01
   ```

2. **Activate Theme**
   * Appearance → Themes → Activate  

3. **Configure Content**
   * Update `theme-data.php` with business details  
   * Add logo to `/pix/logos/`  
   * Customize sections via template parts  

4. **Recommended Plugins**
   * ACF Pro  
   * Contact Form 7  
   * WP Google Maps  

---

## Development Setup

1. **Local Development**
   ```
   # Add npm support for SCSS/JS builds
   npm init -y
   npm install laravel-mix --save-dev
   ```

2. **Edit Template Parts**
   ```
   template-parts/
   ├── section-hero.php       (Main banner)
   ├── section-about.php      (Business story)
   ├── section-services.php   (Menu showcase)
   ├── section-testimonials.php
   ├── section-faq.php
   ├── section-cta.php        (Call to action)
   └── section-contact.php    (Map + form)
   ```

3. **Build CSS/JS** (if adding assets)
   ```
   npm run dev
   npm run watch
   ```

---

## File Structure

| File / Directory            | Purpose                                      |
| --------------------------- | -------------------------------------------- |
| `front-page.php`            | Main single-page template                    |
| `header.php` / `footer.php` | Site header and footer includes              |
| `functions.php`             | Theme setup, enqueues, ACF registration      |
| `theme-data.php`            | Business data, colors, contact info          |
| `template-parts/*`          | Modular sections (7 total sections)          |
| `style.css`                 | Theme metadata and base styles               |

**Key Template Parts:**
```
template-parts/
├── section-hero.php        (Brand hero)
├── section-about.php       (Mack's story)
├── section-services.php    (Menu highlights)
├── section-testimonials.php
├── section-faq.php         (Common questions)
├── section-cta.php         (Book event CTA)
└── section-contact.php     (Map + phone + form)
```

---

## Section Overview

| Section              | Template File            | Features                            |
| --------------------- | ------------------------ | ------------------------------------ |
| **Hero**              | `section-hero.php`       | Brand imagery + tagline             |
| **About**             | `section-about.php`      | Business story + photo              |
| **Services/Menu**     | `section-services.php`   | Fried chicken, gizzards, drinks     |
| **Testimonials**      | `section-testimonials.php` | Customer quotes                    |
| **FAQ**               | `section-faq.php`        | Location, catering questions        |
| **Call to Action**    | `section-cta.php`        | Book truck for events               |
| **Contact**           | `section-contact.php`    | Google Map + click-to-call          |

---

## Recommended Deployment Checklist

* [ ] Update `theme-data.php` with live contact info  
* [ ] Add logo to `/pix/logos/`  
* [ ] Test all sections on mobile/desktop  
* [ ] Configure Contact Form 7  
* [ ] Add Google Maps API key (if needed)  
* [ ] Update `style.css` version  
* [ ] ZIP folder for client delivery  
* [ ] Test on production hosting  

---

## Customization Guide

**Quick Content Updates:**
1. Edit `theme-data.php` for phone, email, hours  
2. Replace images in section template parts  
3. Modify menu items in `section-services.php`  
4. Add testimonials to `section-testimonials.php`  

**Styling:**
- Edit `style.css` directly  
- Add custom SCSS via npm build system  

---

## License

This project is provided for **demonstration and client development purposes.**  
Commercial reuse requires prior written permission from the author.  
Redistribution of this theme or significant derivative works is not permitted without authorization.

---

## Copyright

© 2025 Eric Hepperle / “Finger Lickin’ Chicken” (fictional example).  
All rights reserved. This theme project was created for portfolio and client customization purposes.  
*This project uses a fictional brand for demonstration purposes only. No affiliation or endorsement implied.*

***
