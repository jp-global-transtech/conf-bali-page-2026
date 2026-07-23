# Progress Report — GETS 2026 Landing Page

**Project:** GETS 2026 — Global Environment & Transition Summit  
**Repository:** `jp-global-transtech/conf-bali-page-2026`  
**Stack:** Laravel 11 + Livewire 4 + Alpine.js 3 + Tailwind CSS 3 + Vite 8  
**Periode:** 24 Juni 2026 — 15 Juli 2026  
**Status:** ✅ Aktif — Pengembangan Berkelanjutan

---

## Ringkasan Eksekutif

Website konferensi GETS 2026 dibangun di atas Laravel 11 dengan arsitektur Blade + Livewire + Alpine.js. Dalam 3 minggu pengembangan, telah terealisasi 26 halaman (13 conference pages, 6 docs pages, 7 payment/integration pages), 30+ komponen UI, dan middleware internasionalisasi 4 bahasa (EN, ID, HI, JA).

---

## Timeline & Milestone

| Tanggal | Commit | Deskripsi |
|---------|--------|-----------|
| 24 Jun | `d082985` | Initial commit — landing page dengan Tally form |
| 25 Jun | `9bcb876` | Tailwind build, fitur conference, hero section |
| 25 Jun | `d035966` | Nav-link fix, komponen blade tambahan |
| 25 Jun | `97e8665` | Call for Abstract, Visa Information |
| 25 Jun | `76228e6` | Fix Tally form mobile scrolling |
| 26 Jun | `5c26792` | Speaker photo marquee, speaker display |
| 26 Jun | `d2cb79f` | PDF Indian Guidelines |
| 28 Jun | `c73d49a` | `bootstrap/cache` ke `.gitignore` |
| 28 Jun | `016d064` | Build assets include dalam deployment |
| 28 Jun | `5d433cf` | `.htaccess` redirect untuk Hostinger |
| 01 Jul | `64b87b3` | Speaker updates, venue carousel, UX improvements |
| 01 Jul | `ad29731` | Foto speaker Ni Nyoman Santi |
| 01 Jul | `a45867d` | Ignore Windows Zone.Identifier files |
| 01 Jul | `e6d5b11` | Visa link ke e-visa resmi |
| 08 Jul | `c6afb68` | Integrasi rute registration ke conf_ms_web |
| 09 Jul | `d671b3c` | Redirect registration → conf_ms_web |
| 10 Jul | `e98c27f` | Portal registration, hapus Tally |
| 14 Jul | `d7efbea` | Docs pages rewrite (guidelines, abstract, templates, FAQ) |
| 15 Jul | `6e6df4b` | WhatsApp widget, SEO tools, konten conference update |
| 15 Jul | `021d7ad` | Fix loading screen, sentralisasi loading logic |

---

## Pages & Routes

### Conference Pages (13)

| Route | View | Deskripsi |
|-------|------|-----------|
| `/` | `conference.landing` | Homepage — hero, speakers, venue, schedule, CTA |
| `/conference/overview` | `conference.overview` | About the conference |
| `/conference/schedule` | `conference.schedule` | Program schedule |
| `/conference/venue` | `conference.venue` | Venue & location |
| `/conference/speakers` | `conference.speakers` | Speaker grid |
| `/conference/invited-speakers` | `conference.invited-speakers` | Invited speakers list |
| `/conference/important-dates` | `conference.important-dates` | Key dates |
| `/conference/committee` | `conference.committee` | Organizing committee |
| `/conference/timeline` | `conference.timeline` | Conference timeline |
| `/conference/experience` | `conference.experience` | Attendee experience |
| `/conference/participant-support` | `conference.participant-support` | Support hub |
| `/conference/insights` | `conference.insights` | Conference insights |
| `/conference/contact` | `conference.contact` | Contact form |
| `/conference/call-for-abstract` | `conference.call-for-papers` | Call for papers |
| `/conference/registration` | `conference.registration` | Registration info |
| `/conference/register` | Redirect | → `conf_ms_web/register` |

### Documentation Pages (6)

| Route | View | Deskripsi |
|-------|------|-----------|
| `/docs/guidelines` | `docs.guidelines` | Conference guidelines |
| `/docs/abstract` | `docs.abstract` | Abstract submission guide |
| `/docs/templates` | `docs.templates` | Presentation templates |
| `/docs/registration` | `docs.registration` | Registration guide |
| `/docs/payment` | `docs.payment` | Payment information |
| `/docs/faq` | `docs.faq` | Frequently asked questions |

### Payment Pages (7)

| Route | View | Deskripsi |
|-------|------|-----------|
| `/payment/invoice/create` | — | Create invoice |
| `/payment/success/{payment}` | `conference.payment-success` | Payment success |
| `/payment/failed/{payment}` | `conference.payment-failed` | Payment failed |
| `/payment/mock/{payment}` | `conference.payment-mock` | Mock payment (testing) |

---

## Features & Components

### Core Infrastructure
- **Laravel 11** + Livewire 4 + Volt 1.10
- **Vite 8** build pipeline dengan asset hashing
- **4 bahasa**: EN, ID, HI, JA (via `resources/lang/`)
- **SEO**: `artesaos/seotools` — Open Graph, Twitter Card, JSON-LD

