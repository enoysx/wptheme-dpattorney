# Theme Quick Start Card

## For Non-Developers (Site Managers/Content Teams)

### 🚀 Get Started in 3 Steps

**Step 1: Generate Demo Content**
1. Log into WordPress dashboard
2. Look for blue box: "Get started with sample content"
3. Click "Generate Demo Content"
4. Wait for success message

**Step 2: Visit Your Site**
- Home: `/` - You should see hero + content
- Team: `/tim/` - Should show 3 team members
- Practice Areas: `/area-praktik/` - Should show 6 areas
- Blog: `/wawasan/` - Should show 3 posts
- Jobs: `/karir/lowongan/` - Should show 2 openings

**Step 3: Customize**
1. Go to "Appearance → Customize"
2. Update logo, colors, tagline
3. Save changes
4. Site is ready!

---

## For Developers (Technical Teams)

### 🔧 Core Files Reference

| File | Purpose | Lines | Status |
|------|---------|-------|--------|
| functions.php | Post types, rewrites, styles | 1028 | ✅ Updated |
| assets/css/responsive.css | Mobile-first responsive | 700+ | ✅ New |
| page-templates/ | 9 page templates | 1200+ | ✅ Complete |

### 📱 Responsive Breakpoints

```
Mobile:    320px  # Smart phones
Tablet:    768px  # iPad and tablets
Desktop:   1024px # Laptops and desktops
Wide:      1280px # Large screens
```

### 🏗 Post Types & URLs

```
/tim/                    → Team members
/area-praktik/           → Practice areas
/wawasan/                → Insights/blog
/karir/lowongan/         → Job postings
```

### 📚 Where to Find Things

| What | Where | Guide |
|------|-------|-------|
| Setup theme | Dashboard | SETUP_QUICK_START.md |
| Understand templates | page-templates/ | PAGE_TEMPLATES_GUIDE.md |
| Work with responsive CSS | assets/css/ | RESPONSIVE_DESIGN_GUIDE.md |
| Test responsiveness | F12 DevTools | MOBILE_TESTING_GUIDE.md |
| Pre-launch checklist | Root | LAUNCH_CHECKLIST.md |

### 🎨 Design System

**Colors:**
- Primary: `#0a0a0a` (dark black)
- Accent: `#f97316` (orange)

**Typography:**
- Font: Inter (300, 400, 600, 700, 800)
- Headings scale: `clamp()` function
- Body: 14-16px responsive

**Spacing:**
- Mobile: 1-2 rem
- Desktop: 2-6 rem

**Touch Targets:**
- All buttons: 44x44px minimum
- All links: 44x44px minimum

---

## Common Tasks

### ✏️ Add a Page

1. Dashboard → Pages → Add New
2. Title: Your page name
3. Scroll to "Page Attributes"
4. Select template from dropdown
5. Add content with editor
6. Publish

### ➕ Add Team Member

1. Dashboard → Team Members → Add New
2. Fill form:
   - Name
   - Position
   - Bio
   - Photo (Featured Image)
3. Select Team Type (Partner, Associate, etc)
4. Publish

### 📝 Add Blog Post (Insight)

1. Dashboard → Insights → Add New
2. Title: Post title
3. Featured Image: Add image
4. Content: Write blog post
5. Category: Select topic
6. Publish

### 🎯 Add Practice Area

1. Dashboard → Practice Areas → Add New
2. Title: Area name
3. Description: What you do
4. Featured Image: Icon/image
5. Publish

### 📋 Add Job Opening

1. Dashboard → Job Openings → Add New
2. Title: Position name
3. Details: Requirements, location, level
4. Category: Job type
5. Publish

---

## Testing on Your Phone

### iPhone/Android

**Method 1: QR Code (Easiest)**
```
1. Open your site on desktop
2. Share → QR Code
3. Scan with phone camera
4. Tap link → Opens in browser
5. Test everything!
```

**Method 2: Manual**
```
1. Find your site URL
2. Open in phone browser
3. Visit home, pages, archives
4. Test navigation
5. Try forms
```

### What to Check

- [ ] No horizontal scrolling
- [ ] Text is readable (not tiny)
- [ ] Buttons are tappable
- [ ] Images load correctly
- [ ] Forms work smoothly
- [ ] Menu opens/closes
- [ ] Colors look good

