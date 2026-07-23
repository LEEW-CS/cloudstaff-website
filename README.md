# Cloudstaff.com — 2026 Rebuild

A ground-up rewrite of [cloudstaff.com](https://www.cloudstaff.com), built on the
**CFO Kit** (July 2026) as the core narrative and the official
[Cloudstaff Design System](https://style.stage.cloud.cloudstaff.com/) (v2.38.0)
for all styling.

## Strategy

The site is structured as an **education-first journey for a US audience that is
new to outsourcing**, while positioning Cloudstaff as the market leader:

| Stage | Page | Job |
|---|---|---|
| Learn | `what-is-remote-staffing` | Plain-English explainer, model comparison, misconception-busting, FAQ |
| Understand | `how-it-works` | Division of responsibilities, 5-step recruitment, 12-month deployment timeline |
| Validate | `pricing` | Transparent 3-part pricing, worked cost example, role-by-role savings table |
| Explore | `roles` | 600+ roles, high-value role categories, global capability hubs, AI-ready workforce |
| Trust | `security` | Certifications, risk Q&A, home/office security table, managed PCs, BCP |
| Believe | `why-cloudstaff` | 20-year story, culture & retention, in-house infrastructure, testimonials |
| Deep dive | `cfo-guide` | Six scaling archetypes, role-fit framework, pilot playbook (the CFO Kit as a page) |
| Act | `contact` | Consultation form, US offices, phone |

All statistics come from the CFO Kit (current as of July 2026): 1,200+ clients,
8,000 Cloudstaffers, 98% retention, 1.4M+ candidate network, 99.9
SecurityScorecard, 4.8 Glassdoor. Testimonials are repurposed from the current
cloudstaff.com testimonial bank.

## Repository layout

```
src/                      SINGLE SOURCE OF TRUTH — edit here
  partials/<slug>.html    page bodies (design-system markup, {{URL:slug}} links)
  header.html             shared topbar
  footer.html             shared footer
  site.css                small custom CSS layer (design-system tokens only)
  meta.json               titles, descriptions, nav
build.py                  generates BOTH outputs below
docs/                     static preview site (served by GitHub Pages)
wordpress/cloudstaff-theme/  WordPress theme (deploy to wp-content/themes/)
```

**Never edit `docs/` or the generated `*.php` page templates directly** — edit
the partials and run:

```bash
python3 build.py
```

## The static preview (GitHub Pages)

`docs/` is a fully working static build of every page — same markup, same CSS —
published via GitHub Pages so the site can be reviewed at a live URL without a
WordPress install.

## The WordPress theme

`wordpress/cloudstaff-theme/` is a classic theme:

1. Copy the folder to `wp-content/themes/cloudstaff-theme/` and activate it.
2. Create pages with slugs matching the templates (`what-is-remote-staffing`,
   `how-it-works`, `pricing`, `roles`, `security`, `why-cloudstaff`,
   `cfo-guide`, `contact`), assign each its template
   (Page Attributes → Template), and set a static front page.
3. The design system is enqueued from its versioned CDN in `functions.php`
   (per the design system's official WordPress guide). To upgrade, change
   `CSDS_VERSION` in one place.

Page content is intentionally hard-coded in templates (generated from the
shared partials) for pixel-fidelity with the design system. A future iteration
could move copy into ACF fields or blocks without changing the markup.

## Design system usage

- CSS/JS/fonts from `https://style.cloudstaff.com/v2.38.0/` (immutable, versioned)
- Pages use the **Lander page system** (`.lander`, `.lander-hero`,
  `.lander-tile-row-section`, `.lander-section`, `.lander-cta`)
- Components: `.topbar-website`, `.feature-tile`, `.stat-tile`, `.card`,
  `.table`, `.badge`, `.testimonial`, `.form`/`.field` etc.
- `site.css` adds only what the DS doesn't ship (cost-comparison bars, eyebrow
  labels, FAQ details styling) using design tokens exclusively — no raw hex.
