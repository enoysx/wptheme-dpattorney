# Quick Reference Card

**D Pongkor & Partners WordPress Theme v2.0.0**

---

## 🚀 Start Here

1. **Activate Theme** → Appearance → Themes → Activate
2. **Configure** → Appearance → Customize
3. **Install Plugins** → Plugins → Add New
   - SiteOrigin Page Builder (essential)
   - Contact Form 7 or WPForms
   - Yoast SEO or Rank Math
4. **Create Demo Content** → Visit: `/?dpattorney_demo_setup=1`
5. **Build Pages** → Use SiteOrigin Page Builder

---

## 📁 Key Files & What They Do

| File | Purpose | What to Edit |
|------|---------|--------------|
| `functions.php` | Core functionality | Theme setup, hooks |
| `style.css` | Main styles | Colors, responsive layout |
| `inc/schema-markup.php` | SEO structured data | Auto-generated |
| `inc/accessibility.php` | WCAG 2.1 AA features | Auto-applied |
| `inc/performance.php` | Optimization hooks | Auto-applied |
| `SETUP_GUIDE.md` | Detailed instructions | **Read this first!** |

---

## 🎨 Customization Quick Links

**Colors:**
- Edit CSS variables in `style.css` `:root` section
- Primary accent: `--color-orange-500: #f97316`

**Typography:**
- Font: `--font-primary` in `style.css`
- Change Google Fonts URL in `functions.php`

**Images:**
- Recommended sizes for team: 600x800px
- Practice areas: 600x400px
- Articles: 800x450px

---

## 👥 Managing Team Members

**Add New Team Member:**
1. Teams → Add New
2. Fill title, content, featured image
3. Fill "Team Member Details" meta box
4. Set Team Type taxonomy
5. Publish

**Meta Fields to Fill:**
- Role/Position
- Email
- Phone
- LinkedIn URL
- Education (newline-separated)
- Experience (newline-separated)
- Languages (comma-separated)
- Awards (newline-separated)
- Expertise (comma-separated)

---

## 📋 Managing Content

**Practice Areas:**
- Practice Areas → Add New
- Use icon names from Lucide (e.g., "building-2")
- Add tags separated by commas

**Blog Articles:**
- Insights → Add New
- Full editor support
- Comments enabled
- Categories available

**Job Postings:**
- Careers → Add New
- Write full job description
- Set job category

---

## 🔧 Essential Customizer Settings

**Go to:** Appearance → Customize

**Theme Options Section:**
- Hero Badge Text
- Hero Title
- Hero Description
- Contact Email
- Contact Phone
- Social URLs (LinkedIn, Twitter, Facebook, Instagram)

**Organization Information Section:**
- Street Address
- City
- State/Province
- Postal Code
- Country Code (e.g., ID)
- Organization Logo

---

## 📚 Documentation Files

| File | Content |
|------|---------|
| **README.md** | Quick overview (read first!) |
| **SETUP_GUIDE.md** | Complete setup instructions |
| **COMPREHENSIVE_ANALYSIS.md** | Technical architecture |
| **LAUNCH_CHECKLIST.md** | Pre-launch verification |
| **IMPLEMENTATION_SUMMARY.md** | What was built |
| **.htaccess.example** | Server optimization tips |

---

## ⚡ Performance Optimization

**Quick Wins:**
1. Install & activate W3 Total Cache
2. Install Imagify for image optimization
3. Enable caching in W3 TC settings

**Check Performance:**
- Google PageSpeed: https://pagespeed.web.dev
- GTmetrix: https://gtmetrix.com
- Target score: > 80

---

## ♿ Accessibility Testing

**Quick Test (5 minutes):**
1. Press `Tab` - Can navigate all elements?
2. Check colors in DevTools - > 4.5:1 contrast?
3. Disable images - Does alt text display?
4. Test on mobile - Touch targets > 44px?

**Tools:**
- lighthouse (Chrome DevTools)
- WAVE (Browser extension)
- NVDA (Screen reader - Windows)

---

## 🔍 SEO Quick Setup

1. **Install:** Yoast SEO or Rank Math from plugins
2. **Configure:** Follow plugin setup wizard
3. **Add to Pages:** Fill meta descriptions
4. **Schema Test:** https://validator.schema.org
5. **Mobile Test:** https://search.google.com/test/mobile-friendly

---

## 🔐 Security Checklist

- [ ] Admin username changed from "admin"
- [ ] Strong admin password set
- [ ] WordPress updated to latest
- [ ] All plugins updated
- [ ] No hardcoded API keys in code
- [ ] .htaccess configured for server
- [ ] Backups enabled (daily)
- [ ] SSL certificate installed (HTTPS)

---

## 🐛 Quick Troubleshooting

| Problem | Solution |
|---------|----------|
| Page Builder not appearing | Click "Enable Page Builder" button |
| Forms not sending email | Check CF7/WPForms email settings |
| Images not loading | Verify file permissions (755) |
| Site slow | Install W3 Total Cache, optimize images |
| Schema not working | Fill all org info in Customizer |
| Menu not showing | Create menu & assign in Menus settings |
| Email goes to spam | Check reply-to address in form |

---

## 📞 Support Resources

| Need | Where to Look |
|------|---|
| Setup help | SETUP_GUIDE.md |
| Technical details | COMPREHENSIVE_ANALYSIS.md |
| Pre-launch | LAUNCH_CHECKLIST.md |
| Plugin issues | Plugin documentation |
| WordPress help | WordPress.org support |

---

## 💡 Pro Tips

✅ Use SiteOrigin for pages (easier than coding)  
✅ Keep team members updated monthly  
✅ Write 1-2 insights per month for SEO  
✅ Test on mobile before publishing  
✅ Enable caching for 50% speed improvement  
✅ Backup database weekly  
✅ Update plugins monthly  

---

## 🎯 Common Tasks

### Add a New Page
1. Pages → Add New
2. Set title and template
3. Click "Page Builder" button
4. Add rows and widgets
5. Publish

### Create a Contact Form
1. Contact Form 7 → Add New
2. Configure fields
3. Copy shortcode
4. Add to page with Page Builder

### Set Up Newsletter
1. Use Mailchimp plugin
2. Create form
3. Add to sidebar or footer

### Add Testimonial
1. Use SiteOrigin widget
2. Add image, name, quote
3. Publish

---

## 📊 Monthly Maintenance

- [ ] Update WordPress core
- [ ] Update all plugins
- [ ] Update theme if needed
- [ ] Backup database
- [ ] Review site analytics
- [ ] Monitor page performance
- [ ] Check for broken links
- [ ] Review contact form submissions

---

## 🚀 Launch Day

**Before going live:**
1. ✅ Run LAUNCH_CHECKLIST.md
2. ✅ Test all pages on mobile
3. ✅ Verify all forms work
4. ✅ Check Google PageSpeed score
5. ✅ Verify schema markup
6. ✅ Test accessibility
7. ✅ Create backup

**After launch:**
1. Monitor error logs for 24 hours
2. Verify email forms work
3. Check analytics setup
4. Respond to feedback

---

**Need help?** → Read SETUP_GUIDE.md  
**Technical questions?** → See COMPREHENSIVE_ANALYSIS.md  
**Before launch?** → Check LAUNCH_CHECKLIST.md

---

**Happy building! 🎉**
