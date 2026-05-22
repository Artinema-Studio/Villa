# Villa Mewah - Premium, Minimalis & Modern Landing Page

Proyek ini adalah implementasi *Single-Page Landing Page* untuk Villa Mewah yang dibangun menggunakan **Laravel** dan **Tailwind CSS v4**. Desain difokuskan pada konsep *Modern Luxury*, *Tropical Minimalist*, dan *Clean Spacing*.

## 🌟 Fitur Utama

- **Modern & Responsive Design**: UI sepenuhnya responsif (mobile-first) menggunakan utilitas Tailwind CSS dengan perpaduan warna *Off-White*, *Dark Earth*, dan *Soft Luxury Gold*.
- **Scroll-Driven Animations (CSS Native)**: Transisi *Sticky Navbar* dari transparan ke efek *glassmorphism* (backdrop blur) menggunakan properti CSS modern `animation-timeline`.
- **Vanilla JS Fallback**: Menyediakan *fallback* berbasis event listener JS murni untuk browser yang belum mendukung CSS `animation-timeline`.
- **Intersection Observer (Fade-In & Slide-Up)**: Animasi masuk elemen yang sangat halus (smooth) ketika di-*scroll* (Hero section, content cards, gambar galeri, dsb).
- **Smooth FAQ Accordion**: Animasi interaktif buka/tutup FAQ murni menggunakan Vanilla JS tanpa library eksternal, lengkap dengan efek rotasi ikon.
- **Tipografi Premium**: Menggunakan Google Fonts **Playfair Display** (Heading) dan **Plus Jakarta Sans** (Body) untuk memberikan kesan mewah nan modern.
- **Galeri Dinamis**: Layout grid gambar asimetris yang dioptimalkan, dengan animasi *zoom-in* lambat saat kursor diarahkan (hover).

## 🗂 Struktur Section

Landing page ini mencakup 10 *sections* spesifik:
1. **Hero Section (Fullscreen)**: Sambutan premium dengan latar belakang *full cover*.
2. **Tentang Villa (About Us)**: Narasi villa yang dipadukan dengan desain *asymmetrical image layout*.
3. **Daftar Kamar/Villa**: *Card* akomodasi elegan dengan harga yang jelas terlihat.
4. **Galeri Foto**: *Grid layout* dengan fitur perbesaran visual (*scale*) saat *hover*.
5. **Fasilitas (Amenities)**: Daftar kenyamanan premium yang direpresentasikan melalui Lucide Icons.
6. **Testimoni (Reviews)**: Kutipan pengalaman menginap dengan desain berkelas.
7. **Lokasi & Maps**: Peta Google Maps terintegrasi yang digayakan ulang (*grayscale filter*) agar menyatu dengan estetika website.
8. **Booking CTA**: Form reservasi ringkas berdesain minimalis tanpa bingkai tebal.
9. **FAQ**: Pertanyaan populer yang disusun dengan transisi Accordion murni.
10. **Footer Modern**: Navigasi bawah ringkas, informasi kontak, serta widget berlangganan *newsletter*.

## 🛠 Teknologi

- **Framework**: Laravel 11 / 10
- **Styling**: Tailwind CSS v4 (melalui integrasi Vite)
- **Javascript**: Vanilla JS (tanpa jQuery)
- **Icons**: Lucide Icons (via CDN)
- **Fonts**: Google Fonts

## 🚀 Cara Menjalankan Secara Lokal

1. **Clone repository**:
   ```bash
   git clone https://github.com/Artinema-Studio/Villa.git
   cd Villa
   ```

2. **Install Dependensi Composer & NPM**:
   ```bash
   composer install
   npm install
   ```

3. **Build Aset Vite**:
   ```bash
   npm run build
   # Atau jika dalam tahap development: npm run dev
   ```

4. **Jalankan Server Lokal**:
   ```bash
   php artisan serve
   ```

5. Buka web browser Anda pada alamat `http://localhost:8000`.

---
*Dikembangkan berdasarkan permintaan Issue #1: Implementasi Landing Page Villa Mewah.*
