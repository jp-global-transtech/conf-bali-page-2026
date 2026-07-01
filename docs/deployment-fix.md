# Deployment Fix Documentation

**Project:** GETS 2026 Landing Page
**Date:** June 28, 2026
**Issue:** Deployment problems on Hostinger Cloud Hosting

---

## Problems Identified

### 1. Speakers Not Appearing
- **Symptom:** All speakers were not displayed on the landing page after deployment
- **Root Cause:** Build assets (`/public/build`) were not being deployed

### 2. Marquee Animation Not Working
- **Symptom:** Speaker photo marquee container was not moving
- **Root Cause:** CSS animations from Vite build were not present on server

### 3. 403 Forbidden Error
- **Symptom:** Server returning 403 Forbidden error
- **Root Cause:** Web server document root not pointing to Laravel's `/public` folder

---

## Solutions Applied

### Solution 1: Include Build Assets in Git Repository

**Problem:** `/public/build` was in `.gitignore`, preventing build assets from being committed.

**Action:** Removed `/public/build` from `.gitignore`

```diff
# .gitignore
/node_modules
- /public/build
/public/fonts-manifest.dev.json
```

**Result:** Vite build assets now included in deployment

---

### Solution 2: Create Root .htaccess for Hostinger

**Problem:** Hostinger Cloud Hosting document root points to `public_html`, but Laravel requires document root to point to `/public` subdirectory.

**Action:** Created `.htaccess` in project root to redirect all requests to `/public` folder

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_URI} !^/public/
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

**Location:** `/home/dev-reina/web-dev/gets-landing-page/.htaccess`

---

## Deployment Structure

After deployment, the Hostinger public_html structure should be:

```
public_html/
├── .htaccess                  # Redirect to public folder
├── .gitignore
├── app/
├── bootstrap/
├── composer.json
├── public/                    # Laravel public folder
│   ├── .htaccess              # Laravel rewrite rules
│   ├── index.php             # Entry point
│   ├── build/                # Vite build assets
│   │   ├── assets/
│   │   │   ├── app-DzA_zUIk.css
│   │   │   └── app-Dv4ht4q1.js
│   │   └── manifest.json
│   ├── images/
│   └── ...
├── resources/
│   └── data/
│       └── speakers.php      # Speakers data source
├── vendor/
└── ...
```

---

## Verification Checklist

After deployment, verify:

- [ ] Landing page loads without 403 error
- [ ] Speakers section displays all confirmed speakers
- [ ] Marquee animation scrolls smoothly from right to left
- [ ] CSS styles are properly applied (no unstyled content)
- [ ] JavaScript functionality works (Alpine.js components)

---

## Technical Notes

### Build Process

```bash
npm run build
```

Generates:
- `public/build/manifest.json` - Asset mapping
- `public/build/assets/app-*.css` - Compiled CSS with Tailwind
- `public/build/assets/app-*.js` - Compiled JS with Alpine.js

### Marquee Animation

Defined in two places (both now properly built):

1. **tailwind.config.js:**
```javascript
animation: {
    'marquee': 'marquee 20s linear infinite',
}
```

2. **resources/css/app.css:**
```css
@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.animate-marquee {
    animation: marquee 30s linear infinite;
}
```

### Speakers Data Source

File: `resources/data/speakers.php`
- Contains all speaker information
- Filtered by `confirmed => true` in blade template
- Loaded via: `collect(include resource_path('data/speakers.php'))`

---

## Future Recommendations

1. **CI/CD Pipeline:** Consider adding automated build step in deployment pipeline
2. **Asset Caching:** Implement cache busting for CSS/JS updates
3. **Monitoring:** Add uptime monitoring to catch deployment issues early

---

## Files Modified

| File | Action | Description |
|------|--------|-------------|
| `.gitignore` | Modified | Removed `/public/build` from ignore list |
| `.htaccess` | Created | Root redirect to `/public` folder |
| `public/build/*` | Generated | Vite build assets included in repository |

---

## Related Commands

```bash
# Build assets locally
npm run build

# Commit changes
git add .gitignore .htaccess public/build/
git commit -m "fix: deployment configuration for Hostinger"
git push
```

---

**Status:** ✅ Resolved
**Deployment Platform:** Hostinger Cloud Hosting
**Laravel Version:** 11.x
