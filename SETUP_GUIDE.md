# D Pongkor & Partners - WordPress Theme Documentation

**Version:** 2.0.0  
**Updated:** February 22, 2026  
**License:** GPL v2 or later

---

## Table of Contents

1. [Overview](#overview)
2. [Installation & Setup](#installation--setup)
3. [Creating Demo Content](#creating-demo-content)
4. [Customizing the Theme](#customizing-the-theme)
5. [SiteOrigin Page Builder Setup](#siteorigin-page-builder-setup)
6. [Partner Cards & Lawyer Profiles](#partner-cards--lawyer-profiles)
7. [SEO & Schema Markup](#seo--schema-markup)
8. [Accessibility Features](#accessibility-features)
9. [Performance Optimizations](#performance-optimizations)
10. [Plugin Compatibility](#plugin-compatibility)
11. [Troubleshooting](#troubleshooting)
12. [Code Structure](#code-structure)

---

## Overview

**D Pongkor & Partners** is a premium WordPress theme specifically designed for law firms and legal service providers. Built with modern web standards, the theme includes:

- ✅ **SiteOrigin Page Builder** - Full visual editing support
- ✅ **Schema.org Markup** - SEO-optimized structured data
- ✅ **WCAG 2.1 AA Accessibility** - Compliant with modern web standards
- ✅ **Performance Optimized** - Lazy loading, optimized assets
- ✅ **Custom Post Types** - Team members, practice areas, insights, jobs
- ✅ **Dark Modern Design** - Professional, contemporary aesthetics
- ✅ **Multilingual Ready** - Full i18n support

### Key Features

- **4 Custom Post Types:** Team Members, Practice Areas, Insights, Job Openings
- **4 Custom Taxonomies:** Team Type, Practice Category, Insight Category, Job Category
- **Responsive Design:** Mobile-first, tested on all devices
- **Fast Loading:** Lazy loading, performance optimizations
- **Security Hardened:** Input sanitization, nonce verification, escaping
- **SEO Ready:** Schema markup, clean URLs, proper heading hierarchy

---

## Installation & Setup

### Step 1: Install the Theme

1. Download the theme files
2. Upload to `/wp-content/themes/wptheme-dpattorney/`
3. Go to **Appearance → Themes**
4. Activate "D Pongkor & Partners"

### Step 2: Install Required Plugins

These plugins are **recommended** but not required:

#### Essential:
- **SiteOrigin Page Builder** - Visual page editing
- **Contact Form 7** or **WPForms** - Contact forms

#### Recommended:
- **Yoast SEO** or **Rank Math** - SEO management
- **Polylang** or **WPML** - Multilingual support
- **W3 Total Cache** - Performance caching

#### Optional:
- **ACF (Advanced Custom Fields)** - Extra custom fields
- **Classic Editor** - WordPress 5.0+ compatibility

### Step 3: Basic Configuration

1. Go to **Appearance → Customize**
2. Configure **Theme Options:**
   - Hero Badge Text
   - Hero Title
   - Hero Description
   - Contact Email
   - Contact Phone

3. Configure **Organization Information:**
   - Street Address
   - City, State, Postal Code
   - Country Code
   - Organization Logo

4. Add **Social Links:**
   - LinkedIn
   - Twitter
   - Facebook
   - Instagram

### Step 4: Create Menu Structure

1. Go to **Menus** in WordPress admin
2. Create menus for:
   - **Primary Menu** - Main navigation
   - **Footer Menu** - Footer links
   - **Legal Menu** - Footer legal links

3. Assign to **Menu Settings:**
   - Primary Menu → Primary Menu
   - Footer Menu → Footer Menu
   - Legal Menu → Legal Menu

---

## Creating Demo Content

### Automatic Demo Setup

The theme includes a function to automatically create demo content:

1. Add this URL parameter to trigger demo content creation:
   ```
   /wp-admin/?dpattorney_demo_setup=1
   ```

2. Demo content includes:
   - 3 Team Members (Partner, Senior Associate, Associate)
   - 6 Practice Areas (Corporate, IP, Dispute Resolution, Tax, Employment, Real Estate)
   - 3 Sample Insights/Articles
   - 2 Job Openings

### Manual Demo Content Creation

#### Creating a Team Member

1. Go to **Team → Add New**
2. Fill in:
   - **Title:** Lawyer Name
   - **Content:** Biography
   - **Featured Image:** Professional photo (600x800px recommended)
   - **Team Member Details:**
     - Role/Position: e.g., "Senior Partner"
     - Email: Contact email
     - Phone: Phone number
     - LinkedIn URL: LinkedIn profile
     - Education: Line-separated list
     - Experience: Line-separated list
     - Languages: Comma-separated list
     - Awards: Line-separated list
     - Expertise: Comma-separated list
   - **Team Type:** Assign taxonomy (Partner, Senior Associate, etc.)

3. Click **Publish**

#### Creating a Practice Area

1. Go to **Practice Areas → Add New**
2. Fill in:
   - **Title:** Practice Area Name
   - **Content:** Description (supports full editor)
   - **Featured Image:** Icon or banner (600x400px)
   - **Practice Area Details:**
     - Icon Class: Lucide icon name (e.g., "building-2")
     - Tags: Comma-separated areas of practice

3. Click **Publish**

#### Creating an Insight/Article

1. Go to **Insights → Add New**
2. Fill in:
   - **Title:** Article title
   - **Content:** Full article content
   - **Featured Image:** Article banner (800x450px)
   - **Category:** Assign Insight Category

3. Click **Publish**

#### Creating a Job Opening

1. Go to **Careers → Add New**
2. Fill in:
   - **Title:** Job title
   - **Content:** Job description, requirements, benefits
   - **Featured Image:** Optional
   - **Category:** Assign Job Category

3. Click **Publish**

---

## Customizing the Theme

### Design Customization

#### Color Scheme

Edit the CSS variables in **style.css**:

```css
:root {
    --color-bg-primary: #0a0a0a;        /* Main background */
    --color-bg-secondary: #050505;      /* Secondary background */
    --color-orange-500: #f97316;        /* Primary accent */
    --color-text-primary: #ffffff;      /* Main text */
    --color-text-secondary: rgba(255, 255, 255, 0.6); /* Secondary text */
}
```

#### Typography

The theme uses the "Inter" font family. To change:

1. Edit **functions.php** - `dpattorney_scripts()` function
2. Modify Google Fonts URL
3. Update `--font-primary` CSS variable

#### Images & Banners

Recommended image sizes:
- **Team Thumbnail:** 400x500px
- **Team Large:** 600x800px
- **Practice Area:** 600x400px
- **Article:** 800x450px

### Content Customization

#### Homepage

The homepage uses the `home-page.php` template:

1. Assign **Pages → Home** the "Home Page" template
2. Edit via **SiteOrigin Page Builder** or directly
3. Customize sections:
   - Hero section (via Customizer)
   - Stats section
   - About section
   - Team showcase
   - Practice areas
   - Articles/Insights

#### Pages

All pages support **SiteOrigin Page Builder**:

1. Create a new page
2. Click "Page Builder" button
3. Add rows, widgets, and layouts
4. Publish

#### Contact Page

For contact forms:

1. Install **Contact Form 7** or **WPForms**
2. Create a form
3. Add to page using page builder or shortcode
4. Configure email notifications

---

## SiteOrigin Page Builder Setup

### Quick Start

1. **Activate SiteOrigin:**
   - Install from **Plugins → Add New**
   - Search: "SiteOrigin Page Builder"
   - Click Install and Activate

2. **Using Page Builder:**
   - Go to any page or post
   - Click "Page Builder" button
   - Click "Add Row" to start building
   - Add widgets to rows
   - Save/Publish

### Available Widgets

SiteOrigin comes with many widgets. Key ones for this theme:

- **Text:** Add content with full editor
- **Image:** Add images with caption
- **Button:** Create call-to-action buttons
- **Testimonial:** Add client testimonials
- **Team Member:** Display team member cards
- **Practice Area:** Display practice areas

### Custom Integrations

The theme supports SiteOrigin's standard widgets. To add custom widgets:

1. Create a custom widget in **inc/widgets/**
2. Register in **functions.php**
3. They'll automatically appear in Page Builder

---

## Partner Cards & Lawyer Profiles

### Design

Partner cards are optimized for professional presentation:

**On Team Archive Page:**
- Image with overlay
- Name
- Role/Title
- 3 expertise tags (highest priority)
- Link to full profile

**On Single Lawyer Page:**
- Large professional photo
- Full name and role
- Contact information
- Expertise areas
- Education history
- Professional experience
- Languages spoken
- Awards and recognition
- Related team members (same team type)

### Editing Partner Cards

Partner cards can be easily updated through the WordPress admin:

1. Go to **Team → Team Members**
2. Click on lawyer to edit
3. Update:
   - Featured image
   - Name
   - Role
   - Bio/description
   - All meta fields in "Team Member Details" box

3. Changes appear instantly on site

### Advanced: Custom Partner Card Template

To customize card markup, edit `archive-team_member.php`:

```php
<a href="<?php the_permalink(); ?>" class="team-card">
    <!-- Card structure here -->
</a>
```

---

## SEO & Schema Markup

### Automatic Schema Markup

The theme automatically generates:

#### 1. **Organization Schema** (LegalService)
- Appears on every page in site header
- Includes name, address, contact info, social profiles

#### 2. **Person Schema** (for Team Members)
- Appears on individual lawyer pages
- Includes name, job title, contact, expertise, social profiles

#### 3. **Breadcrumb Schema**
- Appears on all non-homepage pages
- Helps search engines understand site structure

### SEO Best Practices

#### Heading Hierarchy

Ensure proper heading structure:
- **H1:** One per page (page title)
- **H2-H6:** Use hierarchically for sections

#### Meta Descriptions

Use WordPress' native or Yoast SEO to set meta descriptions:
1. Go to page/post edit screen
2. Add Meta Description (Yoast) or Excerpt
3. Keep to 150-160 characters

#### Title Tags

WordPress sets automatically. To customize:
- Use **Yoast SEO** or **Rank Math**
- Go to SEO settings on edit screen
- Set custom title format

#### Internal Linking

Link between related content:
- Team members to practice areas they specialize in
- Articles to related practice areas
- Jobs to practice areas they're related to

### Plugin Integration

#### With Yoast SEO

1. Install Yoast SEO
2. Go to page/post edit
3. Fill in Yoast metabox
4. Optimize for keyword

#### With Rank Math

1. Install Rank Math
2. Configure in **Rank Math → Settings**
3. Go to page/post edit
4. Use Rank Math analysis

---

## Accessibility Features

### What's Included

✅ **Skip Links:** Jump to main content
✅ **Keyboard Navigation:** Full keyboard support
✅ **Focus Indicators:** Clear focus states
✅ **Color Contrast:** WCAG AA compliant
✅ **ARIA Labels:** Form inputs, buttons, navigation
✅ **Semantic HTML:** article, section, nav, etc.
✅ **Screen Reader Ready:** Proper heading hierarchy
✅ **Touch Targets:** 44x44px minimum

### Testing Accessibility

#### Manual Testing

1. **Keyboard Navigation:**
   - Press `Tab` to navigate
   - Press `Enter` to activate
   - Press `Shift+Tab` to go back

2. **Screen Reader (Windows):**
   - Use free **NVDA** screen reader
   - Navigate page and verify readability

3. **Screen Reader (Mac):**
   - Use built-in **VoiceOver**
   - Enable: **System Preferences → Accessibility → VoiceOver**

#### Automated Testing

1. Install **Lighthouse** extension (Chrome)
2. Run audit: **Generate Report**
3. Check Accessibility score

---

## Performance Optimizations

### Built-in Features

✅ **Lazy Loading:** Images and iframes load on-demand
✅ **Font Loading:** Google Fonts optimized with `display=swap`
✅ **Disabled Emojis:** Reduces HTTP requests
✅ **Minified Assets:** CSS and JS optimized
✅ **Critical CSS:** Above-fold CSS optimized
✅ **DNS Prefetch:** Faster external resource loading

### Additional Optimization

#### Enable Caching

1. Install **W3 Total Cache**
2. Go to **W3 TC Settings**
3. Enable:
   - Page Cache
   - Browser Caching
   - Database Cache
   - Object Cache

#### Optimize Images

1. Install **Imagify** or **ShortPixel**
2. Configure optimization settings
3. Bulk optimize existing images

#### Content Delivery Network (CDN)

For fast image delivery globally:
1. Signup for **Cloudflare** (free tier available)
2. Point domain to Cloudflare nameservers
3. Enable caching in Cloudflare dashboard

---

## Plugin Compatibility

### Thoroughly Tested & Compatible

| Plugin | Status | Notes |
|--------|--------|-------|
| SiteOrigin Page Builder | ✅ Full Support | Recommended |
| Contact Form 7 | ✅ Works | Use shortcodes |
| WPForms | ✅ Works | Full compatibility |
| Yoast SEO | ✅ Works | SEO management |
| Rank Math | ✅ Works | Alternative SEO |
| W3 Total Cache | ✅ Works | Performance |
| Imagify | ✅ Works | Image optimization |
| Polylang | ✅ Works | Multilingual support |
| WPML | ✅ Works | Premium multilingual |
| Advanced Custom Fields | ✅ Works | Extra custom fields |
| Elementor | ⚠️ Partial | Use SiteOrigin instead |
| Divi | ⚠️ Partial | Use SiteOrigin instead |

### Troubleshooting Plugin Issues

**Page Builder Not Showing:**
1. Go to page/post edit
2. Scroll to "SiteOrigin Panels" box
3. Click "Enable Page Builder"

**Forms Not Working:**
1. Check form shortcode
2. Verify form settings in CF7/WPForms
3. Check email notifications

**SEO Not Updating:**
1. Go to **Settings → Reading**
2. Verify static homepage is set
3. Regenerate sitemap in SEO plugin

---

## Troubleshooting

### Common Issues

#### Homepage Not Showing Content

**Problem:** Homepage appears blank
**Solution:**
1. Go to **Settings → Reading**
2. Set **Homepage displays → Static page**
3. Select "Home" page
4. Click Save

#### Page Builder Not Appearing

**Problem:** "Page Builder" button missing
**Solution:**
1. Verify SiteOrigin installed
2. Go to page edit screen
3. Look for "Page Builder" button in sidebar
4. Click to enable

#### Images Not Loading

**Problem:** Images appear broken
**Solution:**
1. Check image URLs are correct
2. Verify folder permissions
3. Try replacing image
4. Clear cache (if using W3 Total Cache)

#### Slow Performance

**Problem:** Site loading slowly
**Solution:**
1.  Enable caching plugin (W3 Total Cache)
2. Optimize images (Imagify)
3. Use CDN (Cloudflare)
4. Disable unused plugins
5. Run Lighthouse audit

#### Schema Markup Not Showing

**Problem:** Schema not appearing in structured data test
**Solution:**
1. Go to **Appearance → Customize**
2. Fill in all "Organization Information" fields
3. Add at least Contact Email and Phone
4. Save and reload page
5. Run through Google's Schema Validator

#### Accessibility Issues

**Problem:** Screen readers not reading properly
**Solution:**
1. Add alt text to all images
2. Use proper heading hierarchy (H1 → H2 → H3)
3. Add descriptive link text (not "click here")
4. Test with NVDA or VoiceOver

---

## Code Structure

### Directory Layout

```
wptheme-dpattorney/
├── assets/
│   ├── css/
│   │   ├── admin.css         # Admin styles
│   │   └── custom.css        # Additional styles
│   ├── images/
│   └── js/
│       └── main.js           # Frontend JavaScript
├── inc/
│   ├── schema-markup.php     # SEO schema.org markup
│   ├── accessibility.php     # WCAG 2.1 AA features
│   ├── performance.php       # Optimization hooks
│   ├── demo-content.php      # Demo content generator
│   ├── template-functions.php # Custom template functions
│   └── template-tags.php     # Template output tags
├── page-templates/
│   ├── home-page.php        # Homepage template
│   ├── about-page.php       # About template
│   └── contact-page.php     # Contact template
├── archive-[post-type].php  # Archive pages
├── single-[post-type].php   # Single pages
├── header.php               # Header template
├── footer.php               # Footer template
├── index.php                # Main template
└── functions.php            # Core functions (876 lines)
```

### Key Functions Reference

#### Post Type Helpers

```php
// Get team members (optionally filtered by type)
dpattorney_get_team_members($type = '', $limit = -1)

// Get practice areas
dpattorney_get_practice_areas($limit = -1)

// Get insights
dpattorney_get_insights($limit = -1)

// Get job openings
dpattorney_get_job_openings($limit = -1)
```

#### Admin Functions

```php
// Create demo team member
dpattorney_create_demo_team_members()

// Create demo practice areas
dpattorney_create_demo_practice_areas()

// Create demo content
dpattorney_create_demo_insights()
```

#### Template Functions

```php
// Check if team page
dpattorney_is_team_page()

// Check if practice page
dpattorney_is_practice_page()

// Get current team type
dpattorney_get_current_team_type()

// Format phone for tel: link
dpattorney_format_phone($phone)

// Get social icon SVG
dpattorney_get_social_icon($platform)

// Parse meta array
dpattorney_parse_meta_array($meta_value)
dpattorney_parse_comma_array($meta_value)
```

### Hooks & Filters

#### Available Hooks

```php
// After theme setup
add_action('after_setup_theme', 'your_function')

// Before footer
add_action('wp_footer', 'your_function')

// Before header closes
add_action('wp_head', 'your_function')

// Filter body classes
add_filter('body_class', 'your_function')

// Filter menu link attributes
add_filter('nav_menu_link_attributes', 'your_function')
```

#### Custom Schema Hooks

```php
// (No custom hooks - schema is auto-generated)
// Extend schema in: inc/schema-markup.php
```

---

## Advanced Customization

### Adding Custom Widgets

1. Create in `inc/widgets/custom-widget.php`
2. Register in `functions.php`:
   ```php
   register_widget('My_Custom_Widget');
   ```
3. Appears in Page Builder automatically

### Creating Custom Post Types

Add to `functions.php`:

```php
function my_custom_post_type() {
    register_post_type('my_post_type', array(
        'labels' => array(
            'name' => 'My Post Type',
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'my_custom_post_type');
```

### Modifying Schema Markup

Edit `inc/schema-markup.php` functions to customize structured data

### Custom CSS

Add to `assets/css/custom.css` or use Page Builder custom CSS

---

## Support & Resources

### WordPress Resources

- [WordPress.org Codex](https://codex.wordpress.org/)
- [WordPress Plugin Directory](https://wordpress.org/plugins/)
- [WordPress Security](https://wordpress.org/security/)

### Theme Resources

- [Comprehensive Analysis](./COMPREHENSIVE_ANALYSIS.md)
- [GitHub Repository](https://github.com/enoysx/wptheme-dpattorney)

### Getting Help

1. Check [Troubleshooting](#troubleshooting) section
2. Review theme code comments
3. Check plugin documentation
4. Search WordPress forums

---

## License

This theme is released under the GNU General Public License v2 or later.
You are free to use, modify, and distribute this theme.

See [LICENSE](./LICENSE) for full details.

---

**Last Updated:** February 22, 2026  
**Theme Version:** 2.0.0  
**Maintainer:** Dion Pongkor & Partners
