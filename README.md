# Holloway Studio — Case Study

> **Custom WordPress Theme** · Full-Service Creative Agency Website · ACF-Powered Content Management · Composer-Managed Dependencies

![WordPress](https://img.shields.io/badge/WordPress-6.0+-21759B?logo=wordpress&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?logo=php&logoColor=white)
![ACF Pro](https://img.shields.io/badge/ACF-Pro-00A0D2)
![SCSS](https://img.shields.io/badge/SCSS-Compiled-CC6699?logo=sass&logoColor=white)

<!-- TODO: Add screenshot of the Holloway Studio homepage here -->

---

## 1. Project Overview

Holloway Studio is a bespoke WordPress theme built for a full-service creative studio (hollowaystudio.com.br). The theme delivers a premium, portfolio-forward web presence with a content architecture managed entirely through Advanced Custom Fields Pro — enabling the client to update project showcases, service descriptions, and team profiles without developer involvement.

The theme follows an object-oriented PHP structure (`functions.object.php`) with Composer-managed autoloading, a custom page template system for specialized layouts, and a modular `template-parts/` directory for reusable view components.

<!-- TODO: Add screenshot of the portfolio/projects section here -->

---

## 2. The Problem

The client required a custom digital presence that would differentiate their studio from template-based competitors, while remaining independently manageable by a non-technical team. Standard page builders were rejected as they imposed visual constraints and performance overhead incompatible with the premium aesthetic requirements. The existing site was a static HTML/CSS build with no CMS, making content updates a developer-dependent process.

---

## 3. The Solution & Architecture

The theme was engineered as a clean WordPress theme without page builder dependency, using ACF Pro field groups to expose every editable content region through the WordPress admin interface.

### Architecture Overview

- **`functions.object.php`** — OOP theme bootstrap class managing all `add_action` and `add_filter` registrations, theme supports, and menu location definitions. This pattern keeps `functions.php` as a clean entry point with a single class instantiation.
- **`front-page.php`** (33KB) — The primary homepage template, assembling all major content sections from ACF field data. The size reflects a rich, section-heavy layout with multiple content zones, each independently editable.
- **`inc/`** — Modular PHP includes for ACF field group registration, custom post types, and admin customizations.
- **`page-templates/`** — Dedicated page template files for specialized layouts (portfolio archive, contact, services).
- **`template-parts/`** — Reusable PHP partials called via `get_template_part()`, ensuring DRY view construction across multiple templates.
- **`src/`** — SCSS source files compiled to production CSS, organized by component and page section.
- **`composer.json`** — Dependency management for PHP utility libraries via Composer.

---

## 4. Technologies Used

- **CMS & Backend:** WordPress 6.0+, PHP 8.0+
- **Content Management:** ACF Pro — programmatic field group registration
- **OOP Architecture:** Custom theme class (`functions.object.php`) with hook encapsulation
- **Dependency Management:** Composer 2 (`composer.json` / `composer.lock`)
- **Styling:** SCSS — component-based stylesheet architecture
- **Live Site:** [hollowaystudio.com.br](https://hollowaystudio.com.br/)

---

## 5. Design Process & UI/UX

The visual direction was defined by the studio's own brand identity: a premium, editorial aesthetic with strong typographic hierarchy, generous whitespace, and a restrained colour palette that allows project photography to dominate. The design deliberately avoids decorative ornamentation, instead using spatial composition and motion to convey craft and precision — values central to the studio's market positioning.

Each content section was designed as a standalone module with defined editorial constraints, ensuring the client can update content within the designed system without breaking the visual composition.

<!-- TODO: Add screenshot of the services section here -->
<!-- TODO: Add screenshot of the team section here -->
<!-- TODO: Add screenshot of the contact page here -->

---

## 6. Project Outcomes

- **Content autonomy:** The client can independently update all portfolio projects, service descriptions, team profiles, and contact information without developer assistance.
- **Performance:** No page builder overhead — the theme renders clean, semantic HTML from PHP templates, supporting strong Core Web Vitals scores.
- **Maintainability:** The OOP architecture and Composer dependency management establish a professional development baseline that can be extended by any WordPress developer without deciphering ad-hoc procedural code.
- **Design fidelity:** The custom theme delivers pixel-accurate implementation of the studio's brand identity — an outcome not achievable with generic page builder themes.
