<?php
/* Landing Page – Website Studio Foto (standalone, no navbar, no footer, white bg, mobile-first) */
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Website Studio Foto + Booking Otomatis 24/7 – dopagency</title>
<meta name="description" content="Miliki Website Studio Foto Profesional + Sistem Booking Terintegrasi. Hanya Rp 1.500.000 sekali bayar. Domain & Hosting Cloud termasuk.">
<meta name="author" content="dopagency">
<link rel="icon" type="image/webp" href="asset/logo/logodopputih.webp">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
/* =========================================
   RESET & BASE
========================================= */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
    font-family: 'Plus Jakarta Sans', sans-serif;
    background: #ffffff;
    color: #1a1a2e;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
}
a { text-decoration: none; color: inherit; }
img { max-width: 100%; display: block; }

/* =========================================
   CONTAINER
========================================= */
.lp-container {
    width: 100%;
    max-width: 480px;
    margin: 0 auto;
    padding: 0 20px;
}
@media (min-width: 768px) { .lp-container { max-width: 720px; } }
@media (min-width: 1024px) { .lp-container { max-width: 1080px; } }

/* =========================================
   TOP BAR
========================================= */
.lp-topbar {
    background: #fff;
    border-bottom: 1px solid #f0f0f0;
    padding: 14px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: 0 2px 12px rgba(0,0,0,0.06);
}
.lp-topbar-brand {
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 800;
    font-size: 1rem;
    color: #1a1a2e;
}
.lp-topbar-brand img { height: 28px; width: auto; }
.lp-topbar-cta {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 10px 18px;
    background: #25D366;
    color: #fff;
    border-radius: 50px;
    font-size: 0.82rem;
    font-weight: 700;
    transition: all 0.2s;
}
.lp-topbar-cta:hover { background: #20b357; transform: scale(1.02); }

/* =========================================
   HERO
========================================= */
.lp-hero {
    background: linear-gradient(160deg, #f8f4ff 0%, #eff6ff 50%, #f0fdf4 100%);
    padding: 56px 0 64px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.lp-hero::before {
    content: '';
    position: absolute;
    top: -60px; left: 50%; transform: translateX(-50%);
    width: 500px; height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(99,102,241,0.08) 0%, transparent 70%);
    pointer-events: none;
}
.lp-hero-label {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(99,102,241,0.1);
    color: #6366f1;
    border-radius: 50px;
    padding: 6px 16px;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 20px;
}
.lp-hero h1 {
    font-size: clamp(1.7rem, 7vw, 2.8rem);
    font-weight: 900;
    color: #1a1a2e;
    line-height: 1.2;
    margin-bottom: 16px;
}
.lp-hero h1 span {
    color: #6366f1;
}
.lp-hero-sub {
    font-size: 0.97rem;
    color: #64748b;
    line-height: 1.75;
    margin-bottom: 32px;
    max-width: 440px;
    margin-left: auto;
    margin-right: auto;
}
.lp-hero-price-pill {
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    background: #fff;
    border-radius: 20px;
    padding: 20px 32px;
    box-shadow: 0 8px 32px rgba(99,102,241,0.12);
    margin-bottom: 24px;
    border: 1px solid rgba(99,102,241,0.15);
}
.lp-hero-price-pill .price-tag { font-size: 2.2rem; font-weight: 900; color: #6366f1; line-height: 1; }
.lp-hero-price-pill .price-note { font-size: 0.78rem; color: #94a3b8; margin-top: 4px; }
.lp-hero-price-pill .price-badge {
    background: #f0fdf4;
    color: #16a34a;
    font-size: 0.72rem;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 50px;
    margin-top: 8px;
    border: 1px solid #bbf7d0;
}
.lp-hero-cta {
    display: flex;
    flex-direction: row;
    gap: 12px;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}
.btn-wa {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 16px 28px;
    background: #25D366;
    color: #fff;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 800;
    box-shadow: 0 8px 28px rgba(37,211,102,0.35);
    transition: all 0.3s;
    justify-content: center;
}
.btn-wa:hover { transform: translateY(-2px); box-shadow: 0 14px 36px rgba(37,211,102,0.4); }
.btn-wa i { font-size: 1.3rem; }
.btn-demo {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 16px 28px;
    background: #fff;
    color: #6366f1;
    border: 2px solid #6366f1;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 800;
    transition: all 0.3s;
    justify-content: center;
}
.btn-demo:hover { background: #6366f1; color: #fff; transform: translateY(-2px); box-shadow: 0 10px 28px rgba(99,102,241,0.25); }
.btn-demo i { font-size: 1.1rem; }
.btn-scroll {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.85rem;
    color: #94a3b8;
    font-weight: 600;
    transition: color 0.2s;
}
.btn-scroll:hover { color: #6366f1; }


.lp-hero-trust {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-top: 36px;
}
.trust-chip {
    display: flex;
    align-items: center;
    gap: 6px;
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 50px;
    padding: 7px 14px;
    font-size: 0.78rem;
    font-weight: 600;
    color: #475569;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}
.trust-chip i { color: #6366f1; }

/* =========================================
   PAIN POINTS
========================================= */
.lp-section { padding: 64px 0; }
.lp-section-sm { padding: 48px 0; }
.lp-section-label {
    display: inline-block;
    font-size: 0.72rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: #6366f1;
    margin-bottom: 10px;
}
.lp-section-title {
    font-size: clamp(1.4rem, 5vw, 2rem);
    font-weight: 900;
    color: #1a1a2e;
    line-height: 1.25;
    margin-bottom: 8px;
}
.lp-section-desc {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.75;
    margin-bottom: 40px;
}
.lp-pain-bg { background: #fafafa; }
.pain-list { display: flex; flex-direction: column; gap: 16px; }
.pain-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    background: #fff;
    border: 1px solid #f0f0f0;
    border-radius: 16px;
    padding: 20px;
    transition: all 0.25s;
}
.pain-item:hover { border-color: #fca5a5; box-shadow: 0 4px 20px rgba(239,68,68,0.08); }
.pain-emoji { font-size: 2rem; flex-shrink: 0; line-height: 1; }
.pain-item h3 { font-size: 0.95rem; font-weight: 700; color: #1a1a2e; margin-bottom: 4px; }
.pain-item p { font-size: 0.83rem; color: #94a3b8; line-height: 1.6; margin: 0; }

/* =========================================
   SOLUTION / FEATURES
========================================= */
.features-list { display: flex; flex-direction: column; gap: 16px; }
.feature-item {
    display: flex;
    gap: 16px;
    align-items: flex-start;
    background: #fff;
    border: 1.5px solid #f0f0f0;
    border-radius: 16px;
    padding: 20px;
    transition: all 0.25s;
}
.feature-item:hover { border-color: #c7d2fe; box-shadow: 0 4px 20px rgba(99,102,241,0.08); }
.feature-icon {
    flex-shrink: 0;
    width: 48px; height: 48px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.3rem;
    color: #fff;
}
.feature-item h3 { font-size: 0.95rem; font-weight: 700; color: #1a1a2e; margin-bottom: 4px; }
.feature-item p { font-size: 0.83rem; color: #64748b; line-height: 1.6; margin: 0; }

/* Price Box */
.price-box {
    background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    border-radius: 24px;
    padding: 36px 28px;
    color: #fff;
    margin-top: 36px;
    position: relative;
    overflow: hidden;
}
.price-box::before {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 180px; height: 180px;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
}
.price-box-tag {
    display: inline-block;
    background: rgba(255,255,255,0.2);
    border-radius: 50px;
    padding: 4px 12px;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    margin-bottom: 14px;
}
.price-box-amount { font-size: 2.6rem; font-weight: 900; line-height: 1; margin-bottom: 6px; }
.price-box-sub { font-size: 0.82rem; opacity: 0.75; margin-bottom: 24px; }
.price-checklist {
    list-style: none;
    padding: 0; margin: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.price-checklist li {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.87rem;
    font-weight: 600;
}
.price-checklist li i { font-size: 0.9rem; opacity: 0.85; }

/* =========================================
   TRUST / WHY CHEAP
========================================= */
.lp-trust-bg { background: #f8f4ff; }
.trust-card {
    background: #fff;
    border-radius: 20px;
    padding: 28px 24px;
    margin-bottom: 16px;
    display: flex;
    gap: 16px;
    align-items: flex-start;
    box-shadow: 0 2px 12px rgba(99,102,241,0.07);
    border: 1px solid rgba(99,102,241,0.1);
}
.trust-card-icon {
    flex-shrink: 0;
    width: 46px; height: 46px;
    border-radius: 12px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    display: flex; align-items: center; justify-content: center;
    color: #fff;
    font-size: 1.1rem;
}
.trust-card h3 { font-size: 0.95rem; font-weight: 700; color: #1a1a2e; margin-bottom: 4px; }
.trust-card p { font-size: 0.83rem; color: #64748b; line-height: 1.6; margin: 0; }

/* Compare Table */
.compare-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 2px 16px rgba(0,0,0,0.05);
    font-size: 0.85rem;
    margin-top: 32px;
    border: 1px solid #f0f0f0;
}
.compare-table th {
    padding: 14px 16px;
    text-align: center;
    font-weight: 800;
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: 0.06em;
}
.compare-table th:first-child { text-align: left; color: #94a3b8; }
.compare-table th.th-other { background: #fafafa; color: #94a3b8; }
.compare-table th.th-us { background: #6366f1; color: #fff; }
.compare-table td {
    padding: 13px 16px;
    border-top: 1px solid #f8f8f8;
    color: #475569;
}
.compare-table td:first-child { font-weight: 600; color: #1a1a2e; }
.compare-table td.td-other { text-align: center; color: #ef4444; font-weight: 600; }
.compare-table td.td-us { text-align: center; color: #6366f1; font-weight: 700; background: rgba(99,102,241,0.04); }

/* =========================================
   TEMPLATE SHOWCASE
========================================= */
.templates-grid { display: flex; flex-direction: column; gap: 14px; }
.template-card {
    border: 1.5px solid #f0f0f0;
    border-radius: 18px;
    overflow: hidden;
    background: #fff;
    transition: all 0.25s;
}
.template-card:hover { border-color: #c7d2fe; box-shadow: 0 6px 24px rgba(99,102,241,0.1); }
.template-thumb {
    height: 160px;
    display: flex; align-items: center; justify-content: center;
    flex-direction: column;
    gap: 10px;
    color: rgba(255,255,255,0.5);
    font-size: 0.82rem;
    font-weight: 600;
}
.template-thumb i { font-size: 2rem; }
.template-name {
    padding: 14px 18px;
    font-size: 0.88rem;
    font-weight: 700;
    color: #1a1a2e;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.template-name span { font-size: 0.75rem; color: #94a3b8; font-weight: 500; }

/* =========================================
   CTA FINAL
========================================= */
.lp-cta-final {
    background: linear-gradient(160deg, #f8f4ff 0%, #eff6ff 100%);
    padding: 72px 0 88px;
    text-align: center;
}
.urgency-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #fff3cd;
    color: #92400e;
    border-radius: 50px;
    padding: 6px 16px;
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.04em;
    border: 1px solid #fde68a;
    margin-bottom: 20px;
}
.lp-cta-final h2 { font-size: clamp(1.6rem, 6vw, 2.4rem); font-weight: 900; color: #1a1a2e; margin-bottom: 12px; }
.lp-cta-final h2 span { color: #6366f1; }
.lp-cta-final p { font-size: 0.93rem; color: #64748b; line-height: 1.75; margin-bottom: 36px; }
.lp-cta-final p strong { color: #1a1a2e; }
.btn-wa-lg {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 18px 32px;
    background: #25D366;
    color: #fff;
    border-radius: 50px;
    font-size: 1.05rem;
    font-weight: 800;
    box-shadow: 0 10px 32px rgba(37,211,102,0.38);
    transition: all 0.3s;
    width: 100%;
    max-width: 380px;
    justify-content: center;
    margin: 0 auto;
}
.btn-wa-lg:hover { transform: translateY(-3px); box-shadow: 0 16px 40px rgba(37,211,102,0.45); }
.btn-wa-lg i { font-size: 1.4rem; }
.cta-footnote { font-size: 0.78rem; color: #cbd5e1; margin-top: 16px; }

/* =========================================
   STICKY CTA BOTTOM (mobile)
========================================= */
.lp-sticky-bottom {
    position: fixed;
    bottom: 0; left: 0; right: 0;
    background: #fff;
    border-top: 1px solid #f0f0f0;
    padding: 12px 20px;
    display: flex;
    align-items: center;
    gap: 12px;
    z-index: 200;
    box-shadow: 0 -4px 20px rgba(0,0,0,0.08);
}
.sticky-info { flex: 1; }
.sticky-info strong { display: block; font-size: 0.88rem; font-weight: 800; color: #1a1a2e; }
.sticky-info span { font-size: 0.75rem; color: #94a3b8; }
.sticky-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    background: #25D366;
    color: #fff;
    border-radius: 50px;
    font-size: 0.88rem;
    font-weight: 800;
    white-space: nowrap;
    transition: all 0.2s;
    box-shadow: 0 4px 16px rgba(37,211,102,0.3);
}
.sticky-btn:hover { background: #1da851; }

/* Show sticky on desktop only */
@media (max-width: 767px) { .lp-sticky-bottom { display: none; } }
@media (min-width: 768px) { body { padding-bottom: 0; } }

/* =========================================
   DESKTOP ADJUSTMENTS
========================================= */
@media (min-width: 768px) {
    .pain-list { display: grid; grid-template-columns: 1fr 1fr; }
    .features-list { display: grid; grid-template-columns: 1fr 1fr; }
    .lp-hero { padding: 80px 0 96px; }
    .price-checklist { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    .templates-grid { display: grid; grid-template-columns: 1fr 1fr; }
    .lp-trust-two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; align-items: start; }
    .lp-section { padding: 96px 0; }
}
@media (min-width: 1024px) {
    .templates-grid { grid-template-columns: repeat(3, 1fr); }
    .features-list { grid-template-columns: repeat(2, 1fr); }
}
</style>
</head>
<body>

<!-- ===== TOP BAR ===== -->
<!-- <div class="lp-topbar">
    <div class="lp-topbar-brand">
        <img src="asset/logo/logodophitam.webp" alt="dopagency">
        <span>dopagency</span>
    </div>
    <a href="https://wa.me/6282125189383?text=Halo%20dopagency%2C%20saya%20tertarik%20Website%20Studio%20Foto" target="_blank" class="lp-topbar-cta">
        <i class="fab fa-whatsapp"></i> Konsultasi Gratis
    </a>
</div> -->

<!-- ===== HERO ===== -->
<section class="lp-hero">
    <div class="lp-container">
        <div class="lp-hero-label">
            <i class="fas fa-camera-retro"></i> Untuk Studio Foto &amp; Self-Photo
        </div>
        <h1>Berhenti Recap Manual<br>di WhatsApp! Studio Anda<br><span>Bekerja Otomatis 24/7.</span></h1>
        <p class="lp-hero-sub">
            Website Profesional + Sistem Booking Terintegrasi + Katalog Produk Siap Jual.<br>
            Tanpa komisi. Tanpa biaya bulanan. Tinggal terima pesanan.
        </p>

        <div class="lp-hero-price-pill">
            <div class="price-tag">Rp 1.500.000</div>
            <div class="price-note">Sekali bayar, bersih — domain &amp; hosting 1 tahun sudah termasuk</div>
            <div class="price-badge">✅ 0% Komisi · 0 Biaya Bulanan</div>
        </div>

        <div class="lp-hero-cta">
            <a href="https://wa.me/6282125189383?text=Halo%20dopagency%2C%20saya%20tertarik%20dengan%20Website%20Studio%20Foto%20%2B%20Booking%20System%20Rp%201.500.000%2C%20boleh%20minta%20info%20lebih%20lanjut%3F" target="_blank" class="btn-wa">
                <i class="fab fa-whatsapp"></i>
                Pesan Sekarang
            </a>
            <a href="https://www.bookstudio.dopagency.my.id/" target="_blank" class="btn-demo">
                <i class="fas fa-play-circle"></i>
                Cek Demo
            </a>
        </div>
        <a href="#solusi" class="btn-scroll" style="margin-top:4px;"><i class="fas fa-arrow-down"></i> Lihat Fitur Lengkap</a>

        <div class="lp-hero-trust">
            <div class="trust-chip"><i class="fas fa-check-circle"></i> Booking Real-Time</div>
            <div class="trust-chip"><i class="fas fa-check-circle"></i> Katalog Produk</div>
            <div class="trust-chip"><i class="fas fa-check-circle"></i> QRIS + Transfer</div>
            <div class="trust-chip"><i class="fas fa-check-circle"></i> Domain &amp; Hosting</div>
        </div>
    </div>
</section>

<!-- ===== PAIN POINTS ===== -->
<section class="lp-section lp-pain-bg">
    <div class="lp-container">
        <div class="lp-section-label">😩 Masalah Nyata</div>
        <h2 class="lp-section-title">Apakah Anda Lelah<br>Mengalami Hal Ini Setiap Hari?</h2>
        <p class="lp-section-desc">Kendala operasional yang bikin revenue studi Anda bocor setiap harinya.</p>
        <div class="pain-list">
            <div class="pain-item">
                <div class="pain-emoji">📲</div>
                <div>
                    <h3>Admin Sibuk Jawab Chat WA</h3>
                    <p>Waktu habis hanya untuk tanya jadwal kosong. Produktivitas tim terbuang sia-sia.</p>
                </div>
            </div>
            <div class="pain-item">
                <div class="pain-emoji">❌</div>
                <div>
                    <h3>Jadwal Bentrok (Double Booking)</h3>
                    <p>Customer marah karena admin salah catat. Reputasi studio jadi taruhannya.</p>
                </div>
            </div>
            <div class="pain-item">
                <div class="pain-emoji">📦</div>
                <div>
                    <h3>Stok Produk Berantakan</h3>
                    <p>Lupa update stok frame atau cetak foto. Pelanggan kecewa karena stock habis mendadak.</p>
                </div>
            </div>
            <div class="pain-item">
                <div class="pain-emoji">💰</div>
                <div>
                    <h3>Customer Gagal Bayar</h3>
                    <p>Customer "hilang" setelah tanya harga karena proses booking terasa ribet.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SOLUTION / FEATURES ===== -->
<section class="lp-section" id="solusi">
    <div class="lp-container">
        <div class="lp-section-label">✨ Solusi Kami</div>
        <h2 class="lp-section-title">Satu Sistem, Semua<br>Kebutuhan Tercukupi.</h2>
        <p class="lp-section-desc">Bukan sekadar website — ini <strong>asisten digital</strong> yang mengelola operasional studio Anda dari A sampai Z.</p>
        <div class="features-list">
            <div class="feature-item">
                <div class="feature-icon" style="background: linear-gradient(135deg,#6366f1,#8b5cf6)"><i class="fas fa-calendar-check"></i></div>
                <div>
                    <h3>🗓️ Booking Real-Time</h3>
                    <p>Customer lihat jadwal kosong, pilih paket, pesan langsung. Jadwal otomatis terupdate tanpa admin.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" style="background: linear-gradient(135deg,#10b981,#047857)"><i class="fas fa-store"></i></div>
                <div>
                    <h3>🛍️ Katalog &amp; Inventori</h3>
                    <p>Jual frame, merchandise, atau paket cetak. Stok berkurang otomatis saat terjual.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" style="background: linear-gradient(135deg,#f59e0b,#d97706)"><i class="fas fa-credit-card"></i></div>
                <div>
                    <h3>💳 Payment Gateway</h3>
                    <p>Terima Transfer Bank, QRIS, E-Wallet, dan Kartu Kredit. Uang langsung masuk rekening Anda.</p>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-icon" style="background: linear-gradient(135deg,#3b82f6,#1d4ed8)"><i class="fas fa-globe"></i></div>
                <div>
                    <h3>🌐 Domain &amp; Cloud Hosting</h3>
                    <p>Alamat .com/.id profesional + hosting cepat dan stabil selama 1 tahun. Sudah termasuk harga.</p>
                </div>
            </div>
        </div>

        <!-- Price Box -->
        <div class="price-box">
            <div class="price-box-tag">🔥 Harga Spesial</div>
            <div class="price-box-amount">Rp 1.500.000</div>
            <div class="price-box-sub">Satu kali investasi. Semua fitur di atas sudah termasuk.</div>
            <ul class="price-checklist">
                <li><i class="fas fa-check"></i> Booking System Real-Time</li>
                <li><i class="fas fa-check"></i> Katalog &amp; Manajemen Stok</li>
                <li><i class="fas fa-check"></i> Payment Gateway (QRIS, CC)</li>
                <li><i class="fas fa-check"></i> Domain + Hosting 1 Tahun</li>
                <li><i class="fas fa-check"></i> 0% Komisi Per Booking</li>
                <li><i class="fas fa-check"></i> Tanpa Biaya Bulanan</li>
            </ul>
        </div>
    </div>
</section>

<!-- ===== TRUST BUILDER ===== -->
<section class="lp-section lp-trust-bg">
    <div class="lp-container">
        <div class="lp-section-label">🤔 Kenapa Bisa Semurah Ini?</div>
        <h2 class="lp-section-title">Kualitas Premium,<br>Harga Masuk Akal.</h2>
        <p class="lp-section-desc">Kami menggunakan framework matang dan efisien. Setiap pemilik studio berhak punya sistem profesional tanpa investasi puluhan juta.</p>

        <div class="trust-card">
            <div class="trust-card-icon"><i class="fas fa-shield-alt"></i></div>
            <div>
                <h3>No Hidden Fees</h3>
                <p>Rp 1.500.000 adalah total investasi awal. Tidak ada biaya tersembunyi, tidak ada kejutan di kemudian hari.</p>
            </div>
        </div>
        <div class="trust-card">
            <div class="trust-card-icon"><i class="fas fa-hand-holding-usd"></i></div>
            <div>
                <h3>Keuntungan 100% Milik Anda</h3>
                <p>Kami tidak mengambil sepeser pun dari komisi setiap transaksi booking yang masuk ke studio Anda.</p>
            </div>
        </div>

        <!-- Comparison Table -->
        <table class="compare-table">
            <thead>
                <tr>
                    <th>Fitur</th>
                    <th class="th-other">Kompetitor</th>
                    <th class="th-us">dopagency</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Domain &amp; Hosting</td>
                    <td class="td-other"><i class="fas fa-times"></i> Terpisah</td>
                    <td class="td-us"><i class="fas fa-check"></i> Termasuk</td>
                </tr>
                <tr>
                    <td>Komisi Booking</td>
                    <td class="td-other"><i class="fas fa-times"></i> 10–30%</td>
                    <td class="td-us"><i class="fas fa-check"></i> 0%</td>
                </tr>
                <tr>
                    <td>Biaya Bulanan</td>
                    <td class="td-other"><i class="fas fa-times"></i> Ada</td>
                    <td class="td-us"><i class="fas fa-check"></i> Tidak Ada</td>
                </tr>
                <tr>
                    <td>Katalog Produk</td>
                    <td class="td-other"><i class="fas fa-times"></i> Tidak Ada</td>
                    <td class="td-us"><i class="fas fa-check"></i> Termasuk</td>
                </tr>
                <tr>
                    <td>Custom Desain</td>
                    <td class="td-other"><i class="fas fa-times"></i> Bayar Ekstra</td>
                    <td class="td-us"><i class="fas fa-check"></i> Termasuk</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- ===== TEMPLATE SHOWCASE ===== -->
<section class="lp-section">
    <div class="lp-container">
        <div class="lp-section-label">🎨 Desain Template</div>
        <h2 class="lp-section-title">Pilih Desain Sesuai<br>Karakter Studio Anda</h2>
        <p class="lp-section-desc">5 Template Estetik siap pilih dan mudah dikustomisasi sesuai branding studio Anda.</p>
        <div class="templates-grid">
            <div class="template-card">
                <div class="template-thumb" style="background:linear-gradient(135deg,#0f172a,#1e1b4b)">
                    <i class="fas fa-moon" style="font-size:2rem;color:rgba(255,255,255,0.3)"></i>
                    <span style="color:rgba(255,255,255,0.4);font-size:0.8rem">Dark Elegant</span>
                </div>
                <div class="template-name">Template 1 – Dark Elegant <span>Mewah &amp; Prestisius</span></div>
            </div>
            <div class="template-card">
                <div class="template-thumb" style="background:linear-gradient(135deg,#1a1a2e,#e94560)">
                    <i class="fas fa-bolt" style="font-size:2rem;color:rgba(255,255,255,0.3)"></i>
                    <span style="color:rgba(255,255,255,0.4);font-size:0.8rem">Modern Neon</span>
                </div>
                <div class="template-name">Template 2 – Modern Neon <span>Energik &amp; Berani</span></div>
            </div>
            <div class="template-card">
                <div class="template-thumb" style="background:linear-gradient(135deg,#2d1b69,#11998e)">
                    <i class="fas fa-film" style="font-size:2rem;color:rgba(255,255,255,0.3)"></i>
                    <span style="color:rgba(255,255,255,0.4);font-size:0.8rem">Retro Vintage</span>
                </div>
                <div class="template-name">Template 3 – Retro Vintage <span>Hangat &amp; Nostalgia</span></div>
            </div>
            <div class="template-card">
                <div class="template-thumb" style="background:linear-gradient(135deg,#0f0c29,#302b63,#24243e)">
                    <i class="fas fa-crown" style="font-size:2rem;color:rgba(255,255,255,0.3)"></i>
                    <span style="color:rgba(255,255,255,0.4);font-size:0.8rem">Premium Royal</span>
                </div>
                <div class="template-name">Template 4 – Premium Royal <span>Eksklusif &amp; Elite</span></div>
            </div>
            <div class="template-card">
                <div class="template-thumb" style="background:linear-gradient(135deg,#1d2671,#c33764)">
                    <i class="fas fa-star" style="font-size:2rem;color:rgba(255,255,255,0.3)"></i>
                    <span style="color:rgba(255,255,255,0.4);font-size:0.8rem">Bold Vibrant</span>
                </div>
                <div class="template-name">Template 5 – Bold Vibrant <span>Cerah &amp; Dinamis</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA FINAL ===== -->
<section class="lp-cta-final">
    <div class="lp-container">
        <div class="urgency-badge">
            <i class="fas fa-fire"></i> Penawaran Terbatas Bulan Ini
        </div>
        <h2>Jangan Biarkan Kompetitor<br>Anda <span>Go-Digital Duluan.</span></h2>
        <p>
            Amankan harga promo <strong>Rp 1.500.000</strong> ini sekarang.<br>
            Penawaran terbatas hanya untuk studio-studio pertama bulan ini.
        </p>
        <div style="display:flex;flex-direction:row;gap:14px;align-items:center;justify-content:center;flex-wrap:wrap;">
            <a href="https://wa.me/6282125189383?text=Halo%20dopagency%2C%20saya%20mau%20amankan%20harga%20promo%20Website%20Studio%20Foto%20Rp%201.500.000%2C%20boleh%20konsultasi%3F" target="_blank" class="btn-wa-lg">
                <i class="fab fa-whatsapp"></i>
                Pesan Sekarang
            </a>
            <a href="https://www.bookstudio.dopagency.my.id/" target="_blank" class="btn-demo" style="font-size:1rem;padding:18px 32px;">
                <i class="fas fa-play-circle"></i>
                Cek Demo
            </a>
        </div>
        <div class="cta-footnote">
            <i class="fas fa-lock"></i> Konsultasi gratis · Tidak ada kewajiban
        </div>
    </div>
</section>

<!-- ===== STICKY BOTTOM CTA (Mobile only) ===== -->
<div class="lp-sticky-bottom">
    <div class="sticky-info">
        <strong>Rp 1.500.000 – Sekali Bayar</strong>
        <span>Domain, Hosting, Booking System sudah termasuk</span>
    </div>
    <a href="https://www.bookstudio.dopagency.my.id/" target="_blank" class="sticky-btn" style="background:#6366f1;box-shadow:0 4px 16px rgba(99,102,241,0.3);">
        <i class="fas fa-play-circle"></i> Cek Demo
    </a>
    <a href="https://wa.me/6282125189383?text=Halo%20dopagency%2C%20saya%20tertarik%20Website%20Studio%20Foto" target="_blank" class="sticky-btn">
        <i class="fab fa-whatsapp"></i> Pesan
    </a>
</div>



</body>
</html>
