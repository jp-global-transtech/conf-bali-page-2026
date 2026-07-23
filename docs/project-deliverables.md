# Project Deliverables — GETS 2026 Landing Page

**Project:** GETS 2026 — Global Environment & Transition Summit  
**Repository:** `jp-global-transtech/conf-bali-page-2026`  
**Stack:** Laravel 11 + Livewire 4 + Alpine.js 3 + Tailwind CSS 3 + Vite 8  
**Sprint:** 20 Juli 2026  
**Status:** ✅ Completed

---

## 1. Pembaruan Struktur Biaya Pendaftaran

### Ringkasan
Restrukturisasi total section Registration Fees untuk mencerminkan kebijakan pricing terbaru. Menghapus kategori lama (Presenter/Participant distinction, Student) dan menggantinya dengan 3 kategori utama.

### Files Modified

| File | Action | Description |
|------|--------|-------------|
| `resources/views/sections/registration-fees.blade.php` | Modified | Restruktur 3 tab dengan pricing baru, hapus harga lama |
| `resources/views/docs/guidelines.blade.php` | Modified | Update tabel fee dan accordion mobile |
| `resources/views/docs/payment.blade.php` | Modified | Update tabel fee, accordion mobile, hapus Purchase Order |
| `resources/views/docs/faq.blade.php` | Modified | Update Q1 (student) dan Q2 (Indonesia on-site) |
| `resources/views/docs/registration.blade.php` | Modified | Update Step 3: Selecting Registration Type |

### Pricing Structure — Sebelum vs Sesudah

| Kategori | Sebelum | Sesudah |
|----------|---------|---------|
| **Indonesia Participants** | Presenter Online: IDR 250k, Presenter On-site: IDR 750k, Participant Online: IDR 250k | **Online Only: IDR 500,000** |
| **International Participants** | Presenter On-site: USD 110, Presenter Online: USD 50, Participant On-site: USD 110, Participant Online: USD 50 | **On-site: USD 110, Online: USD 50** |
| **Indian Partners** | Presenter: INR 10,000, Participant: INR 5,000 (unchanged) | **Presenter: INR 10,000, Participant: INR 5,000** |
| **Student** | IDR 150,000 (Online Only) | Removed |

### UI Changes
- Tab labels: "Presenter (With Paper)" → "Indonesia Participants", "Participant (Listener Only)" → "International Participants", "Student & Indian Partner" → "Indian Partners"
- Grid layout adjusted from `lg:grid-cols-4` / `lg:grid-cols-3` to `sm:grid-cols-2` / `max-w-sm`
- Subtitle text: "All co-authors and participants must complete registration to secure their slot." → "All participants must complete registration to secure their slot."

---

## 2. Pembersihan Nama dari Jadwal Konferensi

### Ringkasan
Menghapus nama spesifik pembicara dari 3 entry jadwal pembukaan, hanya menyisakan jabatan/posisi.

### Files Modified

| File | Action | Description |
|------|--------|-------------|
| `resources/views/conference/schedule.blade.php` | Modified | Hapus nama dari Welcome Remarks, NEMA India, FiNder |

### Changes
- "Welcome Remarks by Conference Chair: Prof. Dra. Ni Luh Watiniasih, M.Sc., Ph.D." → "Welcome Remarks by Conference Chair"
- "Remarks by International Partner Institution, NEMA India: Prof. W. Chandbabu Singh" → "Remarks by International Partner Institution, NEMA India"
- "Remarks by Co-Organizing Partner, FiNder Universitas Padjadjaran: Prof. I Made Joni" → "Remarks by Co-Organizing Partner, FiNder Universitas Padjadjaran"

---

## 3. Pembersihan File & Assets

### Files Modified

| File | Action | Description |
|------|--------|-------------|
| `resources/views/conference/landing.blade.php.backup` | Deleted | Hapus file backup lama yang tidak digunakan |

---

## 4. Commits

| Commit | Description |
|--------|-------------|
| `1a1deec` | fix: update registration fees with new pricing structure, remove old prices and names from schedule |
| `cb19caf` | chore: remove unused landing page backup file |

---

## Files Summary

| # | File | Status |
|---|------|--------|
| 1 | `resources/views/sections/registration-fees.blade.php` | ✅ Modified |
| 2 | `resources/views/conference/schedule.blade.php` | ✅ Modified |
| 3 | `resources/views/docs/guidelines.blade.php` | ✅ Modified |
| 4 | `resources/views/docs/payment.blade.php` | ✅ Modified |
| 5 | `resources/views/docs/faq.blade.php` | ✅ Modified |
| 6 | `resources/views/docs/registration.blade.php` | ✅ Modified |
| 7 | `resources/views/conference/landing.blade.php.backup` | 🗑️ Deleted |

**Total:** 6 files modified, 1 file deleted

---

**Last Updated:** 20 Juli 2026  
**Maintainer:** Reina — JP Global Transtech