### UI Components (30+)
| Komponen | Path |
|----------|------|
| Navigation | `components/navigation` |
| Footer | `components/footer` |
| Loading Screen | `components/loading-screen` |
| Image Carousel | `components/image-carousel` |
| WhatsApp Widget | `components/whatsapp-widget` |
| Language Switcher | `components/language-switcher` |
| Speakers Cards | `components/speakers/*` (7 variants) |
| Registration Form (Livewire) | `components/registration-form` |

### Sections Component (19)
Landing page dipecah menjadi section-section independen di `views/sections/`:
- Hero, Logo Cloud, Conference Philosophy
- Speaker Experience, Who Should Attend
- Conference Benefits, Updates
- Registration Fees, Explore Links
- Schedule Preview, Call for Papers
- Experience subsections (accommodation, transport, venue guide, visa)

### Fitur Kunci
- **Loading Screen**: Full-screen splash dengan progress bar, minimal 1.5 detik
- **Scroll Reveal**: IntersectionObserver-based animasi scroll
- **Photo Marquee**: Infinite scroll speaker photos
- **Speaker Modal**: Detail speaker popup
- **Dark Mode**: (terintegrasi via daisyUI)
- **Payment Gateway**: Invoice + webhook system

---

## Teknologi Stack

| Layer | Teknologi |
|-------|-----------|
| Backend | Laravel 11 (PHP 8.2) |
| Frontend | Blade + Alpine.js 3.15 + Tailwind CSS 3 |
| Komponen Interaktif | Livewire 4 + Volt 1.10 |
| Build Tool | Vite 8 + laravel-vite-plugin 3.1 |
| UI Library | daisyUI 5.5, @alpinejs/collapse |
| HTTP Client | Axios 1.16 |
| SEO | artesaos/seotools 1.4 |
| Deployment | Hostinger Cloud Hosting |

---

## Arsitektur Layout

```
layouts/
├── conference.blade.php      # Main layout (navigation + loading screen + footer)
├── docs-layout.blade.php     # Documentation layout (sidebar + header)
└── guest.blade.php           # Guest layout (minimal)

Setiap halaman conference menggunakan @extends('layouts.conference')
Setiap halaman docs menggunakan @extends('layouts.docs-layout')
```

## Loading Screen Architecture

```
Alpine Store 'loading'
├── isLoading: true (default)
├── progress: 0 → 10 → 70 → 100
├── init()  → auto-called oleh Alpine saat store dibuat
├── Sequences:
│   ├── Minimum splash: 1500ms (setTimeout)
│   ├── Window load: tunggu semua aset selesai
│   └── Fallback maksimum: 3000ms
│
Blade Component (components.loading-screen)
├── Fixed overlay (z-[9999])
├── Progress bar (absolute top)
├── Logo dengan animate-pulse
└── Transisi: opacity 300ms fade-out
```

---

## Files Modified — Periode Terakhir

| File | Action | Description |
|------|--------|-------------|
| `resources/js/app.js` | Modified | Loading store with progress, hapus redundant init() |
| `resources/views/components/loading-screen.blade.php` | Modified | Progress bar |
| `resources/views/layouts/conference.blade.php` | Modified | Include loading screen |
| `resources/views/layouts/docs-layout.blade.php` | Modified | Include loading screen |
| `resources/views/conference/overview.blade.php` | Modified | Global store loading |
| `resources/views/conference/registration.blade.php` | Modified | Global store loading |
| `resources/views/conference/call-for-papers.blade.php` | Modified | Global store loading |
| `public/build/manifest.json` | Modified | Updated asset hashes |
| `public/build/assets/app-*.{css,js}` | Regenerated | Vite build |

---

## Deployment Notes

- **Platform**: Hostinger Cloud Hosting
- **Document Root**: Mengarah ke `/public`
- **Build**: `npm run build` → `public/build/` (committed ke git)
- **HTTPS**: Via `.htaccess` rewrite
- **Env**: `.env` tidak di-commit (template di `.env.example`)

---

## Status Per-Component

| Komponen | Status | Catatan |
|----------|--------|---------|
| Landing Page | ✅ Selesai | Hero, sections lengkap |
| Schedule | ✅ Selesai | Filterable tabs |
| Speakers | ✅ Selesai | Livewire + filter + modal |
| Registration | ✅ Selesai | Redirect ke conf_ms_web |
| Venue | ✅ Selesai | Carousel + Google Maps |
| Experience | ✅ Selesai | Sub-sections lengkap |
| Participant Support | ✅ Selesai | Visa, airport, checklist |
| Docs Pages | ✅ Selesai | 6 halaman dokumentasi |
| Payment | ✅ Selesai | Invoice + webhook |
| Loading Screen | ✅ Selesai | Progress bar + transisi |
| WhatsApp Widget | ✅ Selesai | Floating button |
| SEO | ✅ Selesai | OG, Twitter, JSON-LD |
| Multi-language | ✅ Selesai | EN, ID, HI, JA |
| Deployment | ✅ Selesai | Hostinger + .htaccess |

---

## Related Commands

```bash
# Development
php artisan serve          # Laravel dev server
npm run dev                # Vite HMR

# Build
npm run build              # Build assets
php artisan optimize       # Cache routes, config, events

# Cache
php artisan cache:clear    # Clear application cache
php artisan view:clear     # Clear compiled views
php artisan config:clear   # Clear config cache

# Deploy
git add -A && git commit -m "deskripsi" && git push
```

---

**Last Updated:** 15 Juli 2026  
**Maintainer:** Reina — JP Global Transtech
