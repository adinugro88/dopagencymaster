<?php
$page_title = 'Produk';
$active_page = 'produk';
require_once 'includes/lang.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo t('produk_hero_title'); ?></h1>
            <p><?php echo t('produk_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="produk-section">
    <div class="container">

        <!-- Tab Navigation -->
        <div class="produk-tabs">
            <button class="produk-tab-btn active" data-tab="booking">
                <i class="fas fa-calendar-check"></i>
                <span><?php echo t('produk_1_tab'); ?></span>
            </button>
            <button class="produk-tab-btn" data-tab="company">
                <i class="fas fa-building"></i>
                <span><?php echo t('produk_2_tab'); ?></span>
            </button>
            <button class="produk-tab-btn" data-tab="landing">
                <i class="fas fa-bullseye"></i>
                <span><?php echo t('produk_3_tab'); ?></span>
            </button>
            <button class="produk-tab-btn" data-tab="system">
                <i class="fas fa-cogs"></i>
                <span><?php echo t('produk_4_tab'); ?></span>
            </button>
        </div>

        <!-- Product Cards -->
        <!-- 1. Website + Booking System -->
        <div class="produk-card-wrapper active" id="tab-booking">
            <div class="produk-card">
                <div class="produk-card-left">
                    <!-- Carousel Examples Added -->
                    <div class="produk-carousel owl-carousel owl-theme">
                        <div class="item"><img src="asset/contoh-booking-1.webp" alt="Contoh Booking 1" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-booking-2.webp" alt="Contoh Booking 2" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-booking-3.webp" alt="Contoh Booking 3" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-booking-4.webp" alt="Contoh Booking 4" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-booking-5.webp" alt="Contoh Booking 5" class="carousel-example-img"></div>
                    </div>
                    <div class="produk-badge"><?php echo t('produk_badge_popular'); ?></div>
                    <p class="produk-sub"><?php echo t('produk_1_sub'); ?></p>
                    <p class="produk-desc"><?php echo t('produk_1_desc'); ?></p>
                    <div class="produk-use-case">
                        <i class="fas fa-lightbulb"></i> <?php echo t('produk_1_usecase'); ?>
                    </div>
                </div>
                <div class="produk-card-right">
                     
                    <div class="produk-icon-large">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h2 class="produk-title"><?php echo t('produk_1_title'); ?></h2>
                    <h4 class="produk-features-title"><?php echo t('produk_features_label'); ?></h4>
                    <ul class="produk-features-list">
                        <li>
                            <div class="feature-icon-wrap"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_1_feat_1_title'); ?></strong>
                                <p><?php echo t('produk_1_feat_1_desc'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon-wrap"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_1_feat_2_title'); ?></strong>
                                <p><?php echo t('produk_1_feat_2_desc'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon-wrap"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_1_feat_3_title'); ?></strong>
                                <p><?php echo t('produk_1_feat_3_desc'); ?></p>
                            </div>
                        </li>
                    </ul>
                 
                    <a href="https://wa.me/6287780319183?text=Halo%20dopagency%2C%20saya%20tertarik%20dengan%20produk%20Website%20%2B%20Booking%20System" target="_blank" class="btn btn-primary produk-cta">
                        <i class="fab fa-whatsapp"></i> <?php echo t('produk_cta_consult'); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- 2. Company Profile -->
        <div class="produk-card-wrapper" id="tab-company">
            <div class="produk-card">
                <div class="produk-card-left">
                    <!-- Carousel Examples Added -->
                    <div class="produk-carousel owl-carousel owl-theme">
                        <div class="item"><img src="asset/contoh-company-1.webp" alt="Contoh Company 1" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-company-2.webp" alt="Contoh Company 2" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-company-3.webp" alt="Contoh Company 3" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-company-4.webp" alt="Contoh Company 4" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-company-5.webp" alt="Contoh Company 5" class="carousel-example-img"></div>
                    </div>

                    <div class="produk-badge produk-badge-blue"><?php echo t('produk_badge_trust'); ?></div>
                    <p class="produk-sub"><?php echo t('produk_2_sub'); ?></p>
                    <p class="produk-desc"><?php echo t('produk_2_desc'); ?></p>
                    <div class="produk-use-case" style="border-color: #3b82f6; color: #3b82f6;">
                        <i class="fas fa-lightbulb"></i> <?php echo t('produk_2_usecase'); ?>
                    </div>
                </div>
                <div class="produk-card-right">
                    <div class="produk-icon-large" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                        <i class="fas fa-building"></i>
                    </div>
                    <h2 class="produk-title"><?php echo t('produk_2_title'); ?></h2>
                    <h4 class="produk-features-title"><?php echo t('produk_features_label'); ?></h4>
                    <ul class="produk-features-list">
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_2_feat_1_title'); ?></strong>
                                <p><?php echo t('produk_2_feat_1_desc'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_2_feat_2_title'); ?></strong>
                                <p><?php echo t('produk_2_feat_2_desc'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_2_feat_3_title'); ?></strong>
                                <p><?php echo t('produk_2_feat_3_desc'); ?></p>
                            </div>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287780319183?text=Halo%20dopagency%2C%20saya%20tertarik%20dengan%20produk%20Company%20Profile" target="_blank" class="btn btn-primary produk-cta">
                        <i class="fab fa-whatsapp"></i> <?php echo t('produk_cta_consult'); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- 3. Landing Page -->
        <div class="produk-card-wrapper" id="tab-landing">
            <div class="produk-card">
                <div class="produk-card-left">
                    <!-- Carousel Examples Added -->
                    <div class="produk-carousel owl-carousel owl-theme">
                        <div class="item"><img src="asset/contoh-landing-1.webp" alt="Contoh Landing 1" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-landing-2.webp" alt="Contoh Landing 2" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-landing-3.webp" alt="Contoh Landing 3" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-landing-4.webp" alt="Contoh Landing 4" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-landing-5.webp" alt="Contoh Landing 5" class="carousel-example-img"></div>
                    </div>

                    <div class="produk-badge produk-badge-green"><?php echo t('produk_badge_convert'); ?></div>
                    <p class="produk-sub"><?php echo t('produk_3_sub'); ?></p>
                    <p class="produk-desc"><?php echo t('produk_3_desc'); ?></p>
                    <div class="produk-use-case" style="border-color: #10b981; color: #10b981;">
                        <i class="fas fa-lightbulb"></i> <?php echo t('produk_3_usecase'); ?>
                    </div>
                </div>
                <div class="produk-card-right">
                    <div class="produk-icon-large" style="background: linear-gradient(135deg, #10b981, #047857);">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h2 class="produk-title"><?php echo t('produk_3_title'); ?></h2>
                    <h4 class="produk-features-title"><?php echo t('produk_features_label'); ?></h4>
                    <ul class="produk-features-list">
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #10b981, #047857);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_3_feat_1_title'); ?></strong>
                                <p><?php echo t('produk_3_feat_1_desc'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #10b981, #047857);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_3_feat_2_title'); ?></strong>
                                <p><?php echo t('produk_3_feat_2_desc'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #10b981, #047857);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_3_feat_3_title'); ?></strong>
                                <p><?php echo t('produk_3_feat_3_desc'); ?></p>
                            </div>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287780319183?text=Halo%20dopagency%2C%20saya%20tertarik%20dengan%20produk%20Landing%20Page" target="_blank" class="btn btn-primary produk-cta">
                        <i class="fab fa-whatsapp"></i> <?php echo t('produk_cta_consult'); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- 4. System Web Base -->
        <div class="produk-card-wrapper" id="tab-system">
            <div class="produk-card">
                <div class="produk-card-left">
                    <!-- Carousel Examples Added -->
                    <div class="produk-carousel owl-carousel owl-theme">
                        <div class="item"><img src="asset/contoh-system-1.webp" alt="Contoh System 1" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-system-2.webp" alt="Contoh System 2" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-system-3.webp" alt="Contoh System 3" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-system-4.webp" alt="Contoh System 4" class="carousel-example-img"></div>
                        <div class="item"><img src="asset/contoh-system-5.webp" alt="Contoh System 5" class="carousel-example-img"></div>
                    </div>

                    <div class="produk-badge produk-badge-purple"><?php echo t('produk_badge_enterprise'); ?></div>
                    <p class="produk-sub"><?php echo t('produk_4_sub'); ?></p>
                    <p class="produk-desc"><?php echo t('produk_4_desc'); ?></p>
                    <div class="produk-use-case" style="border-color: #8b5cf6; color: #8b5cf6;">
                        <i class="fas fa-lightbulb"></i> <?php echo t('produk_4_usecase'); ?>
                    </div>
                </div>
                <div class="produk-card-right">
                    <div class="produk-icon-large" style="background: linear-gradient(135deg, #8b5cf6, #5b21b6);">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h2 class="produk-title"><?php echo t('produk_4_title'); ?></h2>
                    <h4 class="produk-features-title"><?php echo t('produk_features_label'); ?></h4>
                    <ul class="produk-features-list">
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #8b5cf6, #5b21b6);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_4_feat_1_title'); ?></strong>
                                <p><?php echo t('produk_4_feat_1_desc'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #8b5cf6, #5b21b6);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_4_feat_2_title'); ?></strong>
                                <p><?php echo t('produk_4_feat_2_desc'); ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon-wrap" style="background: linear-gradient(135deg, #8b5cf6, #5b21b6);"><i class="fas fa-check"></i></div>
                            <div>
                                <strong><?php echo t('produk_4_feat_3_title'); ?></strong>
                                <p><?php echo t('produk_4_feat_3_desc'); ?></p>
                            </div>
                        </li>
                    </ul>
                    <a href="https://wa.me/6287780319183?text=Halo%20dopagency%2C%20saya%20tertarik%20dengan%20produk%20Custom%20Web%20System" target="_blank" class="btn btn-primary produk-cta">
                        <i class="fab fa-whatsapp"></i> <?php echo t('produk_cta_consult'); ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA Section -->
<div class="container">
    <section class="cta-section">
        <h2><?php echo t('cta_title'); ?></h2>
        <p><?php echo t('cta_subtitle'); ?></p>
        <a href="contact.php" class="btn btn-primary"><?php echo t('cta_button'); ?></a>
    </section>
</div>

<style>
/* ===================== PRODUK PAGE STYLES ===================== */
.produk-section {
    padding: 80px 0 120px;
    background: var(--background);
}

/* Tab Navigation */
.produk-tabs {
    display: flex;
    gap: 12px;
    margin-bottom: 50px;
    flex-wrap: wrap;
    justify-content: center;
}

.produk-tab-btn {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 14px 24px;
    border-radius: 50px;
    border: 2px solid rgba(255,255,255,0.1);
    background: rgba(255,255,255,0.04);
    color: var(--text-secondary, #94a3b8);
    font-size: 0.9rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Inter', sans-serif;
    backdrop-filter: blur(6px);
}

.produk-tab-btn i {
    font-size: 1rem;
}

.produk-tab-btn:hover {
    border-color: var(--primary, #6366f1);
    color: var(--primary, #6366f1);
    background: rgba(99, 102, 241, 0.08);
    transform: translateY(-2px);
}

.produk-tab-btn.active {
    background: linear-gradient(135deg, var(--primary, #6366f1), #8b5cf6);
    border-color: transparent;
    color: #fff;
    box-shadow: 0 8px 24px rgba(99, 102, 241, 0.35);
    transform: translateY(-2px);
}

/* Card Wrapper (tabs) */
.produk-card-wrapper {
    display: none;
    animation: produkFadeIn 0.45s ease forwards;
}

.produk-card-wrapper.active {
    display: block;
}

@keyframes produkFadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* Product Card */
.produk-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    border-radius: 24px;
    overflow: hidden;
    border: 1px solid rgba(255,255,255,0.08);
    box-shadow: 0 25px 60px rgba(0,0,0,0.3);
    min-height: 520px;
}

.produk-card-left {
    background: linear-gradient(160deg, #0f172a 60%, #1e1b4b);
    padding: 56px 48px;
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: relative;
    overflow: hidden;
}

.produk-card-left::before {
    content: '';
    position: absolute;
    top: -80px; right: -80px;
    width: 260px; height: 260px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(99,102,241,0.2) 0%, transparent 70%);
    pointer-events: none;
}

.produk-card-right {
    background: linear-gradient(160deg, #111827 60%, #0f0f23);
    padding: 56px 48px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 20px;
    border-left: 1px solid rgba(255,255,255,0.06);
}

/* Badge */
.produk-badge {
    display: inline-flex;
    align-items: center;
    padding: 6px 16px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    color: #fff;
    border-radius: 50px;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    width: fit-content;
}
.produk-badge-blue { background: linear-gradient(135deg, #3b82f6, #1d4ed8); }
.produk-badge-green { background: linear-gradient(135deg, #10b981, #047857); }
.produk-badge-purple { background: linear-gradient(135deg, #8b5cf6, #5b21b6); }

/* Icon Large */
.produk-icon-large {
    width: 72px; height: 72px;
    border-radius: 20px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    display: flex; align-items: center; justify-content: center;
    font-size: 2rem;
    color: #fff;
    box-shadow: 0 12px 32px rgba(99,102,241,0.4);
}

/* Titles */
.produk-title {
    font-size: 1.9rem;
    font-weight: 800;
    color: #fff;
    line-height: 1.2;
    margin: 0;
}

.produk-sub {
    font-size: 1rem;
    font-weight: 600;
    color: #a5b4fc;
    margin: 0;
    font-style: italic;
}

.produk-desc {
    font-size: 0.92rem;
    color: #94a3b8;
    line-height: 1.75;
    margin: 0;
    flex: 1;
}

/* CTA */
.produk-cta {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    width: fit-content;
    margin-top: 4px;
    font-size: 0.95rem;
}

/* Features */
.produk-features-title {
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #64748b;
    margin: 0;
}

.produk-features-list {
    list-style: none;
    padding: 0; margin: 0;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.produk-features-list li {
    display: flex;
    gap: 16px;
    align-items: flex-start;
}

.feature-icon-wrap {
    flex-shrink: 0;
    width: 32px; height: 32px;
    border-radius: 8px;
    background: linear-gradient(135deg, #6366f1, #8b5cf6);
    display: flex; align-items: center; justify-content: center;
    color: #fff;
    font-size: 0.75rem;
    margin-top: 2px;
}

.produk-features-list li strong {
    display: block;
    font-size: 0.92rem;
    font-weight: 700;
    color: #e2e8f0;
    margin-bottom: 3px;
}

.produk-features-list li p {
    font-size: 0.83rem;
    color: #64748b;
    margin: 0;
    line-height: 1.5;
}

/* Use Case */
.produk-use-case {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 14px 18px;
    border-radius: 12px;
    border: 1px solid rgba(99,102,241,0.3);
    background: rgba(99,102,241,0.06);
    color: #a5b4fc;
    font-size: 0.82rem;
    font-weight: 500;
    line-height: 1.5;
    margin-top: 8px;
}

.produk-use-case i {
    font-size: 1rem;
    flex-shrink: 0;
}

/* Carousel Examples */
.produk-carousel {
    margin-bottom: 25px;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    z-index: 2; /* Ensure it stays above gradients */
    box-shadow: 0 10px 30px rgba(0,0,0,0.4);
}
.produk-carousel .owl-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    display: flex;
    justify-content: space-between;
    pointer-events: none;
    margin-top: 0 !important;
}
.produk-carousel .owl-prev,
.produk-carousel .owl-next {
    pointer-events: auto;
    background: rgba(0,0,0,0.6) !important;
    color: white !important;
    width: 36px;
    height: 36px;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center;
    justify-content: center;
    margin: 0 !important;
    transition: all 0.3s ease;
}
.produk-carousel .owl-prev:hover,
.produk-carousel .owl-next:hover {
    background: var(--primary, #6366f1) !important;
}
.carousel-example-img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    background-color: rgba(255,255,255,0.05); /* Placeholder background */
    color: rgba(255,255,255,0.4);
    text-align: center;
    line-height: 240px;
    font-size: 0.9rem;
}
@media (max-width: 900px) {
    .carousel-example-img {
        height: 200px;
    }
}

/* Responsive */
@media (max-width: 900px) {
    .produk-card {
        grid-template-columns: 1fr;
    }

    .produk-card-left,
    .produk-card-right {
        padding: 40px 28px;
    }

    .produk-card-right {
        border-left: none;
        border-top: 1px solid rgba(255,255,255,0.06);
    }

    .produk-title {
        font-size: 1.5rem;
    }
}

@media (max-width: 600px) {
    .produk-tab-btn span {
        display: none;
    }

    .produk-tab-btn {
        padding: 12px 16px;
    }

    .produk-tabs {
        gap: 8px;
    }
}
</style>

<script>
// Tab switching logic
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.produk-tab-btn');
    const wrappers = document.querySelectorAll('.produk-card-wrapper');

    tabs.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const target = btn.getAttribute('data-tab');

            // Deactivate all
            tabs.forEach(function (t) { t.classList.remove('active'); });
            wrappers.forEach(function (w) { w.classList.remove('active'); });

            // Activate clicked
            btn.classList.add('active');
            const targetWrapper = document.getElementById('tab-' + target);
            if (targetWrapper) {
                targetWrapper.classList.add('active');
                // Refresh carousel if it's inside a newly shown tab
                setTimeout(() => {
                    $(targetWrapper).find('.owl-carousel').trigger('refresh.owl.carousel');
                }, 50);
            }
        });
    });

    // Initialize Owl Carousel for Produk
    $(".produk-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        items: 1,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
    });
});
</script>

<?php require_once 'includes/footer.php'; ?>
