# Page Templates Guide

This document outlines all page templates available in the wptheme-dpattorney theme, based on the reference site structure at github.com/enoysx/dpattorney.

## Available Page Templates

### 1. **Home Page** (`home-page.php`)
**Purpose:** Landing page with hero section, stats, about preview, practice areas showcase, and testimonials.

**Features:**
- Hero section with customizable badge, title, and description
- Animated stats counter
- Featured team members section
- Practice areas grid
- Recent insights showcase
- Call-to-action sections

**Customizer Options:**
- Hero badge text
- Hero title (supports line breaks)
- Hero description
- Contact information

---

### 2. **About Page** (`about-page.php`)
**Purpose:** Company information and leadership message page.

**Features:**
- Leadership message section
- Company statistics
- Firm values display
- History timeline
- Team leadership bios
- Awards section

**Use Case:**
Create a page with slug "tentang-kami" and assign this template to display comprehensive company information.

---

### 3. **Contact Page** (`contact-page.php`)
**Purpose:** Contact information and form submission.

**Features:**
- Contact form integration (WPForms/Contact Form 7)
- Multiple office locations display
- Contact information cards (email, phone, address)
- Map integration support
- Contact person listings

**Customizer Options:**
- Contact email
- Contact phone
- Contact address

---

### 4. **Practice Areas Page** (`practice-areas-page.php`) ✨ NEW
**Purpose:** Showcase all law practice areas.

**Features:**
- Grid display of all practice areas
- Practice area cards with icons
- Excerpt preview of each practice area
- Links to individual practice area pages
- CTA section for consultations

**Use Case:**
Create a page with slug "area-praktik" and assign this template. All custom post types with post type "practice_area" will be displayed in a grid.

---

### 5. **Insights/Blog Page** (`insights-page.php`) ✨ NEW
**Purpose:** Blog and legal insights landing page.

**Features:**
- Paginated article grid (9 per page)
- Article cards with featured images
- Publication date and author display
- Article excerpts
- Category filtering
- Newsletter subscription section
- Pagination controls

**Use Case:**
Create a page with slug "wawasan" and assign this template. Displays all insights (post type "insight") with pagination.

---

### 6. **Careers Page** (`careers-page.php`) ✨ NEW
**Purpose:** Company culture and job opportunities page.

**Features:**
- Career benefits grid (6 benefit cards)
- Job openings listing
- Position details (location, type, level)
- Quick apply links
- Company culture highlights
- HR contact section

**Use Case:**
Create a page with slug "karir" and assign this template. Automatically displays all job_opening posts.

---

### 7. **Team Listing Page** (`team-listing-page.php`) ✨ NEW
**Purpose:** Team member directory with filtering.

**Features:**
- Grid display of all team members
- Team type filtering (Partner, Senior Associate, Associate)
- Member contact cards
- Member photos and bios
- Email and phone links
- "View Profile" links to individual pages

**Use Case:**
Create a page with slug "tim" and assign this template. Supports `?type=partner` URLs for pre-filtering by team type.

---

### 8. **Privacy Policy Page** (`privacy-policy-page.php`) ✨ NEW
**Purpose:** Legal privacy policy page.

**Features:**
- Structured privacy policy sections
- Default content sections (can be customized)
- Last updated timestamp
- Legal disclaimer styling
- Responsive layout

**Use Case:**
Create a page with slug "kebijakan-privasi" and assign this template. Add custom privacy policy content in the page editor.

---

### 9. **Terms & Conditions Page** (`terms-conditions-page.php`) ✨ NEW
**Purpose:** Legal terms and conditions page.

**Features:**
- Structured T&C sections
- Default content sections (can be customized)
- Last updated timestamp
- Legal compliance styling
- Responsive layout

**Use Case:**
Create a page with slug "syarat-ketentuan" and assign this template. Add custom terms in the page editor.

---

## How to Use Page Templates

### Step 1: Create a Page
1. Go to **WordPress Admin → Pages → Add New**
2. Enter the page title (e.g., "Karir" for careers)
3. Add content if needed (especially for legal pages)

