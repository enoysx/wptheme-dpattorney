# Quick Start Guide - Post Types & Archive Fixes

This guide helps you get posts, archives, and demo content working immediately after theme activation.

## Problem Fixed

The theme's custom post types (Team Members, Practice Areas, Insights, Job Openings) were returning 404 errors on archives. This has been fixed by:

1. **Automatic Rewrite Rule Flushing** - WordPress now automatically flushes rewrite rules when the theme loads
2. **Demo Content Generator** - One-click demo content setup from the WordPress dashboard
3. **Proper Post Type Registration** - All custom post types and taxonomies properly configured

---

## Setup Steps

### Step 1: WordPress Admin Dashboard
1. Go to **WordPress Admin Dashboard**
2. You'll see a blue notification box: **"Generate Demo Content"**
3. Click the **"Generate Demo Content"** button

**✅ What this creates:**
- 3 Team Members (Dion Pongkor, Maya Wijaya, Budi Santoso)
- 6 Practice Areas (Corporate Law, IP, Dispute Resolution, Tax, Employment, Real Estate)
- 3 Sample Insights/Articles
- 2 Job Openings
- All associated categories and taxonomies

### Step 2: Verify the Archives Work

After generating demo content, test these URLs:

| Content Type | URL | Expected Result |
|-----------|-----|-----------------|
| Team Members | `/tim/` | Grid of team member cards |
| Practice Areas | `/area-praktik/` | Grid of practice areas |
| Insights/Blog | `/wawasan/` | Grid of articles with pagination |
| Jobs | `/karir/loek` | List of job openings |

### Step 3: Customize in Admin

Navigate to the WordPress admin left sidebar and you'll see new menu items:

- **Team** → Manage team members
- **Practice Areas** → Manage practice areas  
- **Insights** → Manage articles/blog posts
- **Careers** → Manage job openings

---

## What If the Demo Notice Doesn't Appear?

If you don't see the **"Generate Demo Content"** notice:

### Option A: Manual URL Trigger
1. Go to: `yoursite.com/wp-admin/?dpattorney_demo_setup=1`
2. You'll see a success message: "Demo content has been created successfully!"

### Option B: Check Permalinks Setting
1. Go to **Settings → Permalinks**
2. Don't change anything, just click **"Save Changes"** at the bottom
3. This forces WordPress to refresh the rewrite rules
4. Then test the archives again

---

## Post Type URLs & Slugs

Each post type has a specific URL structure:

### Team Members
- **Archive:** `/tim/`
- **Single:** `/tim/{member-name}/`
- **By Type Filter:** `/tim/?type=partner`

### Practice Areas
- **Archive:** `/area-praktik/`
- **Single:** `/area-praktik/{area-slug}/`

### Insights/Blog
- **Archive:** `/wawasan/`
- **Single:** `/wawasan/{article-id}/`
- **Pagination:** `/wawasan/?paged=2`

### Job Openings
- **Archive:** `/karir/lowongan/` (when viewing jobs from careers page)
- **Single:** `/karir/{job-id}/`

---

## Troubleshooting 404 Errors

If you're still getting 404 errors after following these steps:

### 1. Flush Permalinks Again
```
Settings → Permalinks → Save Changes (without modifying anything)
```

### 2. Check .htaccess File
Ensure your `.htaccess` file has been updated. If using the example configuration:

```bash
# Copy the example .htaccess
cp .htaccess.example .htaccess
```

Then verify WordPress can write to it:
- File permission should be `644`
- Located in your site root directory

### 3. Use Plain Permalinks (Temporary)
If issues persist:
1. Go to **Settings → Permalinks**
2. Select **"Plain"** (the first option)
3. Save changes
4. Test the archives
5. Then switch back to **"Post Name"** (the second option)

### 4. Check Custom Post Type Registration
Verify in **WordPress → Tools → Site Health** that there are no issues registered.

---

## Page Templates for Archives

The theme includes dedicated page templates for displaying content. Here's how to set them up:

### Create Archive Pages (Optional)

If you want custom archive pages (instead of default archives), create these pages with slug and assign templates:

| Page Title | Slug | Template | Purpose |
|-----------|------|----------|---------|
| Area Praktik | `area-praktik` | Practice Areas Page | Custom archive view |
| Wawasan | `wawasan` | Insights/Blog Page | Custom blog view |
| Karir | `karir` | Careers Page | Custom jobs view |
| Tim | `tim` | Team Listing Page | Custom team directory |

**Note:** If you use custom page templates, set the homepage to **not** use these slugs to avoid conflicts.

---

## After Demo Content is Created

### 1. Customize Content
- Edit team member profiles with your actual team
- Update practice areas with your services
- Publish your own insights/blog posts
- Add real job openings

### 2. Customize Theme Settings
- Go to **Appearance → Customize**
- Set your logo, colors, contact info
- Configure organization information

### 3. Delete Demo Content (Optional)
When ready to use real content:
1. Go to **Team** → Select all demo members → Bulk actions: Delete
2. Go to **Practice Areas** → Select all → Bulk actions: Delete
3. Go to **Insights** → Select all → Bulk actions: Delete
4. Go to **Careers** → Select all → Bulk actions: Delete

---

## Common Questions

**Q: Will the demo content break my real content?**
A: No! Demo content is completely separate. Delete it anytime.

**Q: Can I customize the demo content created?**
A: Yes! Once created, edit any item just like normal WordPress posts.

**Q: Do I need the SiteOrigin Page Builder?**
A: It's recommended for the best experience, but not required.

**Q: Where are the archive template files?**
A: In `/page-templates/` directory
- `practice-areas-page.php`
- `insights-page.php`
- `careers-page.php`
- `team-listing-page.php`

---

## Verify Everything is Working

Open your WordPress admin and run through this checklist:

- [ ] Demo content notice appears on dashboard
- [ ] Successfully generated demo content
- [ ] Can see team members in `/tim/`
- [ ] Can see practice areas in `/area-praktik/`
- [ ] Can see insights in `/wawasan/`
- [ ] Can see job listings
- [ ] Team admin menu item exists
- [ ] Practice Areas menu item exists
- [ ] Insights menu item exists
- [ ] Careers menu item exists

If everything is checked ✅, your theme is working perfectly!

---

## Next Steps

1. **Read** [PAGE_TEMPLATES_GUIDE.md](PAGE_TEMPLATES_GUIDE.md) for complete template documentation
2. **Follow** [SETUP_GUIDE.md](SETUP_GUIDE.md) for detailed customization
3. **Check** [LAUNCH_CHECKLIST.md](LAUNCH_CHECKLIST.md) before going live

---

## Support & Help

If you encounter issues:

1. Check [SETUP_GUIDE.md](SETUP_GUIDE.md) - Troubleshooting FAQ section
2. Verify WordPress version is 5.0+
3. Ensure PHP is 7.4+
4. Check that all required plugins are installed
5. Clear any caching plugins

---

**Last Updated:** February 2025
**Theme Version:** 2.0.0