---

## Responsive CSS Quick Reference

### Breakpoints (When styles change)

```
< 480px  : Extra small (phones)
480px    : Small phones landscape
768px    : Tablets
1024px   : Desktops
1280px   : Large desktops
1536px   : Extra wide screens
```

### Utility Classes

```
.grid-2      → 2 columns (responsive)
.grid-3      → 3 columns (responsive)
.grid-4      → 4 columns (responsive)
.hide-mobile → Hidden on phones
.hide-tablet → Hidden on tablets
.flex-responsive → Row on desktop, column on mobile
```

### Typography Scaling

```
h1: 30px (mobile) → 64px (desktop)
h2: 24px (mobile) → 40px (desktop)
h3: 20px (mobile) → 24px (desktop)
p:  14px (mobile) → 16px (desktop)
```

---

## Performance Checklist

### Before Going Live

- [ ] Generated demo content
- [ ] Tested on actual phone
- [ ] Tested on tablet
- [ ] Tested in Chrome
- [ ] Tested in Safari
- [ ] No 404 errors
- [ ] All pages load quickly
- [ ] Contact form works
- [ ] Images load correctly

### After Going Live

- [ ] Submit sitemap to Google
- [ ] Add to Google Search Console
- [ ] Verify with Google Mobile-Friendly Test
- [ ] Check PageSpeed Insights (target: 80+)
- [ ] Monitor for errors

---

## Resource Links

### Internal Guides
- Setup instructions → SETUP_QUICK_START.md
- Page template reference → PAGE_TEMPLATES_GUIDE.md
- Responsive design guide → RESPONSIVE_DESIGN_GUIDE.md
- Mobile testing guide → MOBILE_TESTING_GUIDE.md
- Pre-launch checklist → LAUNCH_CHECKLIST.md

### External Tools
- Google PageSpeed: https://pagespeed.web.dev/
- Mobile Friendly: https://search.google.com/test/mobile-friendly
- WAVE (Accessibility): https://wave.webaim.org/
- GTmetrix: https://gtmetrix.com/

---

## Troubleshooting

### Problem: Demo content didn't generate
**Solution:** 
1. Refresh dashboard page
2. Look for red error box
3. If no notice, visit: `/?dpattorney_demo_setup=1`

### Problem: Archives show 404
**Solution:**
1. Go to Settings → Permalinks
2. Click "Save Changes" (don't change anything)
3. This flushes rewrite rules
4. Try archive again

### Problem: Theme looks broken on mobile
**Solution:**
1. Press F12 on desktop
2. Click device icon (top-left)
3. Select phone size
4. Check if looks right
5. If broken, may need cache clear

### Problem: Images aren't responsive
**Solution:**
1. Check image has `max-width: 100%`
2. Verify CSS file loaded
3. Try clearing browser cache
4. Contact support with screenshot

### Problem: Form won't submit
**Solution:**
1. Check Contact Form 7 plugin installed
2. Verify form shortcode in contact page
3. Test on incognito (no cache)
4. Check spam folder for messages

---

## Support Resources

**Need Help?**
1. Check SETUP_QUICK_START.md (quick answers)
2. See PAGE_TEMPLATES_GUIDE.md (templates)
3. Read RESPONSIVE_DESIGN_GUIDE.md (responsive)
4. Follow MOBILE_TESTING_GUIDE.md (testing)
5. Use LAUNCH_CHECKLIST.md (launch prep)

**Have Feedback?**
- Note what page it's on
- Describe what's wrong
- Include screenshot
- Note device/browser
- Tell us what you expected

---

## Summary

| What | How | Time |
|-----|-----|------|
| Get started | Generate demo content | 1 min |
| Customize | Edit in Appearance Customize | 10 min |
| Test mobile | Open on phone browser | 5 min |
| Add content | Use WordPress admin | 5-15 min |
| Go live | Submit sitemap to Google | 5 min |

**Total to launch: ~30-45 minutes**

---

**Theme Version:** 2.0.0  
**Last Updated:** February 2025  
**Status:** ✅ Production Ready

*Everything you need is included. You've got this! 🚀*
