# D Pongkor & Partners - WordPress Theme

**Premium WordPress Theme for Law Firms**

![Version](https://img.shields.io/badge/Version-2.0.0-blue)
![License](https://img.shields.io/badge/License-GPL%20v2-green)
![WordPress](https://img.shields.io/badge/WordPress-5.0%2B-blue)

---

## Features

✨ **Modern Design** - Dark professional theme optimized for law firms
🏗️ **SiteOrigin Page Builder** - Visual editing for all pages
👥 **Team Management** - Professional lawyer profiles with detailed information
📋 **Practice Areas** - Showcase your legal services and specialties
📰 **Insights/Blog** - Publish thought leadership and news
💼 **Job Listings** - Recruitment section for open positions
⚡ **Performance** - Lazy loading, optimized assets, fast loading
🔐 **Security** - Nonce verification, input sanitization, escaping
♿ **Accessible** - WCAG 2.1 AA compliant
🔍 **SEO Ready** - Schema.org markup, semantic HTML
🌍 **Multilingual** - Ready for Polylang/WPML

---

## Quick Start

### Installation

1. **Activate Theme:**
   - Go to **Appearance → Themes**
   - Activate "D Pongkor & Partners"

2. **Configure Settings:**
   - Go to **Appearance → Customize**
   - Fill in **Theme Options** and **Organization Information**

3. **Install Plugins:**
   - SiteOrigin Page Builder (recommended)
   - Contact Form 7 or WPForms
   - Yoast SEO or Rank Math (optional)

4. **Create Demo Content:**
   - Visit: `yourdomain.com/wp-admin/?dpattorney_demo_setup=1`

5. **Build Your Site:**
   - Use SiteOrigin Page Builder to customize pages

---

## Documentation

- **[SETUP_GUIDE.md](SETUP_GUIDE.md)** ← Start here! Complete setup guide with screenshots and examples
- **[COMPREHENSIVE_ANALYSIS.md](COMPREHENSIVE_ANALYSIS.md)** - Technical architecture and code analysis

---

## Key Features

### Custom Post Types
- 👥 **Team Members** - Lawyer profiles with education, experience, specialties
- 📋 **Practice Areas** - Legal service categories
- 📰 **Insights** - Blog articles and thought leadership
- 💼 **Job Openings** - Recruitment listings

### Built-in Sections
- ✅ SiteOrigin Page Builder integration
- ✅ Schema.org markup (SEO optimization)
- ✅ Lazy loading images
- ✅ Keyboard navigation
- ✅ Accessibility WCAG 2.1 AA
- ✅ Mobile responsive design

### Security
- ✅ Input sanitization
- ✅ Output escaping  
- ✅ Nonce verification
- ✅ User capability checks

---

## Plugin Compatibility

| Plugin | Status |
|--------|--------|
| SiteOrigin Page Builder | ✅ Recommended |
| Contact Form 7 | ✅ Works |
| WPForms | ✅ Works |
| Yoast SEO | ✅ Works |
| Rank Math | ✅ Works |
| W3 Total Cache | ✅ Tested |
| Polylang | ✅ Works |
| WPML | ✅ Works |

---

## Files & Structure

```
inc/
  ├── schema-markup.php      # SEO schema.org data
  ├── accessibility.php      # WCAG 2.1 compliance
  ├── performance.php        # Performance optimizations
  ├── demo-content.php       # Demo content generator
  ├── template-functions.php
  └── template-tags.php

page-templates/
  ├── home-page.php
  ├── about-page.php
  └── contact-page.php

assets/
  ├── css/
  │   ├── custom.css
  │   ├── admin.css
  │   └── partner-cards.css  # Modern card design
  └── js/
      └── main.js

style.css              # Main styles
functions.php          # Core functions (v2.0 enhanced)
```

---

## Quick API Reference

```php
// Get team members
$team = dpattorney_get_team_members('partner', 5);
while ( $team->have_posts() ) : $team->the_post();
  // Display team member
endwhile;

// Check page type
if ( dpattorney_is_team_page() ) { }

// Get customizer value
$email = get_theme_mod('dpattorney_contact_email');
```

---

## Version History

### 2.0.0 (February 2026) - Major Upgrade
- ✨ Full SiteOrigin Page Builder integration
- ✨ Schema.org SEO markup
- ✨ WCAG 2.1 AA accessibility compliance
- ✨ Performance optimizations
- ✨ Partner card component
- ✨ Demo content system
- ✨ Organization customizer settings

### 1.0.0 (Initial Release)
- Core theme with custom post types
- Dark modern design
- Mobile responsive

---

## Requirements

- WordPress 5.0+
- PHP 7.4+
- MySQL 5.7+ / MariaDB 10.3+

---

## Support

- 📚 Read [SETUP_GUIDE.md](SETUP_GUIDE.md) for detailed instructions
- 🔍 Check [COMPREHENSIVE_ANALYSIS.md](COMPREHENSIVE_ANALYSIS.md) for technical details
- 💬 Review code comments in theme files

---

## License

GNU General Public License v2 or later  
See [LICENSE](LICENSE) file

---

**Ready to get started?** → [SETUP_GUIDE.md](SETUP_GUIDE.md)