### Step 2: Assign Template
1. In the page editor, look for the **Template** dropdown (usually in the right sidebar)
2. Select the desired template from the list
3. The template name will appear as "Template Name: Page Title"

### Step 3: Configure Settings
For some templates, configure related settings:

**Home Page:**
- Customize hero text in: **Appearance → Customize → Hero Section**
- Set organization info in: **Appearance → Customize → Organization Information**

**Contact Page:**
- Set email, phone, address in: **Appearance → Customize → Contact Information**

**Other Pages:**
- Most pages pull content automatically from custom post types
- No additional configuration needed beyond page creation

---

## Page Template URL Mapping (Recommended)

For best results, create pages with these slugs:

| Template | Recommended Slug | Indonesian Title |
|----------|-----------------|------------------|
| Home Page | (homepage) | Beranda |
| About Page | tentang-kami | Tentang Kami |
| Contact Page | kontak | Kontak |
| Practice Areas | area-praktik | Area Praktik |
| Insights/Blog | wawasan | Wawasan |
| Careers | karir | Karir |
| Team Listing | tim | Tim |
| Privacy Policy | kebijakan-privasi | Kebijakan Privasi |
| Terms & Conditions | syarat-ketentuan | Syarat & Ketentuan |

---

## Template Features Summary

### Dynamic Content Pulling
- **Practice Areas Page** → Pulls from "practice_area" custom post type
- **Insights Page** → Pulls from "insight" custom post type
- **Careers Page** → Pulls from "job_opening" custom post type
- **Team Listing Page** → Pulls from "team_member" custom post type

### Customization Points
All templates support:
- ✅ SiteOrigin Page Builder editing
- ✅ Hook filters for developers
- ✅ Custom CSS classes
- ✅ Theme customizer settings

### Responsive Design
All templates include:
- ✅ Mobile-first responsive layout
- ✅ Touch-friendly buttons and forms
- ✅ Optimized images with lazy loading
- ✅ WCAG 2.1 AA accessibility

---

## Helper Functions Used

All templates utilize these helper functions:

```php
// Team members query
dpattorney_get_team_members($type = '', $limit = -1)

// Practice areas query
dpattorney_get_practice_areas($limit = -1)

// Insights/articles query
dpattorney_get_insights($limit = -1)

// Job openings query
dpattorney_get_job_openings($limit = -1)
```

---

## Design Consistency

All new templates maintain:
- **Color Scheme** → Dark theme (#0a0a0a) with orange accents (#f97316)
- **Typography** → Inter font family, responsive sizing
- **Spacing** → Consistent padding and margins
- **Animations** → Smooth transitions and scroll reveals
- **Components** → Reusable card designs, buttons, sections

---

## SEO & Schema Markup

Each template includes:
- ✅ Semantic HTML5 structure
- ✅ Proper heading hierarchy
- ✅ Schema.org structured data (handled by `inc/schema-markup.php`)
- ✅ Meta descriptions in customizer
- ✅ Open Graph support via plugins

---

## Browser Support

All templates are tested and compatible with:
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

---

## Troubleshooting

**Template not appearing?**
1. Ensure the page is set to "Published" status
2. Clear WordPress cache (if using caching plugin)
3. Verify page slug matches documentation

**Content not showing?**
1. Verify custom post types are registered (check `functions.php`)
2. Ensure demo content was generated via `?dpattorney_demo_setup=1`
3. Check that posts have the correct post type assigned

**Styling issues?**
1. Clear browser cache (Ctrl+F5)
2. Verify `assets/css/custom.css` is enqueued
3. Check for CSS conflicts in browser DevTools

---

## Next Steps

1. **Create pages** with recommended slugs
2. **Assign templates** from dropdown
3. **Add content** to custom post types
4. **Configure** theme customizer settings
5. **Test** on mobile devices
6. **Verify** with Google Rich Results Test

---

**Last Updated:** 2024
**Theme Version:** 2.0.0
**Created:** Based on reference site structure at github.com/enoysx/dpattorney
